@extends('app')

@section('content')
<div class="kompas-page min-h-screen bg-[var(--bg)] px-4 py-6 pb-10 text-sm leading-normal text-[var(--ink)] [font-family:var(--sans)]">

<div class="mx-auto flex w-full max-w-[1180px] flex-col gap-[22px]">
  <header class="rounded-[14px] bg-[var(--accent)] px-5 pb-[14px] pt-4 text-[var(--accent-ink)]">
    <div class="mb-1 flex flex-wrap items-center justify-end gap-2 sm:float-right sm:mb-0"><select id="palette" class="h-7 w-auto min-w-0 rounded-full border border-[color-mix(in_srgb,var(--accent-ink)_45%,transparent)] bg-transparent px-2.5 text-xs text-[var(--accent-ink)]" aria-label="Palet warna"><option value="teal">Teal &amp; Amber</option><option value="navy">Navy &amp; Koral</option><option value="sage">Sage &amp; Terakota</option><option value="mono">Biru Tenang</option></select><div class="flex overflow-hidden rounded-full border border-[color-mix(in_srgb,var(--accent-ink)_45%,transparent)] bg-transparent" role="group" aria-label="Tema tampilan"><button type="button" class="px-2 py-1 text-xs text-[var(--accent-ink)]" data-t="light">☀ Terang</button><button type="button" class="px-2 py-1 text-xs text-[var(--accent-ink)]" data-t="dark">☾ Gelap</button></div></div>
    <p class="m-0 mb-1 font-mono text-xs uppercase tracking-[.06em] text-[color-mix(in_srgb,var(--accent-ink)_82%,transparent)]">Dungeon n Duck Guild · Peta Westmarch, The Tonala Peaks</p>
    <h1 class="m-0 flex items-center gap-2 font-serif text-[clamp(26px,4.4vw,38px)] font-extrabold leading-tight tracking-[.01em]">Kompas Tonala <span class="rounded-full border border-[color-mix(in_srgb,var(--accent-ink)_45%,transparent)] bg-[color-mix(in_srgb,var(--accent-ink)_16%,transparent)] px-2.5 py-0.5 font-mono text-xs font-medium">v1.3</span></h1>
    <p class="mt-2.5 text-xs text-[color-mix(in_srgb,var(--accent-ink)_82%,transparent)]">Dikembangkan oleh <b>Pipipi Apithickthock</b></p>
    <p class="mt-2 max-w-[64ch] text-[color-mix(in_srgb,var(--accent-ink)_82%,transparent)]">Pilih asal, tujuan, waktu berangkat, dan waktu sampai. Jarak dihitung hex demi hex menyusuri jalan dan sungai di peta. Area hitam tidak bisa dilewati.</p>
  </header>

  <section class="grid grid-cols-1 items-end gap-x-4 gap-y-3.5 rounded-[10px] border border-[var(--line)] bg-[var(--surface)] p-4 shadow-[0_6px_18px_-10px_color-mix(in_srgb,var(--accent)_35%,transparent)] md:grid-cols-2" aria-label="Pengaturan perjalanan">
    <div class="flex flex-wrap items-end gap-2">
      <div class="pcard"><label for="from"><mark>Kota asal</mark></label><select id="from"></select></div>
      <button type="button" class="swap" id="swap" title="Tukar asal dan tujuan" aria-label="Tukar asal dan tujuan">⇄</button>
      <div class="pcard"><label for="to"><mark>Kota tujuan</mark></label><select id="to"></select></div>
    </div>
    <div class="grid gap-3 md:grid-cols-2">
      <div class="tcard">
        <span class="lab"><mark>Waktu berangkat</mark></span>
        <div class="dt">
          <select id="month" aria-label="Bulan berangkat"></select>
          <input id="day" type="number" min="1" max="31" value="1" aria-label="Tanggal berangkat" placeholder="Tgl">
          <input id="year" type="number" min="1" value="1214" aria-label="Tahun berangkat" placeholder="Tahun">
          <input id="hour" type="time" value="08:00" aria-label="Jam berangkat">
        </div>
        <div class="presets"><span>Kalender 12 bulan, tahun 1214. Perjalanan dihitung mulai jam yang dipilih, 8 jam gerak per hari.</span></div>
      </div>
      <div class="tcard">
        <span class="lab"><mark class="warm">Waktu sampai (paling lambat)</mark></span>
        <div class="dt">
          <select id="amonth" aria-label="Bulan tiba"></select>
          <input id="aday" type="number" min="1" max="31" value="1" aria-label="Tanggal tiba" placeholder="Tgl">
          <input id="ayear" type="number" min="1" value="1214" aria-label="Tahun tiba" placeholder="Tahun">
          <input id="ahour" type="time" value="08:00" aria-label="Jam sampai">
        </div>
        <div class="presets" aria-label="Pilih cepat tenggat">
          <span>Tenggat cepat:</span>
          <button type="button" class="chip" data-plus="7">+7 hari</button>
          <button type="button" class="chip" data-plus="14">+14 hari</button>
          <button type="button" class="chip" data-plus="30">+30 hari</button>
          <button type="button" class="chip" data-plus="60">+60 hari</button>
        </div>
      </div>
    </div>
    <div class="grid gap-3 sm:grid-cols-2 xl:col-span-2 xl:grid-cols-4">
      <div class="opt"><span class="lab">Jalur darat</span>
        <div class="seg" role="radiogroup" aria-label="Jalur darat">
          <label><input type="radio" name="mode" value="road" checked><span>Jalan saja</span></label>
          <label><input type="radio" name="mode" value="free"><span>Boleh off-road</span></label>
        </div>
      </div>
      <div class="opt"><span class="lab">Uber Fast Travel</span>
        <div class="seg" role="radiogroup" aria-label="Ketersediaan Uber Fast Travel">
          <label><input type="radio" name="fast" value="on" checked><span>Tersedia</span></label>
          <label><input type="radio" name="fast" value="off"><span>Sudah terpakai</span></label>
        </div>
      </div>
      <div class="opt"><span class="lab">Lokasi Carl</span>
        <div class="seg" role="radiogroup" aria-label="Lokasi Carl relatif terhadap titik keberangkatan Go-Carl">
          <label><input type="radio" name="carlpos" value="same" checked><span>Posisi lokasi yang sama</span></label>
          <label><input type="radio" name="carlpos" value="diff"><span>Posisi lokasi yang berbeda</span></label>
        </div>
      </div>
      <div class="opt"><span class="lab">Flying Creature / Find Familiar</span>
        <div class="seg" role="radiogroup" aria-label="Memiliki Flying Creature">
          <label><input type="radio" name="flyer" value="yes"><span>Ya, sudah memiliki</span></label>
          <label><input type="radio" name="flyer" value="no" checked><span>Tidak (summon 10 gp)</span></label>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center gap-3 pt-1 xl:col-span-2"><button type="button" class="genbtn" id="gen">Generate Jalur</button><span class="genhelp">Rute baru diproses setelah tombol ini ditekan.</span></div>
  </section>

  <section class="summary" id="summary" aria-live="polite"></section>

  <div class="grid items-start gap-[22px] lg:grid-cols-[minmax(0,1.25fr)_minmax(0,1fr)]">
    <section>
      <div class="tablehead"><h2>Rekomendasi: termurah &amp; tercepat</h2></div>
      <div class="plans" id="plans"></div>
      <div class="tablehead" class="mt-[22px]"><h2>Teleportasi</h2></div>
      <div class="tele" id="tele"></div>
    </section>

    <aside class="sticky top-3 flex flex-col gap-2.5">
      <h2>Jalur di peta</h2>
      <canvas id="map" role="img" aria-label="Peta hex Tonala dengan jalur perjalanan yang dipilih"></canvas>
      <div class="legend">
        <span><i style="border-color:var(--m-route)"></i>Darat</span>
        <span><i style="border-color:var(--m-boat)"></i>Kapal</span>
        <span><i style="border-color:var(--m-air);border-top-style:dashed"></i>Airship</span>
        <span><i style="border-color:var(--m-air);border-top-style:dotted"></i>Flying Creature</span>
        <span><i style="border-color:var(--m-road)"></i>Jalan</span>
        <span><i style="border-color:var(--m-river)"></i>Sungai</span>
        <span><i class="sq" style="background:var(--m-fog)"></i>Belum terbuka</span>
        <span><i class="sq" style="background:var(--m-water)"></i>Air</span>
      </div>
      <p class="pathtitle" id="pathtitle"></p>
      <div class="hexlist mono" id="hexlist"></div>
    </aside>
  </div>

  <details class="max-w-[82ch] text-[13px] text-[var(--muted)]">
    <summary>Cara menghitung</summary>
    <ul>
      <li>Koordinat hex ("x,y") dibaca dari data peta The Tonala Peaks. Satu langkah antar-hex = 1 tile, dan kota berkastil dua atau tiga hex dihitung sebagai satu tempat.</li>
      <li>Rute bisa berupa gabungan sampai 4 segmen (misalnya jalan lalu kereta, atau jalan lalu kapal), dan dari semua gabungan yang tiba sebelum batas waktu, saya buang yang kalah murah sekaligus kalah cepat lalu tampilkan sampai 9 kartu dalam tiga kelompok: 4 kartu termurah yang <b>tidak</b> memakai Go-Carl, 4 kartu termurah yang memakai Go-Carl, dan 1 kartu rute tercepat secara keseluruhan (boleh dari kelompok mana pun, atau ditambahkan terpisah bila belum masuk salah satu dari 8 kartu termurah). Jalan kaki penuh tidak dihitung sebagai kandidat kelompok termurah dan hanya ditulis sebagai pembanding di bawah daftar. Kalau tidak ada rute yang tiba sebelum batas waktu sama sekali, hanya satu kartu "Tercepat (melewati batas)" yang ditampilkan.</li>
      <li>Hex hitam atau kosong tidak bisa dilewati moda apa pun. Mode off-road hanya berlaku untuk jalan kaki, pony, dan kuda, dan tidak membedakan gunung atau hutan.</li>
      <li>Airship (Uber Fly) hanya berangkat dari kota besar, tetapi boleh turun di kota besar, desa, atau benteng. Ia terbang bebas melintasi hex mana pun yang sudah terbuka (darat maupun air), tidak mengikuti jalan, tetapi tiap tile ke-6 harus berhenti maintenance di jalan besar atau di kota, desa, atau benteng (garis di peta digambar lurus). Berhenti di jalan itu bukan tempat ganti moda: ganti kendaraan (kuda, kereta, kapal) hanya di kota, desa, atau benteng, tidak di danau.</li>
      <li>Uber Fast Travel (30 gp, seketika) bisa digabung dengan moda lain, hanya antara Qorikancha Lumi, Mar-Ceniza, dan Kausay-Tampu, dan maksimal sekali per rute karena cooldown 1 minggu per PC. Jika Anda atau party sudah memakainya (masih cooldown), pilih "Sudah terpakai" dan rute dihitung tanpa Fast Travel.</li>
      <li>Go-Carl (layanan pribadi Carl, Goblin the Slayer) bisa digabung dengan moda lain dan bisa ke mana saja kecuali danau. Tarif dasarnya 25/50/100 gp menurut jenis tempat tujuan. Kalau Carl sedang tidak berada di titik keberangkatan segmen itu, ia perlu dijemput dulu ke sana — dikenai tarif yang sama (menurut jenis tempat keberangkatan itu) dan dijumlahkan ke tarif antarnya. Atur ini lewat "Lokasi Carl": pilih "Posisi lokasi yang sama" kalau kebetulan dia sudah di titik keberangkatan (tidak kena biaya jemput), atau "Posisi lokasi yang berbeda" kalau dia perlu dijemput dulu. Semua harga ini hanya perkiraan awal — pada tiap kartu rute yang memakai Go-Carl, kolom harganya bisa diketik ulang sesuai hasil negosiasi Anda dengan Carl (PM atau tag Tuan Saihara), dan total biaya kartu itu ikut terhitung ulang.</li>
      <li>Uber antar kota hanya kota besar ke kota besar, Uber Go Ride hanya di jalan. Ship's passage berlayar di sungai, danau, dan laut; kapal hanya bisa naik atau turun di kota, desa, atau benteng yang hex-nya sendiri dilalui sungai (misalnya Iron Pucara, Mar-Ceniza, Xiuh-Tierra, Ember Root Village). Tempat tanpa sungai di hex-nya tidak bisa memakai kapal.</li>
      <li>Kuda dan pony memakai harga beli di toko Uber dan dihitung sekali per rute. Kuda kena aturan 3 hari jalan lalu 1 hari istirahat. Kendaraan yang pasti kalah (mule, unta, warhorse, mastiff, gajah) tidak ikut dihitung. Harga wagon dari Ridercrest belum ada di daftar, jadi tidak dipakai.</li>
      <li>Flying Creature / Find Familiar terbang bebas 3 tile/hari (8 jam per hari, 3 hari jalan lalu 1 hari istirahat, sama seperti kuda) melintasi hex terbuka mana pun, darat maupun air, dan tidak memerlukan berhenti maintenance di jalan besar. Kalau sudah memiliki, tidak ada biaya summon. Kalau belum (pilih "Tidak"), summon pertama kali 10 gp, dihitung sekali per rute. Jika makhluknya mati di tengah jalan, harus di-summon lagi dengan 10 gp.</li>
      <li>Jam tiba dihitung dari jam berangkat dengan 8 jam gerak per hari (mengikuti aturan travel pace: 1 tile/hari jalan kaki = 8 jam). Sisa hari dianggap istirahat dan gerak dilanjutkan di jam berangkat yang sama keesokan harinya. Segmen berikutnya mulai hari berikutnya.</li>
      <li>Isi waktu berangkat dan waktu sampai (paling lambat). Hanya rute yang tiba sebelum batas itu yang ditampilkan, lengkap dengan sisa waktunya. Kalau tidak ada yang sempat, ditampilkan rute tercepat dan berapa terlambatnya.</li>
      <li>Tanggal tiba menganggap Anda berangkat pagi di tanggal yang dipilih. Perjalanan sehari tiba di hari yang sama, dan segmen berikutnya mulai hari berikutnya.</li>
      <li>Jalan yang berhenti di samping kastil saya sambungkan ke kastilnya, dan Itzli Fort saya sambungkan ke jalan terdekat. Dua sambungan ini saya simpulkan dari peta.</li>
    </ul>
  </details>
  <footer class="border-t border-[var(--line)] pt-3.5 text-center text-xs text-[var(--muted)]">Kompas Tonala v1.3 · Dikembangkan oleh <b>Pipipi Apithickthock</b></footer>
</div>

</div>
@endsection

@push('script')
<script>
/* ===== Data hasil ekstraksi peta Westmarch (The Tonala Peaks) ===== */
const X0 = -16, Y0 = -15;
// X = kosong/void, F = fog (hitam, belum terbuka), W = air (danau/laut), L = daratan
const GRID = [
"XFFFFFFFFFLLLLLLLLLLLLFFFLLFFFFF",
"XFFFFFFFFFFLLLLLLLLLLLWLFLLLFFFF",
"XFFFFFFFFFFLLLLLLLLLLWLFFLLFLFFF",
"XFFFFFLLFFFLLLWWLLLLLLLLLLLLLLFF",
"XFFFFLLLLLLLLLWLLLLLLLLLLLLLLLFL",
"XFFFFLLLLLLLLLLLLLLLLLLLLLLLLLLL",
"XFFFFLLLLLLLLLLLLLLLLLLLLLLLLLLL",
"XFFFFFLLLLLLLLLLLLLLLLLLLLLLLLLL",
"XFFFFLLLLLLLLLLLLLLLLLLLLLLLLLLL",
"XFFLLLLLLFLLLLLLLLLLLLLLLLLLLLLL",
"XFFLLLLLLFLWWLLLLLLLLLLLLLLLLLLF",
"XFFFLLLLLLLLWLLLLLLLLLLLLLLLLLFF",
"XFFLLLLLFFLLLLLLFFFLLLLLLLLLFFFF",
"XFFLLLLLLFFFLLFFFFFFLLLLLLLLFFFF",
"XLLLLLLLFFLLLFFFFFFFLLLLLLLLFFFF",
"XWLLLLLLLFFLLLFFFLFFLLLLLLLLLLLF",
"WWWWLLLLFFLLFFFFLFFFLLLLLLLLLLLF",
"XWWWLLLLLLFFFFFFFFFFLWLLLLLLLLLL",
"WWWLLLLLLLFFFFFFFFFLWWLLLLLLLLLL",
"XWWLLLLLLLLLFFFLFLLLLLLLLLLLLLLL",
"WWWWLLLLLLLLFFLLLLLLLLLLLLLLLLLF",
"XWWWLLLLLLLLLLLLLLLLLLLLLLLLLLLF",
"WWWLLLWLLLLLLLLLLLLLLLLLLLLLLLLF",
"XWWLLLWWLLLLLLLLLLLLLLLLLLLLFFFF",
"WWWLWWWWLLLLLLLLLLLLLLLLLLLLFFFF",
"XWWWWWWWWLLLLLLLLLLLLLLLLLLLLLFF",
"WWWWWWWWLLLLLLLLLLLLLLLLLLLLWFFF",
"XWWWWWWWWLWWWLLLLLLLLLLLLLLWWWWF",
"WWWLWWWWWWWWWLWWWWLLWWLWLLWWWLLF",
"XWWLLWWWWWWWWWWWWWWWWWWWWWWWWLFF",
"WWWWWWWWWWWWWWWWWWWWWWWWWWWWWFFF"
];
const ROAD_EDGES = "3,-14>4,-14 3,-14>2,-13 2,-13>1,-13 0,-13>1,-13 0,-13>0,-12 0,-13>1,-12 1,-13>1,-12 -3,-11>-2,-10 -2,-10>-1,-10 -1,-11>0,-12 -1,-11>-1,-10 0,-12>1,-12 -1,-10>0,-10 -1,-10>-1,-9 0,-10>1,-10 -1,-9>0,-8 -1,-9>-2,-9 10,-10>10,-9 10,-9>11,-8 -5,-9>-5,-10 -5,-9>-4,-8 -4,-8>-5,-7 0,-8>1,-8 0,-8>-1,-7 3,-9>3,-10 3,-9>4,-9 3,-9>3,-8 4,-9>5,-9 3,-8>2,-8 3,-8>3,-7 3,-8>2,-7 5,-9>6,-8 11,-8>12,-8 11,-8>10,-7 -5,-7>-4,-7 1,-8>2,-8 -1,-7>0,-6 -1,-7>-1,-6 3,-7>4,-7 6,-8>5,-7 5,-7>4,-7 5,-7>6,-6 12,-8>13,-8 10,-7>10,-6 13,-8>14,-8 -4,-7>-3,-6 -3,-6>-3,-5 -1,-6>-2,-5 6,-6>6,-5 6,-7>7,-6 7,-6>6,-5 10,-6>9,-5 -2,-5>-3,-5 6,-5>7,-4 6,-5>6,-4 9,-5>9,-4 -3,-5>-3,-4 9,-4>8,-4 9,-4>9,-3 -10,-4>-9,-4 " +
"-10,-4>-11,-3 -11,-3>-10,-2 8,-4>7,-4 7,-4>6,-4 9,-3>10,-2 9,-3>9,-2 -10,-2>-11,-1 6,-3>6,-4 6,-3>7,-2 7,-2>7,-1 10,-2>10,-1 9,-2>8,-1 -11,-1>-11,0 7,-1>6,-1 7,-1>8,-1 7,-1>8,0 10,-1>11,0 -11,0>-12,-1 -11,0>-11,1 -11,0>-12,1 6,-1>5,-1 8,0>8,1 11,0>11,1 -12,-1>-12,0 -11,1>-10,2 -12,1>-11,2 8,1>8,2 11,1>12,2 -11,2>-12,3 -11,2>-12,2 -10,2>-10,3 8,2>8,3 12,2>13,2 12,2>11,3 -12,3>-11,4 -10,3>-9,4 13,2>14,2 -11,4>-12,5 -9,4>-9,5 -9,4>-8,4 8,3>8,4 8,4>8,5 -12,5>-11,6 -9,5>-8,6 -9,5>-10,5 -9,5>-8,5 8,5>9,6 -11,6>-10,6 -11,6>-12,7 -8,6>-9,6 -8,6>-7,6 -8,6>-8,5 -10,5>-9,6 9,6>9,5 9,6>9,7 9,6>8,7 9,5>10,5 10,5>11,5 11,5>12,4 12,4>11,3 " +
"-10,6>-9,6 -12,7>-12,8 -12,7>-13,7 -9,6>-9,7 -9,7>-8,8 -7,6>-7,7 9,7>8,7 8,7>8,8 -8,8>-8,9 4,7>4,8 4,8>3,9 8,8>7,9 -8,9>-7,10 -6,8>-7,7 -6,8>-5,8 -6,8>-7,9 -5,8>-4,8 -7,9>-6,10 -4,8>-3,8 -4,8>-4,9 -4,9>-3,10 3,9>4,9 7,9>8,10 7,9>6,9 -7,10>-7,11 -6,10>-5,10 -6,10>-7,11 -3,10>-4,10 -3,10>-2,10 4,9>5,9 5,9>6,9 8,10>8,11 -5,10>-4,10 -2,10>-1,10 -1,10>0,10 -1,10>-1,11 0,10>1,10 0,10>-1,11 1,10>2,10 2,10>3,10 3,10>3,11 8,11>7,11 8,11>9,11 3,11>4,11 4,11>5,11 5,11>6,12 6,12>7,12 7,11>7,12 -13,7>-12,8 -13,7>-13,8 -12,8>-13,8 -8,4>-8,5";
const RIVER_EDGES = "0,-12>-1,-12 0,-12>0,-13 0,-12>1,-12 -3,-11>-2,-12 -3,-11>-3,-10 -3,-10>-4,-9 -10,-10>-10,-9 -10,-9>-9,-8 -5,-10>-5,-9 -5,-9>-4,-10 -5,-9>-6,-9 -5,-9>-4,-9 -4,-9>-3,-8 -4,-9>-4,-8 4,-10>4,-11 4,-10>4,-9 4,-9>4,-8 -9,-8>-9,-7 -9,-8>-10,-7 -6,-9>-6,-8 -6,-8>-7,-8 -3,-8>-3,-7 -4,-8>-4,-7 4,-8>4,-7 -10,-8>-10,-7 -10,-8>-11,-7 -9,-7>-8,-8 -9,-7>-8,-6 -8,-8>-7,-8 -4,-7>-4,-6 -3,-7>-2,-6 4,-7>4,-6 -13,-6>-13,-5 -8,-6>-8,-5 -5,-7>-4,-6 -4,-6>-4,-5 -4,-6>-5,-5 -2,-6>-1,-6 -2,-6>-3,-5 4,-6>5,-6 -13,-5>-12,-4 -8,-5>-8,-4 -5,-5>-5,-4 -1,-6>0,-6 -1,-6>-1,-5 -1,-5>0,-4 5,-6>4,-5 4,-5>5,-4 -12,-4>-12,-3 -8,-4>-9,-4 -8,-4>-7,-4 -8,-4>-9,-3 5,-4>5,-3 -12,-3>-11,-3 -12,-3>-12,-2 " +
"-7,-4>-6,-4 -9,-3>-10,-3 -6,-4>-5,-4 5,-3>6,-2 -11,-3>-10,-3 -12,-2>-12,-1 -12,-2>-13,-1 -10,-3>-9,-2 -9,-2>-10,-1 -4,-3>-4,-4 -4,-3>-3,-2 6,-2>6,-1 -12,-1>-12,0 -13,-1>-13,0 -10,-1>-10,0 6,-1>7,0 -13,0>-14,1 -10,0>-10,1 7,0>7,1 -10,1>-10,2 7,1>7,2 -10,2>-10,3 4,1>4,0 4,1>5,2 7,2>7,3 -10,3>-11,3 7,3>7,4 -11,3>-10,4 -10,4>-11,5 7,4>7,5 -11,5>-11,6 -5,5>-4,6 5,4>4,3 5,4>5,5 5,4>4,5 5,5>5,6 4,5>4,6 7,5>8,6 -11,6>-11,7 -4,6>-5,7 4,6>3,7 5,6>5,7 8,6>8,7 10,5>11,4 10,5>10,6 10,6>9,7 -11,7>-12,7 -5,7>-4,8 3,7>3,8 5,7>5,8 " +
"8,7>9,8 9,7>10,8 -13,7>-12,7 -13,7>-12,8 -13,7>-13,8 -12,7>-11,8 -11,8>-12,9 -4,8>-5,9 3,8>3,9 3,8>2,9 5,8>6,8 9,8>10,8 10,8>10,9 -5,9>-4,10 2,9>2,10 6,8>5,9 5,9>6,10 10,9>10,10 -4,10>-5,11 2,10>3,10 2,10>1,11 6,10>5,11 10,10>11,10 -5,11>-5,12 1,11>1,12 5,11>5,12 11,10>10,11 10,11>11,12 1,12>1,13 5,12>4,13 0,-13>1,-12 0,-13>1,-13 1,-12>1,-13 11,3>12,4 -12,8>-13,8 6,-4>7,-4 10,-7>10,-6 -3,-5>-3,-4 -7,6>-7,7 -8,4>-8,5";


// kind: kota = kota besar (kastil): boleh airship, Uber antar kota, Uber Instant
const PLACES = [
 {id:'qori', name:'Qorikancha Lumi', kind:'kota', hexes:['0,-12','1,-12','0,-13','1,-13']},
 {id:'kausay', name:'Kausay-Tampu', kind:'kota', hexes:['11,3','12,4']},
 {id:'mar', name:'Mar-Ceniza', kind:'kota', hexes:['-13,7','-13,8','-12,8']},
 {id:'xiuh', name:'Xiuh-Tierra', kind:'kota', hexes:['-12,-1','-12,0']},
 {id:'rumi', name:'Rumi Qullqi', kind:'kota', hexes:['6,-4','7,-4']},
 {id:'citl', name:'Citlaltepec', kind:'kota', hexes:['10,-7','10,-6']},
 {id:'adam', name:'Adamant-Quatzl', kind:'kota', hexes:['-3,-5','-3,-4']},
 {id:'chkal', name:'Chalchi-Kalli', kind:'kota', hexes:['-7,6','-7,7']},
 {id:'iron', name:'Iron Pucara', kind:'kota', hexes:['3,9','3,10']},
 {id:'itzli', name:'Itzli Fort', kind:'benteng', hexes:['-8,4','-8,5']},
 {id:'ftpuc', name:'Fort Pucara', kind:'benteng', hexes:['4,7']},
 {id:'nanaca', name:'Nanaca-Lumina Village', kind:'desa', hexes:['-10,5']},
 {id:'chmitl', name:'Chalchi-Mitl Village', kind:'desa', hexes:['5,-1']},
 {id:'tepe', name:'Tepecitlal Village', kind:'desa', hexes:['8,-1']},
 {id:'metz', name:'Metz-tetl Village', kind:'desa', hexes:['9,7']},
 {id:'tonal', name:'Tonal-Kalli Village', kind:'desa', hexes:['6,9']},
 {id:'silver', name:'Silvertask Village', kind:'desa', hexes:['-3,10']},
 {id:'tle', name:'Tle-Cuahuitl Village', kind:'desa', hexes:['-1,11']},
 {id:'chapan', name:'Chalchi-Apan Village', kind:'desa', hexes:['-7,11']},
 {id:'ilhui', name:'Ilhui-Mar Village', kind:'desa', hexes:['6,12']},
 {id:'sunken', name:'Sunken Hollow Village', kind:'desa', hexes:['9,11']},
 {id:'ratat', name:'Ratatouille Village', kind:'desa', hexes:['8,2']},
 {id:'cuauh', name:'Cuauh-Cristal Village', kind:'desa', hexes:['2,-7']},
 {id:'yohual', name:'Yohual-Tierra Village', kind:'desa', hexes:['3,-10']},
 {id:'citlm', name:'Citlalmina Village', kind:'desa', hexes:['5,-9']},
 {id:'citln', name:'Citlalin Village', kind:'desa', hexes:['-2,-9']},
 {id:'iztac', name:'Iztac-Oztotl Village', kind:'desa', hexes:['-5,-10']},
 {id:'chaska', name:'Chaska Village', kind:'desa', hexes:['-5,-7']},
 {id:'ember', name:'Ember Root Village', kind:'desa', hexes:['-9,-4']},
 {id:'obsid', name:'Obsidian Edge Village', kind:'desa', hexes:['0,-6']},
 {id:'atoya', name:'Atoya-Ceniza Village', kind:'desa', hexes:['-12,2']},
 {id:'sandst', name:'Sandstone Village', kind:'desa', hexes:['14,-8']},
 {id:'sandro', name:'Sandrose Village', kind:'desa', hexes:['14,2']},
 {id:'frost', name:'Frost-Fang Village', kind:'desa', hexes:['4,-14']},
 {id:'damas', name:'Damascus Lake', kind:'danau', hexes:['5,2','4,3','5,3']},
 {id:'ocelo', name:'Ocelo Fort', kind:'benteng', hexes:['-3,8']},
 {id:'opal', name:'Opal-Crest', kind:'desa', hexes:['-2,-15']},
 {id:'ratna', name:'Ratnavikasa Village', kind:'desa', hexes:['10,-10']},
 {id:'zenith', name:'The Zenith Beacon Village', kind:'desa', hexes:['-10,-11']},
 {id:'ruinsv', name:'Ruins Village', kind:'desa', hexes:['2,5']},
 {id:'adlake', name:'Adamantie Lake', kind:'danau', hexes:['-5,-5','-4,-4','-4,-5']},
 {id:'orlake', name:'Orichalcum Lake', kind:'danau', hexes:['-2,-12','-2,-11','-1,-12']}
];
const PLACE = Object.fromEntries(PLACES.map(p=>[p.id,p]));
const PLACE_OF = new Map(); PLACES.forEach(p=>p.hexes.forEach(h=>PLACE_OF.set(h,p.id)));
const MONTHS = [
 {n:'Tisheri',d:31,s:'Winter'},{n:'Chesvan',d:28,s:'Winter'},{n:'Kislev',d:31,s:'Spring'},{n:'Tevet',d:30,s:'Spring'},
 {n:'Shevat',d:31,s:'Spring'},{n:'Adar',d:30,s:'Summer'},{n:'Nisan',d:31,s:'Summer'},{n:'Iyar',d:31,s:'Summer'},
 {n:'Silvan',d:30,s:'Fall'},{n:'Thamuz',d:31,s:'Fall'},{n:'Av',d:30,s:'Fall'},{n:'Elul',d:31,s:'Winter'}
];
function parseEdges(str){
  const adj=new Map(); const add=(a,b)=>{ if(!adj.has(a))adj.set(a,new Set()); if(!adj.has(b))adj.set(b,new Set()); adj.get(a).add(b); adj.get(b).add(a); };
  str.split(/\s+/).filter(Boolean).forEach(e=>{ const [a,b]=e.split('>'); add(a,b); }); return adj;
}
const ROAD=parseEdges(ROAD_EDGES), RIVER=parseEdges(RIVER_EDGES);
function cell(x,y){ const r=GRID[y-Y0]; return r ? (r[x-X0] || 'X') : 'X'; }
function hexNb(x,y){ return (y&1) ? [[x+1,y],[x-1,y],[x+1,y-1],[x,y-1],[x+1,y+1],[x,y+1]] : [[x+1,y],[x-1,y],[x,y-1],[x-1,y-1],[x,y+1],[x-1,y+1]]; }
const keyOf=(x,y)=>x+','+y; const xy=k=>k.split(',').map(Number);
const landNb=k=>{const [x,y]=xy(k); return hexNb(x,y).filter(([a,b])=>cell(a,b)==='L').map(([a,b])=>keyOf(a,b));};
const airNb=k=>{const [x,y]=xy(k); return hexNb(x,y).filter(([a,b])=>{const c=cell(a,b);return c==='L'||c==='W';}).map(([a,b])=>keyOf(a,b));};
const graphNb=adj=>k=>[...(adj.get(k)||[])];
const roadNb=graphNb(ROAD);
const freeNb=k=>{const s=new Set(landNb(k)); (ROAD.get(k)||[]).forEach(v=>s.add(v)); return [...s];};

// Jaringan perahu: sungai + air (danau/laut) + dermaga (hex tempat di sebelah sungai/air)
const BOAT=new Map(); const bAdd=(a,b)=>{ if(!BOAT.has(a))BOAT.set(a,new Set()); if(!BOAT.has(b))BOAT.set(b,new Set()); BOAT.get(a).add(b); BOAT.get(b).add(a); };
RIVER.forEach((s,a)=>s.forEach(b=>bAdd(a,b)));
for(let y=Y0;y<Y0+GRID.length;y++)for(let x=X0;x<X0+32;x++){ if(cell(x,y)!=='W')continue; const k=keyOf(x,y); if(!BOAT.has(k))BOAT.set(k,new Set());
  hexNb(x,y).forEach(([a,b])=>{ const nk=keyOf(a,b); if(cell(a,b)==='W'||RIVER.has(nk)) bAdd(k,nk); }); }
// Kapal hanya bisa naik/turun di tempat yang hex-nya sendiri dilalui sungai (atau danau); tidak ada dermaga di hex sebelah.
const boatNb=graphNb(BOAT);
const ROADSET=new Set(ROAD.keys());

function shoreOf(p){ const s=new Set(); p.hexes.forEach(h=>{const [x,y]=xy(h); hexNb(x,y).forEach(([a,b])=>{ if(cell(a,b)==='L') s.add(keyOf(a,b)); });}); return [...s]; }
const ACCESS_CACHE={};
function access(p,net){ const key=net+'|'+p.id; if(ACCESS_CACHE[key])return ACCESS_CACHE[key]; return ACCESS_CACHE[key]=(p.kind==='danau' && net!=='boat' && net!=='fly') ? shoreOf(p) : p.hexes; }

function distFrom(nbFn,srcs){
  const dist=new Map(), prev=new Map(), deque=[], queued=new Set(); let head=10000, tail=head;
  srcs.forEach(s=>{ if(!dist.has(s)){dist.set(s,0);deque[tail++]=s;queued.add(s);} });
  while(head<tail){
    const u=deque[head++]; queued.delete(u); const base=dist.get(u); const pu=PLACE_OF.get(u);
    for(const v of nbFn(u)){ const w=(pu!==undefined&&pu===PLACE_OF.get(v))?0:1; const nd=base+w;
      if(!dist.has(v)||nd<dist.get(v)){ dist.set(v,nd); prev.set(v,u);
        if(!queued.has(v)){ if(w===0)deque[--head]=v;else deque[tail++]=v; queued.add(v); }
      }
    }
  }
  return {dist,prev};
}
const NETS={road:roadNb, free:freeNb, boat:boatNb, fly:airNb};
const cacheD={};
function fromCache(net,p){ const k=net+'|'+p.id; return cacheD[k]||(cacheD[k]=distFrom(NETS[net],access(p,net))); }
function legLand(net,a,b){ const F=fromCache(net,a); let best=null; access(b,net).forEach(h=>{const d=F.dist.get(h); if(d!==undefined&&(best===null||d<F.dist.get(best))) best=h;}); if(best===null)return null;
  const path=[]; for(let k=best;k!==undefined;k=F.prev.get(k)) path.push(k); path.reverse(); return {tiles:F.dist.get(best),path}; }

// Airship: tiap 6 tile harus berhenti (maintenance) di jalan besar atau kota besar; tak boleh lewat hex hitam/kosong.
const cacheA={};
function airFrom(p){ if(cacheA[p.id])return cacheA[p.id];
  const stopOK=k=>ROADSET.has(k)||(PLACE_OF.has(k)&&PLACE[PLACE_OF.get(k)].kind!=='danau');
  const dist=new Map(), prev=new Map(); let cur=[]; p.hexes.forEach(h=>{const s=h+'#0'; dist.set(s,0); cur.push(s);}); let d=0;
  while(cur.length){ const next=[]; for(const s of cur){ const [h,kk]=s.split('#'); const k=+kk;
      for(const n of airNb(h)){ const nk=k+1; let ns; if(nk===6){ if(!stopOK(n)) continue; ns=n+'#0'; } else ns=n+'#'+nk;
        if(!dist.has(ns)){ dist.set(ns,d+1); prev.set(ns,s); next.push(ns);} } }
    cur=next; d++; }
  return cacheA[p.id]={dist,prev}; }
function legAir(a,b){ const F=airFrom(a); let best=null,bd=1e9;
  b.hexes.forEach(h=>{ for(let k=0;k<6;k++){ const s=h+'#'+k; const v=F.dist.get(s); if(v!==undefined&&v<bd){bd=v;best=s;} } });
  if(best===null||bd===0)return null; const path=[]; for(let s=best;s!==undefined;s=F.prev.get(s)) path.push(s.split('#')[0]); path.reverse();
  const stops=[]; for(let i=6;i<path.length-1;i+=6) stops.push(path[i]);
  return {tiles:bd,path,stops}; }

const VEH=[
 {id:'walk',name:'Jalan kaki',cls:'land',net:'personal',speed:1,rest:false,buy:0,rate:0,bit:0,rule:'8 jam/hari.'},
 {id:'pony',name:'Pony',cls:'land',net:'personal',speed:1.5,rest:false,buy:30,rate:0,bit:1,rule:'Beli 30 gp sekali. 1½ tile/hari.'},
 {id:'ride',name:'Kuda tunggang',cls:'land',net:'personal',speed:2,rest:true,buy:75,rate:0,bit:2,rule:'Beli 75 gp sekali. 2 tile/hari, tiap 3 hari jalan istirahat 1 hari.'},
 {id:'goride',name:'Uber Go Ride',cls:'cart',net:'road',speed:2,rest:false,buy:0,rate:0.72,bit:-1,rule:'Carriage 4 kuda, 0,72 gp/tile, hanya di jalan. Berangkat dari kota atau desa.', ok:(a,b)=>a.kind!=='danau'},
 {id:'antar',name:'Uber antar kota',cls:'cart',net:'road',speed:2,rest:false,buy:0,rate:0.24,bit:-1,rule:'Carriage 4 kuda, 0,24 gp/tile, hanya kota besar ke kota besar.', ok:(a,b)=>a.kind==='kota'&&b.kind==='kota'},
 {id:'ship',name:"Ship's passage",cls:'water',net:'boat',speed:3,rest:false,buy:0,rate:2.4,bit:-1,rule:'3 tile/hari, 2,4 gp/tile, sungai, danau, dan laut. Naik-turun hanya di kota, desa, atau danau yang hex-nya sendiri dilalui sungai.'},
 {id:'air',name:'Uber Fly (airship)',cls:'air',net:'air',speed:6,rest:false,buy:0,rate:9,bit:-1,rule:'6 tile/hari, 9 gp/tile. Berangkat hanya dari kota besar, boleh turun di kota besar, desa, atau benteng, berhenti maintenance tiap tile ke-6 di jalan besar, tak boleh lewat area hitam.', ok:(a,b)=>a.kind==='kota'&&(b.kind==='kota'||b.kind==='desa'||b.kind==='benteng')}
];
VEH.push({id:'fast',name:'Uber Fast Travel',cls:'tele',net:'tele',speed:1,rest:false,buy:30,rate:0,bit:3,once:true,rule:'30 gp, seketika, hanya antar Qorikancha Lumi, Mar-Ceniza, Kausay-Tampu. Cooldown 1 minggu per PC, jadi maksimal sekali per rute.', ok:(a,b)=>FASTSET.includes(a.id)&&FASTSET.includes(b.id)});
const FASTSET=['qori','mar','kausay'];
const GOCARL_BIG3=['qori','mar','kausay'];
const GOCARL_RATES={big3:25,kota:50,other:100};
function gocarlPrice(b){ if(GOCARL_BIG3.includes(b.id)) return GOCARL_RATES.big3; if(b.kind==='kota') return GOCARL_RATES.kota; return GOCARL_RATES.other; }
// Lokasi Carl saat ini: kalau leg Go-Carl tidak berangkat dari lokasi itu, Carl perlu "dijemput" dulu ke titik
// keberangkatan (dikenai tarif yang sama seperti tabel di atas, dihitung dari jenis tempat itu), baru mengantar
// ke tujuan. Kalau kebetulan Carl sudah di titik keberangkatan, tidak ada biaya jemput.
let CARL_LOC=null;
function setCarlLoc(id){
  const next=id||null;
  if(next!==CARL_LOC){ CARL_LOC=next; clearGocarlCache(); }
}
function getCarlLoc(){ return CARL_LOC; }
function gocarlPickup(a){ return (CARL_LOC&&CARL_LOC===a.id) ? 0 : gocarlPrice(a); }
function gocarlLegFee(a,b){ return gocarlPickup(a)+gocarlPrice(b); }
VEH.push({id:'gocarl',name:'Go-Carl',cls:'tele',net:'tele',speed:1,rest:false,buy:0,rate:0,bit:-1,feeFn:(a,b)=>gocarlLegFee(a,b),pickupFn:(a,b)=>gocarlPickup(a),rule:'Layanan pribadi Carl, Goblin the Slayer: bisa ke mana saja kecuali danau. 25 gp ke Qorikancha Lumi/Kausay-Tampu/Mar-Ceniza, 50 gp ke kota besar lain, 100 gp ke desa atau benteng. Kalau Carl belum berada di titik keberangkatan, ia perlu dijemput dulu ke sana dengan tarif yang sama (dijumlahkan ke tarif antarnya). Harga dapat berubah, konfirmasi langsung ke Carl.', ok:(a,b)=>a.kind!=='danau'&&b.kind!=='danau'});
let FLY_OWN=false; function setFlyOwn(v){ FLY_OWN=!!v; }
VEH.push({id:'flyer',name:'Flying Creature (Find Familiar)',cls:'fly',net:'fly',speed:3,rest:true,get buy(){return FLY_OWN?0:10;},rate:0,bit:4,rule:'Kalau sudah memiliki: gratis. Kalau belum: summon pertama kali 10 gp (sekali per rute). 3 tile/hari, 8 jam/hari, 3 hari jalan lalu 1 hari istirahat. Terbang bebas di hex terbuka, tanpa maintenance di jalan besar. Kalau mati, summon ulang 10 gp.'});
const LEGC={};
const EDGEC={};
function clearGocarlCache(){
  Object.keys(LEGC).forEach(k=>{ if(k.startsWith('gocarl|')) delete LEGC[k]; });
  Object.keys(EDGEC).forEach(k=>{ if(k.startsWith('gocarl|')) delete EDGEC[k]; });
}
function leg(v,a,b,mode){
  if(a.id===b.id) return null; if(v.ok && !v.ok(a,b)) return null;
  if(v.net==='tele') return {tiles:0,days:0,travel:0,rest:0,fee:v.feeFn?v.feeFn(a,b):0,path:[],stops:[],instant:true,gcPickup:v.pickupFn?v.pickupFn(a,b):0};
  const net = v.net==='personal' ? (mode==='free'?'free':'road') : v.net;
  const key=v.id+'|'+net+'|'+a.id+'|'+b.id; if(key in LEGC) return LEGC[key];
  const r = net==='air' ? legAir(a,b) : legLand(net,a,b);
  if(!r){ return LEGC[key]=null; }
  let t=r.tiles; if(t===0){ if(a.kind==='danau'||b.kind==='danau'){ t=1; } else return LEGC[key]=null; }
  const travel=Math.ceil(t/v.speed-1e-9), rest=v.rest?Math.floor((travel-1)/3):0;
  return LEGC[key]={tiles:t,days:travel+rest,travel,rest,fee:+(t*v.rate).toFixed(2),path:r.path,stops:r.stops||[]};
}
function edgesFor(v,a,mode){
  const key=v.id+'|'+mode+'|'+a.id+(v.id==='gocarl'?'|'+(CARL_LOC||''):'');
  if(EDGEC[key])return EDGEC[key];
  const edges=[];
  for(const b of PLACES){
    if(b.id===a.id)continue;
    const lg=leg(v,a,b,mode);
    if(lg)edges.push({place:b,leg:lg});
  }
  return EDGEC[key]=edges;
}
function addDays(date,n){ let {y,m,d}=date; d+=n; while(true){ const md=MONTHS[m].d; if(d<=md)break; d-=md; m++; if(m===12){m=0;y++;} } return {y,m,d}; }
const fmtDate=t=>t.d+' '+MONTHS[t.m].n+' '+t.y;
const fmtShort=t=>t.d+' '+MONTHS[t.m].n;

const MAXSEG=4;
function plan(origin,dest,mode,ex){ ex=ex||[];
  const dom=(a,b)=>a.cost<=b.cost+1e-9&&a.days<=b.days&&a.seg<=b.seg;
  const excluded=new Set(ex), store=new Map(); let frontier=[{place:origin.id,last:null,mask:0,cost:0,days:0,seg:0,prev:null,v:null,visited:new Set([origin.id])}]; const finals=[];
  for(let depth=1;depth<=MAXSEG;depth++){ const next=[];
    for(const L of frontier){ for(const v of VEH){ if(excluded.has(v.id)||v.id===L.last||(v.once&&(L.mask&(1<<v.bit))))continue; const a=PLACE[L.place];
        for(const edge of edgesFor(v,a,mode)){ const b=edge.place; if(L.visited.has(b.id)||b.kind==='danau'&&b.id!==dest.id)continue;
          const lg=edge.leg;
          const buy=(v.bit>=0&&!(L.mask&(1<<v.bit)))?v.buy:0;
          const visited=new Set(L.visited); visited.add(b.id);
          const nl={place:b.id,last:v.id,mask:v.bit>=0?(L.mask|(1<<v.bit)):L.mask,cost:+(L.cost+lg.fee+buy).toFixed(2),days:L.days+lg.days,seg:depth,prev:L,v,leg:lg,buy,visited};
          const key=nl.place+'|'+nl.last+'|'+nl.mask; const arr=store.get(key)||[];
          if(arr.some(o=>dom(o,nl)))continue;
          store.set(key,arr.filter(o=>!dom(nl,o)).concat([nl])); next.push(nl); if(b.id===dest.id) finals.push(nl);
        } } }
    frontier=next; }
  // buang duplikat & kombinasi yang kalah biaya dan waktu sekaligus
  const seen=new Set(); let plans=finals.map(f=>{ const segs=[]; for(let l=f;l&&l.v;l=l.prev) segs.push(l); segs.reverse(); return {cost:f.cost,days:f.days,segs}; })
   .filter(p=>{ const sig=p.segs.map(s=>s.v.id+':'+s.place+':'+s.prev.place).join('>'); if(seen.has(sig))return false; seen.add(sig); return true; });
  plans=plans.filter(p=>!plans.some(q=>q!==p&&q.cost<=p.cost+1e-9&&q.days<=p.days&&(q.cost<p.cost-1e-9||q.days<p.days)));
  plans.sort((a,b)=>(a.cost-b.cost)||(a.days-b.days)||(a.segs.length-b.segs.length));
  return plans;
}
function schedule(p,date){ let d0=0; return p.segs.map(s=>{ const z=s.leg.days===0, start=addDays(date,z?Math.max(0,d0-1):d0), end=z?start:addDays(date,d0+s.leg.days-1); const o={v:s.v,from:PLACE[s.prev.place],to:PLACE[s.place],leg:s.leg,buy:s.buy,startDay:z?Math.max(1,d0):d0+1,endDay:z?Math.max(1,d0):d0+s.leg.days,start,end}; d0+=s.leg.days; return o; }); }
function summaryTiles(origin,dest,mode){ const g=(v,m)=>{const l=leg(VEH.find(x=>x.id===v),origin,dest,m); return l?l.tiles:null;}; return {road:g('goride','road'), free:(()=>{const l=leg(VEH[0],origin,dest,'free');return l?l.tiles:null;})(), boat:g('ship','road'), air:g('air','road')}; }
function teleports(origin,dest){ const s=['qori','mar','kausay'], gcPickup=gocarlPickup(origin), gcTotal=gcPickup+gocarlPrice(dest);
  return [{id:'fast',name:'Uber Fast Travel',cost:30,note:'Hanya Qorikancha Lumi, Mar-Ceniza, Kausay-Tampu. Karakter + 1 backpack. Cooldown 1 minggu/PC.',why:(s.includes(origin.id)&&s.includes(dest.id))?null:'Hanya antar Qorikancha Lumi, Mar-Ceniza, dan Kausay-Tampu.'},
          {id:'instant',name:'Uber Instant',cost:400,note:'Teleportation circle, berangkat dari kota ke kota.',why:(origin.kind==='kota'&&dest.kind==='kota')?null:'Berangkat dan tiba di kota besar.'},
          {id:'gocarl',name:'Go-Carl',cost:gcTotal,gcPickup,note:'Layanan pribadi Carl, Goblin the Slayer, bisa ke mana saja kecuali danau. Harga dapat berubah, ini hanya perkiraan — hubungi Go-Carl (PM atau tag Tuan Saihara), tanya harga transportasi, lalu beri rewards.'+(gcPickup?' Termasuk biaya jemput '+gcPickup+' gp karena Carl belum di '+origin.name+'.':''),why:(origin.kind!=='danau'&&dest.kind!=='danau')?null:'Tidak melayani danau.'}]; }
if(typeof module!=='undefined') module.exports={PLACES,PLACE,plan,schedule,leg,VEH,summaryTiles,teleports,addDays,BOAT,fmtDate,GOCARL_RATES,clearGocarlCache,setCarlLoc,getCarlLoc,gocarlPickup,gocarlLegFee,gocarlPrice};

(function(){
  const $=id=>document.getElementById(id);
  const hourIn=$('hour'), amonthSel=$('amonth'), adayIn=$('aday'), ayearIn=$('ayear'), ahourIn=$('ahour'), fromSel=$('from'), toSel=$('to'), monthSel=$('month'), dayIn=$('day'), yearIn=$('year');
  const fmt=(n,d=2)=>n.toLocaleString('id-ID',{maximumFractionDigits:d});
  const groups=[['kota','Kota besar'],['benteng','Benteng'],['desa','Desa'],['danau','Danau']];
  [fromSel,toSel].forEach(sel=>groups.forEach(([k,label])=>{const og=document.createElement('optgroup'); og.label=label;
    PLACES.filter(c=>c.kind===k).forEach(c=>{const o=document.createElement('option'); o.value=c.id; o.textContent=c.name; og.appendChild(o);}); sel.appendChild(og);}));
  fromSel.value='qori'; toSel.value='kausay';
  [monthSel,amonthSel].forEach(s=>MONTHS.forEach((m,i)=>{const o=document.createElement('option'); o.value=i; o.textContent=(i+1)+'. '+m.n; s.appendChild(o);}));
  let arrTouched=false;
  let selected=0, last=null;
  function readDate(mS,dI,yI){
    const m=+mS.value; let d=Math.max(1,Math.min(MONTHS[m].d,parseInt(dI.value)||1)); dI.max=MONTHS[m].d; if(String(d)!==dI.value) dI.value=d;
    return {y:Math.max(1,parseInt(yI.value)||1214), m, d};
  }
  function autoArrival(){ if(arrTouched) return; const d=addDays(currentDate(),30); amonthSel.value=d.m; adayIn.value=d.d; ayearIn.value=d.y; }
  const currentDate=()=>readDate(monthSel,dayIn,yearIn), arriveDate=()=>readDate(amonthSel,adayIn,ayearIn);
  const cssv=n=>getComputedStyle(document.documentElement).getPropertyValue(n).trim();
  const dur=n=>n+' hari';
  function hh(el,def){ const m=/^(\d{1,2}):(\d{2})/.exec(el.value||def); return m?(+m[1]+ +m[2]/60):8; }
  const depH=()=>hh(hourIn,'08:00'), arrH=()=>hh(ahourIn,'08:00');
  const clk=h=>{ h=Math.round(h*60)/60; const t=Math.round(h*60); const hh=Math.floor(t/60)%24, mm=t%60; return String(hh).padStart(2,'0')+':'+String(mm).padStart(2,'0'); };
  const dayShift=h=>Math.floor(Math.round(h*60)/1440);
  // jam tiba segmen: 8 jam gerak per hari, mulai jam berangkat tiap hari
  function segEnd(x,dh){ dh=dh===undefined?depH():dh; const mh=x.leg.tiles/x.v.speed*8, off=Math.ceil(mh/8-1e-9)-1, h=dh+mh-8*off; return {h,clock:clk(h),extra:dayShift(h)}; }
  const dur2=h=>{h=Math.round(Math.abs(h)); const d=Math.floor(h/24), r=h%24; return (d?d+' hari ':'')+(r||!d?r+' jam':'');};
  const YT=MONTHS.reduce((s,m)=>s+m.d,0), BASE={y:1,m:0,d:1};
  const serial=t=>(t.y-1)*YT+MONTHS.slice(0,t.m).reduce((s,m)=>s+m.d,0)+t.d-1;
  const fromSerial=n=>addDays(BASE,Math.max(0,n));
  function finish(sch,dh){ let L=null; for(let i=sch.length-1;i>=0;i--) if(!sch[i].leg.instant){L=sch[i];break;}
    if(!L) return {date:sch[0].start,h:dh,extra:0,days:0,abs:dh,clock:clk(dh)};
    const se=segEnd(L,dh); return {date:addDays(L.end,se.extra),h:se.h,extra:se.extra,days:L.endDay+se.extra,abs:(L.endDay-1)*24+se.h,clock:se.clock}; }
  const PCACHE={};
  let gcOverride={}, gcReqKey='';
  const isWalkOnly=p=>p.segs.length===1&&p.segs[0].v.id==='walk';
  function render(){
    const origin=PLACE[fromSel.value], dest=PLACE[toSel.value], date=currentDate(), adate=arriveDate(); const dl=serial(adate)*24+arrH();
    const mode=document.querySelector('input[name=mode]:checked').value;
    const sum=$('summary'), pl=$('plans'), te=$('tele');
    if(origin.id===dest.id){ sum.innerHTML='<span class="route">Pilih dua tempat yang berbeda</span>'; pl.innerHTML=''; te.innerHTML=''; last=null; paintPath(); drawMap(); return; }
    const fastOn=document.querySelector('input[name=fast]:checked').value==='on'; const flyOn=document.querySelector('input[name=flyer]:checked').value==='yes'; const exBase=fastOn?[]:['fast']; setFlyOwn(flyOn);
    const carlSame=document.querySelector('input[name=carlpos]:checked').value==='same'; setCarlLoc(carlSame?origin.id:null);
    const pk=origin.id+'|'+dest.id+'|'+mode+'|'+fastOn+'|'+flyOn+'|'+carlSame; const all=PCACHE[pk]||(PCACHE[pk]=plan(origin,dest,mode,exBase)), dh0=depH();
    // pool khusus "tanpa Go-Carl": panggilan plan() terpisah dengan Go-Carl dikecualikan sama sekali, supaya
    // opsi seperti Uber Fast Travel tidak ikut tersingkir oleh perbandingan Pareto global melawan Go-Carl
    // (yang di 3 kota besar selalu sedikit lebih murah tapi sama-sama seketika) padahal Fast Travel tetap
    // valid sebagai opsi non-Go-Carl.
    const pkNoGC=pk+'|nogc'; const allNoGC=PCACHE[pkNoGC]||(PCACHE[pkNoGC]=plan(origin,dest,mode,exBase.concat(['gocarl'])));
    if(pk!==gcReqKey){ gcOverride={}; gcReqKey=pk; }
    const arrAbs=p=>serial(date)*24+finish(schedule(p,date),dh0).abs;
    const usesGC=p=>p.segs.some(x=>x.v.id==='gocarl');
    const planSig=p=>p.segs.map(s=>s.v.id+':'+s.place+':'+s.prev.place).join('>');
    const feas=all.filter(p=>arrAbs(p)<=dl+1e-6);
    const alt=feas.filter(p=>!isWalkOnly(p)), walk=feas.find(isWalkOnly)||null;
    const feasNoGC=allNoGC.filter(p=>arrAbs(p)<=dl+1e-6);
    const altNoGC=feasNoGC.filter(p=>!isWalkOnly(p));
    const noGCpool=altNoGC.sort((a,b)=>a.cost-b.cost||arrAbs(a)-arrAbs(b));
    const withGCpool=alt.filter(usesGC).sort((a,b)=>a.cost-b.cost||arrAbs(a)-arrAbs(b));
    const noGC=noGCpool.slice(0,4), withGC=withGCpool.slice(0,4);
    const fastest=all.slice().sort((a,b)=>arrAbs(a)-arrAbs(b)||a.cost-b.cost)[0]||null;
    const late=!feas.length&&fastest;
    const alreadySigs=new Set(noGC.concat(withGC).map(planSig));
    const top=(late?[{p:fastest,tag:'Tercepat (melewati batas)',group:'late'}]:
      noGC.map((p,i)=>({p,tag:'Termurah #'+(i+1)+' (tanpa Go-Carl)',group:'nogc'}))
        .concat(withGC.map((p,i)=>({p,tag:'Termurah #'+(i+1)+' (Go-Carl)',group:'gc'})))
        .concat((fastest&&!alreadySigs.has(planSig(fastest)))?[{p:fastest,tag:'Tercepat',group:'fast'}]:[]))
      .map(t=>({...t,date,dh:dh0,slack:dl-arrAbs(t.p),sch:schedule(t.p,date)}));
    const st=summaryTiles(origin,dest,mode);
    last={origin,dest,date,top};
    sum.innerHTML='<span class="route">'+origin.name+'<em>→’</em>'+dest.name+'</span>'+
      '<span class="stat">Berangkat <b>'+fmtDate(date)+' · '+clk(depH())+'</b></span>'+'<span class="stat">Tiba paling lambat <b>'+fmtDate(adate)+' · '+clk(arrH())+'</b></span>'+
      '<span class="stat">Darat <b>'+(()=>{const l=leg(VEH[0],origin,dest,mode);return l?l.tiles+' tile':'—';})()+'</b></span>'+
      '<span class="stat">Kapal <b>'+(st.boat!==null?st.boat+' tile':'tidak ada')+'</b></span>'+
      '<span class="stat">Udara <b>'+(st.air!==null?st.air+' tile':'tidak tersedia')+'</b></span>';
    if(!top.length){ pl.innerHTML='<div class="plan" style="cursor:default"><b>Tidak ada rute</b><span class="sm">Tempat ini tidak terhubung lewat jalan, sungai, atau udara yang sudah terbuka.'+(mode==='road'?' Coba mode "Boleh off-road": beberapa tempat tidak punya jalan dan hanya bisa dicapai jalan kaki atau berkuda.':'')+'</span></div>'; }
    else{
      if(selected>=top.length) selected=0;
      const GLABEL={nogc:'4 termurah — tanpa Go-Carl',gc:'4 termurah — dengan Go-Carl',fast:'Tercepat keseluruhan'};
      const cardHtml=(t,i)=>{
        const s=t.sch, last_=s[s.length-1], dh=t.dh, fin=finish(s,dh), se={h:fin.h}, end=fin.date, days=fin.days;
        const chain=s.map(x=>x.v.name).join('<em>+</em>');
        let fixedCost=t.p.cost;
        s.forEach((x,si)=>{ if(x.leg.instant&&x.v.id==='gocarl'){ const base=x.leg.fee+x.buy, ov=gcOverride[i+'|'+si]; fixedCost-=base; if(ov!==undefined) fixedCost+=0; } });
        const gcTotal=()=>{ let tot=fixedCost; s.forEach((x,si)=>{ if(x.leg.instant&&x.v.id==='gocarl'){ const base=x.leg.fee+x.buy, ov=gcOverride[i+'|'+si]; tot+=(ov!==undefined?ov:base); } }); return tot; };
        return '<div class="plan'+(i===selected?' sel':'')+'" data-i="'+i+'" tabindex="0" role="button" aria-pressed="'+(i===selected)+'">'+
          '<div class="phead"><span><span class="rank">'+t.tag+'</span> <span class="chain">'+chain+'</span></span><span class="cost" data-card-cost="'+i+'" data-fixed="'+fixedCost+'">'+fmt(gcTotal())+' gp</span></div>'+
          '<div class="times"><div><span>Berangkat</span><b>'+fmtDate(t.date)+' · '+clk(dh)+'</b></div><div><span>Tiba</span><b>'+fmtDate(end)+' · '+clk(se.h)+'</b></div><div><span>Lama</span><b>'+dur(days)+'</b></div><div class="'+(t.slack<0?'late':'')+'"><span>'+(t.slack<0?'Terlambat':'Sisa waktu')+'</span><b>'+dur2(t.slack)+'</b></div></div>'+
          '<ul class="seglist">'+s.map((x,si)=>{
            const fee=x.leg.fee+x.buy, extra=[];
            if(x.buy) extra.push((x.v.id==='flyer'?'summon ':'beli ')+fmt(x.buy)+' gp');
            if(x.v.id==='flyer') extra.push('tanpa maintenance di jalan besar · jika mati, summon ulang 10 gp'+(x.buy?'':' (sudah memiliki, tanpa biaya summon awal)'));
            if(x.leg.rest) extra.push(x.leg.rest+' hari istirahat');
            if(x.v.cls==='air') extra.push((x.leg.stops.length?'berhenti maintenance di jalan '+x.leg.stops.join(' · ')+' (bukan tempat ganti moda)':'tanpa berhenti maintenance'));
            if(x.leg.instant){
              const isGocarl=x.v.id==='gocarl';
              const curVal=isGocarl?(gcOverride[i+'|'+si]!==undefined?gcOverride[i+'|'+si]:fee):fee;
              const priceHtml=isGocarl?('<span class="gcrow">harga: <input type="number" min="0" step="1" class="gcinput" data-card="'+i+'" data-seg="'+si+'" data-base="'+fee+'" value="'+curVal+'"> gp (dapat dinego)'+(x.leg.gcPickup?' · termasuk jemput '+fmt(x.leg.gcPickup)+' gp (Carl belum di '+x.from.name+')':'')+'</span>'):('seketika, tanpa waktu tempuh · '+fmt(fee)+' gp'+(x.v.id==='fast'?' · maksimal sekali per rute (cooldown 1 minggu)':''));
              return '<li><i class="c-tele"></i><span><b>'+x.v.name+'</b>: '+x.from.name+' →’ '+x.to.name+'<span class="sm">'+(isGocarl?priceHtml:priceHtml)+'</span></span></li>'+(x===s[s.length-1]?'':'<li class="xfer"><i></i><span class="sm">Ganti moda di '+x.to.name+' ('+(x.to.kind==='kota'?'kota besar':x.to.kind==='desa'?'desa':x.to.kind==='benteng'?'benteng':'danau')+')</span></li>');
            }
            return '<li><i class="c-'+x.v.cls+'"></i><span><b>'+x.v.name+'</b>: '+x.from.name+' →’ '+x.to.name+'<span class="sm">'+x.leg.tiles+' tile · '+(x.startDay===x.endDay?'hari ke-'+x.startDay:'hari ke-'+x.startDay+' sampai '+x.endDay)+' ('+fmtShort(x.start)+' '+clk(x.startDay===1?t.dh:t.dh)+' →’ '+fmtShort(addDays(x.end,segEnd(x,t.dh).extra))+' '+segEnd(x,t.dh).clock+') · '+fmt(fee)+' gp'+(extra.length?' · '+extra.join(' · '):'')+'</span></span></li>'+(x===s[s.length-1]?'':'<li class="xfer"><i></i><span class="sm">Ganti moda di '+x.to.name+' ('+(x.to.kind==='kota'?'kota besar':x.to.kind==='desa'?'desa':x.to.kind==='benteng'?'benteng':'danau')+')</span></li>');
          }).join('')+'</ul></div>';
      };
      if(late){ pl.innerHTML=top.map((t,i)=>cardHtml(t,i)).join(''); }
      else{
        const byGroup=g=>top.map((t,i)=>({t,i})).filter(x=>x.t.group===g);
        const nogcItems=byGroup('nogc'), gcItems=byGroup('gc'), fastItems=byGroup('fast');
        const empty='<p class="hexseg">Tidak ada rute yang tiba sebelum batas waktu dalam kelompok ini.</p>';
        let out='<div class="grouphead">'+GLABEL.nogc+'</div>'+(nogcItems.length?nogcItems.map(x=>cardHtml(x.t,x.i)).join(''):empty);
        out+='<div class="grouphead">'+GLABEL.gc+'</div>'+(gcItems.length?gcItems.map(x=>cardHtml(x.t,x.i)).join(''):empty);
        if(fastItems.length) out+='<div class="grouphead">'+GLABEL.fast+'</div>'+fastItems.map(x=>cardHtml(x.t,x.i)).join('');
        pl.innerHTML=out;
      }
    }
    if(walk&&alt.length) pl.insertAdjacentHTML('beforeend','<p class="hexseg">Pembanding, jalan kaki penuh: '+walk.segs[0].leg.tiles+' tile, 0 gp, '+walk.days+' hari.</p>');
    if(late) pl.insertAdjacentHTML('afterbegin','<p class="warn">Rute ada, tapi tidak ada yang sempat sebelum batas waktu sampai. Ditampilkan rute tercepat. Majukan waktu berangkat atau longgarkan waktu sampai.</p>');
    te.innerHTML=teleports(origin,dest).map(t=>t.id==='fast'&&!fastOn?{...t,why:'Ditandai sudah terpakai (cooldown 1 minggu per PC).'}:t).map(t=>{
      const ok=!t.why; return '<div class="'+(ok?'':'off')+'"><b>'+t.name+' · '+t.cost+' gp'+'</b>'+(ok?'Seketika, tiba '+fmtDate(date)+' · '+clk(depH())+'. '+t.note:t.why+' <span class="reason">Tidak tersedia untuk rute ini.</span>')+'</div>';
    }).join('');
    paintPath(); drawMap();
  }
  function showPrompt(){
    $('summary').innerHTML=''; $('tele').innerHTML=''; last=null;
    $('plans').innerHTML='<div class="plan genhint" style="cursor:default"><b>Belum ada jalur</b><span class="sm">Atur asal, tujuan, waktu, dan opsi di atas, lalu tekan tombol <b>Generate Jalur</b> untuk memproses rute.</span></div>';
    paintPath(); drawMap();
  }
  function invalidate(){ selected=0; showPrompt(); }
  $('gen').addEventListener('click',()=>{ const b=$('gen'); if(b.disabled) return; b.disabled=true; b.textContent='Memproses…'; $('plans').innerHTML='<div class="plan genhint" style="cursor:default"><b>Memproses jalur…</b><span class="sm">Perhitungan rute bisa memakan beberapa detik.</span></div>';
    setTimeout(()=>{ try{ selected=0; render(); }finally{ b.disabled=false; b.textContent='Generate Jalur'; } const f=$('plans').querySelector('.plan'); if(f) f.scrollIntoView({behavior:'smooth',block:'nearest'}); },30); });
  function paintPath(){
    const box=$('hexlist'), t=$('pathtitle');
    if(!last||!last.top[selected]){ box.innerHTML=''; t.textContent=''; return; }
    const sch=last.top[selected].sch;
    t.textContent='Rute #'+(selected+1)+': '+sch.reduce((s,x)=>s+x.leg.tiles,0)+' tile total.';
    box.style.display='block';
    box.innerHTML=sch.filter(x=>!x.leg.instant).map(x=>'<p class="hexseg">'+x.v.name+' · '+x.from.name+' →’ '+x.to.name+(x.v.cls==='air'?' (terbang lurus, hanya titik berhenti ditampilkan)':'')+'</p><div class="hexlist">'+(x.v.cls==='air'?[x.leg.path[0]].concat(x.leg.stops,[x.leg.path[x.leg.path.length-1]]):x.leg.path).map(h=>{const p=PLACE_OF.get(h); return '<code class="'+(p?'city':'')+'" title="'+(p?PLACE[p].name:'')+'">'+h+'</code>';}).join('')+'</div>').join('');
  }
  // airship terbang lurus: garis hex antar titik pendaratan, kembali ke jalur BFS bila garis lurus menabrak area hitam
  const cube=k=>{const [x,y]=xy(k); const q=x-(y-(y&1))/2; return [q,y,-q-y];};
  const uncube=(c)=>{const y=c[1], x=c[0]+(y-(y&1))/2; return keyOf(x,y);};
  const cround=(a,b,c)=>{let rx=Math.round(a),ry=Math.round(b),rz=Math.round(c); const dx=Math.abs(rx-a),dy=Math.abs(ry-b),dz=Math.abs(rz-c); if(dx>dy&&dx>dz)rx=-ry-rz; else if(dy>dz)ry=-rx-rz; else rz=-rx-ry; return [rx,ry,rz];};
  function hexLine(a,b){ const A=cube(a),B=cube(b), n=Math.max(Math.abs(A[0]-B[0]),Math.abs(A[1]-B[1]),Math.abs(A[2]-B[2])); const out=[]; for(let i=0;i<=n;i++){const t=n?i/n:0; out.push(uncube(cround(A[0]+(B[0]-A[0])*t+1e-6,A[1]+(B[1]-A[1])*t+2e-6,A[2]+(B[2]-A[2])*t-3e-6)));} return out; }
  function airTrack(leg){ const p=leg.path; if(leg.track) return leg.track; const idx=[0]; for(let i=6;i<p.length-1;i+=6) idx.push(i); idx.push(p.length-1); const out=[p[0]];
    for(let j=0;j+1<idx.length;j++){ const a=idx[j], b=idx[j+1], ln=hexLine(p[a],p[b]); const ok=ln.length===b-a+1&&ln.every(h=>{const [x,y]=xy(h); const c=cell(x,y); return c==='L'||c==='W';});
      (ok?ln:p.slice(a,b+1)).slice(1).forEach(h=>out.push(h)); }
    return leg.track=out; }
  const legPath=x=>x.v.cls==='air'?airTrack(x.leg):x.leg.path;
  const cv=$('map'), ctx=cv.getContext('2d');
  function center(x,y,W,H,rs){ return [(x-X0+0.5+((y&1)?0.5:0))*W, (y-Y0)*rs+H/2]; }
  function drawMap(){
    const cssW=cv.parentElement.clientWidth||400, dpr=window.devicePixelRatio||1;
    const W=cssW/32.6, H=W*2/Math.sqrt(3), rs=H*0.75, cssH=Math.ceil(rs*31+H*0.35);
    cv.width=Math.round(cssW*dpr); cv.height=Math.round(cssH*dpr); cv.style.aspectRatio=cssW+'/'+cssH;
    ctx.setTransform(dpr,0,0,dpr,0,0);
    const col={land:cssv('--m-land'),water:cssv('--m-water'),fog:cssv('--m-fog'),vo:cssv('--m-void'),road:cssv('--m-road'),river:cssv('--m-river'),route:cssv('--m-route'),boat:cssv('--m-boat'),air:cssv('--m-air'),ink:cssv('--ink')};
    ctx.fillStyle=col.vo; ctx.fillRect(0,0,cssW,cssH);
    for(let y=Y0;y<Y0+GRID.length;y++)for(let x=X0;x<X0+32;x++){
      const c=cell(x,y); if(c==='X') continue;
      const [cx,cy]=center(x,y,W,H,rs); ctx.beginPath();
      for(let i=0;i<6;i++){const a=Math.PI/180*(60*i-30); const px=cx+H/2*Math.cos(a)*0.9, py=cy+H/2*Math.sin(a)*0.9; i?ctx.lineTo(px,py):ctx.moveTo(px,py);} ctx.closePath();
      ctx.fillStyle=c==='F'?col.fog:c==='W'?col.water:col.land; ctx.fill();
    }
    const pt=k=>{const [x,y]=xy(k); return center(x,y,W,H,rs);};
    const net=(adj,color,lw,alpha)=>{ctx.strokeStyle=color; ctx.lineWidth=lw; ctx.globalAlpha=alpha; ctx.lineCap='round'; ctx.beginPath(); adj.forEach((s,a)=>{const [ax,ay]=pt(a); s.forEach(b=>{ if(a<b){const [bx,by]=pt(b); ctx.moveTo(ax,ay); ctx.lineTo(bx,by);} });}); ctx.stroke(); ctx.globalAlpha=1;};
    net(RIVER,col.river,Math.max(1,W*0.11),0.75); net(ROAD,col.road,Math.max(1.2,W*0.14),0.9);
    const mid=c=>{const p=c.hexes.map(pt); return [p.reduce((s,q)=>s+q[0],0)/p.length,p.reduce((s,q)=>s+q[1],0)/p.length];};
    PLACES.forEach(c=>{ const [mx,my]=mid(c); ctx.fillStyle=col.ink; ctx.globalAlpha=.85; ctx.fillRect(mx-W*.16,my-W*.16,W*.32,W*.32); ctx.globalAlpha=1; });
    if(last&&last.top[selected]){
      last.top[selected].sch.forEach(x=>{
        const pts=legPath(x).map(pt), air=x.v.cls==='air', fly=x.v.cls==='fly';
        ctx.strokeStyle=(air||fly)?col.air:x.v.cls==='water'?col.boat:col.route; ctx.lineWidth=Math.max(2.4,W*0.3); ctx.lineJoin='round'; ctx.lineCap='round';
        ctx.setLineDash(air?[W*.5,W*.4]:fly?[W*.12,W*.3]:[]); ctx.beginPath(); pts.forEach((q,i)=>i?ctx.lineTo(q[0],q[1]):ctx.moveTo(q[0],q[1])); ctx.stroke(); ctx.setLineDash([]);
        if(air) x.leg.stops.forEach(h=>{const [sx,sy]=pt(h); ctx.fillStyle=col.air; ctx.beginPath(); ctx.arc(sx,sy,Math.max(3.5,W*.32),0,7); ctx.fill(); ctx.strokeStyle='#fff'; ctx.lineWidth=1.5; ctx.stroke();});
      });
    }
    if(last){ [[last.origin,'A'],[last.dest,'B']].forEach(([c,l])=>{ const [mx,my]=mid(c); const r=Math.max(7,W*.55);
      ctx.fillStyle=col.route; ctx.beginPath(); ctx.arc(mx,my,r,0,7); ctx.fill(); ctx.fillStyle='#fff'; ctx.font='600 '+Math.round(r*1.15)+'px IBM Plex Sans, sans-serif'; ctx.textAlign='center'; ctx.textBaseline='middle'; ctx.fillText(l,mx,my+1); }); }
    ctx.fillStyle=col.ink; ctx.globalAlpha=.7; ctx.font=Math.max(8,Math.round(W*.42))+'px IBM Plex Mono, monospace'; ctx.textAlign='left'; ctx.textBaseline='top';
    for(let x=-16;x<=15;x+=4){const [cx]=center(x,Y0,W,H,rs); ctx.fillText(x,cx-W*.4,1);} ctx.textBaseline='middle';
    for(let y=-12;y<=15;y+=4){const [,cy]=center(0,y,W,H,rs); ctx.fillText(y,1,cy);} ctx.globalAlpha=1;
  }
  [monthSel,dayIn,yearIn].forEach(e=>e.addEventListener('input',autoArrival));
  [amonthSel,adayIn,ayearIn,ahourIn].forEach(e=>e.addEventListener('input',()=>{arrTouched=true;}));
  [fromSel,toSel,monthSel,dayIn,yearIn,hourIn,amonthSel,adayIn,ayearIn,ahourIn].forEach(e=>e.addEventListener('input',()=>{invalidate();}));
  document.querySelectorAll('input[name=mode],input[name=fast],input[name=carlpos],input[name=flyer]').forEach(e=>e.addEventListener('change',()=>{invalidate();}));
  $('swap').addEventListener('click',()=>{const a=fromSel.value; fromSel.value=toSel.value; toSel.value=a; invalidate();});
  const pl=$('plans');
  pl.addEventListener('click',e=>{ if(e.target.closest('.gcinput')) return; const c=e.target.closest('.plan[data-i]'); if(c){selected=+c.dataset.i; render();}});
  pl.addEventListener('keydown',e=>{ if(e.target.closest('.gcinput')) return; if((e.key==='Enter'||e.key===' ')&&e.target.matches('.plan[data-i]')){e.preventDefault(); selected=+e.target.dataset.i; render(); const n=pl.querySelector('.plan.sel'); n&&n.focus();}});
  pl.addEventListener('input',e=>{ const inp=e.target.closest('.gcinput'); if(!inp) return; e.stopPropagation();
    const card=+inp.dataset.card, seg=+inp.dataset.seg, base=+inp.dataset.base; let v=parseFloat(inp.value); if(isNaN(v)||v<0) v=0;
    gcOverride[card+'|'+seg]=v;
    const costEl=pl.querySelector('.cost[data-card-cost="'+card+'"]'); if(!costEl) return;
    const fixed=+costEl.dataset.fixed; let tot=fixed;
    pl.querySelectorAll('.gcinput[data-card="'+card+'"]').forEach(x=>{ let xv=parseFloat(x.value); if(isNaN(xv)||xv<0) xv=0; tot+=xv; });
    costEl.textContent=fmt(tot)+' gp';
  });
  document.querySelectorAll('.chip[data-plus]').forEach(x=>x.addEventListener('click',()=>{ const d=addDays(currentDate(),+x.dataset.plus); amonthSel.value=d.m; adayIn.value=d.d; ayearIn.value=d.y; arrTouched=true; invalidate(); }));
  window.addEventListener('resize',drawMap);
  if(window.matchMedia) matchMedia('(prefers-color-scheme: dark)').addEventListener('change',drawMap);
  new MutationObserver(drawMap).observe(document.documentElement,{attributes:true,attributeFilter:['data-theme','data-palette']});
  if(document.fonts&&document.fonts.ready) document.fonts.ready.then(drawMap);
  autoArrival();
  (function(){
    const root=document.documentElement, btns=document.querySelectorAll('.themebox button');
    let cur; try{ cur=localStorage.getItem('kt-theme'); }catch(e){}
    if(cur!=='light'&&cur!=='dark') cur=(window.matchMedia&&matchMedia('(prefers-color-scheme: dark)').matches)?'dark':'light';
    function apply(t){ root.setAttribute('data-theme',t); btns.forEach(x=>x.setAttribute('aria-pressed',String(x.dataset.t===t))); }
    apply(cur);
    const psel=document.getElementById('palette'); let pv; try{ pv=localStorage.getItem('kt-palette'); }catch(e){}
    if(!['teal','navy','sage','mono'].includes(pv)) pv='teal'; psel.value=pv; root.setAttribute('data-palette',pv);
    psel.addEventListener('change',()=>{ root.setAttribute('data-palette',psel.value); try{localStorage.setItem('kt-palette',psel.value);}catch(e){} drawMap(); });
    btns.forEach(x=>x.addEventListener('click',()=>{ apply(x.dataset.t); try{localStorage.setItem('kt-theme',x.dataset.t);}catch(e){} }));
  })();
  showPrompt();
})();

</script>
@endpush
