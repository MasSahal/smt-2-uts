@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-12 py-3">
            <h4>Update Kamar {{ $kamar->kd_kamar }}</h4>
            <p class="text-gray">Update data kamar {{ $kamar->kd_kamar }} di Hotel Pangeran Cirebon</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 equel-grid">
            <div class="grid">
                {{-- <p class="grid-header">Kamar</p> --}}
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

                    <form action="{{ route('kamar.update', $kamar->id_kamar) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kd_kamar">Kode Kamar</label>
                                    <input type="text" name="kd_kamar" id="kd_kamar" class="form-control" readonly
                                        value="{{ $kamar->kd_kamar }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_kamar">No Kamar</label>
                                    <input type="number" name="no_kamar" id="no_kamar" class="form-control"
                                        value="{{ $kamar->no_kamar }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Pilih Jenis Kamar</label>
                                    <select class="form-control" name="jenis" id="jenis">
                                        @php
                                            $jenis = ['Standard Room', 'Superior Room', 'Deluxe Room', 'Twin Room', 'Single Room', 'Double Room', 'Family Room', 'Junior Suite', 'Suite Room', 'Presidential Suite', 'Connecting Room', 'Murphy Room', 'Disabled Room', 'Cabana Room', 'Penthouse Room'];
                                        @endphp
                                        @foreach ($jenis as $j)
                                            <option value="{{ $j }}"
                                                {{ $kamar->jenis === $j ? 'selected' : '' }}>
                                                {{ $j }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas">Fasilitas Kamar</label>
                                    <textarea class="form-control" name="fasilitas" id="fasilitas" rows="3" placeholder="Fasilitas kamar ...">
                                        {{ $kamar->fasilitas }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" min="1" max="99999999" name="harga" id="harga"
                                        class="form-control" placeholder="Masukan harga kamar" value="{{ $kamar->harga }}">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" min="1" max="1000" name="stok" id="stok"
                                        value="{{ $kamar->stok }}" class="form-control" placeholder="Masukan stok kamar">
                                </div>
                                <div class="form-group">
                                    <label for="foto_kamar">Foto Kamar</label>
                                    <input type="file" name="foto_kamar" id="foto_kamar" class="form-control form"
                                        onclick="img(this)">
                                </div>
                                <div class="form-group">
                                    <img src="{{ url('file/kamar/' . $kamar->foto) }}" class="img-fluid foto"
                                        alt="" width="250px">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-12 d-flex">
                                <div class="ms-auto">
                                    <div class="dl">
                                        <button type="submit" class="btn btn-success has-icon"><i
                                                class="mdi mdi-content-save"></i>
                                            Simpan Kamar</button>
                                        <button type="reset" class="btn btn-warning has-icon"><i
                                                class="mdi mdi-reload"></i>
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
