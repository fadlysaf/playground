# Dokumentasi Class & ID — RequestTracker

Dokumen ini memetakan setiap `class`/`id` penting di HTML terhadap aturan **CSS** dan interaksi **JavaScript**-nya, agar mudah dipahami relasi antar file (`style.css`, `utils.js`, `db.js`, `detail.js`, `form.js`, `list.js`).

---

## 1. Layout Global (semua halaman)

### 1.1 `.dashboard-layout` / `.dashboard-body` (wrapper utama)

**HTML**
```html
<div class="dashboard-layout">
    <header class="app-header">...</header>
    <div class="dashboard-body">
        <aside class="app-sidebar">...</aside>
        <main class="app-content">...</main>
    </div>
</div>
```
```css
.dashboard-layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.dashboard-body {
    display: flex;
    flex: 1;
    margin-top: 64px;
}
```

> **Catatan:** `.dashboard-layout` membungkus seluruh halaman (header + body). `.dashboard-body` diberi `margin-top: 64px` supaya kontennya tidak tertutup `.app-header` yang `position: fixed`. Tidak ada JS yang memanipulasi elemen ini — murni struktural.

---

### 1.2 `.app-header`, `.logo`, `.logo-icon` (header atas)

```html
<header class="app-header">
    <div class="header-left">
        <a href="index.html" class="logo">
            <i class="fa-solid fa-square-poll-vertical logo-icon"></i>
            <span>RequestTracker</span>
        </a>
    </div>
    ...
</header>
```
```css
.app-header {
    position: fixed;
    top: 0; left: 0; right: 0;
    height: 64px;
    background-color: #4338ca;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 100;
}

.app-header .header-left .logo {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #ffffff;
    font-weight: 700;
}
```

> **Catatan:** Header bersifat `fixed` di semua halaman (`table.html`, `form.html`, `index.html`). Tidak dimanipulasi JS — hanya link statis antar halaman.

---

### 1.3 `.header-nav`, `.nav-group`, `.nav-item`, `.btn-new-req` (navigasi)

```html
<nav class="header-nav">
    <div class="nav-group">
        <a href="index.html" class="nav-item active">Detail</a>
        <a href="table.html" class="nav-item">Table</a>
    </div>
    <a href="form.html" class="nav-item btn-new-req">New Request</a>
</nav>
```
```css
.header-nav .nav-item.active {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.2);
    font-weight: 600;
}

.header-nav .nav-item.btn-new-req {
    background-color: #ffffff;
    color: #4338ca;
    border-radius: 8px;
}
```

> **Catatan:** Class `.active` di-set **manual di masing-masing file HTML** (bukan lewat JS) — setiap halaman (`index.html`, `table.html`, `form.html`) menandai `nav-item`-nya sendiri sebagai `active` secara hard-coded.

---

## 2. Komponen Sidebar (`form.html` & `index.html`)

Sidebar dirender sepenuhnya oleh **`utils.js`** lewat fungsi `initSidebar()` / `renderSidebar()`. Tidak muncul di `table.html`.

### 2.1 `#search-input` / `.search-input-container` (pencarian sidebar)

```html
<div class="sidebar-search">
    <div class="search-input-container">
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        <input class="search-input" type="text" id="search-input"
            placeholder="Search requests...">
    </div>
</div>
```
```css
.search-input {
    width: 100%;
    height: 40px;
    padding: 8px 12px 8px 40px;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
}
.search-input:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
}
```
```js
// utils.js — initSidebar()
const searchInput = document.querySelector(".app-sidebar .search-input");
searchInput.addEventListener("input", debounce((e) => {
    sidebarState.search = e.target.value.trim();
    renderSidebar(activeId);
}, 250));
```

> **Catatan:** Input diambil lewat selector class `.app-sidebar .search-input` (bukan `#search-input`), memakai `debounce()` 250ms sebelum memanggil ulang `renderSidebar()`.

---

### 2.2 `.sidebar-filters` / `.filter-pill` (filter status sidebar)

```html
<div class="sidebar-filters">
    <span class="filter-pill active">All</span>
    <span class="filter-pill">Pending</span>
    <span class="filter-pill">In Progress</span>
    ...
</div>
```
```css
.filter-pill {
    font-size: 0.75rem;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    cursor: pointer;
}
.filter-pill.active {
    background-color: #4338ca;
    color: #ffffff;
}
```
```js
// utils.js — initSidebar()
const pills = document.querySelectorAll(".app-sidebar .filter-pill");
pills.forEach((pill) => {
    pill.addEventListener("click", () => {
        pills.forEach((p) => p.classList.remove("active"));
        pill.classList.add("active");
        sidebarState.statusFilter = pill.textContent.trim();
        renderSidebar(activeId);
    });
});
```

> **Catatan:** Class `.active` dipindah antar pill lewat `classList` saat diklik, lalu `sidebarState.statusFilter` dipakai untuk memfilter data di `renderSidebar()`.

---

### 2.3 `#sidebarRequestsList` / `.request-cards-list` / `.request-card` (daftar kartu)

```html
<div class="sidebar-content">
    <h4 class="section-title" id="sidebarRequestsCount">5 Requests</h4>
    <div class="request-cards-list" id="sidebarRequestsList"></div>
</div>
```
```css
.request-card {
    padding: 16px 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    text-decoration: none;
}
.request-card.active {
    background-color: #f4f5ff;
}
.request-card.active::before {
    background-color: #3b44c2;   /* garis indikator kanan */
}
```
```js
// utils.js — renderSidebar(activeId)
listEl.innerHTML = data.map(r => {
    const isActive = r.id === activeId ? 'active' : '';
    return `
        <a href="${window.APP_URLS.detail}?id=${r.id}" class="request-card ${isActive}">
            <div class="card-header">
                <span class="req-id">${U.escapeHtml(r.id)}</span>
                <span class="badge-category ${catClass}">${U.escapeHtml(r.type)}</span>
            </div>
            <h4 class="card-title">${U.escapeHtml(r.productPage)}</h4>
            ...
        </a>`;
}).join("");
```

> **Catatan:** Seluruh isi `#sidebarRequestsList` (elemen `.request-card`, `.req-id`, `.badge-category`, `.card-title`, `.status-pill`, `.date-text`) dibangun sebagai string template oleh `renderSidebar()` — elemen ini **tidak ada di HTML statis**, murni hasil `innerHTML` dari JS. `#sidebarRequestsCount` juga di-update via `textContent` di fungsi yang sama.

---

## 3. Halaman Detail (`index.html` + `detail.js`)

### 3.1 `.meta-req`, `.badge-promo`, `.badge-progress` (badge dinamis di header)

```html
<div class="meta-badges">
    <span class="meta-req">REQ-000</span>
    <span class="badge-promo">-</span>
    <span class="badge-progress">Loading</span>
</div>
```
```css
.badge-promo {
    background-color: #eef2ff;
    color: #4338ca;
    border-radius: 12px;
}
.badge-progress {
    background-color: #eff6ff;
    color: #2563eb;
    border: 1px solid #dbeafe;
}
```
```js
// detail.js — render(r)
setText(".meta-req", r.id);

const typeBadge = document.querySelector(".badge-promo");
typeBadge.className = `badge-type ${U.getTypeClass(r.type)}`;   // ganti seluruh class
typeBadge.textContent = r.type;

const statusBadge = document.querySelector(".badge-progress");
const info = U.getStatusInfo(r.status);
statusBadge.className = `table-status ${info.class}`;           // ganti seluruh class
statusBadge.innerHTML = `<i class="${info.icon}"></i> ${r.status}`;
```

> **Catatan penting:** `.badge-promo` dan `.badge-progress` di HTML hanyalah placeholder awal — `detail.js` **mengganti total `className`**-nya (bukan menambah) menjadi `badge-type type-*` dan `table-status status-*` berdasarkan data. Jadi style final elemen ini sebenarnya datang dari class `.type-*` / `.status-*` (lihat bagian 5), bukan dari `.badge-promo` / `.badge-progress` itu sendiri.

---

### 3.2 `.details-grid`, `.info-card`, `.card-grid-2x2`, `.card-grid-3col`, `.info-group`

```html
<div class="details-grid">
    <div class="info-card">
        <h3 class="card-section-title">DATES</h3>
        <div class="card-grid-2x2">
            <div class="info-group">
                <label>DATE</label>
                <p>—</p>
            </div>
            ...
        </div>
    </div>
    ...
</div>
```
```css
.details-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}
.card-grid-2x2 { display: grid; grid-template-columns: repeat(2, 1fr); }
.card-grid-3col { display: grid; grid-template-columns: repeat(3, 1fr); }
.span-two-columns, .span-full-width { grid-column: span 2; }
```
```js
// detail.js — render(r)
document.querySelectorAll(".info-group").forEach((g) => {
    const label = g.querySelector("label");
    const p = g.querySelector("p");
    switch (label.textContent.trim()) {
        case "DATE": p.textContent = U.formatDateDisplay(r.date); break;
        case "COMPLETE DATE":
            p.textContent = r.completeDate ? U.formatDateDisplay(r.completeDate) : "—";
            p.classList.toggle("empty-dash", !r.completeDate);
            break;
        // ... REQUEST IN DATE, DUE DATE, METHOD, CAMPAIGN TYPE,
        //     PRODUCT / PROMO PAGE, REQUESTOR, DEPARTMENT OWNER, PIC
    }
});
```

> **Catatan:** `detail.js` tidak mencari elemen lewat `id`, melainkan **loop semua `.info-group`** lalu mencocokkan isi teks `<label>` (mis. `"DATE"`, `"PIC"`) untuk menentukan field mana yang diisi ke `<p>`. Class `.empty-dash` ditambahkan secara kondisional saat data kosong.

---

### 3.3 `.notes-content`, `.url-content`, `.url-link`

```html
<div class="notes-content"><p>—</p></div>
<div class="url-content"><p class="empty-dash">—</p></div>
```
```css
.notes-content p { color: #475569; line-height: 1.6; }
.url-link {
    display: inline-flex;
    color: #6366f1;
    border: 1px dashed #e2e8f0;
    font-family: "SFMono-Regular", Consolas, monospace;
}
```
```js
// detail.js — render(r)
document.querySelector(".notes-content p").textContent = r.notes || "No notes provided.";

const urlCard = document.querySelector(".url-content");
urlCard.innerHTML = r.url
    ? `<a href="${U.escapeHtml(r.url)}" target="_blank" class="url-link">
         <span>${U.escapeHtml(r.url)}</span>
         <i class="fa-solid fa-arrow-up-right-from-square icon-link"></i>
       </a>`
    : `<p class="empty-dash">—</p>`;
```

> **Catatan:** `.url-link` hanya muncul di DOM jika `r.url` terisi — dibangun lewat `innerHTML` secara kondisional, sehingga class ini tidak selalu ada.

---

### 3.4 `.btn-edit`, `.btn-delete` (aksi header detail)

```html
<div class="header-actions">
    <a href="form.html" class="btn btn-edit">edit</a>
    <button type="button" class="btn btn-delete">delete</button>
</div>
```
```css
.btn-edit { background-color: #ffffff; border: 1px solid #e2e8f0; }
.btn-delete { color: #dc2626; border: 1px solid #fecaca; }
```
```js
// detail.js — bindActions(r)
document.querySelector(".btn-edit").href =
    `${window.APP_URLS.form}?id=${encodeURIComponent(r.id)}`;

document.querySelector(".btn-delete").addEventListener("click", () => {
    if (confirm(`Delete request ${r.id}? This action cannot be undone.`)) {
        TrackingDB.remove(r.id);
        window.location.href = window.APP_URLS.list;
    }
});
```

> **Catatan:** `.btn-edit` di-set ulang `href`-nya secara dinamis agar membawa `?id=...` yang benar; `.btn-delete` memanggil `TrackingDB.remove()` dari `db.js` lalu redirect ke halaman tabel.

---

## 4. Halaman Table (`table.html` + `list.js`)

### 4.1 `.table-toolbar`, `.table-search-container`, `.search-input`

```html
<div class="table-toolbar">
    <div class="table-toolbar-left">
        <div class="table-search-container search-input-container">
            <input type="text" class="search-input" placeholder="Search requests...">
        </div>
        <div class="table-filter-pills">
            <span class="filter-pill active">All</span>
            ...
        </div>
    </div>
    <span class="results-count" id="resultsCount">0 requests</span>
</div>
```
```css
.table-search-container { width: 260px; }
.results-count { font-size: 0.8rem; color: #64748b; }
```
```js
// list.js
function bindSearch() {
    document.querySelector(".search-input")
        .addEventListener("input", TrackingUtils.debounce((e) => {
            state.search = e.target.value.trim();
            renderTable();
        }, 250));
}
```

> **Catatan:** Mekanismenya sama persis dengan pencarian sidebar (bagian 2.1), tapi state-nya terpisah (`state` lokal di `list.js`, bukan `sidebarState` di `utils.js`).

---

### 4.2 `.filter-pill` (toolbar tabel) & `#resultsCount`

```css
/* sama seperti .filter-pill di bagian 2.2 */
```
```js
// list.js
function bindFilterPills() {
    const pills = document.querySelectorAll(".filter-pill");
    pills.forEach((pill) => {
        pill.addEventListener("click", () => {
            pills.forEach((p) => p.classList.remove("active"));
            pill.classList.add("active");
            state.statusFilter = pill.textContent.trim();
            renderTable();
        });
    });
}

// renderTable()
countEl.textContent = `${data.length} request${data.length === 1 ? "" : "s"}`;
```

> **Catatan:** `#resultsCount` diupdate setiap kali `renderTable()` dipanggil (setelah search/filter/sort berubah).

---

### 4.3 `.data-table`, `th[data-sort]`, `.sort-icon`

```html
<table class="data-table">
    <thead>
        <tr>
            <th data-sort="id">ID <i class="fa-solid fa-arrows-up-down sort-icon"></i></th>
            <th data-sort="date">DATE <i class="... sort-icon active"></i></th>
            ...
        </tr>
    </thead>
    <tbody id="requestTableBody">...</tbody>
</table>
```
```css
.data-table th { background-color: #f8fafc; font-weight: 600; }
.sort-icon { color: #cbd5e1; cursor: pointer; }
.sort-icon.active { color: #4f46e5; }
```
```js
// list.js — bindSortableHeaders()
document.querySelectorAll("th[data-sort]").forEach((th) => {
    th.addEventListener("click", () => {
        const key = th.getAttribute("data-sort");
        state.sortKey = key;
        state.sortDir = state.sortDir === "asc" ? "desc" : "asc";
        document.querySelectorAll("th[data-sort] .sort-icon")
            .forEach((i) => i.classList.remove("active"));
        th.querySelector(".sort-icon").classList.add("active");
        renderTable();
    });
});
```

> **Catatan:** Atribut `data-sort` (bukan class/id) dipakai JS sebagai kunci pengurutan; class `.sort-icon.active` dipindah manual ke kolom yang sedang diurutkan.

---

### 4.4 `#requestTableBody` — isi baris (`.badge-type`, `.badge-method`, `.table-status`, `.table-link`, `.table-actions`)

```js
// list.js — rowTemplate(r)
return `
    <tr data-id="${r.id}">
        <td><a href="${detailUrl}?id=${r.id}" class="table-link-id">${r.id}</a></td>
        <td>${U.formatDateDisplay(r.date)}</td>
        <td><span class="badge-type ${U.getTypeClass(r.type)}">${r.type}</span></td>
        <td><span class="badge-method ${r.method === 'New' ? 'method-new' : 'method-update'}">${r.method}</span></td>
        ...
        <td><span class="table-status ${statusInfo.class}"><i class="${statusInfo.icon}"></i> ${r.status}</span></td>
        <td>
            <div class="table-actions">
                <a href="${formUrl}?id=${r.id}" class="btn-table btn-table-edit"><i class="fa-solid fa-pen"></i></a>
                <button class="btn-table btn-table-delete" data-id="${r.id}"><i class="fa-solid fa-trash"></i></button>
            </div>
        </td>
    </tr>`;
```
```css
.badge-type { font-size: 11px; padding: 3px 8px; border-radius: 4px; }
.badge-method { font-size: 11px; border-radius: 4px; }
.method-new { background-color: #ecfdf5; color: #047857; }
.method-update { background-color: #fffbeb; color: #d97706; }
.table-status { display: inline-flex; border-radius: 20px; }
.btn-table-delete { color: #ef4444; border-color: #fee2e2; }
```
```js
// list.js — bindTableActions()
tbody.addEventListener("click", (e) => {
    const btn = e.target.closest(".btn-table-delete");
    if (!btn) return;
    const id = btn.getAttribute("data-id");
    if (confirm(`Delete request ${id}? This action cannot be undone.`)) {
        TrackingDB.remove(id);
        renderTable();
    }
});
```

> **Catatan:** Seluruh `<tbody id="requestTableBody">` dirender ulang tiap kali data berubah (`tbody.innerHTML = data.map(rowTemplate).join("")`). Tombol hapus memakai **event delegation** (`.closest(".btn-table-delete")`) pada `tbody`, bukan listener per-baris, agar tetap berfungsi walau baris dirender ulang.

---

## 5. Halaman Form (`form.html` + `form.js`)

### 5.1 `.form-workspace-container`, `.form-header`, `.form-main-title`, `.btn-close-form`

```html
<div class="form-workspace-container">
    <div class="form-header">
        <h2 class="form-main-title">New Request</h2>
        <a href="index.html" class="btn-close-form"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <form class="request-form-box">...</form>
</div>
```
```css
.form-workspace-container { max-width: 840px; margin: 0 auto; }
.form-main-title { font-size: 20px; font-weight: 700; }
```
```js
// form.js — init()
const titleEl = document.querySelector(".form-main-title");
if (id) {
    titleEl.textContent = `Edit Request — ${record.id}`;
}
```

> **Catatan:** Judul form berubah dari "New Request" menjadi "Edit Request — REQ-00X" tergantung ada tidaknya query param `?id=`.

---

### 5.2 `.request-form-box`, `.form-row`, `.row-2-col`, `.row-3-col`, `.form-field-group`

```html
<form action="#" method="POST" class="request-form-box">
    <div class="form-row row-2-col">
        <div class="form-field-group">
            <label class="field-label required">DATE</label>
            <input type="date" name="date" class="form-input-field">
        </div>
        ...
    </div>
</form>
```
```css
.request-form-box { display: flex; flex-direction: column; gap: 20px; }
.form-row { display: grid; grid-template-columns: 1fr; gap: 16px; }
@media (min-width: 640px) {
    .row-2-col { grid-template-columns: repeat(2, 1fr); }
    .row-3-col { grid-template-columns: repeat(3, 1fr); }
}
.field-label.required::after { content: " *"; color: #ef4444; }
```
```js
// form.js — getFieldMap(form)
return {
    date: form.querySelector('[name="date"]'),
    reqInDate: form.querySelector('[name="reqInDate"]'),
    type: form.querySelector('[name="type"]'),
    // ... dst, semua diambil lewat atribut name, bukan id/class
};
```

> **Catatan:** Semua field form diakses JS lewat atribut `name`, bukan `id` atau `class` — `.form-field-group` / `.form-input-field` murni untuk styling, tidak dipakai sebagai selector di `form.js`.

---

### 5.3 `.form-input-field`, `.form-textarea`, `.select-wrapper`

```css
.form-input-field {
    padding: 10px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
}
.form-input-field:focus {
    border-color: #4338ca;
    box-shadow: 0 0 0 3px rgba(67, 56, 202, 0.1);
}
.select-wrapper::after {
    content: "\f107";              /* chevron icon dari Font Awesome */
    font-family: "Font Awesome 6 Free";
}
```
```js
// form.js
function populateForm(fields, record) {
    fields.date.value = record.date || "";
    fields.status.value = record.status || "Pending";
    ...
}
function collectData(fields) {
    return {
        date: fields.date.value,
        productPage: fields.productPage.value.trim(),
        ...
    };
}
function validate(fields) {
    const errors = [];
    if (!fields.date.value) errors.push("Date is required.");
    if (!fields.productPage.value.trim()) errors.push("Product / Promo page is required.");
    return errors;
}
```

> **Catatan:** `.select-wrapper::after` adalah trik CSS murni (icon panah) untuk menutupi `appearance: none` pada `<select>` — tidak ada elemen HTML tambahan atau JS untuk ini.

---

### 5.4 `.form-footer-actions`, `.btn-form-cancel`, `.btn-form-submit`

```html
<div class="form-footer-actions">
    <a href="index.html" class="btn-form-cancel">Cancel</a>
    <button type="submit" class="btn-form-submit">Submit Request</button>
</div>
```
```css
.btn-form-submit {
    background-color: #4338ca;
    color: #ffffff;
    border-radius: 6px;
}
.btn-form-submit:hover { background-color: #3730a3; }
```
```js
// form.js — init()
form.addEventListener("submit", (e) => {
    e.preventDefault();
    const errors = validate(fields);
    if (errors.length) { alert(errors.join("\n")); return; }
    const data = collectData(fields);
    if (id) { TrackingDB.update(id, data); } else { TrackingDB.create(data); }
    window.location.href = window.APP_URLS.list;
});
```

> **Catatan:** `.btn-form-submit` men-trigger event `submit` bawaan `<form>` (`type="submit"`), lalu `form.js` yang menangani `preventDefault()`, validasi, dan penyimpanan ke `db.js`.

---

## 6. Kelas Badge Dinamis Lintas Halaman (dari `utils.js`)

Kelas berikut **tidak pernah ditulis manual di HTML** — semuanya dihasilkan lewat dua lookup map di `utils.js` dan dipakai bersama oleh `list.js`, `detail.js`, dan sidebar.

```css
/* Type / kategori request */
.type-promo, .category-promo, .badge-promo { background-color: #efe7ff; color: #7c3aed; }
.type-article, .category-article, .badge-article { background-color: #e2f5ff; color: #0284c7; }
.type-pdf, .category-pdf, .badge-pdf { background-color: #ffedd5; color: #ea580c; }
.type-faq, .category-faq, .badge-faq { background-color: #cffafe; color: #0e7490; }
.type-report, .category-report, .badge-report { background-color: #e0f2fe; color: #0369a1; }

/* Status request */
.status-pending { background-color: #fef3c7; color: #d97706; }
.status-progress { background-color: #e2efff; color: #2b6cb0; }
.status-completed { background-color: #e6fffa; color: #047481; }
.status-hold { background-color: #ffedd5; color: #ea580c; }
.status-cancelled { background-color: #fee2e2; color: #dc2626; }
```
```js
// utils.js
const TYPE_CLASS_MAP = {
    "ONT Report": "type-report",
    FAQ: "type-faq",
    "Banner / PDF": "type-pdf",
    Article: "type-article",
    Promo: "type-promo",
};
function getTypeClass(type) {
    return TYPE_CLASS_MAP[type] || "type-default";
}

const STATUS_MAP = {
    Pending: { class: "status-pending", icon: "fa-regular fa-clock" },
    "In Progress": { class: "status-progress", icon: "fa-regular fa-circle-dot" },
    Completed: { class: "status-completed", icon: "fa-regular fa-circle-check" },
    "On Hold": { class: "status-hold", icon: "fa-regular fa-circle-pause" },
    Cancelled: { class: "status-cancelled", icon: "fa-regular fa-circle-xmark" },
};
function getStatusInfo(status) {
    return STATUS_MAP[status] || { class: "status-pending", icon: "fa-regular fa-clock" };
}
```

> **Catatan:** `getTypeClass()` dipakai di `list.js` (`rowTemplate`), `detail.js` (`render`), dan `utils.js` (`renderSidebar`) — satu sumber kebenaran untuk warna badge type. Begitu juga `getStatusInfo()` untuk warna + icon status. Kalau ingin menambah status/type baru, cukup ubah dua map ini di `utils.js`, **tidak perlu** ubah `list.js`/`detail.js`.

---

## 7. Fungsi JS Pendukung Tanpa Class/ID Spesifik

| Fungsi | File | Kegunaan |
|---|---|---|
| `formatDateDisplay(dateStr)` | `utils.js` | Ubah `"2026-07-01"` → `"01 Jul 2026"`, dipakai di semua tampilan tanggal |
| `escapeHtml(str)` | `utils.js` | Cegah HTML/XSS injection sebelum data user dimasukkan ke `innerHTML` |
| `getQueryParam(name)` | `utils.js` | Baca `?id=REQ-001` dari URL, dipakai `detail.js` & `form.js` |
| `debounce(fn, delay)` | `utils.js` | Menunda eksekusi search agar tidak render tiap ketukan keyboard |
| `shortenUrl(url)` | `utils.js` | Tampilkan hanya hostname di kolom URL tabel (`.table-link`) |

---

## 8. Lapisan Data (`db.js`) — tidak terhubung ke class/id

`db.js` tidak menyentuh DOM sama sekali (tidak ada `querySelector`), sehingga tidak berelasi langsung dengan class/id CSS manapun. Fungsi `getAll()`, `getById()`, `create()`, `update()`, `remove()` dipanggil oleh `list.js`, `detail.js`, dan `form.js` untuk mengambil/menyimpan data ke `localStorage` (dengan fallback sinkron ke endpoint `/api/requests`), lalu **hasilnya** yang dirender lewat class-class yang sudah dibahas di atas.
