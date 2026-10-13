@extends('layouts.app')

@section('title', 'Aldrix Maesa — Full-Stack Developer & UI/UX Designer')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-8 pt-32 pb-24 space-y-28 relative z-10">

    <!-- HERO SECTION (MAXIMIZED BENTO GRID ARCHITECTURE) -->
    <section id="hero" class="space-y-8">
        
        <!-- Pre-title Tag -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-mono uppercase tracking-widest text-purple-400 border border-purple-500/25 bg-purple-500/10">
            <span class="w-1.5 h-1.5 rounded-full bg-purple-400 animate-ping"></span>
            <span>Digital Systems • Full-Stack Engineering • UI/UX Design</span>
        </div>

        <!-- Main Headline -->
        <div class="space-y-4 max-w-4xl">
            <h1 class="text-4xl sm:text-6xl lg:text-[72px] font-display font-extrabold tracking-tight leading-[1.05] text-white">
                Architecting <span class="text-shimmer">high-performance</span> digital systems & immersive experiences.
            </h1>
            <p class="text-base sm:text-xl text-slate-400 max-w-2xl font-normal leading-relaxed">
                Full-stack engineering meets thoughtful product design. Building resilient web applications, enterprise dashboards, and intuitive digital interfaces.
            </p>
        </div>

        <!-- Quick CTAs -->
        <div class="flex flex-wrap items-center gap-3 pt-1">
            <a href="#work" class="px-6 py-3 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2 shadow-xl shadow-white/10">
                <span>Explore Works</span>
                <i data-lucide="arrow-down" class="w-3.5 h-3.5"></i>
            </a>

            <button id="heroCopyEmail" class="px-5 py-3 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all flex items-center gap-2 border border-white/10">
                <i data-lucide="copy" class="w-3.5 h-3.5 text-purple-400"></i>
                <span id="heroCopyText">Aldrixmaesa4@gmail.com</span>
            </button>

            <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="px-4 py-3 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-400 hover:text-white transition-all flex items-center gap-1.5 border border-white/10">
                <i data-lucide="github" class="w-4 h-4"></i>
                <span>GitHub Profile</span>
            </a>
        </div>

        <!-- HERO DUAL BENTO SHOWCASE (ELIMINATES EMPTY VOID) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pt-4">

            <!-- LEFT BENTO: Developer Bio & Live Telemetry Card (7 Cols) -->
            <div class="lg:col-span-6 glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between space-y-6 relative overflow-hidden border border-white/10">
                <div class="absolute -top-20 -left-20 w-52 h-52 bg-purple-600/15 rounded-full blur-3xl pointer-events-none"></div>

                <div class="space-y-5">
                    <!-- Profile Avatar Row -->
                    <div class="flex items-center gap-4">
                        <div class="relative w-16 h-16 rounded-2xl overflow-hidden ring-2 ring-purple-500/40 p-0.5 bg-gradient-to-tr from-cyan-400 to-purple-600 flex-shrink-0 shadow-lg shadow-purple-500/20">
                            <div class="w-full h-full rounded-[14px] bg-slate-900 flex items-center justify-center font-display font-bold text-2xl text-white">
                                AM
                            </div>
                            <span class="absolute bottom-1 right-1 w-3 h-3 rounded-full bg-emerald-400 ring-2 ring-slate-950 animate-pulse"></span>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h2 class="font-display font-bold text-xl text-white">Aldrix Maesa</h2>
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-mono bg-purple-500/10 text-purple-300 border border-purple-500/20">Lead Dev</span>
                            </div>
                            <p class="text-xs text-slate-400 mt-0.5">Full-Stack Developer & UI/UX Designer</p>
                        </div>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Passionate about crafting robust backends with <strong class="text-white font-medium">Laravel & PHP</strong>, reactive web interfaces with <strong class="text-white font-medium">Vue 3 & React</strong>, and performant desktop/enterprise applications with rigorous architectural principles.
                    </p>
                </div>

                <!-- 4-Metric Grid Matrix -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4 border-t border-white/10">
                    <div class="p-3.5 rounded-2xl bg-white/[0.03] border border-white/5 text-center">
                        <div class="text-xl sm:text-2xl font-bold font-display text-white">+4 Yrs</div>
                        <div class="text-[10px] text-slate-400 uppercase tracking-wider font-mono mt-0.5">Experience</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-white/[0.03] border border-white/5 text-center">
                        <div class="text-xl sm:text-2xl font-bold font-display text-purple-400">15+</div>
                        <div class="text-[10px] text-slate-400 uppercase tracking-wider font-mono mt-0.5">Projects</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-white/[0.03] border border-white/5 text-center">
                        <div class="text-xl sm:text-2xl font-bold font-display text-cyan-400">Full-Stack</div>
                        <div class="text-[10px] text-slate-400 uppercase tracking-wider font-mono mt-0.5">Discipline</div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-white/[0.03] border border-white/5 text-center">
                        <div class="text-sm font-bold font-mono text-emerald-400" id="liveManilaClock">--:--:--</div>
                        <div class="text-[10px] text-slate-400 uppercase tracking-wider font-mono mt-0.5">Manila, PH</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT BENTO: Interactive 3D Prismatic Gem & Tech Stack Pills (5 Cols) -->
            <div class="lg:col-span-6 glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between space-y-6 relative overflow-hidden border border-white/10 group">
                <div class="absolute -bottom-20 -right-20 w-60 h-60 bg-cyan-600/15 rounded-full blur-3xl pointer-events-none"></div>

                <!-- 3D Canvas Container -->
                <div class="relative h-[250px] w-full rounded-2xl bg-gradient-to-b from-white/[0.02] to-transparent border border-white/5 flex items-center justify-center overflow-hidden">
                    <div id="threeCanvasContainer" class="w-full h-full cursor-grab active:cursor-grabbing"></div>
                    <div class="absolute bottom-2.5 px-3 py-1 rounded-full bg-slate-950/60 backdrop-blur border border-white/10 text-[10px] text-slate-400 font-mono tracking-wider pointer-events-none flex items-center gap-1.5">
                        <i data-lucide="sparkles" class="w-3 h-3 text-purple-400"></i>
                        <span>Interactive 3D Prism • Hover to orbit</span>
                    </div>
                </div>

                <!-- Curated Tech Stack Matrix -->
                <div class="space-y-2.5">
                    <div class="flex items-center justify-between text-xs font-mono text-slate-400">
                        <span>Core Tech Stack</span>
                        <span class="text-purple-400">Verified Skills</span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-red-500"></span>
                            <span>Laravel</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span>Vue 3</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                            <span>React</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                            <span>Tailwind CSS</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                            <span>MySQL</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                            <span>Java</span>
                        </span>
                        <span class="glass-pill px-3 py-1.5 rounded-xl text-xs font-medium text-slate-200 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                            <span>Three.js</span>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- SELECTED PROJECTS SECTION (MAXIMIZED BENTO SHOWCASE) -->
    <section id="work" class="space-y-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="text-xs uppercase font-mono tracking-widest text-purple-400">Portfolio Archive</span>
                <h2 class="text-3xl sm:text-4xl font-display font-bold text-white mt-1">Featured Works & Case Studies</h2>
            </div>
            <p class="text-slate-400 text-xs sm:text-sm max-w-md">
                Production web applications, desktop banking solutions, and enterprise software built with modern engineering standards.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap items-center gap-2" id="projectFilterGroup">
            <button data-filter="all" class="filter-tab px-4 py-1.5 rounded-full text-xs font-semibold bg-white text-black transition-all">All Works (4)</button>
            <button data-filter="fullstack" class="filter-tab px-4 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all">Full-Stack & Laravel</button>
            <button data-filter="enterprise" class="filter-tab px-4 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all">Enterprise & Desktop</button>
            <button data-filter="web" class="filter-tab px-4 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all">Healthcare & Web</button>
        </div>

        <!-- 4 Bento Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="projectsGrid">

            <!-- PROJECT 1: NxtGen Bank -->
            <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10" data-category="enterprise" onclick="openProjectModal('nxtgen')">
                <div class="space-y-5">
                    
                    <!-- App Mockup Visual -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative p-4 flex flex-col justify-between group-hover:border-emerald-500/40 transition-colors shadow-inner">
                        <!-- Window Header -->
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 pb-2">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80"></span>
                                <span class="font-mono text-[11px] text-slate-300 ml-2">NxtGen Bank • Desktop App</span>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-full">Secure ACID DB</span>
                        </div>

                        <!-- Banking UI Preview Simulation -->
                        <div class="my-auto space-y-3 p-2">
                            <div class="flex items-center justify-between bg-emerald-950/40 border border-emerald-500/20 p-3 rounded-xl">
                                <div>
                                    <div class="text-[10px] uppercase font-mono text-emerald-300">Account Balance</div>
                                    <div class="text-2xl font-bold font-mono text-white">₱ 248,500.00</div>
                                </div>
                                <i data-lucide="shield-check" class="w-7 h-7 text-emerald-400"></i>
                            </div>

                            <div class="grid grid-cols-3 gap-2 text-center text-[10px] font-mono">
                                <div class="bg-white/5 p-2 rounded-lg text-slate-300">Deposit</div>
                                <div class="bg-white/5 p-2 rounded-lg text-slate-300">Withdraw</div>
                                <div class="bg-white/5 p-2 rounded-lg text-slate-300">Transfer</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/5 pt-2">
                            <span>Java & MySQL</span>
                            <span>Swing GUI Engine</span>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-emerald-300 transition-colors">
                                NxtGen Bank
                            </h3>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Java</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Swing GUI</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">JDBC</span>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                            A robust desktop banking and ledger management system featuring secure authentication, automated transaction logging, account creation, and relational persistence.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-emerald-400">Desktop System</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>View Details</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

            <!-- PROJECT 2: BrewVanti POS -->
            <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10" data-category="fullstack" onclick="openProjectModal('brewvanti')">
                <div class="space-y-5">
                    
                    <!-- App Mockup Visual -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-gradient-to-br from-[#1a1510] via-slate-950 to-black border border-white/10 relative p-4 flex flex-col justify-between group-hover:border-amber-500/40 transition-colors shadow-inner">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 pb-2">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80"></span>
                                <span class="font-mono text-[11px] text-slate-300 ml-2">BrewVanti POS • Commercial ERP</span>
                            </div>
                            <span class="text-[10px] font-mono text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded-full">Real-time Orders</span>
                        </div>

                        <div class="my-auto space-y-2.5 p-2">
                            <div class="flex items-center justify-between bg-amber-950/30 border border-amber-500/20 p-3 rounded-xl">
                                <div>
                                    <div class="text-[10px] uppercase font-mono text-amber-300">Daily Sales Telemetry</div>
                                    <div class="text-xl font-bold font-mono text-white">₱ 42,910.50</div>
                                </div>
                                <span class="text-xs font-mono text-emerald-400 bg-emerald-500/10 px-2 py-1 rounded">+18.4%</span>
                            </div>

                            <div class="grid grid-cols-3 gap-1.5 text-[9px] font-mono text-slate-400">
                                <div class="bg-white/5 p-1.5 rounded text-center">Espresso (142)</div>
                                <div class="bg-white/5 p-1.5 rounded text-center">Cold Brew (89)</div>
                                <div class="bg-white/5 p-1.5 rounded text-center">Pastries (64)</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/5 pt-2">
                            <span>POS Terminal</span>
                            <span>Inventory & Finance</span>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-display font-bold text-white group-hover:text-amber-300 transition-colors">
                                BrewVanti POS & Inventory
                            </h3>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-slate-400 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Laravel</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Vue 3</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Tailwind</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">MySQL</span>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                            End-to-end commercial POS and inventory system for coffee shops with barcode scanning, automated stock alerts, receipt printing, and daily profit/loss analytics.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-amber-400">Commercial ERP</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>View Details</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

            <!-- PROJECT 3: AppointMed -->
            <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10" data-category="web" onclick="openProjectModal('appointmed')">
                <div class="space-y-5">
                    
                    <!-- App Mockup Visual -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-slate-900 border border-white/10 relative p-4 flex flex-col justify-between group-hover:border-cyan-500/40 transition-colors shadow-inner">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 pb-2">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80"></span>
                                <span class="font-mono text-[11px] text-slate-300 ml-2">AppointMed • Clinical System</span>
                            </div>
                            <span class="text-[10px] font-mono text-cyan-400 bg-cyan-500/10 px-2 py-0.5 rounded-full">HIPAA Compliant UI</span>
                        </div>

                        <div class="my-auto space-y-2 p-2">
                            <div class="bg-cyan-950/30 border border-cyan-500/20 p-3 rounded-xl flex items-center justify-between">
                                <div>
                                    <div class="text-[10px] uppercase font-mono text-cyan-300">Upcoming Appointments</div>
                                    <div class="text-lg font-bold font-mono text-white">Dr. Sarah Jenkins, MD</div>
                                </div>
                                <span class="text-xs font-mono text-cyan-400">10:30 AM</span>
                            </div>

                            <div class="flex items-center gap-2 text-[10px] font-mono text-slate-400">
                                <span class="bg-white/5 px-2 py-1 rounded">Cardiology</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Pediatrics</span>
                                <span class="bg-white/5 px-2 py-1 rounded">Teleconsult</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/5 pt-2">
                            <span>HTML5 • CSS3 • JavaScript</span>
                            <span>Accessible Web UI</span>
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

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-cyan-400">Healthcare Web</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>View Details</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

            <!-- PROJECT 4: Adaptive Material Analysis -->
            <article class="project-card glass-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between group cursor-pointer border border-white/10" data-category="fullstack" onclick="openProjectModal('adaptive')">
                <div class="space-y-5">
                    
                    <!-- App Mockup Visual -->
                    <div class="h-56 rounded-2xl overflow-hidden bg-slate-950 border border-white/10 relative p-4 flex flex-col justify-between group-hover:border-purple-500/40 transition-colors shadow-inner">
                        <div class="flex items-center justify-between text-xs text-slate-400 border-b border-white/10 pb-2">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80"></span>
                                <span class="font-mono text-[11px] text-slate-300 ml-2">Adaptive Analysis • Sci-Tech</span>
                            </div>
                            <span class="text-[10px] font-mono text-purple-400 bg-purple-500/10 px-2 py-0.5 rounded-full">AI Synthesis</span>
                        </div>

                        <div class="my-auto space-y-2 p-2">
                            <div class="bg-purple-950/30 border border-purple-500/20 p-3 rounded-xl flex items-center justify-between">
                                <div>
                                    <div class="text-[10px] uppercase font-mono text-purple-300">Material Stress Telemetry</div>
                                    <div class="text-lg font-bold font-mono text-white">99.4% Elastic Modulus</div>
                                </div>
                                <i data-lucide="activity" class="w-6 h-6 text-purple-400"></i>
                            </div>

                            <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-cyan-400 h-full w-4/5 rounded-full"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-[10px] font-mono text-slate-400 border-t border-white/5 pt-2">
                            <span>Vue 3 • Laravel API</span>
                            <span>Predictive Model</span>
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
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-white/5 text-slate-300 border border-white/5">Chart.js</span>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                            Scientific telemetry platform aggregating engineering material tests, predicting stress failure points via AI models, and generating interactive data visualizations.
                        </p>
                    </div>

                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between text-xs">
                    <span class="font-mono text-purple-400">Adaptive Sci-Tech</span>
                    <span class="text-slate-400 font-semibold group-hover:text-white flex items-center gap-1">
                        <span>View Details</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>

        </div>
    </section>

    <!-- TECH STACK & CAPABILITIES SECTION -->
    <section id="stack" class="space-y-8 pt-6 border-t border-white/5">
        <div>
            <span class="text-xs uppercase font-mono tracking-widest text-cyan-400">Technical Depth</span>
            <h2 class="text-3xl sm:text-4xl font-display font-bold text-white mt-1">Skills & Production Arsenal</h2>
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
            <span class="text-xs uppercase font-mono tracking-widest text-purple-400">Philosophy & Mindset</span>
            <h2 class="text-2xl sm:text-4xl font-display font-bold text-white">
                Bridging the bridge between aesthetic finesse and backend stability.
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                I'm <strong class="text-white font-medium">Aldrix Maesa</strong>, a developer and designer based in the Philippines. I focus on creating digital applications that are not only visually engaging, but fundamentally sound in code structure, database normalization, and user performance.
            </p>
            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                Whether creating an enterprise desktop ERP, a patient management system, or an interactive WebGL canvas, every line of code is written with intent, readability, and speed in mind.
            </p>

            <div class="pt-4 flex flex-wrap gap-4 text-xs font-mono text-slate-400">
                <div class="flex items-center gap-1.5">
                    <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
                    <span>Available for Freelance & Full-Time Inquiries</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
                    <span>Clean Code & Scalable Architecture</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="glass-card rounded-3xl p-8 sm:p-14 text-center relative overflow-hidden border border-white/10">
        <div class="max-w-2xl mx-auto space-y-6">
            <span class="text-xs uppercase font-mono tracking-widest text-emerald-400">Direct Inquiries</span>
            <h2 class="text-3xl sm:text-5xl font-display font-extrabold text-white">
                Have a project or opportunity? Let's connect.
            </h2>
            <p class="text-sm text-slate-400 max-w-lg mx-auto">
                Feel free to email me directly or explore my open-source code on GitHub.
            </p>

            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <button id="contactCopyEmail" class="px-6 py-3.5 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2 shadow-xl shadow-white/10">
                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                    <span>Copy: Aldrixmaesa4@gmail.com</span>
                </button>
                
                <a href="mailto:Aldrixmaesa4@gmail.com" class="px-6 py-3.5 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all flex items-center gap-2 border border-white/10">
                    <i data-lucide="mail" class="w-3.5 h-3.5 text-purple-400"></i>
                    <span>Open Email Client ↗</span>
                </a>

                <a href="https://github.com/aldrix209" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all flex items-center gap-2 border border-white/10">
                    <i data-lucide="github" class="w-3.5 h-3.5 text-cyan-400"></i>
                    <span>GitHub</span>
                </a>
            </div>
        </div>
    </section>

</main>
@endsection
