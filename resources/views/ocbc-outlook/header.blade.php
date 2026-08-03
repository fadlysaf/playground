<header class="bg-white text-gray-900 shadow-sm">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                    alt="OCBC Logo" class="h-8 w-auto" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" command="show-modal" commandfor="mobile-menu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-500 hover:text-[#DA291C]">
                <span class="sr-only">Open main menu</span>
                <i class="fa-solid fa-bars size-6"></i>
            </button>
        </div>
        <el-popover-group class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm/6 font-semibold text-gray-800 hover:text-[#DA291C] transition-colors">Product</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-800 hover:text-[#DA291C] transition-colors">Features</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-800 hover:text-[#DA291C] transition-colors">Marketplace</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-800 hover:text-[#DA291C] transition-colors">Company</a>
        </el-popover-group>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-white bg-[#DA291C] hover:bg-[#B91F14] px-4 py-2 rounded-full transition-colors">
                Log in <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </nav>
    <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
                <el-dialog-panel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-200">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="https://cdn1.ocbc.id/asset/media/Project/OCBC/OCBCID/V1/Header/Logo-Menu/ocbc-red.png?h=392&w=1452&rev=3fff324a594d4b888ba96558560945ae"
                                alt="OCBC Logo" class="h-8 w-auto" />
                        </a>
                        <button type="button" command="close" commandfor="mobile-menu"
                            class="-m-2.5 rounded-md p-2.5 text-gray-500 hover:text-[#DA291C]">
                            <span class="sr-only">Close menu</span>
                            <i class="fa-solid fa-xmark size-6"></i>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-200">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button" command="--toggle" commandfor="products"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">
                                        Product
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Analytics</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Engagement</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Security</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Integrations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Automations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Watch
                                            demo</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-700 hover:bg-gray-100 hover:text-[#DA291C]">Contact
                                            sales</a>
                                    </el-disclosure>
                                </div>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white bg-[#DA291C] hover:bg-[#B91F14] text-center">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>
</header>
