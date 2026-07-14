@extends('app')

@section('isOCBC', true)

@section('content')
<div class="ocbc-page-wrapper">
    <!-- Hero Section -->
    <section class="ocbc-hero">
        <div class="ocbc-container hero-container">
            <div class="hero-text-content">
                <span class="badge-promo">SPECIAL EDITION</span>
                <h1 class="hero-title">Kartu Kredit <span class="highlight-red">OCBC Voyage</span> &amp; <span class="highlight-gray">Platinum Travel</span></h1>
                <p class="hero-description">
                    Ubah setiap transaksi liburan menjadi petualangan premium. Dapatkan akses lounge bandara gratis, asuransi perjalanan komprehensif, dan konversi miles terbaik.
                </p>
                <div class="hero-ctas">
                    <a href="#apply" class="cta-button primary-cta">Buka Sekarang</a>
                    <a href="#calculator" class="cta-button secondary-cta">Hitung Benefit</a>
                </div>
            </div>
            
            <div class="hero-card-preview">
                <div class="card-3d-wrapper">
                    <div class="card-3d style-voyage" id="vacation-card">
                        <div class="card-front">
                            <div class="card-logo">🔴 OCBC</div>
                            <div class="card-chip"></div>
                            <div class="card-number">•••• •••• •••• 8888</div>
                            <div class="card-info">
                                <div class="card-holder">
                                    <label>CARD HOLDER</label>
                                    <p>FADLY SAF</p>
                                </div>
                                <div class="card-expiry">
                                    <label>EXPIRES</label>
                                    <p>08 / 31</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card Style Selector -->
                <div class="card-color-picker">
                    <button class="color-dot active" data-color="voyage" style="background: linear-gradient(135deg, #1f2937, #111827);" title="Voyage Black"></button>
                    <button class="color-dot" data-color="gold" style="background: linear-gradient(135deg, #d97706, #92400e);" title="Sunrise Gold"></button>
                    <button class="color-dot" data-color="teal" style="background: linear-gradient(135deg, #0d9488, #115e59);" title="Ocean Teal"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Benefits Section -->
    <section class="ocbc-benefits">
        <div class="ocbc-container">
            <div class="section-header text-center">
                <h2>Keuntungan Eksklusif Liburan Anda</h2>
                <p>Nikmati kenyamanan berkelas dunia di setiap destinasi impian Anda.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h3>Global Lounge Access</h3>
                    <p>Akses gratis ke lebih dari 1.200 Plaza Premium Lounge di bandara internasional seluruh dunia.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <h3>0% Overseas Installment</h3>
                    <p>Ubah transaksi belanja Anda di luar negeri menjadi cicilan 0% hingga 12 bulan dengan mudah via ONe Mobile.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Rp 10M Travel Protection</h3>
                    <p>Perlindungan asuransi kecelakaan dan keterlambatan penerbangan hingga Rp 10 Miliar secara otomatis.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <h3>Voyage Miles Booster</h3>
                    <p>Dapatkan Voyage Miles untuk setiap pembelanjaan Rp 10.000 yang dapat ditukarkan langsung ke Singapore Airlines KrisFlyer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Reward Calculator -->
    <section class="ocbc-calculator" id="calculator">
        <div class="ocbc-container">
            <div class="calc-box">
                <div class="calc-left">
                    <h2>Hitung Potensi Voyage Miles Anda</h2>
                    <p>Masukkan estimasi pengeluaran bulanan Anda untuk melihat destinasi gratis yang bisa Anda dapatkan!</p>
                    
                    <div class="input-group">
                        <label for="spend-slider">Estimasi Pengeluaran Bulanan (Rupiah)</label>
                        <div class="range-container">
                            <input type="range" id="spend-slider" min="5000000" max="100000000" step="5000000" value="15000000">
                            <div class="spend-value-display">Rp <span id="spend-text">15.000.000</span></div>
                        </div>
                    </div>
                    
                    <div class="points-results">
                        <div class="result-item">
                            <span class="result-label">Voyage Miles per Tahun</span>
                            <span class="result-number" id="miles-result">18.000 Miles</span>
                        </div>
                    </div>
                </div>
                
                <div class="calc-right">
                    <h3>Rekomendasi Destinasi Penukaran</h3>
                    <div class="destination-cards">
                        <div class="destination-card active" data-miles="10000" id="dest-sg">
                            <div class="dest-img" style="background-image: url('https://images.unsplash.com/photo-1525625293386-3f8f99389edd?q=80&w=300&auto=format&fit=crop');"></div>
                            <div class="dest-info">
                                <h4>Singapore (KrisFlyer)</h4>
                                <p>Butuh: 10,000 Miles</p>
                                <span class="dest-status status-achieved">Dapat Dicapai!</span>
                            </div>
                        </div>
                        <div class="destination-card" data-miles="35000" id="dest-jp">
                            <div class="dest-img" style="background-image: url('https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?q=80&w=300&auto=format&fit=crop');"></div>
                            <div class="dest-info">
                                <h4>Tokyo, Japan</h4>
                                <p>Butuh: 35,000 Miles</p>
                                <span class="dest-status" id="status-jp">Kurang 17,000 Miles</span>
                            </div>
                        </div>
                        <div class="destination-card" data-miles="70000" id="dest-uk">
                            <div class="dest-img" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?q=80&w=300&auto=format&fit=crop');"></div>
                            <div class="dest-info">
                                <h4>London, UK</h4>
                                <p>Butuh: 70,000 Miles</p>
                                <span class="dest-status" id="status-uk">Kurang 52,000 Miles</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section class="ocbc-apply-form" id="apply">
        <div class="ocbc-container form-container-box">
            <div class="form-header text-center">
                <h2>Mulai Perjalanan Premium Anda</h2>
                <p>Isi formulir singkat di bawah untuk pengajuan Kartu Kredit OCBC Voyage Anda.</p>
            </div>
            
            <form class="application-form" id="apply-cc-form">
                <div class="form-grid">
                    <div class="form-group-custom">
                        <label>Nama Lengkap (Sesuai KTP)</label>
                        <input type="text" placeholder="Masukkan nama lengkap Anda" required>
                    </div>
                    <div class="form-group-custom">
                        <label>Nomor Telepon / WhatsApp</label>
                        <input type="tel" placeholder="Contoh: 08123456789" required>
                    </div>
                    <div class="form-group-custom">
                        <label>Alamat Email</label>
                        <input type="email" placeholder="Contoh: nama@domain.com" required>
                    </div>
                    <div class="form-group-custom">
                        <label>Pendapatan Bulanan Saat Ini</label>
                        <select required>
                            <option value="">Pilih Rentang Pendapatan</option>
                            <option value="1">&lt; Rp 15 Juta</option>
                            <option value="2">Rp 15 Juta - Rp 30 Juta</option>
                            <option value="3">Rp 30 Juta - Rp 50 Juta</option>
                            <option value="4">&gt; Rp 50 Juta</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-terms">
                    <input type="checkbox" id="consent" required>
                    <label for="consent">Saya menyetujui PT Bank OCBC NISP Tbk untuk menghubungi saya terkait pengajuan kartu kredit ini.</label>
                </div>
                
                <div class="form-submit-container">
                    <button type="submit" class="btn-submit-form">Kirim Pengajuan</button>
                </div>
            </form>
            <div class="form-success-message" id="success-banner" style="display:none;">
                <div class="success-icon"><i class="fa-solid fa-circle-check"></i></div>
                <h3>Terima Kasih! Pengajuan Anda Berhasil Dikirim</h3>
                <p>Representative kami akan menghubungi Anda dalam waktu 1x24 jam kerja.</p>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Card style switcher
        const colorDots = document.querySelectorAll('.color-dot');
        const cardElement = document.getElementById('vacation-card');
        
        colorDots.forEach(dot => {
            dot.addEventListener('click', function() {
                // Remove active class
                colorDots.forEach(d => d.classList.remove('active'));
                this.classList.add('active');
                
                const selectedColor = this.getAttribute('data-color');
                
                // Clear existing card color classes
                cardElement.className = 'card-3d';
                
                if (selectedColor === 'voyage') {
                    cardElement.classList.add('style-voyage');
                } else if (selectedColor === 'gold') {
                    cardElement.classList.add('style-gold');
                } else if (selectedColor === 'teal') {
                    cardElement.classList.add('style-teal');
                }
            });
        });
        
        // Spend calculator logic
        const slider = document.getElementById('spend-slider');
        const spendText = document.getElementById('spend-text');
        const milesResult = document.getElementById('miles-result');
        
        const destSg = document.getElementById('dest-sg');
        const destJp = document.getElementById('dest-jp');
        const destUk = document.getElementById('dest-uk');
        
        const statusJp = document.getElementById('status-jp');
        const statusUk = document.getElementById('status-uk');

        function formatRupiah(value) {
            return new Intl.NumberFormat('id-ID').format(value);
        }

        function calculateMiles() {
            const spend = parseInt(slider.value);
            spendText.textContent = formatRupiah(spend);
            
            // Formula: Rp 10.000 spent = 1 Voyage Mile. Plus annual multiplier
            // Let's say: monthly miles = spend / 10000. Annual miles = monthly miles * 12.
            const annualMiles = Math.round((spend / 10000) * 12);
            milesResult.textContent = new Intl.NumberFormat('id-ID').format(annualMiles) + " Miles";
            
            // Destinations verification
            // Singapore (10k)
            if (annualMiles >= 10000) {
                destSg.querySelector('.dest-status').className = 'dest-status status-achieved';
                destSg.querySelector('.dest-status').textContent = 'Dapat Dicapai!';
            } else {
                const diff = 10000 - annualMiles;
                destSg.querySelector('.dest-status').className = 'dest-status';
                destSg.querySelector('.dest-status').textContent = `Kurang ${new Intl.NumberFormat('id-ID').format(diff)} Miles`;
            }
            
            // Tokyo (35k)
            if (annualMiles >= 35000) {
                statusJp.className = 'dest-status status-achieved';
                statusJp.textContent = 'Dapat Dicapai!';
                destJp.classList.add('active');
            } else {
                const diff = 35000 - annualMiles;
                statusJp.className = 'dest-status';
                statusJp.textContent = `Kurang ${new Intl.NumberFormat('id-ID').format(diff)} Miles`;
                destJp.classList.remove('active');
            }
            
            // London (70k)
            if (annualMiles >= 70000) {
                statusUk.className = 'dest-status status-achieved';
                statusUk.textContent = 'Dapat Dicapai!';
                destUk.classList.add('active');
            } else {
                const diff = 70000 - annualMiles;
                statusUk.className = 'dest-status';
                statusUk.textContent = `Kurang ${new Intl.NumberFormat('id-ID').format(diff)} Miles`;
                destUk.classList.remove('active');
            }
        }
        
        slider.addEventListener('input', calculateMiles);
        calculateMiles(); // run initial
        
        // Handle form submit
        const applyForm = document.getElementById('apply-cc-form');
        const successBanner = document.getElementById('success-banner');
        
        if (applyForm) {
            applyForm.addEventListener('submit', function(e) {
                e.preventDefault();
                applyForm.style.display = 'none';
                successBanner.style.display = 'block';
                successBanner.scrollIntoView({ behavior: 'smooth', block: 'center' });
            });
        }
    });
</script>
@endpush
