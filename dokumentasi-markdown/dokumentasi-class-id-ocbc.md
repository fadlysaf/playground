# Dokumentasi Class & ID — OCBC #KartuWajibLiburan Landing Page

Dokumen ini memetakan setiap `class`/`id` penting di HTML terhadap aturan **CSS** (`style.css`) dan interaksi **JavaScript** (`main.js`), agar mudah dipahami relasi antar file.

---

## 1. Header

### 1.1 `.top-header, .lang-switcher, .lang-btn (bar bahasa & utility)`

**HTML**
```html
<div class="top-header">
    <div class="lang-switcher">
        <a href="?lang=id" class="lang-btn active">ID</a>
        <a href="?lang=en" class="lang-btn">EN</a>
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
```
**CSS**
```css
.top-header {
    background-color: #ffffff;
    border-bottom: 1px solid #e5e7eb;
    padding: 8px 5%;
    display: flex;
    justify-content: space-between;
}
.lang-btn.active {
    background-color: #1f2937;
    color: #ffffff;
}
```
**JavaScript**
```js
// main.js — Language Switcher
const langButtons = document.querySelectorAll(".lang-btn");
langButtons.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        langButtons.forEach(function (b) { b.classList.remove("active"); });
        btn.classList.add("active");
        // Simulasi query string ?lang=xx tanpa reload (versi static HTML)
        const url = new URL(window.location.href);
        const langValue = btn.getAttribute("href").split("lang=")[1];
        url.searchParams.set("lang", langValue);
        window.history.replaceState({}, "", url);
    });
});
```

> **Catatan:** Class .active dipindah antar tombol ID/EN lewat classList saat diklik. JS juga mengubah query string URL (?lang=id/en) memakai history.replaceState() TANPA reload halaman — karena ini masih versi HTML statis, teks halaman sendiri belum benar-benar berganti bahasa.

---

### 1.2 `.main-header, .logo-container, #text-logo (logo + fallback)`

**HTML**
```html
<div class="logo-container">
    <a href="/">
        <img src="...ocbc-red.png" alt="OCBC Logo"
            onerror="
                this.style.display = 'none';
                document.getElementById('text-logo').style.display = 'block';
            " />
        <h1 id="text-logo" style="display:none; color:#e00000;">
            OCBC
        </h1>
    </a>
</div>
```
**CSS**
```css
.main-header {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    padding: 15px 5%;
    display: flex;
    justify-content: space-between;
}
.logo-container img { height: 38px; display: block; }
```

> **Catatan:** Fallback logo TIDAK memakai main.js — dipasang langsung sebagai atribut inline onerror di tag <img>. Jika gambar logo gagal dimuat, <img> disembunyikan dan #text-logo (teks "OCBC") ditampilkan sebagai gantinya.

---

### 1.3 `#menu-toggle-btn, #nav-menu-container, .nav-menu (hamburger menu)`

**HTML**
```html
<button class="menu-toggle" id="menu-toggle-btn" aria-label="Toggle Menu">
    <i class="fa-solid fa-bars"></i>
</button>

<nav class="nav-menu" id="nav-menu-container">
    <a href="/individual" class="nav-link">Individual</a>
    ...
    <div class="nav-actions">
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <a href="/become-member" class="btn-member">Become Member</a>
    </div>
</nav>
```
**CSS**
```css
.nav-menu { display: flex; align-items: center; gap: 24px; }

@media (max-width: 992px) {
    .menu-toggle { display: block; }
    .nav-menu {
        display: none;
        position: absolute;
        top: 100%; left: 0; width: 100%;
        flex-direction: column;
    }
    .nav-menu.active { display: flex; }
}
```
**JavaScript**
```js
// main.js — Hamburger Menu (Header)
const menuToggleBtn = document.getElementById("menu-toggle-btn");
const navMenuContainer = document.getElementById("nav-menu-container");

menuToggleBtn.addEventListener("click", function () {
    navMenuContainer.classList.toggle("active");
    const icon = menuToggleBtn.querySelector("i");
    if (navMenuContainer.classList.contains("active")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-xmark");
    } else {
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");
    }
});
```

> **Catatan:** Class .nav-menu.active hanya berpengaruh di breakpoint mobile (max-width: 992px) — di desktop .nav-menu selalu terlihat karena display:flex default, jadi toggle class ini baru terasa efeknya saat layar sempit. Icon <i> juga ditukar antara fa-bars <-> fa-xmark mengikuti status buka/tutup menu.

---

## 2. Hero Section

### 2.1 `#hero-section, .hero-bg-image (gambar latar hero)`

**HTML**
```html
<section id="hero-section">
    <div class="hero-bg-image">
        <img src="...unsplash.com/..." alt="" />
    </div>
    <div class="hero-content">...</div>
</section>
```
**CSS**
```css
#hero-section {
    position: relative;
    min-height: 480px;
    background-color: #f2f4f7;
    display: flex;
    align-items: center;
}
.hero-bg-image {
    position: absolute;
    top: 0; right: 0;
    width: 55%; height: 100%;
}
.hero-bg-image::after {
    content: "";
    position: absolute; inset: 0;
    background: linear-gradient(90deg, #f2f4f7 0%, rgba(242,244,247,.9) 15%, rgba(242,244,247,0) 50%);
}
```

> **Catatan:** Efek gradasi memudar di atas foto (agar teks di kiri tetap terbaca) dibuat murni dengan CSS ::after, bukan overlay <div> tambahan atau JS.

---

### 2.2 `.hero-content, .title-banner (judul hero)`

**HTML**
```html
<div class="hero-content">
    <div class="title-banner">
        <h1>OCBC #KartuWajibLiburan</h1>
    </div>
    <div class="product-banner">...</div>
</div>
```
**CSS**
```css
.hero-content {
    position: relative;
    z-index: 3;
    max-width: 1200px;
    padding: 60px 30px;
    display: flex;
    flex-direction: column;
    gap: 30px;
}
.title-banner h1 { font-size: 42px; font-weight: 700; letter-spacing: -1px; }
```

> **Catatan:** z-index: 3 dipakai agar teks hero tampil di atas .hero-bg-image (z-index: 1) dan gradasinya (z-index: 2).

---

### 2.3 `.product-banner, .product-item, .card-img, .btn-cc / .btn-red`

**HTML**
```html
<div class="product-banner">
    <div class="product-item">
        <img src="...nyala_5bb25c225e.png" class="card-img" alt="OCBC Nyala Global Debit" />
        <a href="#" class="btn-cc btn-red">Buka Nyala</a>
    </div>
    <div class="product-item">
        <img src="...90n_187803c4e9.png" class="card-img" alt="OCBC 90°N Credit Card" />
        <a href="#" class="btn-cc btn-red">Apply Kartu Kredit</a>
    </div>
</div>
```
**CSS**
```css
.card-img {
    width: 190px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,.1);
    transition: transform .2s ease;
}
.card-img:hover { transform: translateY(-4px); }
.btn-red { background-color: #cc0000; }
.btn-red:hover { background-color: #b30000; }
```

> **Catatan:** .btn-cc adalah base style tombol pil (padding, radius, shadow), sedangkan .btn-red menentukan warnanya — pola pemisahan "base class + modifier class" ini juga dipakai di komponen lain seperti .btn-product-cta + .bg-primary/.bg-danger (lihat 5.3).

---

## 3. Campaign Section

### 3.1 `#campaign-section, .campaign-header, .higlight`

**HTML**
```html
<section id="campaign-section">
    <div class="container">
        <div class="campaign-header">
            <h2>
                Liburan bebas kemana aja, pakai
                <span class="higlight">#KartuWajibLiburan</span>
                transaksi beres liburan berasa bebasnya
            </h2>
        </div>
        <div class="cta-content">...</div>
    </div>
</section>
```
**CSS**
```css
.campaign-header {
    text-align: center;
    background-color: #ffffff;
    padding: 40px 20px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,.1);
}
.campaign-header h2 .higlight { color: #cc0000; }
```

> **Catatan:** Perhatikan class-nya bertuliskan .higlight (typo, kurang huruf 'h'), bukan .highlight. Konsisten dipakai di HTML maupun CSS jadi tetap berfungsi normal, tapi perlu diingat agar tidak salah ketik saat menambah style baru untuk elemen serupa (bandingkan dengan .highlight-text/.highlight-card di bagian 5.2 yang penulisannya benar).

---

### 3.2 `.cta-content, .cta-button`

**HTML**
```html
<div class="cta-content">
    <p>Cek beragam promo untuk persiapan traveling di sini!</p>
    <a href="" class="cta-button">Learn More</a>
</div>
```
**CSS**
```css
.cta-button {
    padding: 10px 28px;
    border-radius: 20px;
    color: #ffffff;
    background-color: #cc0000;
}
.cta-button:hover {
    background-color: #b30000;
    transform: translateY(-6px);
}
```

> **Catatan:** Tombol ini murni link statis (href="") tanpa listener JS apa pun — efek hover melayang (translateY) sepenuhnya dari CSS transition.

---

## 4. Region Section

### 4.1 `#region-section, .region-header`

**HTML**
```html
<section id="region-section">
    <div class="region-header">
        <h2>Beda negara, beda lifestyle</h2>
        <p class="region-desc">Temukan lokasi kantor cabang OCBC terdekat di kota Anda.</p>
    </div>
    <div class="region-content">...</div>
</section>
```
**CSS**
```css
#region-section {
    min-height: 480px;
    background-color: #ed1c24;
    display: flex;
    flex-direction: column;
}
.region-header { color: white; font-size: 24px; font-weight: 700; }
```

> **Catatan:** Section ini berlatar merah solid (#ed1c24) — kontras dengan section lain yang mayoritas putih/abu, dipakai sebagai pemisah visual antar blok konten.

---

### 4.2 `.region-card, .region-image, .region-title (atribut data-country)`

**HTML**
```html
<div class="region-content">
    <div class="region-card" data-country="england">
        <div class="region-image">
            <img alt="Inggris" src="...england_652338d6b2.png" />
        </div>
        <p class="region-title">Inggris</p>
    </div>
    <!-- ...total 12 kartu negara (swiss, jp, cn, canada, sg, aus, nz, eu, hk, us) -->
</div>
```
**CSS**
```css
.region-card {
    cursor: pointer;
    transition: transform .3s cubic-bezier(.4,0,.2,1);
}
.region-card:hover { transform: translateY(-8px); }
.region-card:hover .region-image img {
    transform: scale(1.08);
    filter: drop-shadow(0 10px 15px rgba(0,0,0,.15));
}
```

> **Catatan:** Atribut data-country="england" dst. sudah disiapkan di HTML tapi TIDAK dibaca oleh main.js saat ini — belum ada event listener untuk .region-card. Kemungkinan disiapkan untuk pengembangan lanjutan (misalnya klik kartu -> filter promo per negara). Efek hover (angkat kartu + zoom logo) murni CSS transition/transform.

---

## 5. Display Card / Section Produk

### 5.1 `#display-card, .box-product, .product-content`

**HTML**
```html
<section id="display-card">
    <div class="container">
        <div class="box-product">
            <div class="product-content">
                <div class="product-card">...</div>
                <div class="product-card">...</div>
            </div>
        </div>
    </div>
</section>
```
**CSS**
```css
.box-product {
    max-width: 1000px;
    margin: 0 auto;
    padding-left: 40px;
    padding-right: 40px;
}
.product-content {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}
```

> **Catatan:** Berisi 2 kartu produk statis (Nyala Global Debit & Kartu Kredit 90°N) yang ditulis langsung di HTML — tidak ada perulangan/template JS seperti pada .promo-card (bagian 6.3).

---

### 5.2 `.product-card, .product-image, .highlight-card, .product-text`

**HTML**
```html
<div class="product-card">
    <div class="product-image"><img src="...Nyala_da93cfa5b4.svg" /></div>
    <div class="product-body">
        <h3 class="product-title">
            <span class="highlight-text">Nyala Global</span> Debit
        </h3>
        <div class="highlight-card">
            <h3>Transaksi bebas biaya konversi</h3>
            <p>...</p>
        </div>
        <div class="product-text">
            <p class="bold">• Transaksi online & offline...</p>
            <p>...</p>
        </div>
    </div>
</div>
```
**CSS**
```css
.product-card { width: calc(45% - 25px); max-width: 680px; }
.highlight-text { color: #cc0000; }
.highlight-card {
    background-color: #ff0000;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 12px;
}
```

> **Catatan:** Semua konten (deskripsi fitur kartu, bullet point) ditulis manual dan statis di HTML. Class .bold di dalam .product-text hanyalah penanda font-weight:bold untuk baris judul fitur, bukan komponen interaktif.

---

### 5.3 `.btn-product-cta, .bg-primary / .bg-danger`

**HTML**
```html
<a href="#" class="btn-product-cta bg-primary">Info Lengkap</a>
```
**CSS**
```css
.btn-product-cta {
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: bold;
    width: 200px;
}
.bg-primary { background-color: #ff0000; color: #ffffff; }
.bg-danger { background-color: #ef4444; color: #ffffff; }
```

> **Catatan:** Sama seperti .btn-cc + .btn-red di bagian 2.3, ini pola base class (.btn-product-cta = bentuk/ukuran) + modifier class (.bg-primary/.bg-danger = warna). Saat ini kedua kartu produk memakai .bg-primary; .bg-danger tersedia di CSS tapi belum dipakai di index.html manapun.

---

## 6. Promo Section — Tab Interaktif

Satu-satunya komponen di halaman ini yang benar-benar berpindah tampilan lewat JavaScript (selain hamburger menu & language switcher di header).

### 6.1 `.promo-tabs, .btn-tab, .active-tab (tombol tab)`

**HTML**
```html
<div class="promo-tabs" role="tablist">
    <button class="btn-tab active-tab" role="tab" aria-selected="true"
        data-target="panel-global">
        Global Kredit
    </button>
    <button class="btn-tab" role="tab" aria-selected="false"
        data-target="panel-90n">
        Kartu Kredit 90°N
    </button>
</div>
```
**CSS**
```css
.promo-tabs {
    display: inline-flex;
    gap: 10px;
    background-color: #f0f0f0;
    border-radius: 24px;
}
.active-tab {
    color: #ffffff;
    background-color: #cc0000;
    box-shadow: 0 4px 10px rgba(204,0,0,.25);
}
```
**JavaScript**
```js
// main.js — Promo Tabs (Index Page)
const tabs = document.querySelectorAll("#promo .btn-tab");
const panels = document.querySelectorAll("#promo .promo-panel");

tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
        tabs.forEach(function (t) {
            t.classList.remove("active-tab");
            t.setAttribute("aria-selected", "false");
        });
        panels.forEach(function (p) { p.classList.remove("active-panel"); });

        tab.classList.add("active-tab");
        tab.setAttribute("aria-selected", "true");
        document.getElementById(tab.dataset.target).classList.add("active-panel");
    });
});
```

> **Catatan:** Atribut data-target (dibaca sebagai tab.dataset.target) berisi id panel tujuan (mis. "panel-global"). Saat tab diklik, SEMUA tab & panel di-reset dulu (class dilepas), baru tab & panel yang sesuai diaktifkan kembali — pola yang sama persis dengan .filter-pill di project sebelumnya.

---

### 6.2 `.promo-panel, #panel-global, #panel-90n, .active-panel (isi tab)`

**HTML**
```html
<div class="promo-panel active-panel" id="panel-global" role="tabpanel">
    <div class="promo-content">...12 kartu promo...</div>
</div>

<div class="promo-panel" id="panel-90n" role="tabpanel">
    <div class="promo-content">...kartu promo khusus 90°N...</div>
</div>
```
**CSS**
```css
.promo-panel { display: none; }
.promo-panel.active-panel { display: block; }
```

> **Catatan:** Class .active-panel-lah yang sebenarnya mengatur tampil/sembunyi (display: none <-> block); JS di 6.1 hanya bertugas menambah/menghapus class ini. id panel (panel-global / panel-90n) harus SAMA PERSIS dengan value data-target di tombol tab agar document.getElementById(tab.dataset.target) menemukan elemen yang tepat.

---

### 6.3 `.promo-content, .promo-card, .promo-image, .brand-text`

**HTML**
```html
<div class="promo-content">
    <div class="promo-card">
        <div class="promo-image">
            <img src="...logo_shell_973ba6d548.jpg" alt="Cashback Shell" />
        </div>
        <div class="promo-body">
            <h3 class="promo-title">Cashback hingga Rp200 Ribu</h3>
            <p class="brand-text">Shell</p>
        </div>
    </div>
    <!-- ...total 12 kartu di panel-global... -->
</div>
```
**CSS**
```css
.promo-content {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
}
@media (max-width: 1100px) { .promo-content { grid-template-columns: repeat(3,1fr); } }
@media (max-width: 800px)  { .promo-content { grid-template-columns: repeat(2,1fr); } }
@media (max-width: 520px)  { .promo-content { grid-template-columns: 1fr; } }
```

> **Catatan:** Setiap .promo-card ditulis manual satu per satu di HTML (bukan hasil render JS/template) — jumlah kolom grid otomatis menyesuaikan lebar layar lewat media query, tanpa bantuan JavaScript.

---

## 7. App Banner Section

### 7.1 `#app-banner, .app-layout, .app-content-wrapper`

**HTML**
```html
<section id="app-banner">
    <div class="app-container">
        <div class="app-layout">
            <div class="app-content-wrapper">
                <h1 class="app-title">Buka Nyala Dapatkan Cashback hingga Rp1 Juta...</h1>
                <a href="#" class="app-link-info">Klik untuk info lengkap cashback</a>
                <div class="app-download-buttons">...</div>
            </div>
            <div class="app-image-wrapper">...</div>
        </div>
    </div>
</section>
```
**CSS**
```css
#app-banner {
    background-color: #e51a24;
    min-height: 300px;
    display: flex;
    align-items: center;
}
.app-layout {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
}
```

> **Catatan:** Layout dua kolom (teks kiri, gambar kanan) otomatis ditumpuk vertikal di mobile lewat media query max-width: 768px (flex-direction: column) — murni CSS responsif.

---

### 7.2 `.app-download-buttons, .app-btn-store, .app-mockup`

**HTML**
```html
<div class="app-download-buttons">
    <a href="#" class="app-btn-store">
        <img src="...Google_Play_Store_badge_EN.svg" alt="Get it on Google Play" />
    </a>
    <a href="#" class="app-btn-store">
        <img src="...Download_on_the_App_Store_Badge.svg" alt="Download on the App Store" />
    </a>
</div>
<div class="app-image-wrapper">
    <img src="...hp_b80c308612.png" alt="Mockup Aplikasi Nyala" class="app-mockup" />
</div>
```
**CSS**
```css
.app-btn-store img { height: 38px; display: block; }
.app-image-wrapper {
    display: flex;
    justify-content: flex-end;
    margin-right: -150px;
}
.app-mockup { max-height: 300px; }
```

> **Catatan:** margin-right: -150px pada .app-image-wrapper sengaja dipakai supaya gambar mockup HP terlihat "meluber" keluar batas container di layar besar — trik CSS murni, dinetralkan kembali (margin-right: 0) di breakpoint mobile.

---

## 8. Footer

### 8.1 `.main-footer, .footer-container, .footer-left`

**HTML**
```html
<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-left">
            <p class="copyright-text">2026 © All Rights Reserved by OCBC Indonesia</p>
            <p class="legal-text">PT Bank OCBC NISP Tbk berizin dan diawasi oleh OJK...</p>
        </div>
        <div class="footer-right">...</div>
    </div>
    <div class="footer-bottom-bar"></div>
</footer>
```
**CSS**
```css
.main-footer {
    background-color: #ffffff;
    padding: 20px 5%;
    border-top: 1px solid #e5e7eb;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    gap: 40px;
}
```

> **Catatan:** Tidak ada interaksi JS di footer — seluruhnya statis. Di mobile (max-width: 768px), .footer-container berubah jadi flex-direction: column lewat media query.

---

### 8.2 `.footer-right, .social-links, .social-icon`

**HTML**
```html
<div class="footer-right">
    <span class="follow-us-label">Follow us:</span>
    <div class="social-links">
        <a href="https://facebook.com" target="_blank" class="social-icon" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <!-- ...x.com, instagram.com, linkedin.com... -->
    </div>
</div>
```
**CSS**
```css
.social-icon {
    width: 32px; height: 32px;
    border-radius: 50%;
    background-color: #f3f4f6;
    display: flex;
    align-items: center;
    justify-content: center;
}
.social-icon:hover {
    color: #c00000;
    background-color: #fee2e2;
}
```

> **Catatan:** Semua link sosial media membuka tab baru (target="_blank") dan mengarah ke domain umum (facebook.com, x.com, dst) — belum di-arahkan ke akun resmi OCBC spesifik.

---

### 8.3 `.footer-bottom-bar (garis penutup)`

**HTML**
```html
<div class="footer-bottom-bar"></div>
```
**CSS**
```css
.footer-bottom-bar {
    height: 8px;
    background-color: #9ca3af;
    width: 90%;
    margin: 15px auto 0 auto;
    border-radius: 2px;
}
```

> **Catatan:** Elemen dekoratif murni (garis abu-abu tebal di paling bawah halaman) — <div> kosong tanpa konten maupun interaksi.

---

## 9. Ringkasan Fungsi `main.js`

| Fitur | Elemen Terkait | File CSS Terkait | Ringkasan |
|---|---|---|---|
| Hamburger Menu | `#menu-toggle-btn`, `#nav-menu-container` | `.nav-menu.active` (media query ≤992px) | Toggle class `active` pada nav + tukar icon `fa-bars`/`fa-xmark` |
| Language Switcher | `.lang-btn` | `.lang-btn.active` | Toggle class `active` antar tombol ID/EN + ubah query string `?lang=` via `history.replaceState()` |
| Promo Tabs | `#promo .btn-tab`, `#promo .promo-panel` | `.active-tab`, `.active-panel` | Toggle class aktif pada tab & panel berdasarkan atribut `data-target` |

**Catatan umum:** `main.js` hanya berisi 3 blok event listener, semuanya didaftarkan di dalam satu `DOMContentLoaded`. Tidak ada file data/JS lain (semacam `db.js` di project sebelumnya) — halaman ini murni landing page statis, seluruh konten (promo, region, produk) ditulis langsung di `index.html`, tidak ada yang di-render dari data JavaScript.
