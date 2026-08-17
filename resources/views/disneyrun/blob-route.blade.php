@extends('app')

@section('header')
    @include('disneyrun.header')
@endsection

@section('footer')
    @include('disneyrun.footer')
@endsection

@section('content')
    <div class="blob-route-page min-h-screen pt-16 md:pt-20">
        <div class="blob blob-1" aria-hidden="true"></div>
        <div class="blob blob-2" aria-hidden="true"></div>
        <div class="blob blob-3" aria-hidden="true"></div>

        <div class="route-shell py-5 md:py-8">
            <section class="route-card route-hero">
                <div>
                    <p class="text-xs font-extrabold tracking-[0.22em] text-[#ea0a2a] uppercase mb-3">Disney Run Jakarta 2026
                    </p>
                    <h1 class="route-title">Blob Route Experience, Satu Jalur dari Start sampai Finish</h1>
                    <p class="route-subtitle">
                        Konsep ini menyatukan ribbon, dotted route, milestone badge, dan titik landmark Jakarta
                        menjadi alur scroll yang terasa seperti menyusuri rute lari.
                    </p>
                    <div class="route-ribbon route-ribbon--curved" aria-hidden="true"></div>
                    <div class="checkpoint-row">
                        <span class="checkpoint-pill">START</span>
                        <span class="checkpoint-pill">KM 5</span>
                        <span class="checkpoint-pill">KM 10</span>
                        <span class="checkpoint-pill">FINISH</span>
                    </div>
                </div>
                <div class="route-card" style="padding:16px;">
                    <h3 class="route-panel-title">Route Narrative</h3>
                    <p class="route-panel-copy">
                        Tiap blok halaman saling tersambung oleh route ribbon agar white space tidak terasa kosong,
                        sekaligus menjaga layout tetap ringan dan cepat di-render.
                    </p>
                    <div class="badge-row">
                        <span class="badge-token">Magic Trail</span>
                        <span class="badge-token">Dotted Path</span>
                        <span class="badge-token">Local Story</span>
                    </div>
                </div>
            </section>

            <section class="route-card mt-4">
                <h2 class="route-panel-title">Race Category Route</h2>
                <p class="route-panel-copy">Visual panjang rute kategori dibuat sederhana supaya informatif tapi tidak
                    berat.</p>
                <div class="category-grid">
                    <article class="category-chip">
                        <h4>1K Family</h4>
                        <div class="track-mini"><span style="--route: 28%;"></span></div>
                    </article>
                    <article class="category-chip">
                        <h4>5K City Dash</h4>
                        <div class="track-mini"><span style="--route: 62%;"></span></div>
                    </article>
                    <article class="category-chip">
                        <h4>10K Challenge</h4>
                        <div class="track-mini"><span style="--route: 100%;"></span></div>
                    </article>
                </div>
            </section>

            <section class="route-card mt-4">
                <h2 class="route-panel-title">Landmark Jakarta di Sepanjang Jalur</h2>
                <p class="route-panel-copy">Siluet generik dipakai sebagai checkpoint lokasi agar halaman terasa lokal tanpa
                    gambar berat.</p>
                <div class="jakarta-landmarks">
                    <article class="landmark">
                        <div class="silhouette" aria-hidden="true"></div>
                        <p>Checkpoint 1: Area Monas</p>
                    </article>
                    <article class="landmark">
                        <div class="silhouette" aria-hidden="true"></div>
                        <p>Checkpoint 2: Area GBK</p>
                    </article>
                    <article class="landmark">
                        <div class="silhouette" aria-hidden="true"></div>
                        <p>Checkpoint 3: Finish Zone</p>
                    </article>
                </div>
            </section>

            <section class="route-card mt-4">
                <h2 class="route-panel-title">Timeline yang Menyambung</h2>
                <p class="route-panel-copy">Alur registrasi sampai race day dibuat sebagai rail sederhana agar user cepat
                    paham tahapannya.</p>
                <div class="timeline-rail">
                    <article class="timeline-step">
                        <b>STEP 01</b>
                        <p>Registrasi dan pilih kategori lomba.</p>
                    </article>
                    <article class="timeline-step">
                        <b>STEP 02</b>
                        <p>Dapatkan early access dan voucher.</p>
                    </article>
                    <article class="timeline-step">
                        <b>STEP 03</b>
                        <p>Ambil race pack sesuai jadwal.</p>
                    </article>
                    <article class="timeline-step">
                        <b>STEP 04</b>
                        <p>Race day dan unlock finisher badge.</p>
                    </article>
                </div>
                <div class="badge-row">
                    <span class="badge-token">Star Badge</span>
                    <span class="badge-token">Crown Badge</span>
                    <span class="badge-token">Finish Badge</span>
                </div>
            </section>
        </div>
    </div>
@endsection
