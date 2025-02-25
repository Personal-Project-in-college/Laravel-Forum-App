<!-- SearchBox Modal -->
<div id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1"
    aria-labelledby="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger-label">
    <div
        class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div
            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="relative">
                <div class="relative p-4 border-b border-gray-200 dark:border-neutral-700">
                    <form action="{{ route('search') }}" method="GET">
                        <label id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger-label"
                            for="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger-input"
                            class="sr-only">Search input</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </div>
                            <input id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger-input"
                                class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                type="text" role="combobox" aria-expanded="false" placeholder="title post..."
                                name="title" value="" autofocus="" data-hs-combo-box-input="">
                        </div>
                    </form>
                </div>


                <!-- SearchBox Modal Body -->
                {{-- <div class="!mt-0" data-hs-combo-box-output="">
                    <div class="h-72 p-2 overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
                        data-hs-combo-box-output-items-wrapper="">
                        @forelse ($dataRandomPost as $post)
                        <a href="{{ route('pages-post-detail', ['slug' => $post->slug]) }}">
                            <div class="cursor-pointer p-2 space-y-0.5 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg">
                                <div class="flex items-center space-x-2">
                                    <div class="w-full">
                                        <div class="font-medium text-gray-800 dark:text-white">{{ $post->title }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">{{ Str::limit(strip_tags($post->body), 30) }}</div>
                                        <div class="flex justify-between mt-2">
                                            @foreach ($post->RelationTags as $tag)
                                                <div class="text-xs bg-blue-100 text-blue-800 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2">#{{ $tag->name }}</div>
                                            @endforeach
                                            <div class="text-xs text-gray-500 dark:text-gray-400">{{ $post->RelationUsers->short_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @empty
                        @endforelse
                    </div>
                </div> --}}

                <!-- SearchBox Modal Body -->
            </div>
        </div>
    </div>
    <!-- End SearchBox Modal -->
</div>
<!-- End SearchBox -->
