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
                {{-- <p class="grid-header">reservasi</p> --}}
                <div class="grid-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Oops!</strong> Terjadi kesalahan :
                            <ol>
                                @foreach ($errors->all() as $r)
                                    <li>{{ $r }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif

                    <form action="{{ route('reservasi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nm_customer">Nama Customer</label>
                                    <input type="text" name="nm_customer" id="nm_customer" class="form-control"
                                        value="{{ old('nm_customer') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_reservasi">Tanggal Reservasi</label>
                                    <input type="date" name="tgl_reservasi" id="tgl_reservasi" class="form-control"
                                        value="{{ old('tgl_reservasi') }}">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="kd_kamar">Pilih Kamar</label>
                                    <select class="form-control" name="kd_kamar" id="kd_kamar">
                                        <option selected disabled>- Pilih Kamar -</option>
                                        @foreach ($kamar as $r)
                                            <option value="{{ $r->kd_kamar }}">
                                                {{ $r->kd_kamar . ' - ' . $r->no_kamar . ' - Harga : ' . $r->harga }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" min="1" max="100" name="jumlah" id="jumlah"
                                        value="{{ old('jumlah') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-12 d-flex">
                                <div class="ms-auto">
                                    <div class="dl">
                                        <button type="submit" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah
                                            Reservasi</button>
                                        <button type="reset" class="btn btn-warning"><i class="mdi mdi-reload"></i>
                                            Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.foto').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
