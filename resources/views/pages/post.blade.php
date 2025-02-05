@extends('layouts.app')
@section('title', 'Postingan')
@section('content')
    <!-- == Sections for posts == -->
    <main class="grow">
        <main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
            <div class="flex justify-between px-4 mx-auto max-w-8xl">
                <!-- == Section Menu in left == -->
                <div class="hidden xl:block lg:w-80">
                    <div class="sticky top-36">
                        <aside>
                            <!-- = Ngestuck introduction = -->
                            <div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h3 class="mb-2 font-bold text-gray-900 uppercase dark:text-white">Ngestuck Blog</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Berisi Artikel, pertanyaan, dan tutorial belajar pemrograman untuk mahasiswa JTIK</p>
                            </div>
                            <!-- = End Ngestuck introduction = -->

                            <!-- = Ngestuck Promote to be author = -->
                            <div
                                class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Menjadi seorang penulis</h4>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Suka coding? Punya ide keren tentang pemrograman?</p>
                                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Ayo, jadilah bagian dari komunitas kami! Login sekarang dan mulailah berbagi tulisan Anda.</p>
                                <a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full" href="/contact/">Get in touch</a>
                            </div>
                            <!-- = End Ngestuck Promote to be author = -->
                        </aside>
                    </div>
                </div>
                <!-- == End Section Menu in left == -->
                
                <!-- == Section Menu in center == -->
                <div class="w-full max-w-2xl mx-auto">
                    <!-- = Tag description = -->
                    <div class="p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center mb-2">
                            <div class="relative mr-2"><img src="https://publisher.flowbite.com/content/images/2022/10/tailwind-logo.svg" alt="Tailwind CSS" class="w-8 h-8"></div>
                            <h1 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Tailwind CSS</h1>
                        </div>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Tailwind CSS is a popular open-source CSS framework built around the utility-first methodology which means that all of the class names are utility classes meaning there are no predefined classes such as Bootstrap or Bulma.</p>
                    </div>
                    <!-- = End Tag description = -->
                    
                    <!-- = Menu select tag -->
                    <div class="flex items-center justify-between py-4 border-b border-gray-200 dark:border-gray-700">
                        <span class="text-sm font-bold text-gray-900 dark:text-white"> Total 3 postingan dari Tailwind CSS</span>
                        <span>
                            <!-- Button Select Tag -->
                            <a href="#" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-notifications" data-hs-overlay="#hs-notifications" class="group text-sm relative text-gray-900 dark:text-white leading-none">
                                <span class="flex items-center gap-2">Pilih Label                                            <svg class="fill-current group-hover:rotate-45 transition-all duration-300"
                                        width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_675_6418)">
                                            <path d="M13.7734 3.59902L5.48035 3.53935C5.12237 3.53935 4.84395 3.81778 4.84395 4.17575C4.84395 4.53372 5.12237 4.81215 5.48035 4.81215L12.2222 4.87181L3.77003 13.3239C3.53138 13.5626 3.53138 13.9603 3.77003 14.199C4.00868 14.4376 4.42632 14.4575 4.66496 14.2189L13.1569 5.72696L13.2165 12.5483C13.2165 12.9063 13.495 13.1847 13.8529 13.1847C14.012 13.1847 14.1711 13.1052 14.2905 12.9859C14.4098 12.8665 14.4893 12.7074 14.4694 12.5284L14.4098 4.23541C14.4098 3.87744 14.1314 3.59902 13.7734 3.59902Z" fill=""></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_675_6418">
                                                <rect width="18" height="18" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <!-- Underline effect -->
                                <span class="hidden sm:block absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 group-hover:w-full dark:bg-gray-300 transition-all duration-500"></span>
                            </a>
                            <!-- End Button Select Tag -->
                            
                            <!-- Select Tag Modal -->
                            <div id="hs-notifications" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-notifications-label">
                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                    <div class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                        <!-- Main Content Modal -->
                                        <div class="p-4 sm:p-10 overflow-y-auto">
                                            <!-- Title in modal select tag -->
                                            <div class="mb-6 text-center">
                                                <h3 id="hs-notifications-label" class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200 mt-8 sm:mt-0">
                                                    Pilih Label
                                                </h3>
                                                <p class="text-gray-500 dark:text-neutral-500">
                                                    Pilih label yang ingin Anda cari
                                                </p>
                                            </div>
                                            <!-- End Title in modal select tag -->

                                            
                                            <!-- Form Selected Data Tag Group -->
                                            <div class="space-y-4">
                                                <div>
                                                    <label for="email" class="block text-sm mb-2 dark:text-white">Tag</label>
                                                    <div class="relative">
                                                        <!-- Selected Data Tags -->
                                                        <select class="py-3 px-4 block w-full rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:text-white dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="email-error">
                                                            <option selected>Select a Tag</option>
                                                            <option>Ecommerce</option>
                                                        </select>
                                                        <!-- End Selected Data Tags -->
                                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please select the available tags</p>
                                                </div>
                                            </div>
                                            <!-- End Form Selected Data Tag Group -->
                                        </div>
                                        <!-- End Main Content Modal -->

                                        <!-- Button Cancel and Select Modal -->
                                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 mt-8 sm:mt-0">
                                            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                                                Cancel
                                            </button>
                                            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                Select
                                            </a>
                                        </div>
                                        <!-- End Button Cancel and Select Modal -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Select Tag Modal -->
                        </span>
                    </div>
                    <!-- = End Menu select tag = -->

                    <!-- = Main Content post = -->
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- Data of post -->
                        <article class="py-6">
                            <!-- Header Post -->
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <!-- Type of tag -->
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/tailwind-css/">
                                    #Tailwind CSS
                                    </a>
                                </div>
                                <!-- End Type of tag -->

                                <!-- date posted -->
                                <span class="text-sm">Published <time datetime="1732457760000">2 months ago</time></span>
                            </div>
                            <!-- End Header Post -->
                            
                            <!-- Title of post -->
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/tailwind-v4/">Tailwind v4 is here! Learn how to upgrade your current project and explore the new features with Flowbite</a>
                            </h2>
                            <!-- End Title of post -->

                            <!-- Content of the post -->
                            <p class="mb-5 text-gray-500 dark:text-gray-400">A few days ago the developers from Tailwind officially announced the v4-beta which means that you can now officially start playing around with the new version of Tailwind.</p>
                            <!-- End Content of the post -->
                            
                            <!-- Footer of post -->
                            <div class="flex items-center justify-between">
                                <!-- Profile Author -->
                                <a class="flex items-center space-x-2" href="/blog/author/zoltan/">
                                    <img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Zoltán Szőgyényi profile picture">
                                        <span class="font-medium dark:text-white">Zoltán Szőgyényi</span>
                                </a>
                                <!-- End Profile Author -->
                                
                                <!-- Button Read More -->
                                <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/tailwind-v4/">
                                    Read more
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <!-- End Button Read More -->
                            </div>
                            <!-- End Footer of post -->
                        </article>
                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div><a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                        href="/blog/tag/tailwind-css/">#Tailwind CSS</a></div><span
                                    class="text-sm">Published <time datetime="1732457760000">2 months
                                        ago</time></span>
                            </div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/e-commerce-ui-has-been-launched/">We have launched over 80+
                                    components in
                                    E-commerce UI and there's more to come!</a>
                            </h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">I am thrilled to share the latest
                                updates from
                                Flowbite! Since our last communication, our team has been hard at work, and we
                                are excited
                                to announce the launch of over 85 new E-commerce UI components and blocks.</p>
                            <div class="flex items-center justify-between"><a
                                    class="flex items-center space-x-2" href="/blog/author/zoltan/"><img
                                        class="rounded-full w-7 h-7"
                                        src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                        alt="Zoltán Szőgyényi profile picture"><span
                                        class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                    class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    href="/blog/e-commerce-ui-has-been-launched/">Read more<svg
                                        class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></a></div>
                        </article>
                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                        href="/blog/tag/tailwind-css/">#Tailwind CSS</a>
                                </div><span class="text-sm">Published <time datetime="1732457760000">2 months
                                        ago</time></span>
                            </div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/tailwind-css-vs-bootstrap/">Bootstrap vs Tailwind CSS - what are
                                    the
                                    differences and which one should you choose?</a>
                            </h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">Learn more about the differences
                                between
                                Bootstrap and Tailwind CSS in this article where we compare the usage and
                                features of each
                                CSS framework and which one to choose for your next project based on your needs.
                            </p>
                            <div class="flex items-center justify-between"><a
                                    class="flex items-center space-x-2" href="/blog/author/zoltan/"><img
                                        class="rounded-full w-7 h-7"
                                        src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                        alt="Zoltán Szőgyényi profile picture"><span
                                        class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                    class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    href="/blog/tailwind-css-vs-bootstrap/">Read more<svg class="w-4 h-4 ml-2"
                                        fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></a></div>
                        </article>
                        <article class="py-6">
                            <!-- Header Post -->
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <!-- Type of tag -->
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/tailwind-css/">
                                    #Tailwind CSS
                                    </a>
                                </div>
                                <!-- End Type of tag -->

                                <!-- date posted -->
                                <span class="text-sm">Published <time datetime="1732457760000">2 months ago</time></span>
                            </div>
                            <!-- End Header Post -->
                            
                            <!-- Title of post -->
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/tailwind-v4/">Tailwind v4 is here! Learn how to upgrade your current project and explore the new features with Flowbite</a>
                            </h2>
                            <!-- End Title of post -->

                            <!-- Content of the post -->
                            <p class="mb-5 text-gray-500 dark:text-gray-400">A few days ago the developers from Tailwind officially announced the v4-beta which means that you can now officially start playing around with the new version of Tailwind.</p>
                            <!-- End Content of the post -->
                            
                            <!-- Footer of post -->
                            <div class="flex items-center justify-between">
                                <!-- Profile Author -->
                                <a class="flex items-center space-x-2" href="/blog/author/zoltan/">
                                    <img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Zoltán Szőgyényi profile picture">
                                        <span class="font-medium dark:text-white">Zoltán Szőgyényi</span>
                                </a>
                                <!-- End Profile Author -->
                                
                                <!-- Button Read More -->
                                <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/tailwind-v4/">
                                    Read more
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <!-- End Button Read More -->
                            </div>
                            <!-- End Footer of post -->
                        </article>
                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div><a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                        href="/blog/tag/tailwind-css/">#Tailwind CSS</a></div><span
                                    class="text-sm">Published <time datetime="1732457760000">2 months
                                        ago</time></span>
                            </div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/e-commerce-ui-has-been-launched/">We have launched over 80+
                                    components in
                                    E-commerce UI and there's more to come!</a>
                            </h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">I am thrilled to share the latest
                                updates from
                                Flowbite! Since our last communication, our team has been hard at work, and we
                                are excited
                                to announce the launch of over 85 new E-commerce UI components and blocks.</p>
                            <div class="flex items-center justify-between"><a
                                    class="flex items-center space-x-2" href="/blog/author/zoltan/"><img
                                        class="rounded-full w-7 h-7"
                                        src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                        alt="Zoltán Szőgyényi profile picture"><span
                                        class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                    class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    href="/blog/e-commerce-ui-has-been-launched/">Read more<svg
                                        class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></a></div>
                        </article>
                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                        href="/blog/tag/tailwind-css/">#Tailwind CSS</a>
                                </div><span class="text-sm">Published <time datetime="1732457760000">2 months
                                        ago</time></span>
                            </div>
                            <h2
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                <a href="/blog/tailwind-css-vs-bootstrap/">Bootstrap vs Tailwind CSS - what are
                                    the
                                    differences and which one should you choose?</a>
                            </h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">Learn more about the differences
                                between
                                Bootstrap and Tailwind CSS in this article where we compare the usage and
                                features of each
                                CSS framework and which one to choose for your next project based on your needs.
                            </p>
                            <div class="flex items-center justify-between"><a
                                    class="flex items-center space-x-2" href="/blog/author/zoltan/"><img
                                        class="rounded-full w-7 h-7"
                                        src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                        alt="Zoltán Szőgyényi profile picture"><span
                                        class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                    class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    href="/blog/tailwind-css-vs-bootstrap/">Read more<svg class="w-4 h-4 ml-2"
                                        fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></a></div>
                        </article>
                        <!-- Data of post -->
                    </div>
                    <!-- = Main Content post = -->

                    <div class="mx-auto text-center mt-8">
                        <div>
                            <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-black bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:bg-gray-500"
                                href="#">
                                Browse all posts
                            </a>
                        </div>
                    </div>
                </div>
                <!-- == End Section Menu in center == -->

                
                <!-- == Section Menu in right == -->
                <aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
                    <div class="sticky top-36">
                        <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                        <div class="lg:ml-auto">
                            <script id="_carbonads_js" src="//cdn.carbonads.com/carbon.js?serve=CK7D4KQE&amp;placement=flowbitedesign"></script>
                        </div>
                        <!-- Section Recommeded Tag -->
                        <div class="p-6 pb-4 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Rekomendasi Label</h4>
                            <!-- Data of Tag -->
                            <div class="flex flex-wrap">
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/alpine-js/">#Alpine.js
                                </a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/angular/">#Angular</a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/figma/">#Figma</a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/flowbite/">#Flowbite</a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/laravel/">#Laravel</a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/next-js/">#Next.js</a><a
                                    class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/tailwind-css/">#Tailwind CSS</a>
                            </div>
                            <!-- End Data of Tag -->
                        </div>
                        <!-- End Section Recommeded Tag -->

                        <!-- Section Author Today -->
                        <div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Community authors</h4>
                            <!-- Main Content of author today -->
                            <ul class="space-y-4 text-gray-500 dark:text-gray-400">
                                <!-- Data of Author -->
                                <li>
                                    <a class="flex items-start" href="/blog/author/zoltan/">
                                        <div class="mr-3 shrink-0">
                                            <img class="w-6 h-6 mt-1 rounded-full" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Zoltán Szőgyényi profile picture">
                                        </div>
                                        <div class="mr-3">
                                            <span class="block font-medium text-gray-900 dark:text-white">Zoltán Szőgyényi</span>
                                            <span class="text-sm">Open-source contributor. Currently building Flowbite.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Data of Author -->
                            </ul>
                            <!-- End Main Content of author today -->
                        </div>
                        <!-- End Section Author Today -->
                    </div>
                </aside>
                <!-- == End Section Menu in right == -->
            </div>
        </main>
    </main>
    <!-- End Contact Us -->
@endsection
