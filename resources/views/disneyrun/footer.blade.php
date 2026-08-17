<!-- ============ FOOTER SECTION ============ -->
<footer class="site-footer-section">
    <div class="site-footer-grid">
        <div class="site-footer-content text-center">
            <p>
                PT Bank OCBC NISP Tbk berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) &amp; Bank Indonesia (BI),
                serta merupakan peserta penjaminan Lembaga Penjamin Simpanan (LPS).
            </p>
        </div>
    </div>
</footer>

@push('script')
    <script>
        // Mobile nav toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNav = document.getElementById('mobileNav');
            const toggleBtn = document.getElementById('mobileNavToggle');
            const closeBtn = document.getElementById('mobileNavClose');

            if (toggleBtn && mobileNav) {
                toggleBtn.addEventListener('click', () => mobileNav.classList.add('open'));
            }
            if (closeBtn && mobileNav) {
                closeBtn.addEventListener('click', () => mobileNav.classList.remove('open'));
            }
            if (mobileNav) {
                mobileNav.addEventListener('click', (e) => {
                    if (e.target === mobileNav) mobileNav.classList.remove('open');
                });
            }

            // Scroll reveal animation
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };
            const observer = new IntersectionObserver(function(entries, obs) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, options);
            document.querySelectorAll('.reveal-element').forEach(el => observer.observe(el));

            // Informasi Lebih Lanjut Tab Switcher
            const tabButtons = document.querySelectorAll('#info-tab-list .info-tab-btn');
            const tabPanels = document.querySelectorAll('#info-tab-content .info-tab-panel');

            if (tabButtons.length > 0 && tabPanels.length > 0) {
                tabButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const targetTab = this.getAttribute('data-tab');

                        // Reset all tab button styles
                        tabButtons.forEach(btn => {
                            btn.classList.remove('text-[#ea0a2a]');
                            btn.classList.add('text-slate-700');
                        });
                        // Set active tab button style
                        this.classList.remove('text-slate-700');
                        this.classList.add('text-[#ea0a2a]');

                        // Hide all panels, show target panel
                        tabPanels.forEach(panel => {
                            if (panel.getAttribute('data-panel') === targetTab) {
                                panel.classList.remove('hidden');
                            } else {
                                panel.classList.add('hidden');
                            }
                        });
                    });
                });
            }

            // Load embedded videos only when they are near the viewport.
            const lazyVideos = document.querySelectorAll('iframe.js-lazy-video[data-src]');
            if (lazyVideos.length > 0) {
                const loadVideo = (iframe) => {
                    if (!iframe.getAttribute('src')) {
                        iframe.setAttribute('src', iframe.getAttribute('data-src'));
                    }
                };

                if ('IntersectionObserver' in window) {
                    const videoObserver = new IntersectionObserver((entries, obs) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                loadVideo(entry.target);
                                obs.unobserve(entry.target);
                            }
                        });
                    }, {
                        rootMargin: '240px 0px'
                    });

                    lazyVideos.forEach((iframe) => videoObserver.observe(iframe));
                } else {
                    lazyVideos.forEach(loadVideo);
                }
            }
        });

        // Target: 5 September 2026, 00:00 WIB (UTC+7)
        const presaleTarget = new Date("2026-09-05T00:00:00+07:00").getTime();

        function updateCountdown() {
            const now = Date.now();
            const distance = presaleTarget - now;

            const daysEls = document.querySelectorAll('.cd-days, #cd-days');
            const hoursEls = document.querySelectorAll('.cd-hours, #cd-hours');
            const minutesEls = document.querySelectorAll('.cd-minutes, #cd-minutes');
            const secondsEls = document.querySelectorAll('.cd-seconds, #cd-seconds');

            if (distance <= 0) {
                daysEls.forEach(el => el.textContent = '00');
                hoursEls.forEach(el => el.textContent = '00');
                minutesEls.forEach(el => el.textContent = '00');
                secondsEls.forEach(el => el.textContent = '00');
                if (typeof countdownInterval !== 'undefined') clearInterval(countdownInterval);
                return;
            }

            const pad = (n) => String(n).padStart(2, '0');
            const days = pad(Math.floor(distance / (1000 * 60 * 60 * 24)));
            const hours = pad(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
            const minutes = pad(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
            const seconds = pad(Math.floor((distance % (1000 * 60)) / 1000));

            daysEls.forEach(el => el.textContent = days);
            hoursEls.forEach(el => el.textContent = hours);
            minutesEls.forEach(el => el.textContent = minutes);
            secondsEls.forEach(el => el.textContent = seconds);
        }

        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);

        // Scroll lock untuk popup presale
        let presaleScrollY = 0;

        function openPresaleModal() {
            const modal = document.getElementById('presaleModal');
            if (!modal) return;
            presaleScrollY = window.scrollY;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${presaleScrollY}px`;
            document.body.style.left = '0';
            document.body.style.right = '0';
            modal.classList.remove('hidden');
        }

        function closePresaleModal() {
            const modal = document.getElementById('presaleModal');
            if (modal) modal.classList.add('hidden');
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            window.scrollTo(0, presaleScrollY);
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Auto open presale countdown popup modal on page load
            openPresaleModal();

            // Press Escape key to close modal
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closePresaleModal();
                }
            });
        });
    </script>
@endpush
