<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        return view('login', ['title' => 'Login']);
    }

    public function home()
    {
        $jml_kamar = Kamar::count();
        $jml_reservasi = Reservasi::count();

        $reservasi = DB::table('tbl_reservasi')
            ->join('tbl_kamar', 'tbl_reservasi.kd_kamar', '=', 'tbl_kamar.kd_kamar')
            ->get();

        $omset = 0;
        foreach ($reservasi as $r) {
            $sub_total = $r->jumlah * $r->harga;
            $diskon = (2.5 / 100) * $sub_total;
            $pajak = (10 / 100) * $sub_total;
            $jumlah = $diskon - $pajak + $sub_total;

            $omset = $omset + $jumlah;
        }

        return view('home', [
            'jml_kamar' => $jml_kamar,
            'jml_reservasi' => $jml_reservasi,
            'omset' => $omset,
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        //request()->session()->invalide();
        return redirect()->to('/login');
    }
}
