<!-- ==== Navbar Parent ==== -->
<nav class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8 flex basis-full items-center">
    @include('components.logo') <!-- === Logo === -->

    <!-- === Wrapping Side menu in navbar parent (Menu Navbar, Search, Theme and profile) === -->
    <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">
        @include('components.buttons.toggle-navbar-mobile') <!-- == Button Collapse Navbar Mobile == -->
        @include('components.buttons.search') <!-- == Search Input == -->

        <!-- == Group Component Button Theme and Profile == -->
        <div class="flex flex-row items-center justify-end gap-1">
            {{-- @include('components.buttons.change-theme') <!-- = Button Custom Theme = --> --}}
            @include('components.buttons.profile-user') <!-- = Profile User = -->
        </div>
        <!-- == End Group Component Button Theme and Profile == -->
    </div>
    <!-- === End Wrapping Side menu in navbar parent (Menu Navbar, Search, Theme and profile) === -->
</nav>
<!-- ==== Navbar Parent ==== -->