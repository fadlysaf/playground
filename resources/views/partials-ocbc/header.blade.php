<header>
    <!-- Top Utility Header -->
    <div class="top-header">
        <div class="lang-switcher">
            <a href="?lang=id" class="lang-btn {{ request('lang') != 'en' ? 'active' : '' }}">ID</a>
            <a href="?lang=en" class="lang-btn {{ request('lang') == 'en' ? 'active' : '' }}">EN</a>
        </div>
        <div class="top-right-menu">
            <a href="/career" class="top-menu-item">
                <i class="fa-solid fa-briefcase"></i> Career
            </a>
            <a href="/region" class="top-menu-item">
                <i class="fa-solid fa-earth-asia"></i> Region
            </a>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <div class="main-header">
        <div class="logo-container">
            <a href="/">
                <!-- Ganti src dengan path logo OCBC Anda, di sini menggunakan placeholder tulisan teks merah tebal jika gambar belum ada -->
                <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                    alt="OCBC Logo"
                    onerror="this.style.display='none'; document.getElementById('text-logo').style.display='block';">
                <h1 id="text-logo"
                    style="display:none; color:#e00000; font-weight:800; font-size:26px; letter-spacing:-1px;">🔴 OCBC
                </h1>
            </a>
        </div>

        <!-- Hamburger Menu Toggle for Mobile -->
        <button class="menu-toggle" id="menu-toggle-btn" aria-label="Toggle Menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="nav-menu" id="nav-menu-container">
            <a href="/individual" class="nav-link">Individual</a>
            <a href="/sme" class="nav-link">SME</a>
            <a href="/corporate" class="nav-link">Corporate</a>
            <a href="/sharia" class="nav-link">Sharia</a>
            <a href="/digital" class="nav-link">Digital</a>
            <a href="/article" class="nav-link">Article</a>
            <a href="/about" class="nav-link">About OCBC</a>

            <div class="nav-actions">
                <button class="search-btn" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                <a href="/become-member" class="btn-member">Become Member</a>
            </div>
        </nav>
    </div>
</header>

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggleBtn = document.getElementById('menu-toggle-btn');
            const navMenuContainer = document.getElementById('nav-menu-container');

            if (menuToggleBtn && navMenuContainer) {
                menuToggleBtn.addEventListener('click', function() {
                    navMenuContainer.classList.toggle('active');
                    const icon = menuToggleBtn.querySelector('i');
                    if (navMenuContainer.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-xmark');
                    } else {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                });
            }
        });
    </script>
@endpush
