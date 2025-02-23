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
                            <div
                                class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h3 class="mb-2 font-bold text-gray-900 uppercase dark:text-white">Ngestuck Blog</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Contains articles, questions, and
                                    tutorials learn programming for JTIK students</p>
                            </div>
                            <!-- = End Ngestuck introduction = -->

                            <!-- = Ngestuck Promote to be author = -->
                            <div
                                class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Become a writer
                                </h4>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Love coding? Have a cool idea about
                                    programming?</p>
                                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Come on, be a part of the community
                                    community! Login now and start sharing your posts.</p>
                                <a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full"
                                    href="{{ route('login') }}">Get in touch</a>
                            </div>
                            <!-- = End Ngestuck Promote to be author = -->
                        </aside>
                    </div>
                </div>
                <!-- == End Section Menu in left == -->

                <!-- == Section Menu in center == -->
                <div class="w-full max-w-2xl mx-auto">

                    <!-- = Menu select tag -->
                    <div class="flex items-center justify-between py-4 border-b border-gray-200 dark:border-gray-700">
                        @if ($selectedTag)
                            <span class="text-sm font-bold text-gray-900 dark:text-white flex">
                                Showing {{ count($dataPost) }} of {{ $totalPosts }} <span class="hidden sm:flex sm:ml-1 sm:mr-1">total posts from tag</span>
                                "{{ $selectedTag }}"
                            </span>
                        @else
                            <span class="text-sm font-bold text-gray-900 dark:text-white">
                                Showing {{ count($dataPost) }} of {{ $totalPosts }} total posts
                            </span>
                        @endif
                        <span>
                            <!-- Button Select Tag -->
                            <button aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-notifications"
                                data-hs-overlay="#hs-notifications"
                                class="group text-sm relative text-gray-900 dark:text-white leading-none">
                                <span class="flex items-center gap-2">Select tag <svg
                                        class="fill-current group-hover:rotate-45 transition-all duration-300"
                                        width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_675_6418)">
                                            <path
                                                d="M13.7734 3.59902L5.48035 3.53935C5.12237 3.53935 4.84395 3.81778 4.84395 4.17575C4.84395 4.53372 5.12237 4.81215 5.48035 4.81215L12.2222 4.87181L3.77003 13.3239C3.53138 13.5626 3.53138 13.9603 3.77003 14.199C4.00868 14.4376 4.42632 14.4575 4.66496 14.2189L13.1569 5.72696L13.2165 12.5483C13.2165 12.9063 13.495 13.1847 13.8529 13.1847C14.012 13.1847 14.1711 13.1052 14.2905 12.9859C14.4098 12.8665 14.4893 12.7074 14.4694 12.5284L14.4098 4.23541C14.4098 3.87744 14.1314 3.59902 13.7734 3.59902Z"
                                                fill=""></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_675_6418">
                                                <rect width="18" height="18" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <!-- Underline effect -->
                                <span
                                    class="hidden sm:block absolute bottom-0 left-0 h-[1px] w-0 bg-gray-800 group-hover:w-16 dark:bg-gray-300 transition-all duration-500"></span>
                            </button>
                            <!-- End Button Select Tag -->

                            <!-- Select Tag Modal -->
                            <form method="GET" action="{{ route('pages-post') }}">
                                <div id="hs-notifications"
                                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
                                    role="dialog" tabindex="-1" aria-labelledby="hs-notifications-label">
                                    <div
                                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div
                                            class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                            <!-- Main Content Modal -->
                                            <div class="p-4 sm:p-10 overflow-y-auto">
                                                <!-- Title in modal select tag -->
                                                <div class="mb-6 text-center">
                                                    <h3 id="hs-notifications-label"
                                                        class="mb-2 text-sm sm:text-xl font-bold text-gray-800 dark:text-neutral-200 mt-8 sm:mt-0">
                                                        Select tag
                                                    </h3>
                                                    <p class="hidden sm:block text-gray-500 text-sm sm:text-base dark:text-neutral-500">
                                                        Select the label you want to search for
                                                    </p>
                                                </div>
                                                <!-- End Title in modal select tag -->

                                                <!-- Form Selected Data Tag Group -->
                                                <div class="space-y-4">
                                                    <div>
                                                        <label class="block text-xs sm:text-sm mb-2 dark:text-white">Tag</label>
                                                        <div class="relative">
                                                            <!-- Selected Data Tags -->
                                                            <select name="tag" id="tag"
                                                                class="py-2 px-3 sm:py-3 sm:px-4 block text-xs w-full rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                                                                <option value="">All</option>
                                                                @foreach ($dataTag as $tag)
                                                                    <option value="{{ $tag->slug }}"
                                                                        {{ request('tag') == $tag->slug ? 'selected' : '' }}>
                                                                        {{ $tag->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <!-- End Selected Data Tags -->
                                                            <div
                                                                class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                <svg class="size-5 text-red-500" width="16"
                                                                    height="16" fill="currentColor" viewBox="0 0 16 16"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Selected Data Tag Group -->
                                            </div>
                                            <!-- End Main Content Modal -->

                                            <!-- Button Cancel and Select Modal -->
                                            <div
                                                class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 mt-8 sm:mt-0">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                    data-hs-overlay="#hs-notifications">
                                                    Cancel
                                                </button>
                                                <button type="submit"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                    Select
                                                </button>
                                            </div>
                                            <!-- End Button Cancel and Select Modal -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Select Tag Modal -->
                        </span>
                    </div>
                    <!-- = End Menu select tag = -->

                    <!-- = Main Content post = -->
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- Data of post -->
                        @forelse ($dataPost as $post)
                            <article class="py-6">
                                <!-- Header Post -->
                                <div class="flex items-center justify-between mb-3 text-gray-500">
                                    <!-- Type of tag -->
                                    <div>
                                        @foreach ($post->RelationTags as $tag)
                                            <a class="bg-blue-100 text-blue-800 text-xs sm:text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                                href="{{ route('pages-post', ['tag' => $tag->slug]) }}">
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <!-- End Type of tag -->

                                    <!-- date posted -->
                                    <span class="text-xs sm:text-sm">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                                <!-- End Header Post -->

                                <!-- Title of post -->
                                <h2 class="mb-2 text-lg sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a class="hover:underline"
                                        href="{{ route('pages-post-detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                </h2>
                                <!-- End Title of post -->

                                <!-- Content of the post -->
                                <p class="mb-5 text-xs sm:text-base text-gray-500 dark:text-gray-400">
                                    {{ Str::limit(strip_tags($post->body), 150) }}
                                </p>
                                <!-- End Content of the post -->

                                <!-- Footer of post -->
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        @if ($post->RelationUsers->avatar)
                                            <img class="w-7 h-7 rounded-full"
                                                src="{{ Storage::url($post->RelationUsers->avatar) }}"
                                                alt="{{ $post->RelationUsers->name }}">
                                        @else
                                            <img class="w-7 h-7 rounded-full" src="{{ $post->RelationUsers->avatar_url }}"
                                                alt="{{ $post->RelationUsers->name }}">
                                        @endif
                                        <span class="text-[14px] sm:text-base font-medium dark:text-white">
                                            <a
                                                href="{{ route('pages-profile-author', ['slug' => $post->RelationUsers->slug]) }}">{{ $post->RelationUsers->short_name }}</a>
                                        </span>
                                    </div>
                                    <a href="{{ route('pages-post-detail', ['slug' => $post->slug]) }}"
                                        class="inline-flex items-center text-xs sm:text-base font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Read more
                                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                                <!-- End Footer of post -->
                            </article>
                        @empty
                            <p
                                class="text-start w-full sm:text-center mt-8 sm:mb-0 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                                No post has been made yet
                            </p>
                        @endforelse
                        <!-- Data of post -->
                    </div>
                    <!-- = Main Content post = -->

                    <div class="mx-auto text-center mt-8">
                        @if (count($dataPost) < $totalPosts)
                            <div>
                                <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-black bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:bg-gray-500"
                                    href="{{ route('pages-post', ['limit' => $limit + 10, 'tag' => $selectedTag]) }}">
                                    Show More...
                                </a>
                            </div>
                        @endif
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
                        <div
                            class="p-6 pb-4 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Most used tags</h4>
                            <!-- Data of Tag -->
                            <div class="flex flex-wrap">
                                @forelse ($recommendedTags as $tag)
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2"
                                        href="{{ route('pages-post', ['tag' => $tag->slug]) }}">{{ $tag->name }}
                                        ({{ $tag->relation_posts_count }})
                                    </a>
                                @empty
                                    <p class="text-start w-full font-light text-gray-500 text-sm dark:text-gray-400">
                                        No data tag
                                    </p>
                                @endforelse
                            </div>
                            <!-- End Data of Tag -->
                        </div>
                        <!-- End Section Recommeded Tag -->
                    </div>
                </aside>
                <!-- == End Section Menu in right == -->
            </div>
        </main>
    </main>
    <!-- End Contact Us -->
@endsection
