@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-12 py-3">
            <h4>Data Reservasi</h4>
            <p class="text-gray">Pilihan reservasi yang terverifikasi di Hotel Pangeran Cirebon</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 equel-grid shadow-md">
            <div class="grid">
                {{-- <div class="grid-header">
                    <p class="card-title">Data reservasi</p>
                </div> --}}
                <div class="grid-body">
                    <a href="{{ route('reservasi.create') }}" class="btn btn-sm btn-primary mb-3"><i
                            class="mdi mdi-plus"></i>Tambah</a>
                    <hr>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade">

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Selamat!</strong> {{ $message }}.
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Oops!</strong> {{ $message }}.
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Reservasi</th>
                                    <th>Nama Customer</th>
                                    <th>Pilihan Kamar</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservasi as $i => $r)
                                    @php
                                        $sub_total = $r->jumlah * $r->harga;
                                        $diskon = (2.5 / 100) * $sub_total;
                                        $pajak = (10 / 100) * $sub_total;
                                        $jumlah = $diskon - $pajak + $sub_total;
                                    @endphp
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>{{ $r->tgl_reservasi }}</td>
                                        <td>{{ $r->nm_customer }}</td>
                                        <td>{{ $r->kd_kamar . ' - ' . $r->no_kamar }}</td>
                                        <td>{{ $r->jumlah }}</td>
                                        <td>Rp{{ number_format($jumlah) }}</td>
                                        <td class="actions">
                                            <form action="{{ route('reservasi.destroy', $r->id_reservasi) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a name="" id="" class="btn btn-xs btn-info"
                                                    href="{{ route('reservasi.show', $r->kd_kamar) }}" role="button">
                                                    Detail
                                                </a>
                                                |
                                                <a name="" id="" class="btn btn-xs btn-warning"
                                                    href="{{ route('reservasi.edit', $r->id_reservasi) }}" role="button">
                                                    Edit
                                                </a>
                                                |
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data reservasi {{ $r->nm_customer . ' - ' . $r->tgl_reservasi }} ? ')"
                                                    class="btn btn-xs btn-danger" href="#" role="button">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table>
        <tr>
            <th>Biaya pendaftaran</th>
            <th>Biaya layanan</th>
            <th>Harga Obat</th>
            <th>Potongan</th>
            <th>Biaya total</th>
            <th>Uang bayar</th>
        </tr>
        <tr>
            <td colspan="4" align="right">Pajak 11%</td>
            <td colspan="2"> .. masukin disnin</td>
        </tr>
        <tr>
            <td colspan="4" align="right">Total bayar</td>
            <td colspan="2">masukin di sini </td>
        </tr>
        <tr>
            <td colspan="4" align="right">Uang Kembali</td>
            <td colspan="2">masukin di sini </td>
        </tr>
    </table>
@endsection
