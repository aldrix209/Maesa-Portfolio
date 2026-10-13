@extends('layouts.app')

@section('title', 'Maesa — Digital Designer & Creative Developer')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-8 pt-36 pb-24 space-y-24 relative z-10">

    <!-- HERO SECTION -->
    <section id="hero" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center min-h-[460px]">
        
        <!-- Left: Headline & Intro -->
        <div class="lg:col-span-7 space-y-6">
            <h1 class="text-4xl sm:text-6xl lg:text-[68px] font-display font-extrabold tracking-tight leading-[1.08] text-white">
                Maesa — Digital Designer & Creative Developer
            </h1>
            <p class="text-base sm:text-xl text-slate-400 max-w-xl font-normal leading-relaxed">
                Crafting immersive digital experiences through design, development, and animation.
            </p>

            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap items-center gap-4 pt-2">
                <a href="#work" class="px-6 py-3 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2 shadow-xl">
                    <span>Explore Works</span>
                    <i data-lucide="arrow-down" class="w-3.5 h-3.5"></i>
                </a>
                
                <button id="quickCopyEmail" class="px-5 py-3 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all flex items-center gap-2">
                    <i data-lucide="copy" class="w-3.5 h-3.5 text-purple-400"></i>
                    <span>maesa.creates@gmail.com</span>
                </button>
            </div>
        </div>

        <!-- Right: Interactive Three.js 3D Canvas -->
        <div class="lg:col-span-5 relative h-[380px] sm:h-[440px] flex items-center justify-center">
            <div id="threeCanvasContainer" class="w-full h-full relative cursor-grab active:cursor-grabbing"></div>
            <div class="absolute bottom-2 text-center text-[11px] text-slate-500 font-mono tracking-wider pointer-events-none">
                Interactive 3D • Move cursor to orbit
            </div>
        </div>

    </section>

    <!-- SELECTED PROJECTS / BENTO ROW (Exact 4 Cards from Design) -->
    <section id="work" class="space-y-6">
        
        <div class="flex items-center justify-between">
            <div>
                <span class="text-xs uppercase font-mono tracking-widest text-purple-400">Featured Showcase</span>
                <h2 class="text-2xl sm:text-3xl font-display font-bold text-white mt-1">Selected Projects</h2>
            </div>
            <span class="text-xs text-slate-400 font-mono">04 Curated Works</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Card 1: Quantum Analytics -->
            <article class="glass-card rounded-2xl p-5 flex flex-col justify-between group cursor-pointer" onclick="openProjectModal('quantum')">
                <div class="space-y-4">
                    <div class="h-44 rounded-xl overflow-hidden bg-slate-900 border border-white/10 relative flex items-center justify-center group-hover:border-purple-500/40 transition-colors">
                        <div class="w-full h-full p-3 bg-gradient-to-br from-slate-950 via-[#10131d] to-[#151927] flex flex-col justify-between">
                            <div class="flex items-center justify-between text-[10px] text-slate-400 border-b border-white/5 pb-1.5">
                                <span class="font-mono text-purple-400">Quantum Live</span>
                                <span>Telemetry</span>
                            </div>
                            <div class="my-auto flex items-center justify-center">
                                <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white group-hover:scale-110 group-hover:bg-purple-600 transition-all shadow-lg">
                                    <i data-lucide="play" class="w-4 h-4 fill-white ml-0.5"></i>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-[9px] text-slate-400">
                                <span class="text-purple-300">GPU Acceleration</span>
                                <span>60 FPS</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-display font-bold text-white group-hover:text-purple-300 transition-colors">
                            Quantum Analytics
                        </h3>
                        
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">UI/UX</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">React</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">3D</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">WebGL</span>
                        </div>

                        <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                            Craft immersive digital experiences through design, development, and animation.
                        </p>
                    </div>
                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between">
                    <button class="px-3 py-1.5 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all flex items-center gap-1.5">
                        <span>View Live</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                    </button>
                    <div class="text-right">
                        <div class="text-xs font-bold font-display text-white">+15k <span class="text-[10px] text-slate-400 font-normal">Users</span></div>
                        <div class="text-[10px] text-emerald-400 font-mono">98% Perf</div>
                    </div>
                </div>
            </article>

            <!-- Card 2: Artemis e-Comm -->
            <article class="glass-card rounded-2xl p-5 flex flex-col justify-between group cursor-pointer" onclick="openProjectModal('artemis')">
                <div class="space-y-4">
                    <div class="h-44 rounded-xl overflow-hidden bg-slate-100 border border-white/10 relative p-3 flex flex-col justify-between group-hover:border-cyan-500/40 transition-colors">
                        <div class="flex items-center justify-between text-[10px] text-slate-600 border-b border-slate-200 pb-1.5">
                            <span class="font-bold text-slate-900">Artemis</span>
                            <span class="text-[9px] bg-slate-200 px-1.5 py-0.5 rounded">Storefront</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 my-auto">
                            <div class="h-16 rounded-lg bg-slate-200/90 border border-slate-300/80 flex items-center justify-center text-[10px] font-medium text-slate-700">Item 01</div>
                            <div class="h-16 rounded-lg bg-slate-900 text-white flex items-center justify-center text-[10px] font-medium">Checkout</div>
                        </div>
                        <div class="text-[9px] text-slate-500 font-mono">Clean Minimalist Cart</div>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-display font-bold text-white group-hover:text-cyan-300 transition-colors">
                            Artemis e-Comm
                        </h3>
                        
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">UI/UX</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">React</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">3D</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">WebGL</span>
                        </div>

                        <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                            Product UI to creative digital design, and animation, commerce design, customer problem UI starts.
                        </p>
                    </div>
                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between">
                    <button class="px-3 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white text-white hover:text-black transition-all flex items-center gap-1.5">
                        <span>View Case</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                    </button>
                    <div class="text-right">
                        <div class="text-xs font-bold font-display text-white">4.9 ★</div>
                        <div class="text-[10px] text-cyan-400 font-mono">Awwwards Nominee</div>
                    </div>
                </div>
            </article>

            <!-- Card 3: Nexio Platform -->
            <article class="glass-card rounded-2xl p-5 flex flex-col justify-between group cursor-pointer" onclick="openProjectModal('nexio')">
                <div class="space-y-4">
                    <div class="h-44 rounded-xl overflow-hidden bg-slate-900 border border-white/10 relative p-3 flex flex-col justify-between group-hover:border-blue-500/40 transition-colors">
                        <div class="flex items-center justify-between text-[10px] text-slate-400 border-b border-white/5 pb-1.5">
                            <span class="font-bold text-white">Nexio Platform</span>
                            <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                        </div>
                        <div class="my-auto space-y-2">
                            <div class="h-10 w-full rounded bg-blue-950/40 border border-blue-500/20 flex items-center px-2">
                                <div class="w-full h-1 bg-gradient-to-r from-blue-500 via-cyan-400 to-purple-500 rounded-full"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-1.5">
                                <div class="h-5 rounded bg-white/5"></div>
                                <div class="h-5 rounded bg-white/5"></div>
                                <div class="h-5 rounded bg-white/5"></div>
                            </div>
                        </div>
                        <div class="text-[9px] text-slate-400 font-mono">Enterprise Console</div>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-display font-bold text-white group-hover:text-blue-300 transition-colors">
                            Nexio Platform
                        </h3>
                        
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">UI/UX</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">React</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">3D</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">WebGL</span>
                        </div>

                        <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                            Dashboard preview to enterprise platform, decision implementation, responsive compositions.
                        </p>
                    </div>
                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between">
                    <button class="px-3 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white text-white hover:text-black transition-all flex items-center gap-1.5">
                        <span>View Case</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                    </button>
                    <div class="text-right">
                        <div class="text-xs font-bold font-display text-white">50k+</div>
                        <div class="text-[10px] text-blue-400 font-mono">Events / sec</div>
                    </div>
                </div>
            </article>

            <!-- Card 4: Vibe Social -->
            <article class="glass-card rounded-2xl p-5 flex flex-col justify-between group cursor-pointer" onclick="openProjectModal('vibe')">
                <div class="space-y-4">
                    <div class="h-44 rounded-xl overflow-hidden bg-gradient-to-br from-purple-950/60 via-slate-900 to-black border border-white/10 relative p-3 flex flex-col justify-between group-hover:border-pink-500/40 transition-colors">
                        <div class="flex items-center justify-between text-[10px] text-slate-400 border-b border-white/5 pb-1.5">
                            <span class="font-bold text-pink-300">Vibe Feed</span>
                            <span class="text-[9px] text-slate-400">Live Audio</span>
                        </div>
                        <div class="my-auto flex items-center justify-center">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-purple-500 via-pink-500 to-cyan-400 p-0.5 shadow-xl">
                                <div class="w-full h-full bg-slate-950 rounded-[14px] flex items-center justify-center">
                                    <i data-lucide="sparkles" class="w-5 h-5 text-pink-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-[9px] text-slate-400 font-mono">Spatial Social Network</div>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg font-display font-bold text-white group-hover:text-pink-300 transition-colors">
                            Vibe Social
                        </h3>
                        
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">UI/UX</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">React</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">3D</span>
                            <span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">WebGL</span>
                        </div>

                        <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                            Interface shot of curated feed and social interface, modern and clean interface.
                        </p>
                    </div>
                </div>

                <div class="pt-5 mt-4 border-t border-white/5 flex items-center justify-between">
                    <button class="px-3 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white text-white hover:text-black transition-all flex items-center gap-1.5">
                        <span>View Case</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                    </button>
                    <div class="text-right">
                        <div class="text-xs font-bold font-display text-white">Gen Z</div>
                        <div class="text-[10px] text-pink-400 font-mono">Community Hub</div>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="space-y-8 pt-8 border-t border-white/5">
        <div>
            <span class="text-xs uppercase font-mono tracking-widest text-cyan-400">Core Expertise</span>
            <h2 class="text-2xl sm:text-4xl font-display font-bold text-white mt-1">What I Bring to Teams</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="glass-card rounded-2xl p-6 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400">
                    <i data-lucide="figma" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">Product & UI/UX Design</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Wireframes, interactive prototypes, and scalable Figma design systems crafted with obsessive attention to user flow and micro-interactions.
                </p>
                <div class="text-xs text-purple-300 font-mono">Figma • User Flows • Design Tokens</div>
            </div>

            <div class="glass-card rounded-2xl p-6 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400">
                    <i data-lucide="code" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">Creative Development</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Building performant web applications using modern JavaScript/TypeScript, React, Next.js, and fluid Tailwind CSS layouts.
                </p>
                <div class="text-xs text-cyan-300 font-mono">React • Next.js • Tailwind CSS • TypeScript</div>
            </div>

            <div class="glass-card rounded-2xl p-6 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                    <i data-lucide="box" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-display font-bold text-white">3D & WebGL Experiences</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Elevating brand digital experiences with Three.js, shaders, interactive canvases, and physics-based interactions.
                </p>
                <div class="text-xs text-emerald-300 font-mono">Three.js • GLSL • Framer Motion • Spline</div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="glass-card rounded-3xl p-8 sm:p-12 border border-white/10 space-y-6">
        <div class="max-w-3xl space-y-4">
            <span class="text-xs uppercase font-mono tracking-widest text-purple-400">Background</span>
            <h2 class="text-2xl sm:text-4xl font-display font-bold text-white">
                Designing at the intersection of aesthetic beauty and engineering precision.
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                Hi, I'm Maesa. Over the past 4+ years, I've designed and shipped digital experiences for hyper-growth tech startups, SaaS teams, and boutique creative studios. My goal is always the same: simplify complex tasks without ever compromising on delight or visual craft.
            </p>

            <div class="pt-4 flex flex-wrap gap-4 text-xs font-mono text-slate-400">
                <div class="flex items-center gap-1.5">
                    <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
                    <span>Based in Philippines / Global Remote</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
                    <span>Fluent in Design + Code</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="glass-card rounded-3xl p-8 sm:p-12 text-center relative overflow-hidden border border-white/10">
        <div class="max-w-2xl mx-auto space-y-6">
            <span class="text-xs uppercase font-mono tracking-widest text-emerald-400">Get in Touch</span>
            <h2 class="text-3xl sm:text-5xl font-display font-extrabold text-white">
                Let’s bring your next project to life.
            </h2>
            <p class="text-sm text-slate-400 max-w-lg mx-auto">
                I’m currently available for select freelance contracts, creative collaborations, and full-time roles.
            </p>

            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <button id="contactCopyEmail" class="px-6 py-3 rounded-full text-xs font-semibold bg-white text-black hover:bg-slate-200 transition-all hover:scale-105 flex items-center gap-2 shadow-xl">
                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                    <span>Copy Email: maesa.creates@gmail.com</span>
                </button>
                
                <a href="mailto:maesa.creates@gmail.com" class="px-5 py-3 rounded-full text-xs font-medium glass-card hover:bg-white/10 text-slate-300 hover:text-white transition-all">
                    Direct Mailto ↗
                </a>
            </div>
        </div>
    </section>

</main>
@endsection
