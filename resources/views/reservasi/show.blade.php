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
                            @php
                                $sub_total = $reservasi->jumlah * $reservasi->harga;
                                $diskon = (2.5 / 100) * $sub_total;
                                $pajak = (10 / 100) * $sub_total;
                                $total = $diskon - $pajak + $sub_total;
                            @endphp

                            <table class="table table-borderless w-75">
                                <tr>
                                    <th>ID Reservasi</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->id_reservasi }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Reservasi</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->tgl_reservasi }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Customer</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->nm_customer }}</td>
                                </tr>
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
                                <tr>
                                    <th>Harga Kamar</th>
                                    <td>:</td>
                                    <td>Rp{{ number_format($reservasi->harga) }}/ malam</td>
                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <td>:</td>
                                    <td>{{ $reservasi->jumlah }}</td>
                                </tr>
                                <tr>
                                    <th>Diskon</th>
                                    <td>:</td>
                                    <td>Rp{{ number_format($diskon) }}</td>
                                </tr>
                                <tr>
                                    <th>Pajak</th>
                                    <td>:</td>
                                    <td>Rp{{ number_format($pajak) }}</td>
                                </tr>
                                <tr>
                                    <th>Total Bayar</th>
                                    <td>:</td>
                                    <td>

                                        <span class="text-danger font-weight-bold">Rp{{ number_format($total) }}</span>
                                        <small>Total = Diskon - Pajak + (Harga kamar x Jumlah)</small>
                                    </td>
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
