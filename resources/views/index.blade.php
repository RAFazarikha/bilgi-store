<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
        <style>
        .gradient {
            background: linear-gradient(90deg, #1D3557 0%, #457B9D 100%);
        }
        </style>
    </head>
    <body class="leading-normal tracking-normal text-white-100 gradient">
        <!--Nav-->
        <nav id="header" class="fixed w-full z-30 top-0 text-white-100">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
            <a class="toggleColour text-white-100 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                BILGI STORE
            </a>
            </div>
            <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white-100 lg:bg-transparent text-blue p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block text-blue no-underline hover:text-white hover:text-underline py-2 px-4" href="#home">Home</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-blue no-underline hover:text-white hover:text-underline py-2 px-4" href="#about">About</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-blue no-underline hover:text-white hover:text-underline py-2 px-4" href="#advantages">Advantages</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-blue no-underline hover:text-white hover:text-underline py-2 px-4" href="#service">Service</a>
                </li>
            </ul>
            <button
                id="navAction"
                onclick="window.location.href='https://api.whatsapp.com/send/?phone=6281779346515&text&type=phone_number&app_absent=0'"
                class="mx-auto lg:mx-0 hover:underline bg-white-100 text-blue font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            >
                Contact Now
            </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
        <!--Hero-->
        <section id="home">
            <div class="pt-24">
                <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                    <!--Left Col-->
                    <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
                        <p class="tracking-loose w-full">Bangun Website Impianmu Hari Ini!</p>
                        <h1 class="my-4 text-5xl font-bold leading-tight">
                            Solusi Website untuk Semua Kebutuhan!
                        </h1>
                        <p class="leading-normal text-2xl mb-8">
                            Butuh website untuk tugas akademik, portfolio, bisnis, atau sistem khusus? BILGI STORE siap menghadirkan solusi terbaik!
                        </p>
                        <a href="https://api.whatsapp.com/send/?phone=6281779346515&text&type=phone_number&app_absent=0" class="mx-auto lg:mx-0 hover:underline bg-white-100 text-blue font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Contact Now
                        </a>
    
                    </div>
                    <!--Right Col-->
                    <div class="w-full md:w-2/5 py-6 flex justify-end">
                        <img class="w-full md:w-4/5" src="{{ asset('storage/images/web.png') }}" />
                    </div>            
                </div>
            </div>
            <div class="relative -mt-12 lg:-mt-24">
                <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#F1F5F9" fill-rule="nonzero">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"
                        ></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#F1F5F9" fill-rule="nonzero">
                        <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
                        ></path>
                    </g>
                    </g>
                </svg>
            </div>
        </section>
        <section id="about" class="bg-white-100 border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-blue">
                About Our Store
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                {{-- <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class="text-3xl text-blue font-bold leading-none mb-3">
                        Lorem ipsum dolor sit amet
                        </h3>
                        <p class="text-blue mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        <br />
                        <br />

                        Images from:

                        <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a>
                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 p-6">
                        
                    </div>
                </div> --}}
                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <img src="{{ asset('storage/images/web2.png') }}" alt="">
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                        <h3 class="text-3xl text-blue font-bold leading-none mb-3">
                            Bilgi Store
                        </h3>
                        <p class="text-blue mb-8 text-justify">
                            Didirikan pada Oktober 2024, BILGI STORE hadir sebagai solusi terpercaya dalam layanan pembuatan website profesional untuk berbagai kebutuhan. Nama "Bilgi" sendiri berasal dari bahasa Turki yang berarti informasi atau pengetahuan, mencerminkan komitmen kami dalam menghadirkan solusi digital berbasis teknologi dan inovasi.
                            <br>
                            <br>
                            Kami memahami bahwa setiap individu dan bisnis memiliki kebutuhan yang unik dalam dunia digital. Oleh karena itu, kami menyediakan layanan pembuatan website yang fleksibel, responsif, dan berkualitas, mencakup : Website Tugas - Mendukung kebutuhan akademik, baik untuk tugas sekolah maupun kuliah, Website Portfolio - Tampilkan karya terbaik Anda secara profesional, Website WordPress - Solusi cepat, mudah, dan fleksibel untuk berbagai keperluan, Website Sistem - Pengembangan sistem berbasis web yang disesuaikan dengan kebutuhan bisnis dan organisasi.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="advantages" class="bg-white-100 border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-blue">
                    Advantages Of Our Store
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink rounded-xl">
                    <div class="flex-none mt-auto bg-white-50 rounded-b-none rounded-t-xl overflow-hidden shadow p-6 flex justify-center">
                        <img src="{{ asset('storage/images/design.png') }}" class="w-full max-w-48" alt="">
                    </div>
                    <div class="flex-1 bg-white-50 rounded-t-none rounded-b-xl overflow-hidden shadow">
                        <div class="w-full font-bold text-xl text-blue px-6">
                            Desain Eksklusif & Responsif
                        </div>
                        <p class="text-blue text-base px-6 mb-5 text-justify">
                            Setiap website dirancang dengan tampilan unik dan modern, memastikan pengalaman pengguna yang optimal di berbagai perangkat, baik desktop maupun mobile.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink rounded-xl">
                    <div class="flex-none mt-auto bg-white-50 rounded-b-none rounded-t-xl overflow-hidden shadow p-6 flex justify-center">
                        <img src="{{ asset('storage/images/low.png') }}" class="w-full max-w-48" alt="">
                    </div>
                    <div class="flex-1 bg-white-50 rounded-t-none rounded-b-xl overflow-hidden shadow">
                        <div class="w-full font-bold text-xl text-blue px-6">
                            Harga Terjangkau & Kompetitif
                        </div>
                        <p class="text-blue text-base px-6 mb-5 text-justify">
                            Kami menawarkan layanan berkualitas tinggi dengan harga yang sesuai dengan kebutuhan Anda, tanpa mengorbankan fitur dan performa.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink rounded-xl">
                    <div class="flex-none mt-auto bg-white-50 rounded-b-none rounded-t-xl overflow-hidden shadow p-6 flex justify-center">
                        <img src="{{ asset('storage/images/fast.png') }}" class="w-full max-w-48" alt="">
                    </div>
                    <div class="flex-1 bg-white-50 rounded-t-none rounded-b-xl overflow-hidden shadow">
                        <div class="w-full font-bold text-xl text-blue px-6">
                            Pengerjaan Cepat & Profesional
                        </div>
                        <p class="text-blue text-base px-6 mb-5 text-justify">
                            Dengan tim yang berpengalaman, kami menjamin proses pembuatan website yang efisien, tepat waktu, dan sesuai standar industri.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="bg-white-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-blue">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-blue">
            Pricing
            </h2>
            <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white-50 mt-4">
                <div class="flex-1 bg-white-50 text-blue rounded-t rounded-b-none overflow-hidden shadow">
                <div class="p-8 text-3xl font-bold text-center border-b-4">
                    Free
                </div>
                <ul class="w-full text-center text-sm">
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                </ul>
                </div>
                <div class="flex-none mt-auto bg-white-50 rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-3xl text-blue font-bold text-center">
                    £0
                    <span class="text-base">for one user</span>
                </div>
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white-100 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Sign Up
                    </button>
                </div>
                </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white-50 mt-4 sm:-mt-6 shadow-lg z-10">
                <div class="flex-1 bg-white-50 rounded-t rounded-b-none overflow-hidden shadow">
                <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                <ul class="w-full text-center text-base font-bold">
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                </ul>
                </div>
                <div class="flex-none mt-auto bg-white-50 rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-4xl font-bold text-center">
                    £x.99
                    <span class="text-base">/ per user</span>
                </div>
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white-100 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Sign Up
                    </button>
                </div>
                </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white-50 mt-4">
                <div class="flex-1 bg-white-50 text-blue rounded-t rounded-b-none overflow-hidden shadow">
                <div class="p-8 text-3xl font-bold text-center border-b-4">
                    Pro
                </div>
                <ul class="w-full text-center text-sm">
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                    <li class="border-b py-4">Thing</li>
                </ul>
                </div>
                <div class="flex-none mt-auto bg-white-50 rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-3xl text-blue font-bold text-center">
                    £x.99
                    <span class="text-base">/ per user</span>
                </div>
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white-100 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Sign Up
                    </button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Change the colour #f8fafc to match the previous section colour -->
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#F1F5F9">
                <path
                d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                ></path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#F1F5F9">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
            </g>
            </g>
        </g>
        </svg>
        <section class="container mx-auto text-center py-6 mb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white-100">
            Call to Action
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white-100 w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            Main Hero Message to sell yourself!
        </h3>
        <button class="mx-auto lg:mx-0 hover:underline bg-white-100 text-blue font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Action!
        </button>
        </section>
        <!--Footer-->
        <footer class="bg-white-100">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6 text-blue">
                <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                BILGI STORE
                </a>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Links</p>
                <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">FAQ</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Help</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Support</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Terms</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Privacy</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Facebook</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Linkedin</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Twitter</a>
                </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Company</p>
                <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Official Blog</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">About Us</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                    <a href="#" class="no-underline hover:underline text-blue hover:text-pink-500">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </footer>
        <!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->
        <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
            header.classList.add("bg-white-100");
            navaction.classList.remove("bg-white-100");
            navaction.classList.add("gradient");
            navaction.classList.remove("text-blue");
            navaction.classList.add("text-white-100");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-blue");
                toToggle[i].classList.remove("text-white-100");
            }
            header.classList.add("shadow");
            navcontent.classList.remove("bg-gray-100");
            navcontent.classList.add("bg-white-100");
            } else {
            header.classList.remove("bg-white-100");
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white-100");
            navaction.classList.remove("text-white-100");
            navaction.classList.add("text-blue");
            //Use to switch toggleColour colours
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white-100");
                toToggle[i].classList.remove("text-blue");
            }

            header.classList.remove("shadow");
            navcontent.classList.remove("bg-white-100");
            navcontent.classList.add("bg-gray-100");
            }
        });
        </script>
        <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;
        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
                } else {
                navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
            }
        }
        function checkParent(t, elm) {
            while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
            }
            return false;
        }
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const sections = document.querySelectorAll("section"); // Ambil semua section
                const navLinks = document.querySelectorAll("ul li a"); // Ambil semua link navbar
            
                const observer = new IntersectionObserver(
                    (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                        // Ambil id section yang sedang terlihat
                        let id = entry.target.getAttribute("id");
            
                        // Hapus semua class aktif
                        navLinks.forEach((link) => {
                            link.classList.remove("font-bold");
                            link.classList.add("hover:text-white", "hover:text-underline");
                        });
            
                        // Tambahkan class aktif pada link yang sesuai
                        document
                            .querySelector(`ul li a[href="#${id}"]`)
                            .classList.add("font-bold", "text-blue", "no-underline");
                        }
                    });
                    },
                    { threshold: 0.6 } // Jika 60% dari section terlihat, maka aktifkan
                );
            
                // Observe setiap section
                sections.forEach((section) => {
                    observer.observe(section);
                });
            });
        </script>          
    </body>
</html>