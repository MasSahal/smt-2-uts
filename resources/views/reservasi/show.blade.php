@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-12 py-3">
            <h4>Tambah Reservasi</h4>
            <p class="text-gray">Tambah data reservasi di Hotel Pangeran Cirebon</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 equel-grid">
            <div class="grid">
                <div class="grid-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ url('file/kamar/' . $reservasi->foto) }}" class="img-fluid mt-3" width="100%"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless w-75">
                                <tr>
                                    <th>Kode Kamar</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->kd_kamar }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Kamar</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->no_kamar }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="wrapper mt-3">
                        <a name="" id="" class="btn btn-secondary" href="{{ route('reservasi.index') }}"
                            role="button"><i class="mdi mdi-arrow-left-bold"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
