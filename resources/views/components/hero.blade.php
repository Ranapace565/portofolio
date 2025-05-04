<section class="bg-white dark:bg-gray-900" id="saya">
    <div
        class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 justify-center items-center">
        <div class="mr-auto place-self-center lg:col-span-7">
            <p class="text-primary-500 text-bold">Hallo 🙌, saya</p>
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white ">
                Rana Bagaskara</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Saya
                adalah seorang Backend Developer yang fokus membangun arsitektur sistem yang solid, efisien, dan
                scalable. Dengan latar belakang di bidang Teknologi Informasi dan saat ini menempuh semester 4 di
                Politeknik Negeri Jember, jurusan Teknologi Informasi, saya memiliki ketertarikan mendalam dalam
                merancang logika backend yang terstruktur, modular, dan berorientasi pada prinsip Object Oriented serta
                pola MVC. Saya terbiasa bekerja dengan basis data, API, serta pengelolaan server, dan selalu
                mengedepankan efisiensi kode dan kemudahan maintenance. Dengan pendekatan berbasis riset dan kebutuhan
                pengguna, saya siap menghadirkan solusi digital yang kuat dan andal di sisi server.</p>
            <a href="{{ route('show.pdf', ['filename' => 'Rana Bagaskara_CV.pdf']) }}"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Lihat CV saya
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/rana-bagaskara-536b16291/"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                LinkIn
            </a>
            <a href="https://id.jobstreet.com/id/profile/rana-bagaskara-HydM1r1t4j"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Job Street
            </a>
        </div>
        <div class="lg:mt-0 lg:col-span-5 lg:flex relative ">
            <span class="absolute inset-0 z-10 flex justify-center items-center h-full w-full">

                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                    class="w-full h-full max-w-[400px] max-h-[400px]">
                    <path class="fill-primary-600"
                        d="M49.2,-73.5C64.1,-67,76.8,-53.9,84.5,-38.2C92.3,-22.5,95.2,-4.2,85.4,7C75.5,18.1,52.9,22.2,39.1,28.6C25.3,35,20.4,43.8,12,50.6C3.7,57.4,-8,62.2,-22.1,63.4C-36.2,64.6,-52.7,62.3,-64.5,53.3C-76.3,44.3,-83.4,28.7,-81.8,14.1C-80.3,-0.5,-70.2,-13.9,-59.5,-23C-48.8,-32,-37.7,-36.6,-27.7,-45.3C-17.7,-54,-8.8,-66.8,4.2,-73.3C17.2,-79.8,34.3,-79.9,49.2,-73.5Z"
                        transform="translate(100 100)" />
                </svg>
            </span>

            <img src="{{ asset('/storage/profile/saya.png') }}" alt="Logo" class="relative z-10 max-w-full h-auto">
        </div>

    </div>
</section>
