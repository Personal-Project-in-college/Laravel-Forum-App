@extends('layouts.app')
@section('title', 'Tentang')
@section('content')
    <!-- == Sections for tentang == -->
        <!-- Component 1 -->
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Title 1 -->
                <div class="lg:w-3/4" id="component1">
                    <div id="title1">
                        <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
                            Aturan Main Forum
                        </h2>
                        <p class="mt-3 text-gray-800 dark:text-gray-400">
                            Biar forum ini tetap asik dan nyaman buat semua, ada beberapa aturan yang harus kita
                            ikuti bareng-bareng. Yuk, simak dulu!
                        </p>
                    </div>
                </div>
                <!-- End Title 1 -->

                <!-- Main Content -->
                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Sopan Itu Kunci
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Jangan nyolot, ngata-ngatain, atau bikin orang lain nggak nyaman. Respect pendapat
                                orang lain, meskipun nggak setuju.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                                <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                No Konten Negatif
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Jangan post yang aneh-aneh kayak yang berbau SARA, kekerasan, atau pornografi.
                                Jangan nyebarin hoaks. Cek dulu kebenarannya sebelum share.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">

                            <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Pasang tag yang tepat
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Kalau mau posting, pastikan sesuai topiknya. Biar forum nggak berantakan. Judul dan
                                isi juga harus jelas, ya, biar gampang dimengerti.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M7.998449,0 L10.099759,1.53282 L12.700759,1.52786 L13.499759,4.00306 L15.606859,5.52786 L14.798459,8 L15.606859,10.4721 L13.499759,11.9969 L12.700759,14.4721 L10.099759,14.4672 L7.998449,16 L5.897139,14.4672 L3.296169,14.4721 L2.497139,11.9969 L0.39,10.4721 L1.198449,8 L0.39,5.52786 L2.497139,4.00306 L3.296169,1.52786 L5.897139,1.53282 L7.998449,0 Z M7.998449,2.47556 L6.547379,3.53406 L4.751269,3.53064 L4.199499,5.2399 L2.744399,6.29286 L3.302679,8 L2.744399,9.70714 L4.199499,10.7601 L4.751269,12.4694 L6.547379,12.4659 L7.998449,13.5244 L9.449529,12.4659 L11.245659,12.4694 L11.797459,10.7601 L13.252459,9.70714 L12.694259,8 L13.252459,6.29286 L11.797459,5.2399 L11.245659,3.53064 L9.449529,3.53406 L7.998449,2.47556 Z M8.038899,10 C8.591189,10 9.038929,10.4477 9.038929,11 C9.038929,11.5523 8.591209,12 8.038929,12 C7.486639,12 7.038929,11.5523 7.038929,11 C7.038929,10.4477 7.486629,10 8.038899,10 Z M8.038899,4 C8.764689,4 9.267059,4.72492 9.012219,5.40449 L8.038899,10 L7.065589,5.40449 C6.810749,4.72492 7.313119,4 8.038899,4 Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Jangan Spam
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Jangan posting berulang-ulang hal yang sama. Kalau mau promo sesuatu, minta izin
                                dulu ke admin.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.58 19.37L17.59 11.01C17.38 10.46 16.91 10.12 16.37 10.12C15.83 10.12 15.37 10.46 15.14 11.03L12.16 19.37C12.02 19.76 12.22 20.19 12.61 20.33C13 20.47 13.43 20.27 13.57 19.88L14.19 18.15H18.54L19.16 19.88C19.27 20.19 19.56 20.38 19.87 20.38C19.95 20.38 20.04 20.37 20.12 20.34C20.51 20.2 20.71 19.77 20.57 19.38L20.58 19.37ZM14.74 16.64L16.38 12.05L18.02 16.64H14.74ZM12.19 7.85C9.92999 11.42 7.89 13.58 5.41 15.02C5.29 15.09 5.16 15.12 5.04 15.12C4.78 15.12 4.53 14.99 4.39 14.75C4.18 14.39 4.3 13.93 4.66 13.73C6.75999 12.51 8.48 10.76 10.41 7.86H4.12C3.71 7.86 3.37 7.52 3.37 7.11C3.37 6.7 3.71 6.36 4.12 6.36H7.87V4.38C7.87 3.97 8.21 3.63 8.62 3.63C9.02999 3.63 9.37 3.97 9.37 4.38V6.36H13.12C13.53 6.36 13.87 6.7 13.87 7.11C13.87 7.52 13.53 7.86 13.12 7.86H12.18L12.19 7.85ZM12.23 15.12C12.1 15.12 11.97 15.09 11.85 15.02C11.2 14.64 10.57 14.22 9.97999 13.78C9.64999 13.53 9.58 13.06 9.83 12.73C10.08 12.4 10.55 12.33 10.88 12.58C11.42 12.99 12.01 13.37 12.61 13.72C12.97 13.93 13.09 14.39 12.88 14.75C12.74 14.99 12.49 15.12 12.23 15.12Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Tulis yang Bisa Dipahami
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Gunakan bahasa yang simple dan jelas. Jangan kebanyakan singkatan yang bikin orang
                                bingung.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Jaga Privasi
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Jangan share data pribadi kamu atau orang lain tanpa izin. Ini demi keamanan
                                bareng-bareng.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-6" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M4 19H20M11.2929 5.70711L8.70711 8.2929C8.31658 8.68342 7.68342 8.68342 7.29289 8.2929L5.70711 6.70711C5.07714 6.07714 4 6.52331 4 7.41422V15C4 15.5523 4.44772 16 5 16H19C19.5523 16 20 15.5523 20 15V7.41421C20 6.52331 18.9229 6.07714 18.2929 6.70711L16.7071 8.2929C16.3166 8.68342 15.6834 8.68342 15.2929 8.2929L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Admin adalah Raja
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Keputusan admin/moderator itu final. Kalau nggak setuju, omongin baik-baik, ya.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    d="M16,2 C16.2652165,2 16.5195704,2.10535684 16.7071068,2.29289322 L21.7071068,7.29289322 C21.8946432,7.4804296 22,7.73478351 22,8 L22,15 C22,15.2339365 21.9179838,15.4604694 21.7682213,15.6401844 L16.7682213,21.6401844 C16.5782275,21.868177 16.2967798,22 16,22 L8,22 C7.73478351,22 7.4804296,21.8946432 7.29289322,21.7071068 L2.29289322,16.7071068 C2.10535684,16.5195704 2,16.2652165 2,16 L2,8 C2,7.73478351 2.10535684,7.4804296 2.29289322,7.29289322 L7.29289322,2.29289322 C7.4804296,2.10535684 7.73478351,2 8,2 L16,2 Z M15.5857864,4 L8.41421356,4 L4,8.41421356 L4,15.5857864 L8.41421356,20 L15.5316251,20 L20,14.6379501 L20,8.41421356 L15.5857864,4 Z M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M12,6 C12.5522847,6 13,6.44771525 13,7 L13,13 C13,13.5522847 12.5522847,14 12,14 C11.4477153,14 11,13.5522847 11,13 L11,7 C11,6.44771525 11.4477153,6 12,6 Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Laporkan Kalau Ada yang Nggak Beres
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Kalau ada yang melanggar aturan, kasih tahu admin. Kita beresin bareng.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                </div>
                <!-- End Main Content -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Component 1 -->
        <hr class="hidden sm:block h-px bg-gray-200 border-0 dark:bg-gray-700">

        <!-- Component 2 -->
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Title 2 -->
                <div class="lg:w-3/4" id="component2">
                    <div id="title2">
                        <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
                            Laporan Pembaruan Ngestuck
                        </h2>
                        <p class="mt-3 text-gray-800 dark:text-gray-400">
                            Informasi daftar perubahan, fitur baru, perbaikan bug, atau pembaruan lainnya yang
                            dilakukan pada sistem, aplikasi, atau layanan.
                        </p>
                    </div>
                </div>
                <!-- End Title 2 -->

                <!-- Main Content -->
                <div class="space-y-6 lg:space-y-10">
                    <!-- Timeline -->
                    <div>
                        <!-- Item -->
                        <div class="group relative flex gap-x-5 sm:gap-x-8">
                            <!-- Icon -->
                            <div
                                class="relative group-last:after:hidden after:absolute after:top-[54px] after:bottom-[8px] after:start-[23px] after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                <span
                                    class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full text-gray-800 dark:text-neutral-200">
                                    <svg class="size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10 17.745v1.092l-.323.142a1.702 1.702 0 0 1-1.352 0L1 15.774v-9.94a2.455 2.455 0 0 1 1.472-2.251l5.85-2.562a1.7 1.7 0 0 1 1.353 0L17 4.226V11h-1V4.88L9.276 1.939a.709.709 0 0 0-.554 0L2.873 4.5A1.456 1.456 0 0 0 2 5.834v9.285l6.724 2.944a.709.709 0 0 0 .554-.001zM19 18a2 2 0 1 1-2-2 2 2 0 0 1 2 2zm-1 0a1 1 0 1 0-1 1 1 1 0 0 0 1-1zm3.34-1.484l1.66.636v1.65l-1.586.59-.296.628.724 1.624-1.162 1.17-1.543-.71-.653.236-.636 1.66h-1.65l-.59-1.586-.628-.295-1.627.727-1.167-1.166.71-1.543-.236-.653-1.66-.636v-1.65l1.586-.59.295-.628-.727-1.627 1.166-1.167 1.543.71.653-.236.636-1.66h1.65l.59 1.586.628.296 1.624-.724 1.166 1.167-.705 1.538zm.66 1.169l-1.427-.548-.434-1.204.585-1.28-.412-.412-1.397.622-1.158-.544-.49-1.319h-.582l-.548 1.427-1.206.434-1.283-.59-.41.411.626 1.4-.545 1.161-1.319.49v.582l1.427.548.434 1.206-.59 1.283.411.41 1.4-.626 1.161.545.49 1.319h.582l.548-1.427 1.206-.434 1.28.588.411-.413-.623-1.399.544-1.158 1.319-.49z" />
                                        <path fill="none" d="M0 0h24v24H0z" />
                                    </svg>
                                </span>
                            </div>

                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pb-8 group-last:pb-0">
                                <h3 class="mb-1 text-xs text-gray-600 dark:text-gray-400 start">
                                    2023 - Present
                                </h3>

                                <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                                    Web Designer & Web Developer
                                </p>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    The company has high expectations and using OKRs there is a mutual understanding
                                    of expectations and performance.
                                </p>

                                <ul class="list-disc ms-6 mt-3 space-y-1.5">
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Designed template UIs and design systems in Figma.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Converted UIs into responsive HTML and CSS with a mobile-first approach.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Created custom illustrations and item description banners.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Provided detailed documentation and customer support on GitHub.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Engaged with users to address setup inquiries, bug issues, and feedback.
                                    </li>
                                </ul>
                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->
                        <!-- Item -->
                        <div class="group relative flex gap-x-5 sm:gap-x-8">
                            <!-- Icon -->
                            <div
                                class="relative group-last:after:hidden after:absolute after:top-[54px] after:bottom-[8px] after:start-[23px] after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                <span
                                    class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full text-gray-800 dark:text-neutral-200">
                                    <svg class="size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10 17.745v1.092l-.323.142a1.702 1.702 0 0 1-1.352 0L1 15.774v-9.94a2.455 2.455 0 0 1 1.472-2.251l5.85-2.562a1.7 1.7 0 0 1 1.353 0L17 4.226V11h-1V4.88L9.276 1.939a.709.709 0 0 0-.554 0L2.873 4.5A1.456 1.456 0 0 0 2 5.834v9.285l6.724 2.944a.709.709 0 0 0 .554-.001zM19 18a2 2 0 1 1-2-2 2 2 0 0 1 2 2zm-1 0a1 1 0 1 0-1 1 1 1 0 0 0 1-1zm3.34-1.484l1.66.636v1.65l-1.586.59-.296.628.724 1.624-1.162 1.17-1.543-.71-.653.236-.636 1.66h-1.65l-.59-1.586-.628-.295-1.627.727-1.167-1.166.71-1.543-.236-.653-1.66-.636v-1.65l1.586-.59.295-.628-.727-1.627 1.166-1.167 1.543.71.653-.236.636-1.66h1.65l.59 1.586.628.296 1.624-.724 1.166 1.167-.705 1.538zm.66 1.169l-1.427-.548-.434-1.204.585-1.28-.412-.412-1.397.622-1.158-.544-.49-1.319h-.582l-.548 1.427-1.206.434-1.283-.59-.41.411.626 1.4-.545 1.161-1.319.49v.582l1.427.548.434 1.206-.59 1.283.411.41 1.4-.626 1.161.545.49 1.319h.582l.548-1.427 1.206-.434 1.28.588.411-.413-.623-1.399.544-1.158 1.319-.49z" />
                                        <path fill="none" d="M0 0h24v24H0z" />
                                    </svg>
                                </span>
                            </div>

                            <!-- End Icon -->

                            <!-- Right Content -->
                            <div class="grow pb-8 group-last:pb-0">
                                <h3 class="mb-1 text-xs text-gray-600 dark:text-gray-400 start">
                                    2023 - Present
                                </h3>

                                <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                                    Web Designer & Web Developer
                                </p>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    The company has high expectations and using OKRs there is a mutual understanding
                                    of expectations and performance.
                                </p>

                                <ul class="list-disc ms-6 mt-3 space-y-1.5">
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Designed template UIs and design systems in Figma.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Converted UIs into responsive HTML and CSS with a mobile-first approach.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Created custom illustrations and item description banners.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Provided detailed documentation and customer support on GitHub.
                                    </li>
                                    <li class="ps-1 text-sm text-gray-600 dark:text-gray-400">
                                        Engaged with users to address setup inquiries, bug issues, and feedback.
                                    </li>
                                </ul>
                            </div>
                            <!-- End Right Content -->
                        </div>
                        <!-- End Item -->



                    </div>
                    <!-- End Timeline -->

                </div>
                <!-- End Main Content -->
            </div>
        </div>
        <!-- End Component 2 -->
        <hr class="hidden sm:block h-px bg-gray-200 border-0 dark:bg-gray-700">
    <!-- == Sections for tentang == -->

    @include('scripts.sticky-top') <!-- Script make title and description sticky top -->
@endsection
