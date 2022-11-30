<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasi = DB::table('tbl_reservasi')
            ->join('tbl_kamar', 'tbl_reservasi.kd_kamar', '=', 'tbl_kamar.kd_kamar')
            ->get();
        return view('reservasi.index', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamar = Kamar::all();
        return view('reservasi.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "tgl_reservasi" => "required",
            "nm_customer"   => "required",
            "kd_kamar"      => "required",
            "jumlah"        => "required",
        ]);

        Reservasi::create($request->all());
        return redirect()->route("reservasi.index")->with("success", "Reservasi berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show($kd_kamar)
    {

        $reservasi = DB::table('tbl_reservasi')
            ->join('tbl_kamar', 'tbl_reservasi.kd_kamar', '=', 'tbl_kamar.kd_kamar')
            ->where('tbl_kamar.kd_kamar', '=', $kd_kamar)
            ->first();
        // dd($reservasi);
        if ($reservasi) {
            return view('reservasi.show', compact('reservasi'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservasi $reservasi)
    {
        $kamar = Kamar::all();
        return view('reservasi.edit', compact('kamar', 'reservasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        $this->validate($request, [
            "tgl_reservasi" => "required",
            "nm_customer"   => "required",
            "kd_kamar"      => "required",
            "jumlah"        => "required",
        ]);

        $reservasi->update($request->all());
        return redirect()->route("reservasi.index")->with("success", "Reservasi berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect()->route("reservasi.index")->with("success", "Reservasi berhasil dihapus!");
    }
}
