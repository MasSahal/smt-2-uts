<div class="sidebar">
    <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="{{ asset('data-asset') }}/images/profile/male/image_1.png"
                alt="profile image">
        </div>
        <div class="info-wrapper">
            <p class="user-name">Administrator</p>
        </div>
    </div>
    <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
            <a href="index.html">
                <span class="link-title">Dashboard</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('kamar.index') }}">
                <span class="link-title">Kamar</span>
                <i class="mdi mdi-hotel link-icon"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}">
                <span class="link-title">Pelanggan</span>
                <i class="mdi mdi-account-multiple link-icon"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('reservasi.index') }}">
                <span class="link-title">Reservasi</span>
                <i class="mdi mdi-account-card-details link-icon"></i>
            </a>
        </li>
    </ul>
</div>
