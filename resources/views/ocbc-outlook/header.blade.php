<header class="bg-white text-gray-900 shadow-sm">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <!-- Logo Left -->
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5 transition-opacity hover:opacity-90">
                <span class="sr-only">OCBC Indonesia</span>
                <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                    alt="OCBC Logo" class="h-8 w-auto" />
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <div class="flex lg:hidden">
            <button type="button" onclick="document.getElementById('mobile-menu').showModal()"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-500 hover:text-[#DA291C] focus:outline-none transition-colors duration-200">
                <span class="sr-only">Open main menu</span>
                <i class="fa-solid fa-bars fa-lg"></i>
            </button>
        </div>

        <!-- Desktop Navigation Center -->
        <div class="hidden lg:flex lg:gap-x-1">
            <a href="#event-highlights"
                class="text-sm font-semibold text-gray-800 px-4 py-2 rounded-full hover:text-[#DA291C] hover:bg-gray-50 transition-all duration-200">
                Event Highlights
            </a>
            <a href="#agenda-section"
                class="text-sm font-semibold text-gray-800 px-4 py-2 rounded-full hover:text-[#DA291C] hover:bg-gray-50 transition-all duration-200">
                Agenda
            </a>
            <a href="#speakers"
                class="text-sm font-semibold text-gray-800 px-4 py-2 rounded-full hover:text-[#DA291C] hover:bg-gray-50 transition-all duration-200">
                Speakers
            </a>
            <a href="#sponsored"
                class="text-sm font-semibold text-gray-800 px-4 py-2 rounded-full hover:text-[#DA291C] hover:bg-gray-50 transition-all duration-200">
                Sponsors
            </a>
            <a href="#gallery"
                class="text-sm font-semibold text-gray-800 px-4 py-2 rounded-full hover:text-[#DA291C] hover:bg-gray-50 transition-all duration-200">
                Gallery
            </a>
        </div>

        <!-- Desktop CTA Right -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#private-consultation"
                class="text-sm font-semibold text-white bg-[#DA291C] px-5 py-2.5 rounded-full hover:bg-[#B91F14] shadow-sm shadow-[#DA291C]/10 hover:shadow-md hover:shadow-[#DA291C]/20 transition-all duration-200">
                Konsultasi Privat
            </a>
        </div>
    </nav>

    <!-- Mobile Menu Dialog -->
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden p-0 m-0 max-w-none max-h-none w-full h-full bg-transparent border-0">
        <div class="fixed inset-0 z-50 flex justify-end focus:outline-none">
            <!-- Semi-transparent Backdrop Overlay -->
            <div class="fixed inset-0 bg-black/40 backdrop-blur-sm transition-opacity duration-300" 
                 onclick="document.getElementById('mobile-menu').close()"></div>

            <!-- Drawer Container -->
            <div class="relative w-full max-w-sm bg-white p-6 shadow-2xl ring-1 ring-gray-100 flex flex-col h-full z-10">
                <!-- Header -->
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">OCBC Indonesia</span>
                        <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                            alt="OCBC Logo" class="h-8 w-auto" />
                    </a>
                    <button type="button" onclick="document.getElementById('mobile-menu').close()"
                        class="-m-2.5 rounded-md p-2.5 text-gray-500 hover:text-[#DA291C] focus:outline-none transition-colors duration-200">
                        <span class="sr-only">Close menu</span>
                        <i class="fa-solid fa-xmark fa-lg"></i>
                    </button>
                </div>

                <!-- Navigation List -->
                <div class="mt-8 flex flex-col justify-between h-full">
                    <div class="space-y-1.5">
                        <a href="#hero-section" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Home
                        </a>
                        <a href="#event-highlights" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Event Highlights
                        </a>
                        <a href="#agenda-section" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Agenda
                        </a>
                        <a href="#speakers" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Speakers
                        </a>
                        <a href="#sponsored" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Sponsors
                        </a>
                        <a href="#gallery" onclick="document.getElementById('mobile-menu').close()"
                            class="block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 hover:text-[#DA291C] transition-all duration-150">
                            Gallery
                        </a>
                    </div>
                    
                    <div class="pt-6 border-t border-gray-100">
                        <a href="#private-consultation" onclick="document.getElementById('mobile-menu').close()"
                            class="block w-full rounded-full px-5 py-3 text-base font-semibold text-white bg-[#DA291C] hover:bg-[#B91F14] text-center shadow-sm shadow-[#DA291C]/10 hover:shadow-md transition-all duration-200">
                            Konsultasi Privat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</header>
