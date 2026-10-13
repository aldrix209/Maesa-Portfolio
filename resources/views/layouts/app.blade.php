<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Maesa — Digital Designer & Creative Developer')</title>
    <meta name="description" content="Portfolio of Maesa: Digital Designer and Creative Developer crafting immersive digital experiences through design, development, and animation.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite Assets (Tailwind CSS & JavaScript) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#08090d] text-slate-100 font-sans antialiased selection:bg-purple-500/30 selection:text-white min-h-screen relative overflow-x-hidden">

    <!-- Ambient Ambient Glows -->
    <div class="ambient-glow-left"></div>
    <div class="ambient-glow-right"></div>

    <!-- Header / Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 px-4 sm:px-8 py-5 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto flex items-center justify-between glass-nav px-6 py-3.5 rounded-2xl shadow-2xl">
            
            <!-- Brand Logo -->
            <a href="#hero" class="text-xl sm:text-2xl font-display font-extrabold tracking-tight text-white hover:opacity-90 transition-opacity">
                Maesa
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#work" class="hover:text-white transition-colors">Work</a>
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#services" class="hover:text-white transition-colors">Services</a>
                <a href="#contact" class="hover:text-white transition-colors">Contact</a>
            </nav>

            <!-- Status Badge -->
            <div class="flex items-center gap-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-medium border border-emerald-500/25 bg-emerald-500/10 text-emerald-400">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Status: <strong class="text-emerald-300 font-semibold">Open to Work</strong></span>
                </div>

                <!-- Mobile Trigger -->
                <button id="mobileToggle" class="md:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-colors">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobileMenu" class="hidden md:hidden max-w-7xl mx-auto mt-2 glass-nav rounded-2xl p-4 flex flex-col gap-2">
            <a href="#work" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Work</a>
            <a href="#about" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">About</a>
            <a href="#services" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Services</a>
            <a href="#contact" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Contact</a>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="max-w-7xl mx-auto px-4 sm:px-8 py-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
        <p>© <span id="year"></span> Maesa. Designed & engineered with craft.</p>
        <div class="flex items-center gap-6">
            <a href="https://github.com/aldrix209/Maesa-Portfolio" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">GitHub</a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">LinkedIn</a>
            <a href="https://dribbble.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Dribbble</a>
            <a href="#hero" class="hover:text-white transition-colors">Back to top ↑</a>
        </div>
    </footer>

    <!-- Interactive Case Study Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="glass-card bg-[#0e111a] max-w-xl w-full rounded-2xl p-6 sm:p-8 space-y-6 border border-white/15 shadow-2xl relative transform scale-95 transition-transform duration-300" id="modalCard">
            <button onclick="closeProjectModal()" class="absolute top-5 right-5 p-2 rounded-full hover:bg-white/10 text-slate-400 hover:text-white transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>

            <div>
                <span id="modalCategory" class="text-xs font-mono uppercase tracking-wider text-purple-400">Featured Work</span>
                <h3 id="modalTitle" class="text-2xl font-display font-bold text-white mt-1">Project Name</h3>
            </div>

            <div id="modalBanner" class="h-44 rounded-xl bg-slate-900 border border-white/10 flex items-center justify-center text-slate-400 text-sm font-mono">
                Interactive Preview
            </div>

            <p id="modalDesc" class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                Description content here.
            </p>

            <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                <div id="modalTags" class="flex flex-wrap gap-1.5">
                    <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300">UI/UX</span>
                </div>
                <button onclick="closeProjectModal()" class="px-4 py-2 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-colors">
                    Close Window
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 glass-card px-4 py-3 rounded-2xl border border-purple-500/30 text-white text-xs flex items-center gap-2 shadow-2xl opacity-0 pointer-events-none transition-all duration-300 transform translate-y-2">
        <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
        <span>Email copied to clipboard!</span>
    </div>

</body>
</html>
