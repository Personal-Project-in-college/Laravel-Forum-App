@extends('layouts.app')
@section('title', 'Label')
@section('content')
    <!-- == Sections for label == -->
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <!-- = Title to section posts = -->
        <div>
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 sm:mb-8">
                <h2
                    class="text-start sm:text-center mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Label Lainnya</h2>
                <p class="hidden sm:block text-center font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Kumpulan label yang bisa digunakan untuk mengidentifikasi post</p>
            </div>
        </div>
        <!-- = End Title to section posts = -->
        <div class="flex mx-auto max-w-8xl">
            <!-- == Section Menu in center == -->
            <div class="w-full max-w-2xl mx-auto">

                <!-- = Main Content post = -->
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <!-- Data of post -->
                    <article class="py-6">
                        <!-- Header Post -->
                        <div class="flex items-center justify-end mb-3 text-gray-500">

                            <!-- date posted -->
                            <span class="text-sm">Published <time datetime="1732457760000">2 months
                                    ago</time></span>
                        </div>
                        <!-- End Header Post -->

                        <!-- Title of post -->
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/blog/tailwind-v4/">Tailwind v4 is here! Learn how to upgrade your current
                                project and explore the new features with Flowbite</a>
                        </h2>
                        <!-- End Title of post -->

                        <!-- Content of the post -->
                        <p class="mb-5 text-gray-500 dark:text-gray-400">A few days ago the developers from
                            Tailwind officially announced the v4-beta which means that you can now officially
                            start playing around with the new version of Tailwind.</p>
                        <!-- End Content of the post -->

                        <!-- Footer of post -->
                        <div class="flex items-center justify-between">
                            <!-- Profile Author -->
                            <a class="flex items-center space-x-2" href="/blog/author/zoltan/">
                                <img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture">
                                <span class="font-medium dark:text-white">Zoltán Szőgyényi</span>
                            </a>
                            <!-- End Profile Author -->

                            <!-- Button Read More -->
                            <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/tailwind-v4/">
                                Read more
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <!-- End Button Read More -->
                        </div>
                        <!-- End Footer of post -->
                    </article>
                    <article class="py-6">
                        <div class="flex items-center justify-between mb-3 text-gray-500">
                            <div><a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/tailwind-css/">#Tailwind CSS</a></div><span class="text-sm">Published
                                <time datetime="1732457760000">2 months
                                    ago</time></span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/blog/e-commerce-ui-has-been-launched/">We have launched over 80+
                                components in
                                E-commerce UI and there's more to come!</a>
                        </h2>
                        <p class="mb-5 text-gray-500 dark:text-gray-400">I am thrilled to share the latest
                            updates from
                            Flowbite! Since our last communication, our team has been hard at work, and we
                            are excited
                            to announce the launch of over 85 new E-commerce UI components and blocks.</p>
                        <div class="flex items-center justify-between"><a class="flex items-center space-x-2"
                                href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture"><span
                                    class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/e-commerce-ui-has-been-launched/">Read more<svg class="w-4 h-4 ml-2"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
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
                        <div class="flex items-center justify-between"><a class="flex items-center space-x-2"
                                href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture"><span
                                    class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/tailwind-css-vs-bootstrap/">Read more<svg class="w-4 h-4 ml-2"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/tailwind-css/">
                                    #Tailwind CSS
                                </a>
                            </div>
                            <!-- End Type of tag -->

                            <!-- date posted -->
                            <span class="text-sm">Published <time datetime="1732457760000">2 months
                                    ago</time></span>
                        </div>
                        <!-- End Header Post -->

                        <!-- Title of post -->
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/blog/tailwind-v4/">Tailwind v4 is here! Learn how to upgrade your current
                                project and explore the new features with Flowbite</a>
                        </h2>
                        <!-- End Title of post -->

                        <!-- Content of the post -->
                        <p class="mb-5 text-gray-500 dark:text-gray-400">A few days ago the developers from
                            Tailwind officially announced the v4-beta which means that you can now officially
                            start playing around with the new version of Tailwind.</p>
                        <!-- End Content of the post -->

                        <!-- Footer of post -->
                        <div class="flex items-center justify-between">
                            <!-- Profile Author -->
                            <a class="flex items-center space-x-2" href="/blog/author/zoltan/">
                                <img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture">
                                <span class="font-medium dark:text-white">Zoltán Szőgyényi</span>
                            </a>
                            <!-- End Profile Author -->

                            <!-- Button Read More -->
                            <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/tailwind-v4/">
                                Read more
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <!-- End Button Read More -->
                        </div>
                        <!-- End Footer of post -->
                    </article>
                    <article class="py-6">
                        <div class="flex items-center justify-between mb-3 text-gray-500">
                            <div><a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                    href="/blog/tag/tailwind-css/">#Tailwind CSS</a></div><span class="text-sm">Published
                                <time datetime="1732457760000">2 months
                                    ago</time></span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/blog/e-commerce-ui-has-been-launched/">We have launched over 80+
                                components in
                                E-commerce UI and there's more to come!</a>
                        </h2>
                        <p class="mb-5 text-gray-500 dark:text-gray-400">I am thrilled to share the latest
                            updates from
                            Flowbite! Since our last communication, our team has been hard at work, and we
                            are excited
                            to announce the launch of over 85 new E-commerce UI components and blocks.</p>
                        <div class="flex items-center justify-between"><a class="flex items-center space-x-2"
                                href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture"><span
                                    class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/e-commerce-ui-has-been-launched/">Read more<svg class="w-4 h-4 ml-2"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
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
                        <div class="flex items-center justify-between"><a class="flex items-center space-x-2"
                                href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7"
                                    src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp"
                                    alt="Zoltán Szőgyényi profile picture"><span
                                    class="font-medium dark:text-white">Zoltán Szőgyényi</span></a><a
                                class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/blog/tailwind-css-vs-bootstrap/">Read more<svg class="w-4 h-4 ml-2"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></a></div>
                    </article>
                    <!-- Data of post -->
                </div>
                <!-- = Main Content post = -->
            </div>
            <!-- == End Section Menu in center == -->

        </div>

        <!-- = Button to browser all Label -->
        <div class="mx-auto text-center mt-8">
            <div>
                <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-black bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:bg-gray-500"
                    href="#">
                    Tampilkan Lainnya...
                </a>
            </div>
        </div>
        <!-- = End Button to browser all Label -->

    </div>
    <!-- == Sections for label == -->
@endsection
