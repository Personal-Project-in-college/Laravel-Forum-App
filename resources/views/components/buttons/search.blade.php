<!-- == Search Input == -->
<div>
    <!-- = Field To Search =  -->
    <div class="hidden md:block">
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </div>
            <input type="text" aria-haspopup="dialog" aria-expanded="false"
                aria-controls="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
                data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
                class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:ring-neutral-600"
                placeholder="Search">
            <div class="hidden absolute inset-y-0 end-0 items-center pointer-events-none z-20 pe-1">
                <button type="button"
                    class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m15 9-6 6" />
                        <path d="m9 9 6 6" />
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-3 text-gray-400">
                <!-- KBD -->
                <span class="flex flex-wrap items-center gap-x-1 text-sm text-gray-400 dark:text-neutral-300">
                    <kbd class="inline-flex items-center font-mono text-xs text-gray-400 dark:text-neutral-300">
                        Ctrl
                    </kbd>
                    +
                    <kbd
                        class="min-h-[30px] inline-flex justify-center items-center font-mono text-xs text-gray-400 rounded-md dark:text-neutral-300">
                        \
                    </kbd>
                </span>
                <!-- End KBD -->
            </div>
        </div>
    </div>
    <!-- = Field To Search =  -->

    <!-- = SVG button search =  -->
    <button type="button" aria-haspopup="dialog" aria-expanded="false"
        aria-controls="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
        data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
        class="md:hidden size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        </svg>
        <span class="sr-only">Search</span>
    </button>
    <!-- = End SVG button search =  -->

</div>
<!-- == End Search Input == -->
