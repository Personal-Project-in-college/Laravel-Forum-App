<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind Style -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Ngestuck | @yield('title')</title>
</head>

<body>
    <!-- ===== HEADER ===== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5  dark:bg-neutral-800 dark:border-neutral-700">
        @include('partials.navbar-parent') <!-- ==== Navbar Parent ==== -->
    </header>
    <!-- ===== END HEADER ===== -->

    <!-- ===== MAIN CONTENT ===== -->
    <main id="content">
        @include('partials.navbar-child') <!-- === Navbar Children === -->
        
        <!-- === Wrapping all content === -->
        <section class="bg-white dark:bg-gray-900">
            @yield('content')
        </section>
        <!-- === End Wrapping all content === -->

        
        @include('partials.footer') <!-- === Section of Footer === -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- ===== SCRIPTS ===== -->
    
    @include('scripts.search-shortcut-key') <!-- Search ShortKey -->
    @include('scripts.search-modal') <!-- SearchBox Modal -->
    @include('scripts.scroll-to-top') <!-- Scroll On Top -->
    
</body>
</html>