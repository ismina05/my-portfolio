<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ config('profile.name', 'John Doe') }} | {{ config('profile.titles.0', 'Frontend Developer') }}</title>
    
    <!-- Primary Meta Tags -->
    <meta name="title" content="Portfolio - {{ config('profile.name', 'John Doe') }} | {{ config('profile.titles.0', 'Frontend Developer') }}">
    <meta name="description" content="{{ config('profile.hero_description', '') }}">
    <meta name="keywords" content="{{ config('profile.name', 'John Doe') }}, Portfolio, Frontend Developer, Web Development, UI/UX Design, Laravel, Tailwind CSS">
    <meta name="author" content="{{ config('profile.name', 'John Doe') }}">
    <meta name="theme-color" content="#0F2C59">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url', 'https://johndoe.com/') }}">
    <meta property="og:title" content="Portfolio - {{ config('profile.name', 'John Doe') }} | {{ config('profile.titles.0', 'Frontend Developer') }}">
    <meta property="og:description" content="{{ config('profile.hero_description', '') }}">
    <meta property="og:image" content="{{ config('app.url', 'https://johndoe.com') }}/preview.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url', 'https://johndoe.com/') }}">
    <meta property="twitter:title" content="Portfolio - {{ config('profile.name', 'John Doe') }} | {{ config('profile.titles.0', 'Frontend Developer') }}">
    <meta property="twitter:description" content="{{ config('profile.hero_description', '') }}">
    <meta property="twitter:image" content="{{ config('app.url', 'https://johndoe.com') }}/preview.png">

    <!-- Favicon Placeholder -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💻</text></svg>">
    <!-- AOS CSS for animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Alpine.js with plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Theme initialization -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-[#0F2C59] bg-[#F5F7FA] dark:text-[#F8FAFC] dark:bg-[#0F172A] selection:bg-[#3B82F6] selection:text-white transition-colors duration-300 ease-in-out">
    
    <!-- Navbar Component -->
    <x-navbar />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('sections.footer')

    <!-- AOS JS for animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
            });
        });
    </script>
</body>
</html>
