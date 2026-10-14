@extends('layouts.app')

@section('title', 'Works & Projects Archive — Aldrix Maesa')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-8 pt-32 pb-24 space-y-16 relative z-10">

    <!-- PAGE HERO HEADER -->
    <header class="space-y-6">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs font-mono text-slate-400">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1">
                <i data-lucide="home" class="w-3.5 h-3.5"></i>
                <span>Home</span>
            </a>
            <span>/</span>
            <span class="text-purple-400 font-medium">Projects</span>
        </nav>

        <div class="space-y-3 max-w-3xl">
            <h1 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight text-white leading-tight">
             Systems & Projects
            </h1>
            <p class="text-sm sm:text-base text-slate-400 leading-relaxed max-w-2xl">
                A clean compilation of enterprise desktop software, commercial web applications, and clinical platforms.
            </p>
        </div>
    </header>

    <!-- INTERACTIVE FILTER & SEARCH TOOLBAR -->
    <section class="glass-card rounded-2xl p-4 sm:p-5 border border-white/10 flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-xl">
        <!-- Category Filter Pills -->
        <div class="flex flex-wrap items-center gap-2">
            <button type="button" onclick="setWorksFilter('all', this)" id="btnFilterAll" class="works-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white text-slate-950 transition-all shadow-md flex items-center gap-1.5">
                <span>All Disciplines</span>
                <span class="px-1.5 py-0.2 rounded-full bg-slate-900/10 text-slate-900 text-[10px] font-bold">4</span>
            </button>
            <button type="button" onclick="setWorksFilter('app', this)" id="btnFilterApp" class="works-filter-btn px-4 py-2 rounded-xl text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5 border border-white/10">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>App Development</span>
                <span class="px-1.5 py-0.2 rounded-full bg-white/10 text-slate-300 text-[10px] font-mono">1</span>
            </button>
            <button type="button" onclick="setWorksFilter('web', this)" id="btnFilterWeb" class="works-filter-btn px-4 py-2 rounded-xl text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5 border border-white/10">
                <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                <span>Web Development</span>
                <span class="px-1.5 py-0.2 rounded-full bg-white/10 text-slate-300 text-[10px] font-mono">3</span>
            </button>
        </div>

        <!-- Realtime Search Input -->
        <div class="relative w-full md:w-72">
            <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
            <input type="text" id="projectSearchInput" oninput="searchProjects(this.value)" placeholder="Search by tech or keyword..." class="w-full pl-10 pr-4 py-2 rounded-xl bg-white/[0.04] border border-white/10 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500/50 focus:ring-1 focus:ring-purple-500/50 transition-all font-mono">
        </div>
    </section>

    <!-- SECTION 1: APP DEVELOPMENT -->
    <section class="space-y-6 category-section" id="sectionAppDev">
        <!-- Section Header -->
        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <div class="flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(16,185,129,0.8)]"></span>
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold text-white">App Development</h2>
                    <p class="text-xs text-slate-400 font-mono mt-0.5"></p>
                </div>
            </div>
        </div>

        <!-- App Dev Project Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- NxtGen Bank Main Feature Card (7 cols) -->
            <article class="project-item lg:col-span-7 glass-card rounded-3xl p-6 sm:p-8 space-y-6 border border-white/10 hover:border-emerald-500/40 transition-all shadow-2xl relative overflow-hidden group cyber-grid-app" data-category="app" data-keywords="java mysql swing jdbc desktop app financial ledger acid banking nxtgen">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 rounded-full text-[11px] font-mono bg-emerald-500/10 text-emerald-300 border border-emerald-500/25 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>Desktop Application • FinTech System</span>
                        </span>
                        <span class="text-xs font-mono text-slate-400">Java & MySQL</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl sm:text-3xl font-display font-bold text-white group-hover:text-emerald-300 transition-colors">
                            NxtGen Bank
                        </h3>
                        <button type="button" onclick="openProjectModal('nxtgen')" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 group-hover:bg-emerald-400 group-hover:text-slate-950 transition-all">
                            <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                        </button>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        A comprehensive desktop banking management and ledger system built in Java with MySQL relational persistence. Features 6-pin credential authentication, automated balance ledgers, deposit logging, cardless branch withdrawals, and inter-bank transfers with strict ACID compliance.
                    </p>

                    <!-- Preview Frame with Scanline -->
                    <div class="h-64 sm:h-72 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative flex flex-col justify-between group-hover:border-emerald-500/40 transition-colors shadow-2xl cursor-pointer" onclick="openProjectModal('nxtgen')">
                        <!-- Cybernetic Scanner -->
                        <div class="animate-scan absolute inset-x-0 h-10 bg-gradient-to-b from-transparent via-emerald-400/20 to-transparent pointer-events-none z-20"></div>

                        <!-- Bar -->
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 px-4 py-2.5 bg-slate-900/90 backdrop-blur z-10">
                            <div class="flex items-center gap-2">
                                <span class="w-5 h-5 rounded-md bg-emerald-500/15 border border-emerald-500/25 flex items-center justify-center text-emerald-400">
                                    <i data-lucide="terminal" class="w-3 h-3"></i>
                                </span>
                                <span class="font-mono text-[11px] text-slate-200">NxtGen Bank Engine</span>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-300 bg-emerald-500/15 px-2.5 py-0.5 rounded-full">Production Engine</span>
                        </div>

                        <!-- Image -->
                        <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                            <img src="{{ asset('images/nxtgn-bank/dashboard.png') }}" alt="NxtGen Bank Dashboard" class="w-full h-full object-cover object-top group-hover:scale-105 transition-all duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                            
                            <!-- Floating Tag Inside Image -->
                            <div class="absolute bottom-3 left-3 px-3 py-1.5 rounded-xl bg-slate-950/85 backdrop-blur border border-white/15 text-[11px] text-slate-200 font-mono flex items-center gap-2 shadow-2xl">
                                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>Click to inspect 5 interactive views</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <span>Zero External Runtime Bloat</span>
                            <span class="text-emerald-400 font-semibold flex items-center gap-1">
                                <span>Launch Case Study</span>
                                <i data-lucide="chevron-right" class="w-3 h-3"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Tech Stack Pills -->
                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="px-2.5 py-1 rounded-lg text-[11px] font-mono bg-white/5 text-slate-300 border border-white/10">Java Swing</span>
                        <span class="px-2.5 py-1 rounded-lg text-[11px] font-mono bg-white/5 text-slate-300 border border-white/10">MySQL Database</span>
                        <span class="px-2.5 py-1 rounded-lg text-[11px] font-mono bg-white/5 text-slate-300 border border-white/10">JDBC Engine</span>
                        <span class="px-2.5 py-1 rounded-lg text-[11px] font-mono bg-white/5 text-slate-300 border border-white/10">ACID Transactions</span>
                        <span class="px-2.5 py-1 rounded-lg text-[11px] font-mono bg-white/5 text-slate-300 border border-white/10">PIN Security</span>
                    </div>

                    <!-- Action Bar -->
                    <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                        <div class="text-xs font-mono text-emerald-400 flex items-center gap-1.5">
                            <i data-lucide="check-circle" class="w-3.5 h-3.5"></i>
                            <span>Verified Codebase</span>
                        </div>
                        <button type="button" onclick="openProjectModal('nxtgen')" class="px-5 py-2.5 rounded-full text-xs font-semibold bg-emerald-500/15 text-emerald-300 border border-emerald-500/30 hover:bg-emerald-400 hover:text-slate-950 transition-all flex items-center gap-2 shadow-lg">
                            <span>Open Case Study & Gallery</span>
                            <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Architecture Breakdown Companion (5 cols) -->
            <div class="lg:col-span-5 glass-card rounded-3xl p-6 sm:p-7 border border-white/10 space-y-6">
                <div class="space-y-2">
                    <span class="text-xs font-mono uppercase tracking-wider text-emerald-400">Architecture Specifications</span>
                    <h4 class="text-xl font-display font-bold text-white">System Highlights & Resilience</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Engineered with strict transaction isolation to guarantee zero balance discrepancies in high-throughput operations.
                    </p>
                </div>

                <div class="space-y-3">
                    <div class="p-3.5 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                        <div class="flex items-center gap-2 text-xs font-semibold text-white">
                            <i data-lucide="database" class="w-4 h-4 text-emerald-400"></i>
                            <span>Relational Ledger & Rollbacks</span>
                        </div>
                        <p class="text-[11px] text-slate-400 leading-relaxed">
                            Inter-bank transfers leverage transactional blocks; any failure during recipient crediting triggers immediate automatic rollback.
                        </p>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                        <div class="flex items-center gap-2 text-xs font-semibold text-white">
                            <i data-lucide="key" class="w-4 h-4 text-emerald-400"></i>
                            <span>6-Pin Authentication Gate</span>
                        </div>
                        <p class="text-[11px] text-slate-400 leading-relaxed">
                            Administrative and customer accounts are gated with PIN hashing and session termination upon inactivity.
                        </p>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                        <div class="flex items-center gap-2 text-xs font-semibold text-white">
                            <i data-lucide="layers" class="w-4 h-4 text-emerald-400"></i>
                            <span>5 Included Workflow Views</span>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/5 text-slate-300">Dashboard</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/5 text-slate-300">Login & PIN</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/5 text-slate-300">Deposit</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/5 text-slate-300">Withdrawal</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/5 text-slate-300">Bank Transfer</span>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="openProjectModal('nxtgen')" class="w-full py-3 rounded-full text-xs font-semibold bg-white/5 hover:bg-white/10 text-white border border-white/10 transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="images" class="w-3.5 h-3.5 text-emerald-400"></i>
                    <span>Preview All 5 System Screens</span>
                </button>
            </div>

        </div>
    </section>

    <!-- SECTION 2: WEB DEVELOPMENT -->
    <section class="space-y-6 category-section pt-8 border-t border-white/5" id="sectionWebDev">
        <!-- Section Header -->
        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <div class="flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-purple-400 shadow-[0_0_12px_rgba(168,85,247,0.8)]"></span>
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold text-white">Web Development</h2>
                    <p class="text-xs text-slate-400 font-mono mt-0.5"></p>
                </div>
            </div>
        </div>

        <!-- Web Dev Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- PROJECT 1: BrewVanti POS -->
            <article class="project-item glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-amber-500/40 transition-all shadow-xl" data-category="web" data-keywords="javascript brewvanti pos point of sale inventory storefront coffee food service vat order finance" onclick="openProjectModal('brewvanti')">
                <div class="space-y-5">
                    
                    <!-- Preview Image -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-gradient-to-br from-[#1a1510] via-slate-950 to-black border border-white/10 relative flex flex-col justify-between group-hover:border-amber-500/40 transition-colors shadow-2xl">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <div class="flex items-center gap-1.5">
                                <span class="font-mono text-[11px] text-slate-300">BrewVanti POS • Commercial</span>
                            </div>
                            <span class="text-[10px] font-mono text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded-full">Real-time Orders</span>
                        </div>

                        <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                            <img src="{{ asset('images/brewvanti/pos-terminal.png') }}" alt="BrewVanti POS Terminal" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent"></div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <span>POS Terminal</span>
                            <span class="text-amber-400">Inventory & Finance</span>
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
                            End-to-end commercial POS and inventory system for coffee shops with live Dine-in/Take-out cart calculations, automated stock alerts, and back-office analytics.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <a href="https://kofeemanila.infinityfree.io/" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()" class="px-3.5 py-1.5 rounded-full bg-amber-500/15 text-amber-300 hover:bg-amber-400 hover:text-black border border-amber-500/30 font-semibold flex items-center gap-1.5 transition-all shadow-sm">
                        <i data-lucide="globe" class="w-3.5 h-3.5"></i>
                        <span>View Website</span>
                    </a>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>Inspect Case Study (5 Views)</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

            <!-- PROJECT 2: StudyForge Adaptive Material Analysis -->
            <article class="project-item glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-purple-500/40 transition-all shadow-xl" data-category="web" data-keywords="vue vue3 laravel studyforge adaptive analysis material ai threejs edtech pinia tailwind" onclick="openProjectModal('adaptive')">
                <div class="space-y-5">
                    
                    <!-- Preview Image -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative flex flex-col justify-between group-hover:border-purple-500/40 transition-colors shadow-2xl">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <div class="flex items-center gap-1.5">
                                <span class="font-mono text-[11px] text-slate-300">StudyForge • EdTech</span>
                            </div>
                            <span class="text-[10px] font-mono text-purple-400 bg-purple-500/10 px-2 py-0.5 rounded-full">AI Synthesis</span>
                        </div>

                        <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                            <img src="{{ asset('images/adaptive-analysis/dashboard.png') }}" alt="StudyForge Adaptive Analysis Dashboard" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent"></div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <span>Vue 3 • Laravel API</span>
                            <span class="text-purple-400">Predictive Engine</span>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-purple-300 transition-colors">
                                StudyForge Platform
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
                            Intelligent adaptive learning platform ingesting PDFs, lecture decks, and videos to synthesize concept maps, 3D dynamic assessments, and gamified study worlds.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-purple-400">EdTech • AI Analysis</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>Inspect Case Study (4 Views)</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

            <!-- PROJECT 3: AppointMed Portal -->
            <article class="project-item glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10 hover:border-cyan-500/40 transition-all shadow-xl" data-category="web" data-keywords="appointmed html css javascript healthcare medical doctor booking patient clinic clinical portal" onclick="openProjectModal('appointmed')">
                <div class="space-y-5">
                    
                    <!-- Preview Image -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-slate-900 border border-white/10 relative flex flex-col justify-between group-hover:border-cyan-500/40 transition-colors shadow-2xl">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <div class="flex items-center gap-1.5">
                                <span class="font-mono text-[11px] text-slate-300">AppointMed • Clinical System</span>
                            </div>
                            <span class="text-[10px] font-mono text-cyan-400 bg-cyan-500/10 px-2 py-0.5 rounded-full">Patient Portal</span>
                        </div>

                        <div class="relative w-full h-full overflow-hidden bg-slate-900 flex items-center justify-center">
                            <img src="{{ asset('images/appointmed/dashboard.png') }}" alt="AppointMed Patient Portal" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent"></div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/10 px-4 py-2 bg-slate-900/90 backdrop-blur z-10">
                            <span>HTML5 • CSS3 • JavaScript</span>
                            <span class="text-cyan-400">Accessible Web UI</span>
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
                            A clean and accessible clinical appointment portal allowing patients to schedule visits, specify medical symptoms, and manage digital consultation statuses.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-cyan-400">Healthcare Web</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>Inspect Case Study (5 Views)</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

</main>

<!-- Client-side Category & Search Filtering Script -->
<script>
    function setWorksFilter(category, button) {
        const buttons = document.querySelectorAll('.works-filter-btn');
        buttons.forEach(btn => {
            btn.className = 'works-filter-btn px-4 py-2 rounded-xl text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5 border border-white/10';
        });

        if (category === 'all') {
            button.className = 'works-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white text-slate-950 transition-all shadow-md flex items-center gap-1.5';
        } else if (category === 'app') {
            button.className = 'works-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-emerald-400 text-slate-950 transition-all shadow-md flex items-center gap-1.5 shadow-emerald-500/20';
        } else if (category === 'web') {
            button.className = 'works-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-purple-400 text-slate-950 transition-all shadow-md flex items-center gap-1.5 shadow-purple-500/20';
        }

        const appSection = document.getElementById('sectionAppDev');
        const webSection = document.getElementById('sectionWebDev');

        if (category === 'all') {
            if (appSection) appSection.classList.remove('hidden');
            if (webSection) webSection.classList.remove('hidden');
        } else if (category === 'app') {
            if (appSection) appSection.classList.remove('hidden');
            if (webSection) webSection.classList.add('hidden');
        } else if (category === 'web') {
            if (appSection) appSection.classList.add('hidden');
            if (webSection) webSection.classList.remove('hidden');
        }

        // Update URL query without page reload
        const url = new URL(window.location);
        if (category === 'all') {
            url.searchParams.delete('category');
        } else {
            url.searchParams.set('category', category);
        }
        window.history.replaceState({}, '', url);

        if (window.lucide) window.lucide.createIcons();
    }

    function searchProjects(query) {
        const q = query.toLowerCase().trim();
        const items = document.querySelectorAll('.project-item');
        
        items.forEach(item => {
            const keywords = item.getAttribute('data-keywords') || '';
            const text = item.textContent.toLowerCase();
            if (!q || keywords.includes(q) || text.includes(q)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    // Auto-detect ?category= query param on page load
    document.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(window.location.search);
        const cat = params.get('category');
        if (cat === 'app') {
            const btn = document.getElementById('btnFilterApp');
            if (btn) setWorksFilter('app', btn);
        } else if (cat === 'web') {
            const btn = document.getElementById('btnFilterWeb');
            if (btn) setWorksFilter('web', btn);
        }
    });
</script>
@endsection
