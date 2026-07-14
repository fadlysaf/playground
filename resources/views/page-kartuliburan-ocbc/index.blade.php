@extends('app')

@section('isOCBC', true)

@section('content')
    <section id="hero-section">
        <div class="hero-bg-image">
            <img src="https://images.unsplash.com/photo-1782771115010-b287a78d2b4e?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="hero-content">
            <div class="title-banner">
                <h1>OCBC #KartuWajibLiburan</h1>
            </div>
            <div class="product-banner">
                <div class="product-item">
                    <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/nyala_5bb25c225e.png"
                        alt="OCBC Nyala Global Debit" class="card-img">
                    <a href="#" class="btn-cc btn-red">Buka Nyala</a>
                </div>
                <div class="product-item">
                    <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/90n_187803c4e9.png"
                        alt="OCBC 90°N Credit Card" class="card-img">
                    <a href="#" class="btn-cc btn-red">Apply Kartu Kredit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="campaign-section">
        <div class="container">
            <div class="campaign-header">
                <h2>Liburan bebas kemana aja,
                    pakai <span class="higlight">#KartuWajibLiburan</span>
                    transaksi beres liburan berasa bebasnya</h2>
            </div>
            <div class="cta-content">
                <p>Cek beragam promo untuk persiapan traveling di sini!</p>
                <a href="" class="cta-button">Learn More</a>
            </div>
            {{-- <div class="campaign-content">
                <div class="campaign-card">
                    <div class="campaign-image">
                        <img src="https://images.unsplash.com/photo-1783273234637-540c3bf66d6d?q=80&w=687&auto=format&fit=crop"
                            alt="content image">
                    </div>
                    <div class="campaign-body">
                        <h3 class="campaign-title">Kartu Custom Nyala Global Debit</h3>
                        <p class="campaign-text">Dapatkan kartu debit OCBC dengan foto anabul Anda, dengan klik button di
                            bawah.</p>
                        <a href="#" class="btn-campaign-cta bg-primary">Buka Sekarang</a>
                    </div>
                </div>

                <div class="campaign-card">
                    <div class="campaign-image">
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <section id="region-section">
        <div class="region-header">
            <h2>Beda negara, beda lifestyle</h2>
            <p class="region-desc">Temukan lokasi kantor cabang OCBC terdekat di kota Anda.</p>
        </div>

        <div class="region-content">
            <div class="region-card" data-country="england">
                <div class="region-image">
                    <img alt="Inggris"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/england_652338d6b2.png" />
                </div>
                <p class="region-title">Inggris</p>
            </div>
            <div class="region-card" data-country="swiss">
                <div class="region-image">
                    <img alt="Swiss"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/swiss_159558bb0e.png" />
                </div>
                <p class="region-title">Swiss</p>
            </div>
            <div class="region-card" data-country="jp">
                <div class="region-image">
                    <img alt="Jepang"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/jp_42227e3f2a.png" />
                </div>
                <p class="region-title">Jepang</p>
            </div>
            <div class="region-card" data-country="cn">
                <div class="region-image">
                    <img alt="China"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/cn_e3bf55a879.png" />
                </div>
                <p class="region-title">China</p>
            </div>
            <div class="region-card" data-country="canada">
                <div class="region-image">
                    <img alt="Kanada"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/canada_c2382d0b5f.png" />
                </div>
                <p class="region-title">Kanada</p>
            </div>
            <div class="region-card" data-country="sg">
                <div class="region-image">
                    <img alt="Singapura"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/sg_2dc0e9566c.png" />
                </div>
                <p class="region-title">Singapura</p>
            </div>
            <div class="region-card" data-country="aus">
                <div class="region-image">
                    <img alt="Australia"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/aus_0bbfc19f4a.png" />
                </div>
                <p class="region-title">Australia</p>
            </div>
            <div class="region-card" data-country="nz">
                <div class="region-image">
                    <img alt="New Zealand"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/nz_8d40801ff4.png" />
                </div>
                <p class="region-title">New Zealand</p>
            </div>
            <div class="region-card" data-country="eu">
                <div class="region-image">
                    <img alt="Eropa"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/eu_4d8a51bbf2.png" />
                </div>
                <p class="region-title">Eropa</p>
            </div>
            <div class="region-card" data-country="hk">
                <div class="region-image">
                    <img alt="Hong Kong"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/hk_93c2754f22.png" />
                </div>
                <p class="region-title">Hong Kong</p>
            </div>
            <div class="region-card" data-country="us">
                <div class="region-image">
                    <img alt="Amerika Serikat"
                        src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/us_f30f16e065.png" />
                </div>
                <p class="region-title">Amerika Serikat</p>
            </div>
        </div>
    </section>
    <section id="display-card">
        <div class="container">
            <div class="box-product">
                <div class="product-content">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/Nyala_da93cfa5b4.svg"
                                alt="content image">
                        </div>
                        <div class="product-body">
                            <h3 class="product-title"><span class="highlight-text">Nyala Global</span> Debit</h3>
                            <div class="highlight-card">
                                <h3>Transaksi bebas biaya konversi</h3>
                                <p>Tinggal Tap #KartuWajibLiburan OCBC Nyala Global Debit langsung siap
                                    transaksi dalam
                                    berbagai mata uang.</p>
                            </div>
                            <div class="product-text">
                                <p class="bold">• Transaksi online & offline di dalam & luar negeri</p>
                                <p>Langsung debit dari belasan mata uang (IDR, USD, AUD, SGD, JPY, EUR, HKD, CHF, NZD, CAD,
                                    GBP, CNH, AED, SAR, KRW) bebas biaya konversi. Segera hadir untuk mata uang THB.
                                    Dapatkan promo menarik di web.obcd.id/everydaywin</p>
                            </div>
                            <div class="product-text">
                                <p class="bold">• Praktis dengan fitur contactless</p>
                                <p>Mulai dari belanja hingga keluar masuk MRT* di luar negeri tinggal tap / dip kartu</p>
                                <p><small>*Berlaku di negara dan perusahaan transportasi yang menerima pembayaran dengan
                                        kartu bank berlogo Mastercard dan contactless</small></p>
                            </div>

                            <div class="product-text">
                                <p class="bold">• Bebas Biaya Tarik Tunai di ATM</p>
                                <p>Bebas biaya tarik tunai di seluruh jaringan ATM OCBC di Singapura, Malaysia dan Hong
                                    Kong untuk Nasabah dengan layanan Nyala</p>
                            </div>

                            <div class="product-text">
                                <p class="bold">• Mudah Atur Kartu Debit di OCBC mobile</p>
                                <p>Kemudahan aktivasi, atur limit belanja hingga blokir kartu tinggal klik di OCBC mobile
                                </p>
                            </div>

                            <a href="#" class="btn-product-cta bg-primary">Info Lengkap</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/90_N_479674c321.svg"
                                alt="content image">
                        </div>
                        <div class="product-body">
                            <h3 class="product-title">Kartu Kredit <span class="highlight-text">90°N</span></h3>
                            <div class="highlight-card">
                                <h3>Bebas aja liburan dari satu trip ke trip lainnya</h3>
                                <p>Pakai <span style="color: #ffffff; font-weight: bold;">#KartuWajibLiburan Kartu Kredit
                                        OCBC 90°N</span>,
                                    kumpulin
                                    miles lebih cepat bikin liburan
                                    lebih hemat!.</p>
                            </div>
                            <div class="product-text">
                                <p class="bold">• Travel Miles untuk setiap transaksi</p>
                                <p>Gunakan selalu Kartu Kredit OCBC 90°N dan dapatkan 1 Travel Miles untuk setiap transaksi
                                    senilai Rp12.000 (domestik) dan Rp10.000 (luar negeri).</p>
                            </div>
                            <div class="product-text">
                                <p class="bold">• Penukaran Travel Miles</p>
                                <p>Tukarkan Travel Miles Anda menjadi berbagai pilihan:</p>
                                <ul>
                                    <li class="bold">Airline Miles</li>
                                    <li>1 Travel Miles = 1,05 GarudaMiles/1 KrisFlyer/1 AirAsia points</li>
                                </ul>
                                <ul>
                                    <li class="bold">Poinseru</li>
                                    <li>1.000 Travel Miles = 3.000 Poinseru yang dapat Anda tukarkan menjadi berbagai hadiah
                                        menarik, mulai dari e-Voucher, e-Wallet, produk pilihan, hingga pengisian saldo
                                        token listrik serta telepon genggam</li>
                                </ul>
                                <ul>
                                    <li class="bold">Rebate</li>
                                    <li>2.500 Travel Miles = Rp100.000 untuk mengurangi transaksi pada tagihan Anda</li>
                                </ul>
                            </div>

                            <div class="product-text">
                                <p class="bold">• Komplimen Akses Airport Lounge</p>
                                <p>Nikmati akses Complimentary Airport Lounge 2 kali per tahun di Plaza Premium lounge,
                                    Terminal 3 International dan dapatkan akses fasilitas lebih dari 1.300 airport lounge di
                                    lebih dari 130 negara via aplikasi DragonPass (berlaku untuk Kartu Utama & Kartu
                                    Tambahan).</p>
                            </div>

                            <a href="#" class="btn-product-cta bg-primary">Info Lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="promo">
        <div class="container">
            <div class="promo-header">
                <h2>Promo menarik untuk persiapan liburan</h2>
                <p class="promo-desc">Dapatkan promo menarik untuk persiapan liburan Anda dengan kartu OCBC.</p>
                <div class="promo-tabs" role="tablist">
                    <button class="btn-tab active-tab" role="tab" aria-selected="true"
                        data-target="panel-global">Global Kredit</button>
                    <button class="btn-tab" role="tab" aria-selected="false" data-target="panel-90n">Kartu Kredit
                        90°N</button>
                </div>
            </div>

            <div class="promo-panel active-panel" id="panel-global" role="tabpanel">
                <div class="promo-content">
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shell_973ba6d548.jpg"
                                alt="Cashback Shell">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp200 Ribu</h3>
                            <p class="brand-text">Shell</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_tokopedia_d8e3098080.jpg"
                                alt="Hemat Tokopedia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Tokopedia</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_shopee_c76750f262.jpg"
                                alt="Hemat Shopee">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp100 Ribu</h3>
                            <p class="brand-text">Shopee</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_oh_some_013a8be0d9.jpg"
                                alt="Cashback OH!SOME">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback hingga Rp50 Ribu</h3>
                            <p class="brand-text">OH!SOME</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_astro_05568555a6.jpg"
                                alt="Hemat Astro">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp25 Ribu</h3>
                            <p class="brand-text">Astro</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/sociolla_logo_e787b71854.jpg"
                                alt="Cashback Sociolla">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 12% di Website & Aplikasi Sociolla</h3>
                            <p class="brand-text">Sociolla</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/superindo_logo_00df94c3be.jpg"
                                alt="Cashback Super Indo">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Cashback 20% hingga Rp40 Ribu</h3>
                            <p class="brand-text">Super Indo</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_traveloka_9032184f23.jpg"
                                alt="Hemat Traveloka">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp450 Ribu</h3>
                            <p class="brand-text">Traveloka</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_qatar_airways_1be2e5bc0a.jpg"
                                alt="Hemat Qatar Airways">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 10% untuk pembelian tiket pesawat Qatar Airways</h3>
                            <p class="brand-text">Qatar Airways</p>
                        </div>
                    </div>
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/logo_takashimaya_06cb3a291e.jpg"
                                alt="Hemat Takashimaya">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% di Takashimaya SC Singapore</h3>
                            <p class="brand-text">Takashimaya</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promo-panel" id="panel-90n" role="tabpanel">
                <div class="promo-content">
                    <!-- Card 1: Club Wyndham Asia -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/wyndham_logo_32e953a0c8.webp"
                                alt="Hemat Club Wyndham Asia">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 65% untuk liburan ke Bali, Bangkok, dan Phuket</h3>
                            <p class="brand-text">Club Wyndham Asia</p>
                        </div>
                    </div>
                    <!-- Card 2: The Legian Bali -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_legian_logo_0342d4540d.webp"
                                alt="Hemat The Legian Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 40%</h3>
                            <p class="brand-text">The Legian Bali</p>
                        </div>
                    </div>
                    <!-- Card 3: Anantara Vacation Club -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/anatara_logo_4ae10deb75.webp"
                                alt="Menginap Anantara Vacation Club">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Menginap 4D3N di Bali/Thailand hanya Rp2,8 Juta</h3>
                            <p class="brand-text">Anantara Vacation Club</p>
                        </div>
                    </div>
                    <!-- Card 4: Millennium Hotels and Resorts -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/millenium_logo_8954211579.webp"
                                alt="Bonus Millennium Hotels and Resorts">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Bonus menginap 1 malam</h3>
                            <p class="brand-text">Millennium Hotels and Resorts</p>
                        </div>
                    </div>
                    <!-- Card 5: Ascott -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/ascot_logo_35fc3e4393.webp"
                                alt="Hemat Ascott">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20% | Stay 3 Pay 2 Nights</h3>
                            <p class="brand-text">Ascott</p>
                        </div>
                    </div>
                    <!-- Card 6: The Westin Resort Nusa Dua Bali -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/the_westin_logo_045e4275fe.webp"
                                alt="Hemat The Westin Resort Nusa Dua Bali">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 20%</h3>
                            <p class="brand-text">The Westin Resort Nusa Dua Bali</p>
                        </div>
                    </div>
                    <!-- Card 7: Intercontinental Bali Sanur Resort -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/intercon_logo_8f5a97d9f8.webp"
                                alt="Hemat Intercontinental Bali Sanur Resort">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Intercontinental Bali Sanur Resort</p>
                        </div>
                    </div>
                    <!-- Card 8: Swiss-belhotel International -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/swissbel_logo_269b93cc6a.webp"
                                alt="Hemat Swiss-belhotel International">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Swiss-belhotel International</p>
                        </div>
                    </div>
                    <!-- Card 9: Le Meridien Bali jimbaran -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/le_meridien_logo_ec0d1f9bc5.webp"
                                alt="Hemat Le Meridien Bali jimbaran">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">Le Meridien Bali jimbaran</p>
                        </div>
                    </div>
                    <!-- Card 10: Mandarin Oriental Jakarta -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/mo_logo_b8435165ba.webp"
                                alt="Hemat Mandarin Oriental Jakarta">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga 15% | Harga Spesial</h3>
                            <p class="brand-text">Mandarin Oriental Jakarta</p>
                        </div>
                    </div>
                    <!-- Card 11: Klook -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/klook_logo_dfbd0feeca.webp"
                                alt="Hemat Klook">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat hingga Rp185 Ribu</h3>
                            <p class="brand-text">Klook</p>
                        </div>
                    </div>
                    <!-- Card 12: TWG Tea -->
                    <div class="promo-card">
                        <div class="promo-image">
                            <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/twg_logo_93001ff77f.webp"
                                alt="Hemat TWG Tea">
                        </div>
                        <div class="promo-body">
                            <h3 class="promo-title">Hemat 15%</h3>
                            <p class="brand-text">TWG Tea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="app-banner">
        <div class="app-container">
            <div class="app-layout">
                <div class="app-content-wrapper">
                    <h1 class="app-title">Buka Nyala Dapatkan Cashback hingga Rp1 Juta & Jadi #FinanciallyFIT!</h1>
                    <a href="#" class="app-link-info">Klik untuk info lengkap cashback</a>
                    <div class="app-download-buttons">
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                alt="Get it on Google Play">
                        </a>
                        <a href="#" class="app-btn-store">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                                alt="Download on the App Store">
                        </a>
                    </div>
                </div>
                <div class="app-image-wrapper">
                    <img src="https://on-c2-cmshub-public.s3.ap-southeast-3.amazonaws.com/hp_b80c308612.png"
                        alt="Mockup Aplikasi Nyala" class="app-mockup">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('#promo .btn-tab');
            var panels = document.querySelectorAll('#promo .promo-panel');

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabs.forEach(function(t) {
                        t.classList.remove('active-tab');
                        t.setAttribute('aria-selected', 'false');
                    });
                    panels.forEach(function(p) {
                        p.classList.remove('active-panel');
                    });

                    tab.classList.add('active-tab');
                    tab.setAttribute('aria-selected', 'true');
                    document.getElementById(tab.dataset.target).classList.add('active-panel');
                });
            });
        });
    </script>
@endpush
