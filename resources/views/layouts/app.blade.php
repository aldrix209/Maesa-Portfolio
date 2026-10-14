<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aldrix Maesa</title>
    <meta name="description" content="Portfolio of Aldrix Maesa: Full-Stack Developer and UI/UX Designer crafting high-performance digital systems and immersive experiences.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Anti-FOUC Theme Initialization -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'light') {
                document.documentElement.classList.add('light');
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
                document.documentElement.classList.remove('light');
            }
        })();
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#06070a] text-slate-100 font-sans antialiased selection:bg-purple-500/30 selection:text-white min-h-screen relative overflow-x-hidden">

    <!-- Real-time Live Aurora Borealis Canvas Background -->
    <canvas id="auroraCanvas" class="fixed inset-0 w-full h-full pointer-events-none z-0" aria-hidden="true"></canvas>

    <!-- Header / Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 px-4 sm:px-8 py-5 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto flex items-center justify-between glass-nav px-6 py-3.5 rounded-full shadow-2xl">
            
            <!-- Brand Logo with Circular Photo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group shrink-0">
                <span class="w-9 h-9 rounded-full bg-gradient-to-tr from-cyan-500 via-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-purple-500/20 group-hover:scale-105 transition-transform overflow-hidden p-0.5">
                    <img src="{{ asset('images/aldrix.jpg') }}" alt="Aldrix Maesa" class="w-full h-full object-cover object-[center_20%] rounded-full">
                </span>
                <span class="text-base sm:text-lg font-display font-extrabold tracking-tight text-white group-hover:text-purple-300 transition-colors">
                    <span class="hidden min-[420px]:inline">Aldrix Maesa</span>
                    <span class="min-[420px]:hidden">Aldrix</span>
                </span>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-slate-300">
                <a href="{{ route('home') }}" class="star-border px-3.5 py-1.5 rounded-full transition-all {{ request()->routeIs('home') ? 'bg-white/10 text-white font-bold shadow-sm' : 'hover:text-white hover:bg-white/5' }}" data-star-hover="reveal">
                    Home
                </a>
                <a href="{{ route('works') }}" class="star-border px-3.5 py-1.5 rounded-full transition-all {{ request()->routeIs('works') ? 'bg-purple-600/20 text-purple-300 border border-purple-500/30 font-bold shadow-sm shadow-purple-500/20' : 'hover:text-white hover:bg-white/5' }}" data-star-color="#c084fc" data-star-hover="lap" data-star-sparkle="true">
                    Projects
                </a>
                <a href="{{ route('home') }}#stack" class="star-border px-3.5 py-1.5 rounded-full hover:text-white hover:bg-white/5 transition-all" data-star-hover="reveal">Skills</a>
                <a href="{{ route('home') }}#about" class="star-border px-3.5 py-1.5 rounded-full hover:text-white hover:bg-white/5 transition-all" data-star-hover="reveal">About Me</a>
                <a href="{{ route('home') }}#contact" class="star-border px-3.5 py-1.5 rounded-full hover:text-white hover:bg-white/5 transition-all" data-star-color="#38bdf8" data-star-hover="reveal">Contact</a>
            </nav>

            <!-- Navbar Actions -->
            <div class="flex items-center gap-2 sm:gap-3">
                <!-- Theme Mode Toggle Button (Day / Night Pill) -->
                <button id="themeToggleBtn" type="button" aria-label="Toggle Dark/Light Mode" role="switch" class="theme-pill-toggle cursor-pointer shrink-0 scale-90 sm:scale-100 origin-right" title="Toggle Dark/Light Mode">
                    <div class="theme-pill-thumb">
                        <i data-lucide="moon-star" class="theme-icon-moon"></i>
                        <i data-lucide="sun" class="theme-icon-sun"></i>
                    </div>
                    <span class="theme-pill-text-day">DAY MODE</span>
                    <span class="theme-pill-text-night">NIGHT MODE</span>
                </button>

                <!-- Mobile Menu Trigger -->
                <button id="mobileToggle" class="md:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-colors" aria-label="Toggle Navigation">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden md:hidden max-w-7xl mx-auto mt-2 glass-nav rounded-2xl p-4 flex flex-col gap-2">
            <a href="{{ route('home') }}" class="mobile-nav-link px-4 py-2.5 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5 flex items-center justify-between {{ request()->routeIs('home') ? 'bg-white/10 text-white font-semibold' : '' }}">
                <span>Home</span>
                @if(request()->routeIs('home')) <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span> @endif
            </a>
            <a href="{{ route('works') }}" class="mobile-nav-link px-4 py-2.5 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5 flex items-center justify-between {{ request()->routeIs('works') ? 'bg-purple-500/20 text-purple-300 font-semibold' : '' }}">
                <span>Projects</span>
            </a>
            <a href="{{ route('home') }}#stack" class="mobile-nav-link px-4 py-2.5 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Stack</a>
            <a href="{{ route('home') }}#about" class="mobile-nav-link px-4 py-2.5 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">About</a>
            <a href="{{ route('home') }}#contact" class="mobile-nav-link px-4 py-2.5 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Contact</a>
            
            <!-- Mobile Theme Toggle Option -->
            <div class="w-full px-4 py-2.5 rounded-lg border-t border-white/5 mt-1 pt-3 flex items-center justify-between">
                <span class="text-xs font-mono uppercase tracking-wider text-slate-400">Theme</span>
                <button id="mobileThemeToggleBtn" type="button" aria-label="Toggle Dark/Light Mode" role="switch" class="theme-pill-toggle cursor-pointer scale-90 origin-right" title="Toggle Dark/Light Mode">
                    <div class="theme-pill-thumb">
                        <i data-lucide="moon-star" class="theme-icon-moon"></i>
                        <i data-lucide="sun" class="theme-icon-sun"></i>
                    </div>
                    <span class="theme-pill-text-day">DAY MODE</span>
                    <span class="theme-pill-text-night">NIGHT MODE</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="max-w-7xl mx-auto px-4 sm:px-8 py-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4 relative z-10">
        <div class="flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
            <p>© <span id="year"></span> Aldrix Maesa. All rights reserved.</p>
        </div>
        <div class="flex items-center gap-5 text-sm text-slate-400">
            <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors" title="GitHub" aria-label="GitHub"><i class="fa-brands fa-github text-base"></i></a>
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-[#1877f2] transition-colors" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f text-sm"></i></a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-[#0a66c2] transition-colors" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-[#e4405f] transition-colors" title="Instagram" aria-label="Instagram"><i class="fa-brands fa-instagram text-base"></i></a>
            <a href="mailto:Aldrixmaesa4@gmail.com" class="hover:text-white transition-colors" title="Email" aria-label="Email"><i class="fa-solid fa-envelope text-sm"></i></a>
            <a href="#" class="hover:text-white transition-colors text-xs ml-2">Back to top ↑</a>
        </div>
    </footer>

    <!-- Interactive Case Study Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="glass-card bg-[#0b0e17] max-w-2xl w-full rounded-2xl p-6 sm:p-8 space-y-6 border border-white/15 shadow-2xl relative transform scale-95 transition-transform duration-300" id="modalCard">
            <button onclick="closeProjectModal()" class="absolute top-5 right-5 p-2 rounded-full hover:bg-white/10 text-slate-400 hover:text-white transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>

            <div>
                <span id="modalCategory" class="text-xs font-mono uppercase tracking-wider text-purple-400"></span>
                <h3 id="modalTitle" class="text-2xl sm:text-3xl font-display font-bold text-white mt-1"></h3>
            </div>

            <!-- Preview Image Display -->
            <div id="modalBanner" class="h-60 sm:h-72 rounded-xl bg-slate-950 border border-white/10 flex items-center justify-center text-slate-400 text-sm font-mono overflow-hidden relative shadow-inner">
                <img id="modalMainImg" src="" alt="Project Preview" class="w-full h-full object-contain bg-slate-950 p-1">
            </div>

            <!-- Image Gallery Switcher -->
            <div id="modalGallery" class="flex gap-2.5 overflow-x-auto pb-1 hidden"></div>

            <p id="modalDesc" class="text-xs sm:text-sm text-slate-300 leading-relaxed"></p>

            <div class="space-y-2">
                <h4 class="text-xs font-mono uppercase text-slate-400 tracking-wider">Tech Stack & Architecture</h4>
                <div id="modalTags" class="flex flex-wrap gap-1.5"></div>
            </div>

            <div class="pt-4 border-t border-white/5 flex items-center justify-end gap-2">
                <a id="modalLiveBtn" href="#" target="_blank" rel="noopener noreferrer" class="star-border hidden px-4 py-2 rounded-full text-xs font-semibold bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white transition-all items-center gap-1.5 shadow-lg shadow-purple-600/30" data-star-color="#38bdf8" data-star-sparkle="true">
                    <span>Launch Live App</span>
                    <i data-lucide="external-link" class="w-3 h-3"></i>
                </a>
                <button onclick="closeProjectModal()" class="star-border px-5 py-2 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-colors shadow-lg" data-star-color="#c084fc">
                    Close Window
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 glass-card px-4 py-3 rounded-2xl border border-purple-500/30 text-white text-xs flex items-center gap-2 shadow-2xl opacity-0 pointer-events-none transition-all duration-300 transform translate-y-2">
        <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
        <span>Email copied to clipboard! (Aldrixmaesa4@gmail.com)</span>
    </div>

</body>
</html>
