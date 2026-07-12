# Dokumentasi Struktur HTML & CSS

_Pemetaan class / id pada markup terhadap rule CSS yang mengaturnya_

Dokumen ini memasangkan setiap potongan HTML yang memanggil sebuah class atau id dengan definisi CSS yang bersangkutan, disusun berdampingan (side-by-side) agar mudah ditelusuri saat maintenance atau onboarding developer baru.

> Catatan render: tabel di bawah memakai HTML mentah di dalam Markdown agar kolom HTML & CSS tampil berdampingan. Ini akan tampil rapi di GitHub, GitLab, VS Code preview, dan sebagian besar renderer Markdown lain yang mendukung HTML inline.

---

## 1. Hero Section

### 1.1 `#hero-section` (section wrapper)

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<section id="hero-section">
    <img class="hero-bg-image" src="..." alt="" />
    <div class="container">...</div>
    <div class="card-floating-wrapper">...</div>
</section>
```

</td>
<td>

```css
#hero-section {
    position: relative;
    min-height: 500px;
    padding-bottom: 100px;
    overflow: visible;
}

@media (max-width: 768px) {
    #hero-section {
        aspect-ratio: 16/7;
        min-height: auto;
        padding: 0;
    }
}
```

</td>
</tr>
</table>

> **Catatan:** terdapat media query khusus mobile (`max-width: 768px`) yang mengubah `#hero-section` menjadi `aspect-ratio: 16/7` dan menghapus padding.

### 1.2 `.hero-bg-image`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<img class="hero-bg-image" src="https://images.unsplash.com/..." alt="" />
```

</td>
<td>

```css
.hero-bg-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    pointer-events: none;
}
```

</td>
</tr>
</table>

### 1.3 `.container`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="container">
    <div class="hero-layout">...</div>
</div>
```

</td>
<td>

```css
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 250px 30px;
}
```

</td>
</tr>
</table>

> **Catatan:** `.container` dipakai berulang di beberapa section (hero, content-section, container-cards) dengan rule yang sama.

### 1.4 `.hero-layout`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="hero-layout">
    <div class="title-banner">
        <h1>Welcome to the Hero Section</h1>
        <p>This is a simple hero section.</p>
    </div>
    <div class="image-banner">...</div>
</div>
```

</td>
<td>

```css
.hero-layout {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
}
```

</td>
</tr>
</table>

### 1.5 `.title-banner`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="title-banner">
    <h1>Welcome to the Hero Section</h1>
    <p>This is a simple hero section.</p>
</div>
```

</td>
<td>

```css
.title-banner {
    color: #ffffff;
    flex: 1;
}
```

</td>
</tr>
</table>

### 1.6 `.image-banner`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="image-banner">{{-- <img src="..." alt="" /> --}}</div>
```

</td>
<td>

```css
.image-banner {
    flex: 1;
    display: flex;
    justify-content: center;
}

.image-banner img {
    max-height: 450px;
    display: block;
    border-radius: 12px;
    display: block;
}
```

</td>
</tr>
</table>

> **Catatan:** elemen `<img>` di dalam `.image-banner` masih dikomentari (Blade comment `{{-- --}}`), sehingga rule `.image-banner img` belum berefek sampai gambar diaktifkan kembali.

### 1.7 `.card-floating-wrapper`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="card-floating-wrapper">
    <div class="container container-cards">...</div>
</div>
```

</td>
<td>

```css
.card-floating-wrapper {
    position: absolute;
    bottom: -60px;
    left: 0;
    width: 100%;
    z-index: 10;
}
```

</td>
</tr>
</table>

> **Catatan:** class ini dideklarasikan dua kali di file CSS (deklarasi kedua hanya berisi `position` & `bottom`, bersifat duplikat/override).

### 1.8 `.container-cards`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="container container-cards">
    <div class="card-item">...</div>
    <div class="card-item">...</div>
    <div class="card-item">...</div>
</div>
```

</td>
<td>

```css
.container-cards {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
```

</td>
</tr>
</table>

### 1.9 `.card-item` (dipanggil 3×)

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="card-item">
    <h3>Card Title</h3>
    <p>Card description</p>
</div>
```

</td>
<td>

```css
.card-item {
    width: calc(33.333% - 14px);
    max-width: 280px;
    padding: 24px 16px;
    border-radius: 16px;
    text-align: center;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
```

</td>
</tr>
</table>

> **Catatan:** `calc(33.333% - 14px)` pada `width` — rumus ini otomatis membagi ruang container menjadi 3 bagian sama besar (33.333%), lalu memotongnya sedikit (- 14px) untuk memberikan ruang bagi jarak (gap) sebesar 20px yang diterapkan lewat `.container-cards`, sehingga ketiga `.card-item` tetap rapi dan tidak saling menempel di tepi.
>
> **Catatan:** `rgba(0, 0, 0, 0.1)` pada `box-shadow` — mendefinisikan warna hitam dengan tingkat transparansi 10% (nilai alpha 0.1 dari skala 0–1), sehingga bayangan yang dihasilkan terlihat halus/samar, bukan hitam pekat.

---

## 2. Content Section — Box Product

### 2.1 `#content-section`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<section id="content-section">
    <div class="container">...</div>
</section>
```

</td>
<td>

```css
/* tidak ada rule khusus untuk
   #content-section di file CSS */
```

</td>
</tr>
</table>

> **Catatan:** layout section ini sepenuhnya bergantung pada `.container` dan class turunannya, bukan pada id `#content-section`.

### 2.2 `.box-product`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="box-product">
    <div class="product-header">...</div>
    <div class="product-content">...</div>
</div>
```

</td>
<td>

```css
.box-product {
    width: 100%;
    max-width: 1000px;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 40px auto;
    padding: 50px 40px;
}
```

</td>
</tr>
</table>

### 2.3 `.product-header` & `.header-desc`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="product-header">
    <h2>Product Title</h2>
    <p class="header-desc">This is the header description for the product.</p>
</div>
```

</td>
<td>

```css
.product-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 40px auto;
}

.product-header h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #111827;
    margin-bottom: 10px;
}

.header-desc {
    font-size: 1rem;
    color: #6b7280;
    line-height: 1.5;
}
```

</td>
</tr>
</table>

> **Catatan:** CSS juga memiliki `.product-header .highlight` (badge kuning) yang belum dipakai pada markup HTML saat ini.

### 2.4 `.product-content`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="product-content">
    <div class="product-card">...</div>
    <div class="product-card">...</div>
</div>
```

</td>
<td>

```css
.product-content {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}
```

</td>
</tr>
</table>

### 2.5 `.product-card`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="product-card">
    <div class="product-image">
        <img src="..." alt="content image" />
    </div>
    <div class="product-body">
        <h3 class="product-title">Kartu Custom Nyala Global Debit</h3>
        <p class="product-text">
            Dapatkan kartu debit OCBC dengan foto anabul Anda...
        </p>
        <a class="btn-product-cta bg-primary"> Buka Sekarang </a>
    </div>
</div>
```

</td>
<td>

```css
.product-card {
    width: calc(50% - 25px);
    max-width: 480px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
```

</td>
</tr>
</table>

> **Catatan:** `calc(50% - 25px)` pada `width` — membagi ruang `.product-content` menjadi 2 bagian sama besar (50%) untuk kedua `.product-card`, lalu mengurangi 25px dari masing-masing bagian agar total lebar keduanya tidak mepet ke tepi container dan tetap menyisakan jarak (`gap: 20px`) di antara keduanya.

### 2.6 `.product-image`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="product-image">
    <img src="https://images.unsplash.com/..." alt="content image" />
</div>
```

</td>
<td>

```css
.product-image {
    width: 100%;
    max-width: 320px;
    height: 190px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    background-color: #f3f4f6;
}
```

</td>
</tr>
</table>

### 2.7 `.product-body` / `.product-title` / `.product-text`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="product-body">
    <h3 class="product-title">Kartu Kredit OCBC Platinum for Pet Lovers</h3>
    <p class="product-text">Miliki kartu kredit edisi spesial...</p>
    <a class="btn-product-cta bg-danger"> Apply Sekarang </a>
</div>
```

</td>
<td>

```css
.product-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.product-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #111827;
    margin: 0;
}

.product-text {
    font-size: 1rem;
    color: #6b7280;
    line-height: 1.5;
    margin: 0;
}
```

</td>
</tr>
</table>

### 2.8 `.btn-product-cta` + `.bg-primary` / `.bg-danger`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<a href="#" class="btn-product-cta bg-primary"> Buka Sekarang </a>

<a href="#" class="btn-product-cta bg-danger"> Apply Sekarang </a>
```

</td>
<td>

```css
.btn-product-cta {
    display: inline-block;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
    margin-top: 20px;
    width: 200px;
}

.bg-primary {
    background-color: #3b82f6;
    color: #ffffff;
}
.bg-danger {
    background-color: #ef4444;
    color: #ffffff;
}
```

</td>
</tr>
</table>

---

## 3. Content Section — Cards Grid

### 3.1 `.row` & `.col` (3×)

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="row">
    <div class="col">
        <div class="card">...</div>
    </div>
    <div class="col">...</div>
    <div class="col">...</div>
</div>
```

</td>
<td>

```css
.row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: left;
}

.col {
    flex: 1 1 calc(33.333% - 20px);
}
```

</td>
</tr>
</table>

> **Catatan:** `flex: 1 1 calc(33.333% - 20px)` — angka pertama (`1`) adalah `flex-grow` (kolom boleh melebar mengisi ruang kosong), angka kedua (`1`) adalah `flex-shrink` (kolom boleh menyusut jika ruang sempit), dan `calc(33.333% - 20px)` adalah `flex-basis`: lebar dasar tiap kolom dibagi rata 3 bagian (33.333%) lalu dikurangi 20px agar tetap ada ruang untuk gap di antara kolom.

### 3.2 `.card` / `.card-image` / `.card-body` / `.card-title`

<table>
<tr><th>HTML</th><th>CSS</th></tr>
<tr>
<td>

```html
<div class="card">
    <div class="card-image">
        <img src="..." alt="content image" class="" />
    </div>
    <div class="card-body">
        <h1 class="card-title">Content Title</h1>
        <p class="card-text">This is a simple content section.</p>
    </div>
</div>
```

</td>
<td>

```css
.card {
    width: 100%;
    max-width: 350px;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: auto;
}

.card-image {
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    background-color: #f3f4f6;
}

.card-body {
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    flex-grow: 0;
}

.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #111827;
}
```

</td>
</tr>
</table>

> **Catatan:** class `.card-text` dipakai pada HTML namun tidak memiliki rule CSS sendiri, sehingga hanya mewarisi style default browser.

---

## 4. Catatan Tambahan

- `.card-product` didefinisikan di CSS tetapi tidak dipanggil di HTML manapun pada dua file ini.
- `.card-floating-wrapper` memiliki dua blok deklarasi di CSS (duplikat) — sebaiknya digabung jadi satu.
- `.product-header .highlight` (badge kuning) tersedia di CSS namun belum digunakan pada markup.
- `.card-text` dipakai di HTML tanpa rule CSS pendamping.
- `#content-section` tidak memiliki styling langsung; seluruh tampilan diatur lewat class `.container` dan turunannya.
