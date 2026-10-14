@extends('layouts.app')

@section('title', 'Aldrix Maesa — Full-Stack Developer & UI/UX Designer')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-8 pt-32 pb-24 space-y-28 relative z-10">

    <!-- HERO SECTION -->
    <section id="hero" class="min-h-[70vh] flex flex-col justify-center py-6">
        
        <!-- Hero Header: Headline on Left, Floating Picture on Right -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-12 lg:gap-16">
            
            <!-- Left: Headline & CTAs -->
            <div class="space-y-8 max-w-3xl">
                <!-- Main Headline -->
                <div class="space-y-5">
                    <h1 class="text-5xl sm:text-7xl lg:text-[82px] xl:text-[90px] font-display font-extrabold tracking-tight leading-[1.04] text-white">
                        Hello, I'm <span class="text-shimmer">Aldrix Maesa</span>
                    </h1>
                    <p class="text-lg sm:text-2xl text-slate-300 max-w-2xl font-normal leading-relaxed">
                        I am a 3rd-year BSIT student and Full-Stack Developer bridging the gap between design systems and backend architecture.
                    </p>
                </div>

                <!-- Quick CTAs -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#work" class="star-border px-8 py-4 rounded-full text-sm font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2.5 shadow-2xl shadow-white/10" data-star-color="#c084fc" data-star-glow="0.75" data-star-sparkle="true">
                        <span>Explore Works</span>
                        <i data-lucide="arrow-down" class="w-4 h-4"></i>
                    </a>

                    <button id="heroCopyEmail" class="star-border px-6 py-4 rounded-full text-sm font-medium glass-card hover:bg-white/10 text-slate-200 hover:text-white transition-all flex items-center gap-2.5 border border-white/10 cursor-pointer" data-star-color="#38bdf8" data-star-glow="0.6">
                        <i data-lucide="copy" class="w-4 h-4 text-purple-400"></i>
                        <span id="heroCopyText">Aldrixmaesa4@gmail.com</span>
                    </button>
                </div>

                <!-- Social Connections (Font Awesome Icons) -->
                <div class="pt-2 flex flex-col sm:flex-row sm:items-center gap-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-slate-400 shrink-0">Reach me out:</span>
                    <div class="flex items-center gap-3">
                        
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#1877f2] hover:border-[#1877f2]/50 hover:bg-[#1877f2]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="Facebook" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f text-base group-hover:scale-110 transition-transform"></i>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#0a66c2] hover:border-[#0a66c2]/50 hover:bg-[#0a66c2]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="LinkedIn" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in text-base group-hover:scale-110 transition-transform"></i>
                        </a>

                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#e4405f] hover:border-[#e4405f]/50 hover:bg-[#e4405f]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="Instagram" aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-lg group-hover:scale-110 transition-transform"></i>
                        </a>

                        <!-- GitHub -->
                        <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-white hover:border-white/40 hover:bg-white/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="GitHub" aria-label="GitHub">
                            <i class="fa-brands fa-github text-lg group-hover:scale-110 transition-transform"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Right: Floating Portrait Showcase -->
            <div class="flex-shrink-0 flex justify-center lg:justify-end relative py-6">
                <div class="relative group">
                    
                    <!-- Atmospheric Neon Glow Behind -->
                    <div class="absolute -inset-6 rounded-full bg-gradient-to-tr from-cyan-500 via-indigo-600 to-purple-600 opacity-45 blur-3xl group-hover:opacity-80 transition-opacity duration-700 pointer-events-none animate-pulse-glow"></div>
                    
                    <!-- Subtle Dashed Orbit Ring -->
                    <div class="absolute -inset-5 rounded-full border border-dashed border-cyan-400/30 pointer-events-none"></div>

                    <!-- Main Floating Avatar Frame (Enlarged) -->
                    <div class="relative w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 lg:w-[380px] lg:h-[380px] xl:w-[420px] xl:h-[420px] rounded-full overflow-hidden p-2 bg-gradient-to-tr from-cyan-400 via-indigo-500 to-purple-600 shadow-[0_0_60px_rgba(168,85,247,0.4)] ring-4 ring-white/10 backdrop-blur animate-float-slow">
                        <img src="{{ asset('images/aldrix.jpg') }}" alt="Aldrix Maesa" class="w-full h-full object-cover object-[center_20%] rounded-full group-hover:scale-105 transition-transform duration-700">
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- SELECTED PROJECTS SECTION (CATEGORY-DRIVEN SHOWCASE) -->
    <section id="work" class="space-y-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">Projects</h2>
            </div>
            <p class="text-slate-400 text-xs sm:text-sm max-w-md">
                
            </p>
        </div>

        <!-- 1. CATEGORY OVERVIEW CARDS (TOP LEVEL VIEW) -->
        <div id="categoryCardsView" class="grid grid-cols-1 lg:grid-cols-2 gap-6 transition-all duration-300">

            <!-- CATEGORY 1: APP DEVELOPMENT -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-emerald-500/50 hover:shadow-[0_20px_50px_-15px_rgba(16,185,129,0.25)] relative overflow-hidden transition-all duration-300" onclick="showCategory('app')">
                <div class="absolute -top-24 -right-24 w-60 h-60 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none group-hover:bg-emerald-500/20 transition-all"></div>

                <div class="space-y-6">
                    <!-- Category Title & Arrow -->
                    <div>
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-white group-hover:text-emerald-300 transition-colors">
                                App Development
                            </h3>
                            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 group-hover:bg-emerald-400 group-hover:text-slate-950 group-hover:scale-110 transition-all">
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mt-2">
                            High-integrity standalone desktop software and enterprise financial platforms built with Java, relational MySQL, and secure ACID transaction protocols.
                        </p>
                    </div>

                    <!-- Visual Project Preview Inside Category: NxtGen Bank -->
                    <div class="h-52 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative flex flex-col justify-between group-hover:border-emerald-500/40 transition-colors shadow-2xl">
                        <!-- Image Preview -->
                        <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                            <img src="{{ asset('images/nxtgn-bank/dashboard.png') }}" alt="NxtGen Bank Preview" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        </div>
                    </div>

                    <!-- Tech Stack Highlights -->
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Java Swing</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">MySQL Relational</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">JDBC Engine</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">PIN Security</span>
                    </div>
                </div>

                <!-- Card Bottom Action -->
                <div class="pt-5 mt-6 border-t border-white/5 flex items-center justify-end text-xs">
                    <span class="px-4 py-2 rounded-full bg-emerald-500/10 text-emerald-300 border border-emerald-500/30 group-hover:bg-emerald-400 group-hover:text-slate-950 font-semibold flex items-center gap-1.5 transition-all">
                        <span>View Projects</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </div>

            <!-- CATEGORY 2: WEB DEVELOPMENT -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-purple-500/50 hover:shadow-[0_20px_50px_-15px_rgba(168,85,247,0.25)] relative overflow-hidden transition-all duration-300" onclick="showCategory('web')">
                <div class="absolute -top-24 -right-24 w-60 h-60 bg-purple-500/10 rounded-full blur-3xl pointer-events-none group-hover:bg-purple-500/20 transition-all"></div>

                <div class="space-y-6">
                    <!-- Category Title & Arrow -->
                    <div>
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl sm:text-3xl font-display font-extrabold text-white group-hover:text-purple-300 transition-colors">
                                Web Development
                            </h3>
                            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 group-hover:bg-purple-400 group-hover:text-slate-950 group-hover:scale-110 transition-all">
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mt-2">
                            Commercial POS storefronts, AI scientific analysis platforms, and patient healthcare portals engineered with Laravel, Vue 3, Tailwind, and REST APIs.
                        </p>
                    </div>

                    <!-- Visual Project Collage Inside Category: POS, Adaptive, AppointMed -->
                    <div class="h-52 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative p-2.5 flex flex-col justify-center group-hover:border-purple-500/40 transition-colors shadow-2xl">
                        <!-- 3-Thumbnail Preview Stack -->
                        <div class="grid grid-cols-3 gap-2 my-auto">
                            <!-- Thumb 1: POS -->
                            <div class="rounded-xl overflow-hidden bg-slate-900 border border-white/10 relative group/t">
                                <img src="{{ asset('images/brewvanti/pos-terminal.png') }}" alt="BrewVanti POS" class="w-full h-24 object-cover object-top group-hover/t:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex items-end p-1.5">
                                    <span class="text-[9px] font-mono text-amber-300 truncate font-semibold">BrewVanti POS</span>
                                </div>
                            </div>

                            <!-- Thumb 2: Adaptive Analysis -->
                            <div class="rounded-xl overflow-hidden bg-slate-900 border border-white/10 relative group/t">
                                <img src="{{ asset('images/adaptive-analysis/dashboard.png') }}" alt="Adaptive Material Analysis" class="w-full h-24 object-cover object-top group-hover/t:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex items-end p-1.5">
                                    <span class="text-[9px] font-mono text-purple-300 truncate font-semibold">Adaptive Sci-Tech</span>
                                </div>
                            </div>

                            <!-- Thumb 3: AppointMed -->
                            <div class="rounded-xl overflow-hidden bg-slate-900 border border-white/10 relative group/t">
                                <img src="{{ asset('images/appointmed/dashboard.png') }}" alt="AppointMed" class="w-full h-24 object-cover object-top group-hover/t:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex items-end p-1.5">
                                    <span class="text-[9px] font-mono text-cyan-300 truncate font-semibold">AppointMed</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tech Stack Highlights -->
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Laravel 11</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Vue 3 / React</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Tailwind CSS</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">AI Analysis</span>
                    </div>
                </div>

                <!-- Card Bottom Action -->
                <div class="pt-5 mt-6 border-t border-white/5 flex items-center justify-end text-xs">
                    <span class="px-4 py-2 rounded-full bg-purple-500/10 text-purple-300 border border-purple-500/30 group-hover:bg-purple-400 group-hover:text-slate-950 font-semibold flex items-center gap-1.5 transition-all">
                        <span>View Projects</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </div>

        </div>

        <!-- 2. CATEGORY DETAIL VIEW (DRILL-DOWN WHEN CATEGORY IS CLICKED) -->
        <div id="categoryDetailView" class="hidden space-y-8 transition-all duration-300">

            <!-- Category Top Control & Navigation Bar -->
            <div class="glass-card rounded-2xl p-4 sm:p-5 border border-white/10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                
                <!-- Left: Back Button & Breadcrumbs -->
                <div class="flex items-center gap-3">
                    <button onclick="showAllCategories()" class="px-4 py-2 rounded-full glass-pill hover:bg-white/10 text-xs font-semibold text-white border border-white/10 flex items-center gap-2 transition-all hover:scale-105 shadow-lg group">
                        <i data-lucide="arrow-left" class="w-4 h-4 text-purple-400 group-hover:-translate-x-0.5 transition-transform"></i>
                        <span>All Categories</span>
                    </button>
                    <div class="hidden sm:flex items-center gap-2 text-xs font-mono text-slate-400">
                        <span>/</span>
                        <span id="categoryBreadcrumbTitle" class="text-white font-bold font-display text-sm">Category Name</span>
                    </div>
                </div>

                <!-- Right: Quick Category Switcher Pills -->
                <div class="flex items-center gap-2 flex-wrap">
                    <button id="btnSwitchApp" onclick="showCategory('app')" class="category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>App Development</span>
                    </button>
                    <button id="btnSwitchWeb" onclick="showCategory('web')" class="category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                        <span>Web Development</span>
                    </button>
                </div>
            </div>

            <!-- Category Headline Banner -->
            <div class="p-6 rounded-2xl bg-gradient-to-r from-white/[0.03] via-white/[0.01] to-transparent border border-white/10 flex items-center justify-between">
                <div>
                    <h3 id="categoryBannerTitle" class="text-2xl font-display font-bold text-white">Category</h3>
                </div>
            </div>

            <!-- GROUP A: APP DEVELOPMENT PROJECTS (NXTGEN BANK) -->
            <div id="appProjectsGroup" class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                <!-- MAIN PROJECT CARD: NxtGen Bank (7 cols) -->
                <article class="lg:col-span-7 project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-emerald-500/40 transition-all shadow-xl" onclick="openProjectModal('nxtgen')">
                    <div class="space-y-5">
                        
                        <!-- App Mockup Visual with Real Screenshot -->
                        <div class="h-64 sm:h-72 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative flex flex-col justify-center group-hover:border-emerald-500/40 transition-colors shadow-2xl">
                            <!-- Real Screenshot Image -->
                            <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                                <img src="{{ asset('images/nxtgn-bank/dashboard.png') }}" alt="NxtGen Bank Dashboard" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-display font-bold text-white group-hover:text-emerald-300 transition-colors">
                                    NxtGen Bank
                                </h3>
                                <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                            </div>

                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Java</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">MySQL</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Swing GUI</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">JDBC</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Financial Ledger</span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                                A robust desktop banking and ledger management system featuring secure authentication, automated transaction logging, account creation, and relational persistence.
                            </p>
                        </div>

                    </div>

                    <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-end text-xs">
                        <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                            <span>View Project</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </article>

                <!-- ARCHITECTURE HIGHLIGHTS COMPANION CARD (5 cols) -->
                <div class="lg:col-span-5 glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between border border-white/10 space-y-6">
                    <div class="space-y-4">
                        <h4 class="text-xl font-display font-bold text-white">System Architecture & Safety</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Engineered for zero data loss and deterministic execution in financial workflows.
                        </p>

                        <div class="space-y-3 pt-2">
                            <div class="p-3 rounded-xl bg-white/[0.02] border border-white/5 flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0 mt-0.5">
                                    <i data-lucide="database" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-white">ACID Relational Persistence</h5>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Automated rollback on balance transfer errors ensures zero balance discrepancies.</p>
                                </div>
                            </div>

                            <div class="p-3 rounded-xl bg-white/[0.02] border border-white/5 flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0 mt-0.5">
                                    <i data-lucide="key" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-white">6-Digit PIN Authentication</h5>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Hashed authentication credentials protecting administrative and user sessions.</p>
                                </div>
                            </div>

                            <div class="p-3 rounded-xl bg-white/[0.02] border border-white/5 flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 flex-shrink-0 mt-0.5">
                                    <i data-lucide="cpu" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-white">Zero Runtime External Bloat</h5>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Optimized JDBC connection pool with ultra-low latency memory footprint.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button onclick="openProjectModal('nxtgen')" class="w-full py-3 rounded-full text-xs font-semibold bg-emerald-500/15 text-emerald-300 border border-emerald-500/30 hover:bg-emerald-400 hover:text-slate-950 transition-all flex items-center justify-center gap-2">
                        <span>View Project Case Study</span>
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </button>
                </div>

            </div>

            <!-- GROUP B: WEB DEVELOPMENT PROJECTS (POS, ADAPTIVE, APPOINTMED) -->
            <div id="webProjectsGroup" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- WEB PROJECT 1: BrewVanti POS -->
                <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-amber-500/40 transition-all shadow-xl" onclick="openProjectModal('brewvanti')">
                    <div class="space-y-5">
                        
                        <!-- App Mockup Visual with Real Screenshot -->
                        <div class="h-56 rounded-2xl overflow-hidden bg-gradient-to-br from-[#1a1510] via-slate-950 to-black border border-white/10 relative flex flex-col justify-center group-hover:border-amber-500/40 transition-colors shadow-2xl">
                            <!-- Real Screenshot Image -->
                            <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                                <img src="{{ asset('images/brewvanti/pos-terminal.png') }}" alt="BrewVanti POS Terminal" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-amber-300 transition-colors">
                                    BrewVanti POS & Storefront
                                </h3>
                                <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                            </div>

                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">JavaScript</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Storefront</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Inventory</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">VAT Engine</span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                                End-to-end commercial POS and inventory system for coffee shops with barcode scanning, automated stock alerts, receipt printing, and daily profit/loss analytics.
                            </p>
                        </div>

                    </div>

                    <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-end text-xs">
                        <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                            <span>View Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </article>

                <!-- WEB PROJECT 2: Adaptive Material Analysis -->
                <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-purple-500/40 transition-all shadow-xl" onclick="openProjectModal('adaptive')">
                    <div class="space-y-5">
                        
                        <!-- App Mockup Visual with Real Screenshot -->
                        <div class="h-56 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative flex flex-col justify-center group-hover:border-purple-500/40 transition-colors shadow-2xl">
                            <!-- Real Screenshot Image -->
                            <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                                <img src="{{ asset('images/adaptive-analysis/dashboard.png') }}" alt="Adaptive Material Analysis Dashboard" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-purple-300 transition-colors">
                                    Adaptive Material Analysis
                                </h3>
                                <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                            </div>

                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Vue 3</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Laravel</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">AI Analysis</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Three.js</span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                                Scientific telemetry platform aggregating engineering material tests, predicting stress failure points via AI models, and generating interactive data visualizations.
                            </p>
                        </div>

                    </div>

                    <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-end text-xs">
                        <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                            <span>View Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </article>

                <!-- WEB PROJECT 3: AppointMed -->
                <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-cyan-500/40 transition-all shadow-xl" onclick="openProjectModal('appointmed')">
                    <div class="space-y-5">
                        
                        <!-- App Mockup Visual with Real Screenshot -->
                        <div class="h-56 rounded-2xl overflow-hidden bg-slate-900 border border-white/10 relative flex flex-col justify-center group-hover:border-cyan-500/40 transition-colors shadow-2xl">
                            <!-- Real Screenshot Image -->
                            <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                                <img src="{{ asset('images/appointmed/dashboard.png') }}" alt="AppointMed Patient Portal" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-cyan-300 transition-colors">
                                    AppointMed Portal
                                </h3>
                                <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                            </div>

                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">HTML5</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">CSS3</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">JavaScript</span>
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Responsive</span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                                A clean and accessible clinical appointment portal allowing patients to browse medical departments, select doctors, schedule visits, and access digital prescriptions.
                            </p>
                        </div>

                    </div>

                    <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-end text-xs">
                        <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                            <span>View Details</span>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </article>

            </div>

        </div>

    </section>

    <!-- TECH STACK & CAPABILITIES SECTION -->
    <section id="stack" class="space-y-8 pt-6 border-t border-white/5">
        <div>
            <h2 class="text-3xl sm:text-4xl font-display font-bold text-white">Skills & Production Arsenal</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Backend Engineering -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-white/10">
                <div class="w-12 h-12 rounded-2xl bg-red-500/10 border border-red-500/20 flex items-center justify-center text-red-400">
                    <i data-lucide="server" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">Backend Engineering</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Building robust, secure, and maintainable APIs, relational databases, and background processing systems.
                </p>
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">PHP 8.x</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Laravel Framework</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">MySQL / SQLite</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Java / JDBC</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">RESTful APIs</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Authentication & JWT</span>
                </div>
            </div>

            <!-- Frontend Architecture -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-white/10">
                <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400">
                    <i data-lucide="layout" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">Frontend Architecture</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Crafting responsive, high-speed, and accessible web experiences with state-of-the-art tooling.
                </p>
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Vue 3 / Composition</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">React.js</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Tailwind CSS</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">JavaScript (ES6+)</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">HTML5 Semantic</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Three.js / WebGL</span>
                </div>
            </div>

            <!-- UI/UX & Product Strategy -->
            <div class="glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-white/10">
                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400">
                    <i data-lucide="pen-tool" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">UI/UX & Product Design</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Translating complex business logic into intuitive, visually appealing user workflows and design tokens.
                </p>
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Figma Prototyping</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Design Systems</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Information Hierarchy</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Usability Testing</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Micro-animations</span>
                    <span class="glass-pill px-3 py-1 rounded-full text-xs text-slate-300">Git / CI/CD</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="glass-card rounded-3xl p-8 sm:p-12 border border-white/10 space-y-6 relative overflow-hidden">
        <div class="max-w-3xl space-y-4">
            <h2 class="text-2xl sm:text-4xl font-display font-bold text-white">
                Bridging the bridge between aesthetic finesse and backend stability.
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                I'm <strong class="text-white font-medium">Aldrix Maesa</strong>, a developer and designer based in the Philippines. I focus on creating digital applications that are not only visually engaging, but fundamentally sound in code structure, database normalization, and user performance.
            </p>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                Whether creating an enterprise desktop ERP, a patient management system, or an interactive WebGL canvas, every line of code is written with intent, readability, and speed in mind.
            </p>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="glass-card rounded-3xl p-8 sm:p-14 text-center relative overflow-hidden border border-white/10">
        <div class="max-w-2xl mx-auto space-y-6">
            <h2 class="text-3xl sm:text-5xl font-display font-extrabold text-white">
                Have a project or opportunity? Let's connect.
            </h2>
            <p class="text-sm text-slate-400 max-w-lg mx-auto">
                Feel free to email me directly or explore my open-source code on GitHub.
            </p>

            <div class="pt-4 flex flex-wrap items-center justify-center gap-3">
                <button id="contactCopyEmail" class="star-border px-6 py-3.5 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2 shadow-xl shadow-white/10 cursor-pointer" data-star-color="#c084fc">
                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                    <span>Copy: Aldrixmaesa4@gmail.com</span>
                </button>
                
                <a href="mailto:Aldrixmaesa4@gmail.com" class="star-border px-5 py-3.5 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all flex items-center gap-2 border border-white/10" data-star-color="#38bdf8">
                    <i class="fa-solid fa-envelope text-xs text-purple-400"></i>
                    <span>Email Me</span>
                </a>

                <!-- Facebook -->
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#1877f2] hover:border-[#1877f2]/50 hover:bg-[#1877f2]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="Facebook" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f text-base group-hover:scale-110 transition-transform"></i>
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#0a66c2] hover:border-[#0a66c2]/50 hover:bg-[#0a66c2]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="LinkedIn" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in text-base group-hover:scale-110 transition-transform"></i>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-[#e4405f] hover:border-[#e4405f]/50 hover:bg-[#e4405f]/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="Instagram" aria-label="Instagram">
                    <i class="fa-brands fa-instagram text-lg group-hover:scale-110 transition-transform"></i>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="group w-11 h-11 rounded-full glass-card border border-white/10 flex items-center justify-center text-slate-300 hover:text-white hover:border-white/40 hover:bg-white/10 transition-all hover:scale-110 shadow-lg cursor-pointer" title="GitHub" aria-label="GitHub">
                    <i class="fa-brands fa-github text-lg group-hover:scale-110 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

</main>
@endsection
