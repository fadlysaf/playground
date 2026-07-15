# Panduan Konfigurasi & Penggunaan Ngrok pada Laravel

Dokumen ini menjelaskan langkah-langkah lengkap untuk mengonfigurasi dan menjalankan **ngrok** pada project Laravel Anda, sehingga aplikasi lokal dapat diakses dari internet secara aman via HTTPS.

---

## 🛠️ Persiapan Awal (Prerequisites)

Sebelum memulai, pastikan:
1. **ngrok** sudah terinstall di komputer Anda.
2. Anda sudah memiliki akun di [ngrok.com](https://ngrok.com/).
3. Server lokal Laravel (`php artisan serve`) berjalan di port default (`8000`).

---

## 📋 Langkah-Langkah Konfigurasi

### 1. Hubungkan Authtoken ngrok
Dapatkan token otentikasi (Authtoken) Anda dari [Dashboard ngrok](https://dashboard.ngrok.com/get-started/your-authtoken). 

Buka terminal dan jalankan perintah berikut untuk menyimpan token secara global di perangkat Anda:

```powershell
ngrok config add-authtoken <MASUKKAN_AUTHTOKEN_ANDA>
```

> [!NOTE]
> Anda hanya perlu melakukan langkah ini **satu kali** di komputer Anda. Konfigurasi akan disimpan secara otomatis di file `ngrok.yml`.

---

### 2. Konfigurasi Trusted Proxies di Laravel
Agar asset (CSS, JS, gambar) dan tautan route pada Laravel termuat menggunakan protokol `https` (bukan `http` lokal), Laravel harus mengenali ngrok sebagai *Trusted Proxy*.

Perubahan ini telah diterapkan pada file [bootstrap/app.php](file:///d:/fadly/playground/bootstrap/app.php):

```diff
     ->withMiddleware(function (Middleware $middleware): void {
-        //
+        $middleware->trustProxies(at: '*');
     })
```

> [!IMPORTANT]
> Kode `$middleware->trustProxies(at: '*');` memerintahkan Laravel untuk mempercayai semua *reverse proxy* (termasuk ngrok) dan memuat asset menggunakan header `X-Forwarded-Proto` (HTTPS) yang dikirim oleh ngrok.

---

### 3. Jalankan Server Lokal Laravel
Jalankan server lokal aplikasi Laravel Anda:

```powershell
php artisan serve
```
Secara default, aplikasi Anda dapat diakses secara lokal di `http://127.0.0.1:8000`.

---

### 4. Jalankan ngrok Tunnel
Buka terminal baru (tanpa mematikan server Laravel), kemudian jalankan perintah ngrok berikut:

```powershell
ngrok http 8000 --host-header=localhost:8000
```

*   `http 8000`: Mengarahkan lalu lintas internet ke port `8000` di localhost Anda.
*   `--host-header=localhost:8000`: Memaksa ngrok untuk menulis ulang header Host agar sesuai dengan server lokal Laravel, menghindari error *Invalid Host Header*.

Setelah dijalankan, terminal ngrok akan menampilkan URL publik seperti:
`https://a1b2-c3d4.ngrok-free.app`

---

## ⚡ Solusi Masalah Umum (Troubleshooting)

### 1. Tampilan CSS / JS Tidak Terbaca (Mixed Content Error)
Jika Anda menggunakan **Vite** (`npm run dev`) saat menjalankan ngrok, browser luar mungkin tidak bisa memuat CSS/JS karena Vite berjalan di port lokal terpisah (`5173`).

**Solusi Tercepat:**
Sebelum membagikan link ngrok, jalankan perintah build agar asset dicompile secara statis oleh Laravel:
```powershell
npm run build
```

### 2. Error CSRF Token / Sesi Log Out Sendiri
Jika Anda menemui error CSRF token tidak valid saat mengirimkan form melalui link ngrok:
* Pastikan URL di file `.env` pada variabel `APP_URL` sudah disesuaikan dengan link ngrok Anda (opsional, tapi disarankan untuk integrasi webhook/callback):
  ```env
  APP_URL=https://xxxx-xxx.ngrok-free.app
  ```
* Jangan lupa untuk membersihkan cache konfigurasi Laravel jika Anda mengubah `.env`:
  ```powershell
  php artisan config:clear
  ```

---

*Dokumentasi ini dibuat secara otomatis untuk membantu mempermudah proses integrasi dan testing lokal.*
