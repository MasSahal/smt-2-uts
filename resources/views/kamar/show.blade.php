@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-12 py-3">
            <h4>Detail Kamar {{ $kamar->kd_kamar }}</h4>
            <p class="text-gray">Detail lengkap kamar {{ $kamar->kd_kamar }} di Hotel Pangeran Cirebon</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 equel-grid">
            <div class="grid">
                <div class="grid-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ url('file/kamar/' . $kamar->foto) }}" class="img-fluid mt-3" width="100%"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless w-75">
                                <tr>
                                    <th>Kode Kamar</th>
                                    <td>:</td>
                                    <td>{{ $kamar->kd_kamar }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Kamar</th>
                                    <td>:</td>
                                    <td>{{ $kamar->no_kamar }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <td>:</td>
                                    <td><span class="badge badge-success">{{ $kamar->jenis }}</span></td>
                                </tr>
                                <tr>
                                    <th>Harga Kamar</th>
                                    <td>:</td>
                                    <td>Rp{{ number_format($kamar->harga) }}</td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td>:</td>
                                    <td>{{ number_format($kamar->stok) }}</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>:</td>
                                    <td>{{ $kamar->fasilitas }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="wrapper mt-3">
                        <a name="" id="" class="btn btn-secondary" href="{{ route('kamar.index') }}"
                            role="button"><i class="mdi mdi-arrow-left-bold"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
