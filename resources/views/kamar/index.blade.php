@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-12 py-3">
            <h4>Data Kamar</h4>
            <p class="text-gray">Pilihan kamar yang tersedia di Hotel Pangeran Cirebon</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 equel-grid shadow-md">
            <div class="grid">
                {{-- <div class="grid-header">
                    <p class="card-title">Data Kamar</p>
                </div> --}}
                <div class="grid-body">
                    <a href="{{ route('kamar.create') }}" class="btn btn-sm btn-primary mb-3"><i
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
                                    <th>Gambar</th>
                                    <th>Kode Kamar</th>
                                    <th>Nomor Kamar</th>
                                    <th>Jenis Kamar</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kamars as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td class="d-flex align-items-center border-top-0">
                                            <img class="profile-img img-md mr-2" src="{{ url('file/kamar/' . $r->foto) }}"
                                                alt="profile kamar">
                                            {{-- <span>Herman Beck</span> --}}
                                        </td>
                                        <td>{{ $r->kd_kamar }}</td>
                                        <td>{{ $r->no_kamar }}</td>
                                        <td>{{ $r->jenis }}</td>
                                        <td>Rp{{ number_format($r->harga) }}</td>
                                        <td>{{ $r->stok }}</td>
                                        <td class="actions">
                                            <form action="{{ route('kamar.destroy', $r->id_kamar) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a name="" id="" class="btn btn-xs btn-warning"
                                                    href="{{ route('kamar.edit', $r->id_kamar) }}" role="button">
                                                    Edit
                                                </a>
                                                |
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data {{ $r->kd_kamar }} ? ')"
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
@endsection
