<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mobile toggle
        const navbarToggle = document.querySelector("[data-collapse-toggle='navbar-dropdown']");
        const navbarMenu = document.getElementById("navbar-dropdown");
        navbarToggle.addEventListener("click", function() {
            navbarMenu.classList.toggle("hidden");
        });

        // Fungsi untuk menangani perilaku dropdown
        function handleDropdown(dropdownToggle, dropdownMenu) {
            dropdownToggle.addEventListener("mouseover", function() {
                dropdownMenu.classList.remove("hidden");
            });
            dropdownToggle.addEventListener("mouseout", function() {
                dropdownMenu.classList.add("hidden");
            });
            dropdownMenu.addEventListener("mouseover", function() {
                dropdownMenu.classList.remove("hidden");
            });
            dropdownMenu.addEventListener("mouseout", function() {
                dropdownMenu.classList.add("hidden");
            });
        }

        // Tentang kami
        const dropdownToggle = document.getElementById("dropdownNavbarLink");
        const dropdownMenu = document.getElementById("dropdownNavbar");
        handleDropdown(dropdownToggle, dropdownMenu);

        // Menu dropdown
        const dropdownToggle3 = document.getElementById("dropdownNavbarLink3");
        const dropdownMenu3 = document.getElementById("dropdownNavbar3");
        handleDropdown(dropdownToggle3, dropdownMenu3);
    });
</script>

<nav class="bg-primaryColor border-gray-200 py-3 z-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo.png') }}" class="h-16" alt="Logo" />
            <span class="text-white text-md md:text-lg font-bold">DUT`S COFFEE </span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-secondaryColor rounded-lg md:hidden focus:outline-none"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-secondaryColor rounded-lg bg-primaryColor md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white md:bg-transparent md:p-0 text-lg font-bold md:hover:text-secondaryColor"
                        aria-current="page">Home</a>
                </li>
                <div class="relative">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-secondaryColor hover:text-black md:hover:bg-transparent md:border-0 md:hover:text-secondaryColor md:p-0 md:w-auto text-lg font-bold">
                        Tentang Kami
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="absolute left-0 z-50 mt-1 hidden font-semibold bg-secondaryColor divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/visi-misi"
                                    class="block px-4 py-2 hover:bg-gray-50 text-black font-semibold text-base">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="/daftar-barista"
                                    class="block px-4 py-2 hover:bg-gray-50 text-black font-semibold text-base">Daftar
                                    Barista</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                        class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-secondaryColor hover:text-black md:hover:bg-transparent md:border-0 md:hover:text-secondaryColor md:p-0 md:w-auto text-lg font-bold">
                        Menu
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar3"
                        class="absolute left-0 z-50 mt-1 hidden font-semibold bg-secondaryColor divide-y divide-gray-100 rounded-lg shadow w-36">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/menu-coffee"
                                    class="block px-4 py-2 hover:bg-gray-50 text-black font-semibold text-base">Coffee</a>
                            </li>
                            <li>
                                <a href="/menu-non-coffee"
                                    class="block px-4 py-2 hover:bg-gray-50 text-black font-semibold text-base">Non
                                    Coffee</a>
                            </li>
                            <li>
                                <a href="/menu-food"
                                    class="block px-4 py-2 hover:bg-gray-50 text-black font-semibold text-base">Food</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <li>
                    <a href="/gallery"
                        class="block py-2 px-3 text-white md:bg-transparent md:p-0 text-lg font-bold md:hover:text-secondaryColor"
                        aria-current="page">Gallery</a>
                </li>
                <li>
                    <a href="/kontak-kami"
                        class="block py-2 px-3 text-white md:bg-transparent md:p-0 text-lg font-bold md:hover:text-secondaryColor"
                        aria-current="page">Kontak Kami</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
