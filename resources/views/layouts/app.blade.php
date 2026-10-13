<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Aldrix Maesa — Full-Stack Developer & UI/UX Designer')</title>
    <meta name="description" content="Portfolio of Aldrix Maesa: Full-Stack Developer and UI/UX Designer crafting high-performance digital systems and immersive experiences.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#06070a] text-slate-100 font-sans antialiased selection:bg-purple-500/30 selection:text-white min-h-screen relative overflow-x-hidden">

    <!-- Atmospheric Mesh Aurora Lighting -->
    <div class="aurora-mesh">
        <div class="aurora-1"></div>
        <div class="aurora-2"></div>
        <div class="aurora-3"></div>
    </div>

    <!-- Header / Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 px-4 sm:px-8 py-5 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto flex items-center justify-between glass-nav px-6 py-3.5 rounded-full shadow-2xl">
            
            <!-- Brand Logo -->
            <a href="#hero" class="flex items-center gap-2.5 group">
                <span class="w-8 h-8 rounded-full bg-gradient-to-tr from-cyan-500 via-indigo-500 to-purple-600 flex items-center justify-center font-display font-extrabold text-white text-xs shadow-lg shadow-purple-500/20 group-hover:scale-105 transition-transform">
                    AM
                </span>
                <span class="text-base sm:text-lg font-display font-extrabold tracking-tight text-white group-hover:text-purple-300 transition-colors">
                    Aldrix Maesa
                </span>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-7 text-xs font-semibold uppercase tracking-wider text-slate-300">
                <a href="#hero" class="hover:text-white transition-colors">Hero</a>
                <a href="#work" class="hover:text-white transition-colors">Works</a>
                <a href="#stack" class="hover:text-white transition-colors">Stack</a>
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#services" class="hover:text-white transition-colors">Services</a>
                <a href="#contact" class="hover:text-white transition-colors">Contact</a>
            </nav>

            <!-- Status Badge & Quick Action -->
            <div class="flex items-center gap-3">
                <div class="hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-medium border border-emerald-500/30 bg-emerald-500/10 text-emerald-400">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Status: <strong class="text-emerald-300 font-semibold">Available for Work</strong></span>
                </div>

                <!-- Mobile Menu Trigger -->
                <button id="mobileToggle" class="md:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/5 transition-colors" aria-label="Toggle Navigation">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden md:hidden max-w-7xl mx-auto mt-2 glass-nav rounded-2xl p-4 flex flex-col gap-2">
            <a href="#hero" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Hero</a>
            <a href="#work" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Works</a>
            <a href="#stack" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Stack</a>
            <a href="#about" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">About</a>
            <a href="#services" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Services</a>
            <a href="#contact" class="mobile-nav-link px-4 py-2 rounded-lg text-sm text-slate-300 hover:text-white hover:bg-white/5">Contact</a>
        </div>
    </header>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="max-w-7xl mx-auto px-4 sm:px-8 py-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4 relative z-10">
        <div class="flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
            <p>© <span id="year"></span> Aldrix Maesa. Engineered with Laravel, Tailwind & Three.js.</p>
        </div>
        <div class="flex items-center gap-6">
            <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">GitHub</a>
            <a href="mailto:Aldrixmaesa4@gmail.com" class="hover:text-white transition-colors">Email</a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">LinkedIn</a>
            <a href="#hero" class="hover:text-white transition-colors">Back to top ↑</a>
        </div>
    </footer>

    <!-- Interactive Case Study Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="glass-card bg-[#0b0e17] max-w-2xl w-full rounded-2xl p-6 sm:p-8 space-y-6 border border-white/15 shadow-2xl relative transform scale-95 transition-transform duration-300" id="modalCard">
            <button onclick="closeProjectModal()" class="absolute top-5 right-5 p-2 rounded-full hover:bg-white/10 text-slate-400 hover:text-white transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>

            <div>
                <span id="modalCategory" class="text-xs font-mono uppercase tracking-wider text-purple-400">Enterprise System</span>
                <h3 id="modalTitle" class="text-2xl sm:text-3xl font-display font-bold text-white mt-1">Project Name</h3>
            </div>

            <div id="modalBanner" class="h-48 rounded-xl bg-slate-900 border border-white/10 flex items-center justify-center text-slate-400 text-sm font-mono overflow-hidden relative">
                <!-- Preview Canvas / Content -->
                <div class="p-6 text-center space-y-2">
                    <div id="modalIconPreview" class="w-12 h-12 rounded-xl bg-purple-500/20 text-purple-400 mx-auto flex items-center justify-center font-bold font-display text-xl">P</div>
                    <div id="modalBannerTitle" class="font-display font-semibold text-white">Full-Stack Application</div>
                    <div class="text-[11px] text-slate-400 font-sans max-w-sm">Architected for production stability and responsive real-time data handling.</div>
                </div>
            </div>

            <p id="modalDesc" class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                Project description.
            </p>

            <div class="space-y-2">
                <h4 class="text-xs font-mono uppercase text-slate-400 tracking-wider">Tech Stack & Architecture</h4>
                <div id="modalTags" class="flex flex-wrap gap-1.5">
                    <span class="px-2.5 py-1 rounded-md text-[11px] bg-white/5 text-slate-300 border border-white/5 font-mono">Laravel</span>
                </div>
            </div>

            <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                <div class="text-xs font-mono text-emerald-400 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Production Ready</span>
                </div>
                <button onclick="closeProjectModal()" class="px-5 py-2 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-colors shadow-lg">
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
