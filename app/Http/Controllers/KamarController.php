<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamar = Kamar::latest()->first();
        if ($kamar) {
            $kd = substr($kamar->kd_kamar, 1);
            $kd_kamar = sprintf("%04s", intval($kd) + 1);
        } else {
            $kd_kamar = "0001";
        }

        return view('kamar.create', [
            'kd_kamar' => $kd_kamar,
        ]);
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
            "kd_kamar"      => "required",
            "no_kamar"      => "required",
            "jenis"         => "required",
            "fasilitas"     => "required",
            "harga"         => "required",
            "stok"          => "required",
            "foto_kamar"    => "required|image"
        ]);

        $file = $request->file('foto_kamar');
        $nama_file = time() . "_" . $request->kd_kamar . "." . $file->getClientOriginalExtension();

        // move file
        $file->move('file/kamar', $nama_file);

        Kamar::create([
            "kd_kamar"  =>  $request->kd_kamar,
            "no_kamar"  =>  $request->no_kamar,
            "jenis"     =>  $request->jenis,
            "fasilitas" =>  $request->fasilitas,
            "harga"     =>  $request->harga,
            "stok"      =>  $request->stok,
            'foto'      =>  $nama_file,
        ]);
        return redirect()->route("kamar.index")->with("success", "Kamar berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        return view('kamar.show', [
            'kamar' => $kamar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('kamar.edit', [
            'kamar' => $kamar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $this->validate($request, [
            "kd_kamar"      => "required",
            "no_kamar"      => "required",
            "jenis"         => "required",
            "fasilitas"     => "required",
            "harga"         => "required",
            "stok"          => "required",
        ]);

        if ($request->hasFile('foto_kamar')) {

            $this->validate($request, [
                "foto_kamar"    => "required|image"
            ]);

            $file = $request->file('foto_kamar');
            $nama_file = time() . "_" . $request->kd_kamar . "." . $file->getClientOriginalExtension();

            if (File::exists(public_path('file/kamar/' . $kamar->foto))) {
                File::delete('file/kamar/' . $kamar->foto);

                $file->move('file/kamar', $nama_file);
            }

            $upd = [
                "kd_kamar"  =>  $request->kd_kamar,
                "no_kamar"  =>  $request->no_kamar,
                "jenis"     =>  $request->jenis,
                "fasilitas" =>  $request->fasilitas,
                "harga"     =>  $request->harga,
                "stok"      =>  $request->stok,
                'foto'      =>  $nama_file,
            ];
        } else {
            $upd = [
                "kd_kamar"  =>  $request->kd_kamar,
                "no_kamar"  =>  $request->no_kamar,
                "jenis"     =>  $request->jenis,
                "fasilitas" =>  $request->fasilitas,
                "harga"     =>  $request->harga,
                "stok"      =>  $request->stok
            ];
        }

        // move file

        $kamar->update($upd);
        return redirect()->route("kamar.index")->with("success", "Kamar berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        if (File::exists(public_path('file/kamar/' . $kamar->foto))) {
            File::delete('file/kamar/' . $kamar->foto);
        }

        $kamar->delete();
        return redirect()->route("kamar.index")->with("success", "Kamar berhasil dihapus!");
    }
}
