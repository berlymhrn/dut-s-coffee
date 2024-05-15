    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[520px]">
            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/kopi2.jpg" class="w-full h-full object-cover" alt="carousel image">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-14 md:mt-80 ml-20 md:ml-28 z-0" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="font-bold text-white text-md md:text-3xl uppercase mr-16 md:mr-28"> Semangat Baru dengan
                        Kopi Berkualitas Tinggi dari Kebun Terbaik</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-sm md:text-2xl capitalize mr-16 md:mr-28">
                        Hadirkan energi dan inspirasi dalam setiap hari Anda dengan secangkir kopi premium kami.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="https://img.freepik.com/premium-photo/tourists-visiting-city-drinking-coffee_23-2149374321.jpg?w=740"
                        class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-14 md:mt-80 ml-20 md:ml-28 z-0" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="font-bold text-white text-md md:text-3xl uppercase mr-16 md:mr-28">Kopi Pilihan,
                        Pengalaman Tak Tertandingi dalam Setiap Tegukan</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-sm md:text-2xl capitalize mr-16 md:mr-28">
                        Setiap tegukan kopi memberikan pengalaman yang autentik yang
                        diwariskan dari berbagai penjuru di Indoneisa.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item >
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/kopi3.jpg" class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-14 md:mt-80 ml-20 md:ml-28 z-0" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="font-bold text-white text-md md:text-3xl uppercase mr-16 md:mr-28">Seni Menyeduh Kopi
                        Untuk Mendapatkan Rasa Autentik di Setiap Tegukan</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-sm md:text-2xl capitalize mr-16 md:mr-28">
                        Kami menyajikan kopi yang dibuat dengan penuh dedikasi dan cinta, untuk pengalaman minum kopi
                        yang istimewa.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="https://img.freepik.com/premium-photo/coffee-shop-interior-with-customer-sitting-counter-barista-working-counter_1187703-26354.jpg?w=826"
                        class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-14 md:mt-80 ml-20 md:ml-28 z-0" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="font-bold text-white text-md md:text-3xl uppercase mr-16 md:mr-28">Cipta Rasa Kopi dari
                        Hati, Disajikan dengan Penuh Perhatian</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-sm md:text-2xl capitalize mr-16 md:mr-28">
                        Kami menyajikan kopi yang dibuat dengan penuh dedikasi dan cinta, untuk pengalaman minum kopi
                        yang istimewa
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div id="carousel-indicators"
            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        </div>


        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-secondaryColor">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-secondaryColor">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('default-carousel');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const totalItems = items.length;
            let currentIndex = 0;

            function showItem(index) {
                items.forEach((item, i) => {
                    item.classList.add('hidden');
                });
                items[index].classList.remove('hidden');
                updateIndicators(index);
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalItems;
                showItem(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                showItem(currentIndex);
            }

            function updateIndicators(index) {
                const indicatorsContainer = document.getElementById('carousel-indicators');
                indicatorsContainer.innerHTML = ''; // Clear existing indicators
                for (let i = 0; i < totalItems; i++) {
                    const indicator = document.createElement('button');
                    indicator.type = 'button';
                    indicator.classList.add('w-3', 'h-3', 'rounded-full', 'bg-gray-200');
                    indicator.setAttribute('aria-current', 'false');
                    indicator.setAttribute('aria-label', `Slide ${i + 1}`);
                    indicator.setAttribute('data-carousel-slide-to', i);
                    indicatorsContainer.appendChild(indicator);
                }
                const indicators = indicatorsContainer.querySelectorAll('[data-carousel-slide-to]');
                indicators[index].setAttribute('aria-current', 'true');
                indicators[index].classList.remove('bg-gray-200');
                indicators[index].classList.add('bg-secondaryColor');
            }

            const nextButton = carousel.querySelector('[data-carousel-next]');
            const prevButton = carousel.querySelector('[data-carousel-prev]');

            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);

            // Auto slide
            setInterval(nextSlide, 5000); // Change slide every 5 seconds

            // Show initial slide
            showItem(currentIndex);
        });
    </script>
