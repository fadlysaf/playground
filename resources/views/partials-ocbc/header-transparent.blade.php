<header>
    <!-- Main Navigation Header -->
    <div class="main-header">
        <div class="logo-container">
            <a href="/">
                <!-- Ganti src dengan path logo OCBC Anda, di sini menggunakan placeholder tulisan teks merah tebal jika gambar belum ada -->
                <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                    alt="OCBC Logo"
                    onerror="this.style.display='none'; document.getElementById('text-logo').style.display='block';">
            </a>
        </div>
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
