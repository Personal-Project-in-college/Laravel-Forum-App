@extends('layouts.app')
@section('title', 'Result ' . ($query ? '("' . $query . '")' : ''))
@section('content')

    <div class="py-8 sm:py-0 px-4 mx-auto max-w-screen-xl lg:px-6">
        <!-- = Title to section posts = -->
        <div>
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 sm:mb-8">
                <h2 class="text-start sm:text-center mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Result Post {{ $query ? 'for "' . $query . '"' : '' }}
                </h2>
                <p class="hidden sm:block text-center font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    {{ count($posts) }} post ditemukan{{ $query ? ' untuk "' . $query . '"' : '' }}.
                </p>
            </div>
        </div>
        <!-- = End Title to section posts = -->
        <div class="flex mx-auto max-w-8xl">
            <!-- == Section Menu in center == -->
            <div class="w-full max-w-2xl mx-auto">
                <!-- = Main Content post = -->
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <!-- Data of post -->
                    @forelse ($posts as $post)
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
            </div>
            <!-- == End Section Menu in center == -->
        </div>
    </div>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6"></div>
@endsection
