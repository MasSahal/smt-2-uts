    @extends('layout.index')
    @section('content')
        <div class="row">
            <div class="col-12 py-3">
                <h4>Dashboard</h4>
                <p class="text-gray">Welcome aboard, Allen Clerk</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 equel-grid">
                <div class="grid">
                    <div class="grid-body">
                        <h3 class="display-4">Selamat datang di Sistem Reservasi Hotel Pangeran</h3>
                        <br>
                        <p class="lead">Sistem reservasi ini merupakan salah satu bentuk digitalisasi pemesanan tiket<br>
                            secara online dan realtime dimanapun kapan pun</p>
                        <br>
                        <hr class="my-2">
                        <p>More info</p>
                        <br>
                        <p class="lead">
                            <a class="btn btn-info" href="{{ route('reservasi.create') }}" role="button">Reservasi
                                Sekarang!</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 equel-grid">
                <div class="grid">
                    <div class="grid-body text-gray">
                        <div class="d-flex justify-content-between">
                            <h4>Rp{{ number_format($omset) }}</h4>
                        </div>
                        <p class="text-black">Laba penghasilan</p>
                        <div class="wrapper w-50 mt-4">
                            <canvas height="45" id="stat-line_1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 equel-grid">
                <div class="grid">
                    <div class="grid-body text-gray">
                        <div class="d-flex justify-content-between">
                            <h4>{{ $jml_kamar }}</h4>
                        </div>
                        <p class="text-black">Jumlah Kamar</p>
                        <div class="wrapper w-50 mt-4">
                            <canvas height="45" id="stat-line_2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 equel-grid">
                <div class="grid">
                    <div class="grid-body text-gray">
                        <div class="d-flex justify-content-between">
                            <h4>{{ $jml_reservasi }}</h4>
                        </div>
                        <p class="text-black">Jumlah reservasi</p>
                        <div class="wrapper w-50 mt-4">
                            <canvas height="45" id="stat-line_3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
