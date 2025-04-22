@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <!-- == Sections for posts == -->
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <!-- = Title to section posts = -->
        <div>
            <div class="max-w-screen text-center lg:mb-16 sm:mb-8">
                <h2
                    class="text-start sm:text-center sm:mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Recent Posts
                </h2>
                <p class="text-start sm:text-center mb-6 sm:mb-0 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Some newly added Posts, not to be missed
                </p>
            </div>
            <hr class="hidden sm:block h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        </div>
        <!-- = End Title to section posts = -->

        <!-- = Main content for posts -->
        <!-- Data for the post section -->
        <div class="grid gap-8 lg:grid-cols-2">
            @forelse ($dataPost as $post)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <div>
                            @foreach ($post->RelationTags as $tag)
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800">
                                    <a class="" href="{{ route('pages-post', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                </span>
                            @endforeach
                        </div>
                        <span class="text-xs sm:text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-5 text-base sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a class="hover:underline" href="{{ route('pages-post-detail', ['slug' => $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="mb-5 text-xs sm:text-sm font-light text-gray-500 dark:text-gray-400">
                        {{ Str::limit(strip_tags($post->body), 150) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            @if ($post->RelationUsers->avatar)
                                <img class="w-7 h-7 rounded-full" src="{{ Storage::url($post->RelationUsers->avatar) }}"
                                    alt="{{ $post->RelationUsers->name }}">
                            @else
                                <img class="w-7 h-7 rounded-full" src="{{ $post->RelationUsers->avatar_url }}"
                                    alt="{{ $post->RelationUsers->name }}">
                            @endif
                            <span class="text-xs sm:text-base font-medium dark:text-white">
                                <a href="{{ route('pages-profile-author', ['slug' => $post->RelationUsers->slug]) }}">{{ $post->RelationUsers->short_name }}</a>
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
                </article>
            @empty
        </div>
        <p class="text-start w-full sm:text-center mb-6 sm:mb-0 font-light text-gray-500 sm:text-xl dark:text-gray-400">
            No post has been made yet
        </p>
        @endforelse
        <!-- End Data for the post section -->
        <!-- = End Main content for posts = -->
    </div>
    <!-- == End Sections for posts == -->

    <!-- Contact Us -->
    <div class="py-8 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <hr class="hidden sm:block h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-md">
            <h2
                class="mb-8 sm:mb-4  text-center text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Advice & Feedback</h2>
            <p class="hidden sm:block mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                Found a problem or have a cool idea for a new feature? Submit now !</p>
            <form action="{{ route('feedback-store') }}" method="POST" class="space-y-8">
                @csrf
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="user@polsub.ac.id" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" name="subject" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Bug, Saran, dll" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Message</label>
                    <textarea name="message" id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Tinggalkan Pesan..."></textarea>
                </div>
                <button type="submit"
                    class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-black bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:bg-gray-500">
                    Send Feedback</button>
            </form>
        </div>
    </div>
    <!-- End Contact Us -->
@endsection
