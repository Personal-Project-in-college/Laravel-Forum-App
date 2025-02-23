@extends('layouts.app')
@section('title', 'Detail')
@section('content')
    <!-- == Sections for detail == -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content Post-->
            <div class="lg:col-span-2">
                <div class="py-8 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">
                        <!-- Header Link (Back and Edit) -->
                        <div class="flex justify-between">
                            <a class="inline-flex items-center gap-x-1.5 text-xs sm:text-sm text-gray-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                href="{{ route('pages-home') }}">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                                Back to Blog
                            </a>
                            @if (Auth::check() && Auth::id() === $dataPost->user_id)
                                <a class="inline-flex items-center gap-x-1.5 text-xs sm:text-sm text-gray-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                    href="{{ route('filament.dashboard.resources.posts.edit', ['record' => $dataPost->slug]) }}">
                                    Edit Post
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                        <!-- End Header Link (Back and Edit) -->

                        <!-- Main Content Post -->
                        <div class="space-y-5 lg:space-y-8">
                            <!-- Title Post -->
                            <h2 class="text-2xl sm:text-3xl font-bold lg:text-5xl dark:text-white">{{ $dataPost->title }}
                            </h2>
                            <!-- DateTime Created Post -->
                            <div class="flex justify-end items-center gap-x-5">
                                <p class="text-xs sm:text-sm text-gray-800 dark:text-neutral-200">
                                    {{ $dataPost->created_at->format('F j, Y') }}
                                </p>
                            </div>
                            <!-- Image Cover Post -->
                            <div class="space-y-4">
                                @if ($dataPost->cover_photo_path)
                                    <img class="w-full object-cover rounded-xl"
                                        src="{{ Storage::url($dataPost->cover_photo_path) }}" alt="{{ $dataPost->title }}">
                                @endif
                            </div>
                            <!-- Main Data(Body) Post -->
                            {!! $dataPost->formatted_body !!}
                        </div>
                        <!-- End Main Content Post -->

                        <!-- Footer Content Post -->
                        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-y-5 lg:gap-y-0">
                            <!-- Post has Tags -->
                            <div>
                                @foreach ($dataPost->RelationTags as $tag)
                                    <a class="m-0.5 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        href="{{ route('pages-post', ['tag' => $tag->slug]) }}">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                            <!-- End Post has Tags -->

                            <!-- Button Section -->
                            <div class="flex justify-end items-center gap-x-1.5">
                                <!-- Button like post -->
                                <div class="hs-tooltip inline-block">
                                    <form action="{{ route('like-store', $dataPost->slug) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="hs-tooltip-toggle flex items-center gap-x-2 text-xs sm:text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24"
                                                fill="{{ $dataPost->RelationLikes->contains('user_id', auth()->id()) ? 'currentColor' : 'none' }}"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                            </svg>
                                            {{ $dataPost->RelationLikes->count() }}
                                            <span
                                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
                                                role="tooltip">
                                                Like
                                            </span>
                                        </button>
                                    </form>
                                </div>
                                <!-- End Button like post -->

                                {{-- Border End --}}
                                <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600">
                                </div>

                                <!-- Button comment post -->
                                <div class="hs-tooltip inline-block">
                                    <a href="#comment-section"
                                        class="hs-tooltip-toggle flex items-center gap-x-2 text-xs sm:text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24"
                                            fill="{{ $dataPost->RelationComments->contains('user_id', auth()->id()) ? 'currentColor' : 'none' }}"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
                                        </svg>
                                        {{ $totalComments }}
                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
                                            role="tooltip">
                                            Comment
                                        </span>
                                    </a>
                                </div>
                                <!-- Button comment post -->

                                {{-- Border End --}}
                                <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600">
                                </div>

                                <!-- Button share post -->
                                <div class="hs-dropdown relative inline-flex">
                                    <button id="hs-blog-article-share-dropdown" type="button"
                                        class="hs-dropdown-toggle flex items-center gap-x-2 text-xs sm:text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                            <polyline points="16 6 12 2 8 6" />
                                            <line x1="12" x2="12" y1="2" y2="15" />
                                        </svg>
                                        Share
                                    </button>
                                    <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2 dark:bg-black"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-blog-article-share-dropdown">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900"
                                            href="#" onclick="copyToClipboard()">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                            </svg>
                                            Copy link
                                        </a>
                                    </div>
                                </div>
                                <!-- Button share post -->
                            </div>
                            <!-- Button Section -->
                        </div>
                        <!-- Footer Content Post -->
                    </div>
                </div>
            </div>
            <!-- End Content Post-->

            <!-- Authors sidebar -->
            <div class="lg:col-span-1 lg:w-full lg:h-full ">
                <div class="sticky top-44 start-0 py-8 lg:ps-8">
                    <!-- Profile Author -->
                    <div
                        class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8 dark:border-neutral-700">
                        <!-- Avatar Author -->
                        <a class="block shrink-0 focus:outline-none"
                            href="{{ route('pages-profile-author', ['slug' => $dataPost->RelationUsers->slug]) }}">
                            @if ($dataPost->RelationUsers->avatar)
                                <img class="size-7 sm:size-10 rounded-full"
                                    src="{{ Storage::url($dataPost->RelationUsers->avatar) }}"
                                    alt="{{ $dataPost->RelationUsers->short_name }}">
                            @else
                                <img class="size-7 sm:size-10 rounded-full"
                                    src="{{ $dataPost->RelationUsers->avatar_url }}"
                                    alt="{{ $dataPost->RelationUsers->short_name }}">
                            @endif
                        </a>
                        <!-- End Avatar Author -->

                        <!-- Name Author -->
                        <a class="group grow block focus:outline-none"
                            href="{{ route('pages-profile-author', ['slug' => $dataPost->RelationUsers->slug]) }}">
                            <h5
                                class="group-hover:text-gray-600 group-focus:text-gray-600 text-xs sm:text-sm font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:group-focus:text-neutral-400 dark:text-neutral-200">
                                {{ $dataPost->RelationUsers->short_name }}
                            </h5>
                        </a>
                        <!-- End Name Author -->

                        <!-- Button Visit Author -->
                        <div class="grow">
                            <div class="flex justify-end">
                                <a href="{{ route('pages-profile-author', ['slug' => $dataPost->RelationUsers->slug]) }}"
                                    class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <line x1="19" x2="19" y1="8" y2="14" />
                                        <line x1="22" x2="16" y1="11" y2="11" />
                                    </svg>
                                    Visit Author
                                </a>
                            </div>
                        </div>
                        <!-- Button Visit Author -->
                    </div>
                    <!-- End Profile Author -->

                    <div class="space-y-6">
                        <!-- Related Post Author -->
                        @foreach ($relatedPosts as $related)
                        @endforeach
                        @forelse ($relatedPosts as $related)
                            <a class="group flex items-center gap-x-6 focus:outline-none"
                                href="{{ route('pages-post-detail', $related->slug) }}">
                                <div class="grow">
                                    <span
                                        class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600 dark:text-neutral-200 dark:group-hover:text-blue-500 dark:group-focus:text-blue-500">
                                        # {{ $related->title }}
                                    </span>
                                </div>
                            </a>
                        @empty
                            <span
                                class="text-xs sm:text-sm font-bold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600 dark:text-neutral-200 dark:group-hover:text-blue-500 dark:group-focus:text-blue-500">
                                No Have Another Post
                            </span>
                        @endforelse


                        <!-- End Related Post Author -->
                    </div>
                </div>
            </div>
            <!-- End Authors sidebar -->
        </div>

        <!-- Comment Section -->
        <div id="comment-section">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
                    Discussion
                </h2>
            </div>

            <!-- Add Comment form -->
            <div>
                <form action="{{ route('comment-store') }}" method="POST" class="mb-8 sm:mb-16">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $dataPost->id }}">
                    <div
                        class="py-2 px-4 mb-4 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" name="body" rows="4" required
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment...(Max length 450)" maxlength="450"></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Post comment
                    </button>
                </form>
            </div>
            <!-- End Add Comment form -->

            <!-- Parent Comment -->
            @foreach ($dataPost->RelationComments as $comment)
                <article class="mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                    <!-- Header Comment (Avatar, Name Author and Time Created) -->
                    <footer class="flex justify-between items-center">
                        <div class="flex items-center">
                            <p
                                class="inline-flex items-center mr-3 font-semibold text-xs sm:text-sm text-gray-900 dark:text-white">
                                @if ($comment->RelationUsers->avatar)
                                    <img class="mr-2 w-6 h-6 rounded-full"
                                        src="{{ Storage::url($comment->RelationUsers->avatar) }}"
                                        alt="{{ $comment->RelationUsers->name }}">
                                @else
                                    <img class="mr-2 w-6 h-6 rounded-full"
                                        src="{{ $comment->RelationUsers->avatar_url }}"
                                        alt="{{ $comment->RelationUsers->name }}">
                                @endif
                                {{ $comment->RelationUsers->short_name }}
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">
                                <time pubdate datetime="{{ $comment->created_at }}" title="{{ $comment->created_at }}">
                                    {{ $comment->created_at->diffForHumans() }}
                                </time>
                            </p>
                        </div>
                    </footer>
                    <!-- End Header Comment (Avatar, Name Author and Time Created) -->

                    <p class="text-gray-800 dark:text-neutral-200 text-xs sm:text-base mt-4">{{ $comment->body }}</p>

                    <div class="flex items-center mt-4 space-x-6">
                        <!-- Button to show add form reply comment -->
                        <button
                            class="toggle-reply-btn text-xs font-medium sm:text-sm text-gray-500 hover:underline dark:text-gray-400"
                            data-comment-id="{{ $comment->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-message-square-reply size-4">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                <path d="m10 7-3 3 3 3" />
                                <path d="M17 13v-1a2 2 0 0 0-2-2H7" />
                            </svg>
                        </button>
                        <!-- End Button to show add form reply comment -->

                        <!-- Button to show comment reply -->
                        @if ($comment->RelationReplies->count() > 0)
                            <button
                                class="toggle-replies text-xs font-medium sm:text-sm text-gray-500 hover:underline dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-messages-square size-4">
                                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2z" />
                                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                                </svg>
                            </button>
                        @endif
                        <!-- End Button to show comment reply -->

                        @if (Auth::check() && Auth::id() === $comment->user_id)
                            <!-- Button to show deleted comment -->
                            <form action="{{ route('comment-destroy', $comment->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs font-medium text-gray-500 hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-trash-2 size-4">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                </button>
                            </form>
                            <!-- End Button to show deleted comment-->

                            <!-- Button to show edit comment -->
                            <button type="button"
                                class="text-xs font-medium sm:text-sm text-gray-500 hover:underline dark:text-gray-400 edit-comment-btn"
                                data-comment-id="{{ $comment->id }}" data-comment-body="{{ $comment->body }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-pencil-line size-4">
                                    <path d="M12 20h9" />
                                    <path
                                        d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
                                    <path d="m15 5 3 3" />
                                </svg>
                            </button>
                            <!-- End Button to show edit comment -->
                        @endif
                    </div>

                    <!-- Form text area to make reply comment -->
                    <div id="reply-form-{{ $comment->id }}"
                        class="hidden opacity-0 translate-y-4 transition-all duration-500 mt-4">
                        <form action="{{ route('comment-store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $dataPost->id }}">
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div
                                class="mb-4 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <textarea name="body" rows="3" required
                                    class="w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:bg-gray-800"
                                    placeholder="Tulis balasan..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-2.5 px-4 text-xs font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800">Kirim</button>
                        </form>
                    </div>
                    <!-- End Form text area to make reply comment -->

                    <!-- Form text area to edit comment -->
                    <div id="edit-form-{{ $comment->id }}"
                        class="hidden opacity-0 translate-y-4 transition-all duration-500 mt-4">
                        <form action="{{ route('comment-update', $comment->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div
                                class="mb-4 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <textarea name="body" rows="4"
                                    class="w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:bg-gray-800" required>{{ $comment->body }}</textarea>
                            </div>
                            <button type="submit"
                                class="py-2.5 px-4 text-xs font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800">
                                Update
                            </button>
                        </form>
                    </div>
                    <!-- End Form text area to edit comment -->

                    <!-- Section Reply Comment -->
                    @if ($comment->RelationReplies->count() > 0)
                        <div
                            class="replies hidden opacity-0 max-h-0 translate-y-4 transition-all duration-500 overflow-hidden">
                            @foreach ($comment->RelationReplies as $reply)
                                <article class="pt-3 sm:pt-6 ml-6 lg:ml-12 text-base mt-4">
                                    <!-- Header Reply Comment (Avatar, Name Author and Time Created)-->
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p
                                                class="inline-flex items-center mr-3 font-semibold text-xs sm:text-sm text-gray-900 dark:text-white">
                                                @if ($reply->RelationUsers->avatar)
                                                    <img class="mr-2 w-6 h-6 rounded-full"
                                                        src="{{ Storage::url($reply->RelationUsers->avatar) }}"
                                                        alt="{{ $reply->RelationUsers->short_name }}">
                                                @else
                                                    <img class="mr-2 w-6 h-6 rounded-full"
                                                        src="{{ $reply->RelationUsers->avatar_url }}"
                                                        alt="{{ $reply->RelationUsers->short_name }}">
                                                @endif
                                                {{ $reply->RelationUsers->short_name }}
                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <!-- Tanggal -->
                                            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">
                                                <time pubdate datetime="2022-02-08"
                                                    title="February 8th, 2022">{{ $reply->created_at->diffForHumans() }}</time>
                                            </p>
                                        </div>
                                    </footer>
                                    <!-- End Header Reply Comment (Avatar, Name Author and Time Created)-->

                                    <p class="text-gray-800 dark:text-neutral-200 text-xs sm:text-base mt-4">
                                        {{ $reply->body }}</p>

                                    <div class="flex items-center mt-4 space-x-6">
                                        @if (Auth::check() && Auth::id() === $reply->user_id)
                                            <!-- Button to show deleted Reply comment -->
                                            <form action="{{ route('comment-destroy', $reply->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-xs font-medium text-gray-500 hover:underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-trash-2 size-4">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11"
                                                            y2="17" />
                                                        <line x1="14" x2="14" y1="11"
                                                            y2="17" />
                                                    </svg>
                                                </button>
                                            </form>
                                            <!-- End Button to show deleted Reply comment -->

                                            <!-- Button to show edit Reply comment -->
                                            <button
                                                class="text-xs font-medium sm:text-sm text-gray-500 hover:underline dark:text-gray-400"
                                                data-comment-id="{{ $reply->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-pencil-line size-4">
                                                    <path d="M12 20h9" />
                                                    <path
                                                        d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
                                                    <path d="m15 5 3 3" />
                                                </svg>
                                            </button>
                                            <!-- End Button to show edit Reply comment -->
                                        @endif
                                    </div>

                                    <!-- Form text area to edit reply comment -->
                                    <div id="edit-reply-form-{{ $reply->id }}"
                                        class="hidden opacity-0 translate-y-4 transition-all duration-500 mt-4">
                                        <form action="{{ route('comment-update', $reply->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div
                                                class="mb-4 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                                <textarea name="body" class="w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:bg-gray-800"
                                                    required>{{ $reply->body }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class="py-2.5 px-4 text-xs font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                    <!-- Form text area to edit reply comment -->
                                </article>
                            @endforeach
                        </div>
                    @endif
                </article>
                <hr class="my-8 bg-gray-200 dark:bg-gray-700">
            @endforeach
            <!-- End Comment 2 -->
        </div>
        <!-- End Comment Section -->

        <div class="py-8 mx-auto max-w-screen-xl lg:py-16 "></div>

    </div>
    <!-- == Sections for detail == -->

    @include('scripts.copy-link-post')
    @include('scripts.make-reply-comment')
    @include('scripts.edit-comment')
    @include('scripts.show-reply-comment')
    @include('scripts.edit-reply-comment')
@endsection
