import * as THREE from 'three';
import { createIcons, icons } from 'lucide';
import { initStarBorder, initAllStarBorders } from './starBorder.js';

window.initStarBorder = initStarBorder;
window.initAllStarBorders = initAllStarBorders;

document.addEventListener('DOMContentLoaded', () => {
    // 0. Initialize StarBorder on buttons
    initAllStarBorders('.star-border, [data-star-border]');

    // 1. Initialize Lucide Icons
    createIcons({ icons });

    // 2. Dynamic Year
    const yearElem = document.getElementById('year');
    if (yearElem) {
        yearElem.textContent = new Date().getFullYear();
    }

    // 3. Live Manila Clock (UTC+8)
    const clockElem = document.getElementById('liveManilaClock');
    if (clockElem) {
        function updateClock() {
            const now = new Date();
            const options = {
                timeZone: 'Asia/Manila',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            clockElem.textContent = new Intl.DateTimeFormat('en-US', options).format(now);
        }
        updateClock();
        setInterval(updateClock, 1000);
    }

    // 4. Mobile Menu Toggle
    const mobileBtn = document.getElementById('mobileToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });
    }

    // 5. Toast Notification System
    const toast = document.getElementById('toast');
    window.copyEmail = function (email = 'Aldrixmaesa4@gmail.com') {
        navigator.clipboard.writeText(email).then(() => {
            if (toast) {
                toast.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-2');
                toast.classList.add('opacity-100', 'translate-y-0');
                setTimeout(() => {
                    toast.classList.remove('opacity-100', 'translate-y-0');
                    toast.classList.add('opacity-0', 'pointer-events-none', 'translate-y-2');
                }, 3000);
            }
        });
    };

    const heroCopy = document.getElementById('heroCopyEmail');
    if (heroCopy) heroCopy.addEventListener('click', () => window.copyEmail());

    const contactCopy = document.getElementById('contactCopyEmail');
    if (contactCopy) contactCopy.addEventListener('click', () => window.copyEmail());

    // 6. Dark / Light Mode Toggle System (Pill Capsule Switch)
    const themePillButtons = document.querySelectorAll('.theme-pill-toggle');

    function syncThemeUI(isDark) {
        if (window.setAuroraTheme) {
            window.setAuroraTheme(isDark ? 1.0 : 0.0);
        }
        themePillButtons.forEach(btn => {
            btn.setAttribute('aria-checked', isDark ? 'false' : 'true');
        });
    }

    function toggleTheme() {
        const isCurrentDark = document.documentElement.classList.contains('dark');
        if (isCurrentDark) {
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
            localStorage.setItem('theme', 'light');
            syncThemeUI(false);
        } else {
            document.documentElement.classList.add('dark');
            document.documentElement.classList.remove('light');
            localStorage.setItem('theme', 'dark');
            syncThemeUI(true);
        }
    }

    themePillButtons.forEach(btn => {
        btn.addEventListener('click', toggleTheme);
    });

    const initialIsDark = document.documentElement.classList.contains('dark');
    syncThemeUI(initialIsDark);

    // 7. Interactive Category Drill-Down Navigation System
    const categoryCardsView = document.getElementById('categoryCardsView');
    const categoryDetailView = document.getElementById('categoryDetailView');
    const appProjectsGroup = document.getElementById('appProjectsGroup');
    const webProjectsGroup = document.getElementById('webProjectsGroup');
    const categoryBreadcrumbTitle = document.getElementById('categoryBreadcrumbTitle');
    const categoryBannerTitle = document.getElementById('categoryBannerTitle');
    const categoryBannerBadge = document.getElementById('categoryBannerBadge');
    const categoryBannerDesc = document.getElementById('categoryBannerDesc');
    const btnSwitchApp = document.getElementById('btnSwitchApp');
    const btnSwitchWeb = document.getElementById('btnSwitchWeb');

    window.showCategory = function (categoryKey) {
        if (!categoryCardsView || !categoryDetailView) return;

        // Hide category selection overview, display inner projects
        categoryCardsView.classList.add('hidden');
        categoryDetailView.classList.remove('hidden');

        if (categoryKey === 'app') {
            if (appProjectsGroup) appProjectsGroup.classList.remove('hidden');
            if (webProjectsGroup) webProjectsGroup.classList.add('hidden');

            if (categoryBreadcrumbTitle) categoryBreadcrumbTitle.textContent = 'App Development';
            if (categoryBannerTitle) categoryBannerTitle.textContent = 'App Development';
            if (categoryBannerBadge) {
                categoryBannerBadge.className = 'px-3 py-1 rounded-full text-[11px] font-mono bg-emerald-500/10 text-emerald-300 border border-emerald-500/25 flex items-center gap-1.5';
                categoryBannerBadge.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span><span>1 Production System</span>';
            }
            if (categoryBannerDesc) {
                categoryBannerDesc.textContent = 'High-integrity desktop software and enterprise financial platforms built with Java, relational MySQL, and secure ACID transaction protocols.';
            }

            // Update switcher button active state
            if (btnSwitchApp) {
                btnSwitchApp.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-400 text-slate-950 transition-all flex items-center gap-1.5 shadow-lg shadow-emerald-500/20';
            }
            if (btnSwitchWeb) {
                btnSwitchWeb.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5';
            }
        } else if (categoryKey === 'web') {
            if (appProjectsGroup) appProjectsGroup.classList.add('hidden');
            if (webProjectsGroup) webProjectsGroup.classList.remove('hidden');

            if (categoryBreadcrumbTitle) categoryBreadcrumbTitle.textContent = 'Web Development';
            if (categoryBannerTitle) categoryBannerTitle.textContent = 'Web Development';
            if (categoryBannerBadge) {
                categoryBannerBadge.className = 'px-3 py-1 rounded-full text-[11px] font-mono bg-purple-500/10 text-purple-300 border border-purple-500/25 flex items-center gap-1.5';
                categoryBannerBadge.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-purple-400 animate-pulse"></span><span>3 Web Applications</span>';
            }
            if (categoryBannerDesc) {
                categoryBannerDesc.textContent = 'Commercial POS storefronts, AI scientific analysis platforms, and patient healthcare portals engineered with Laravel, Vue 3, Tailwind, and REST APIs.';
            }

            // Update switcher button active state
            if (btnSwitchApp) {
                btnSwitchApp.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5';
            }
            if (btnSwitchWeb) {
                btnSwitchWeb.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-semibold bg-purple-400 text-slate-950 transition-all flex items-center gap-1.5 shadow-lg shadow-purple-500/20';
            }
        }

        // Re-generate Lucide icons for dynamically revealed content
        createIcons({ icons });

        // Smooth scroll to #work
        const workSection = document.getElementById('work');
        if (workSection) {
            workSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    window.showAllCategories = function () {
        if (!categoryCardsView || !categoryDetailView) return;
        categoryDetailView.classList.add('hidden');
        categoryCardsView.classList.remove('hidden');

        if (btnSwitchApp) {
            btnSwitchApp.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5';
        }
        if (btnSwitchWeb) {
            btnSwitchWeb.className = 'category-switch-pill px-3.5 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all flex items-center gap-1.5';
        }

        // Re-generate Lucide icons
        createIcons({ icons });

        const workSection = document.getElementById('work');
        if (workSection) {
            workSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    // 7. Case Study Modal Data & Handlers
    const projectDetails = {
        nxtgen: {
            title: "NxtGen Bank",
            category: "Desktop Application • FinTech System",
            desc: "A comprehensive desktop banking management system developed in Java with MySQL database backend. Key features include secure 6-pin user authentication, real-time account balance tracking, cardless branch withdrawals, account cash deposits, and inter-bank transfers with automatic fee calculations and transaction audit trails.",
            tags: ["Java", "MySQL", "Swing GUI", "JDBC", "Desktop App", "Financial Ledger"],
            images: [
                { src: "/images/nxtgn-bank/dashboard.png", label: "Dashboard" },
                { src: "/images/nxtgn-bank/login.png", label: "Login & PIN" },
                { src: "/images/nxtgn-bank/deposit.png", label: "Deposit" },
                { src: "/images/nxtgn-bank/withdraw.png", label: "Withdrawal" },
                { src: "/images/nxtgn-bank/transfer.png", label: "Bank Transfer" }
            ]
        },
        nxtgn: {
            title: "NxtGen Bank",
            category: "Desktop Application • FinTech System",
            desc: "A comprehensive desktop banking management system developed in Java with MySQL database backend. Key features include secure 6-pin user authentication, real-time account balance tracking, cardless branch withdrawals, account cash deposits, and inter-bank transfers with automatic fee calculations and transaction audit trails.",
            tags: ["Java", "MySQL", "Swing GUI", "JDBC", "Desktop App", "Financial Ledger"],
            images: [
                { src: "/images/nxtgn-bank/dashboard.png", label: "Dashboard" },
                { src: "/images/nxtgn-bank/login.png", label: "Login & PIN" },
                { src: "/images/nxtgn-bank/deposit.png", label: "Deposit" },
                { src: "/images/nxtgn-bank/withdraw.png", label: "Withdrawal" },
                { src: "/images/nxtgn-bank/transfer.png", label: "Bank Transfer" }
            ]
        },
        brewvanti: {
            title: "BrewVanti POS & Storefront",
            category: "Commercial ERP • Food Service Point-of-Sale",
            desc: "A modern commercial POS and management ecosystem engineered for artisan coffee shops. Integrates an aesthetic storefront showcasing signature roasts with an operator-ready Point of Sale terminal. Includes real-time Dine-in/Take-out cart calculations, automated 12% VAT, size switchers (Regular 16oz / Large 22oz), category tabs, and comprehensive back-office operations for inventory, order history, and payroll finance.",
            tags: ["JavaScript", "Commercial POS", "Inventory", "Finance", "Storefront", "VAT Engine"],
            images: [
                { src: "/images/brewvanti/pos-terminal.png", label: "POS Terminal" },
                { src: "/images/brewvanti/landing.png", label: "Artisan Storefront" },
                { src: "/images/brewvanti/menu.png", label: "Featured Drinks" },
                { src: "/images/brewvanti/login.png", label: "POS Terminal Sign In" },
                { src: "/images/brewvanti/story.png", label: "Brand Experience" }
            ]
        },
        appointmed: {
            title: "AppointMed Patient Portal",
            category: "Clinical Scheduling & Healthcare System",
            desc: "A responsive medical appointment booking and clinical management web system built using HTML, CSS, and JavaScript. Enables patients to easily schedule clinic appointments, specify symptoms, and contact healthcare providers online. Features a comprehensive Admin Dashboard to review patient notifications, monitor upcoming appointment statuses (Pending, Reschedule, Done, Cancel), and maintain medical appointment history.",
            tags: ["HTML5", "CSS3", "JavaScript", "Frontend", "Healthcare Web", "Patient Booking"],
            images: [
                { src: "/images/appointmed/landing.png", label: "Hero & Landing" },
                { src: "/images/appointmed/dashboard.png", label: "Admin Dashboard" },
                { src: "/images/appointmed/booking.png", label: "Book Appointment" },
                { src: "/images/appointmed/login.png", label: "Patient Login" },
                { src: "/images/appointmed/contact.png", label: "Contact Us" }
            ]
        },
        adaptive: {
            title: "StudyForge — Adaptive Material Analysis Platform",
            category: "Full-Stack EdTech • AI Material Analysis & Gamified Learning",
            desc: "An intelligent adaptive learning platform engineered with Vue 3, Pinia, Laravel, and Three.js. It ingests diverse study sources—including PDFs, lecture slide decks (PPTX), full-course video lectures, and text notes—and executes structured semantic analysis. The engine automatically extracts key concepts, cross-source knowledge connections, and generated topic taxonomies to produce interactive gamified learning worlds, progress tracking, and 3D assessments.",
            tags: ["Vue 3", "Laravel", "AI Analysis", "Pinia", "Three.js", "Tailwind CSS", "Gamified Learning"],
            liveUrl: "http://127.0.0.1:8000",
            images: [
                { src: "/images/adaptive-analysis/analysis.png", label: "Review & Analysis Engine" },
                { src: "/images/adaptive-analysis/dashboard.png", label: "Learning Worlds Library" },
                { src: "/images/adaptive-analysis/assessments.png", label: "3D Dynamic Assessments" },
                { src: "/images/adaptive-analysis/worlds.png", label: "Learning Sets & Progress" }
            ]
        },
        studyforge: {
            title: "StudyForge — Adaptive Material Analysis Platform",
            category: "Full-Stack EdTech • AI Material Analysis & Gamified Learning",
            desc: "An intelligent adaptive learning platform engineered with Vue 3, Pinia, Laravel, and Three.js. It ingests diverse study sources—including PDFs, lecture slide decks (PPTX), full-course video lectures, and text notes—and executes structured semantic analysis. The engine automatically extracts key concepts, cross-source knowledge connections, and generated topic taxonomies to produce interactive gamified learning worlds, progress tracking, and 3D assessments.",
            tags: ["Vue 3", "Laravel", "AI Analysis", "Pinia", "Three.js", "Tailwind CSS", "Gamified Learning"],
            liveUrl: "http://127.0.0.1:8000",
            images: [
                { src: "/images/adaptive-analysis/analysis.png", label: "Review & Analysis Engine" },
                { src: "/images/adaptive-analysis/dashboard.png", label: "Learning Worlds Library" },
                { src: "/images/adaptive-analysis/assessments.png", label: "3D Dynamic Assessments" },
                { src: "/images/adaptive-analysis/worlds.png", label: "Learning Sets & Progress" }
            ]
        }
    };

    const modal = document.getElementById('projectModal');
    const modalCard = document.getElementById('modalCard');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalDesc = document.getElementById('modalDesc');
    const modalBanner = document.getElementById('modalBanner');
    const modalGallery = document.getElementById('modalGallery');
    const modalTags = document.getElementById('modalTags');

    window.openProjectModal = function (id) {
        const p = projectDetails[id];
        if (!p || !modal) return;
        modalTitle.textContent = p.title;
        modalCategory.textContent = p.category;
        modalDesc.textContent = p.desc;
        modalTags.innerHTML = p.tags.map(t => `<span class="px-2.5 py-1 rounded-md text-[11px] bg-white/5 text-slate-300 border border-white/5 font-mono">${t}</span>`).join('');

        const liveBtn = document.getElementById('modalLiveBtn');
        if (liveBtn) {
            if (p.liveUrl) {
                liveBtn.href = p.liveUrl;
                liveBtn.classList.remove('hidden');
                liveBtn.classList.add('inline-flex');
                if (liveBtn._starBorderInstance) {
                    setTimeout(() => liveBtn._starBorderInstance.wake(), 50);
                }
            } else {
                liveBtn.classList.add('hidden');
                liveBtn.classList.remove('inline-flex');
            }
        }

        if (p.images && p.images.length > 0) {
            modalBanner.innerHTML = `<img id="modalMainImg" src="${p.images[0].src}" alt="${p.images[0].label}" class="w-full h-full object-contain bg-slate-950 p-1">`;
            if (modalGallery) {
                modalGallery.classList.remove('hidden');
                modalGallery.innerHTML = p.images.map((img, idx) => `
                    <button type="button" class="flex-shrink-0 h-14 w-20 rounded-lg overflow-hidden border ${idx === 0 ? 'border-purple-500 ring-2 ring-purple-500/30' : 'border-white/10 opacity-60 hover:opacity-100'} transition-all bg-slate-950" onclick="switchModalImage('${img.src}', this)">
                        <img src="${img.src}" alt="${img.label}" class="w-full h-full object-cover">
                    </button>
                `).join('');
            }
        } else {
            modalBanner.innerHTML = `<div class="w-full h-full flex items-center justify-center font-mono text-sm text-slate-400">Interactive Preview</div>`;
            if (modalGallery) {
                modalGallery.classList.add('hidden');
                modalGallery.innerHTML = '';
            }
        }

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalCard.classList.remove('scale-95');
        modalCard.classList.add('scale-100');
        if (window.lucide) window.lucide.createIcons();
    };

    window.switchModalImage = function (src, btn) {
        const mainImg = document.getElementById('modalMainImg');
        if (mainImg) mainImg.src = src;
        if (modalGallery) {
            modalGallery.querySelectorAll('button').forEach(b => {
                b.classList.remove('border-emerald-500', 'border-purple-500', 'ring-2', 'ring-emerald-500/30', 'ring-purple-500/30');
                b.classList.add('border-white/10', 'opacity-60');
            });
            btn.classList.add('border-purple-500', 'ring-2', 'ring-purple-500/30');
            btn.classList.remove('opacity-60', 'border-white/10');
        }
    };

    window.closeProjectModal = function () {
        if (!modal) return;
        modal.classList.add('opacity-0', 'pointer-events-none');
        modalCard.classList.add('scale-95');
        modalCard.classList.remove('scale-100');
    };

    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) window.closeProjectModal();
        });
    }

    // 8. Three.js Prismatic Crystal Visualizer
    initPrismaticCrystal();

    // 9. Real-time Live Aurora Borealis Shader Background
    initAuroraBorealis();
});

// THREE.JS PRISMATIC CRYSTAL ENGINE
function initPrismaticCrystal() {
    const container = document.getElementById('threeCanvasContainer');
    if (!container) return;

    const width = container.clientWidth;
    const height = container.clientHeight;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 1000);
    camera.position.z = 5.2;

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer);

    const group = new THREE.Group();
    scene.add(group);

    // 1. Outer Faceted Crystal (Icosahedron)
    const crystalGeo = new THREE.IcosahedronGeometry(1.4, 0);

    // Iridescent Prismatic Material with High Refraction & Metalness
    const crystalMat = new THREE.MeshPhysicalMaterial({
        color: 0xffffff,
        emissive: 0x1e153b,
        roughness: 0.12,
        metalness: 0.88,
        clearcoat: 1.0,
        clearcoatRoughness: 0.08,
        transmission: 0.35,
        opacity: 0.95,
        transparent: true,
        reflectivity: 1.0,
        flatShading: true
    });

    const crystalMesh = new THREE.Mesh(crystalGeo, crystalMat);
    group.add(crystalMesh);

    // 2. Wireframe Cage Accent
    const wireframeMat = new THREE.MeshBasicMaterial({
        color: 0x06b6d4,
        wireframe: true,
        transparent: true,
        opacity: 0.4
    });
    const wireframeMesh = new THREE.Mesh(crystalGeo, wireframeMat);
    wireframeMesh.scale.set(1.02, 1.02, 1.02);
    group.add(wireframeMesh);

    // 3. Inner Glowing Core
    const coreGeo = new THREE.OctahedronGeometry(0.7, 0);
    const coreMat = new THREE.MeshStandardMaterial({
        color: 0xa855f7,
        emissive: 0x9333ea,
        emissiveIntensity: 0.9,
        roughness: 0.2,
        metalness: 0.8
    });
    const coreMesh = new THREE.Mesh(coreGeo, coreMat);
    group.add(coreMesh);

    // Dynamic Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.5);
    scene.add(ambientLight);

    const purpleLight = new THREE.PointLight(0xa855f7, 5, 20);
    purpleLight.position.set(-3, 3, 4);
    scene.add(purpleLight);

    const cyanLight = new THREE.PointLight(0x06b6d4, 5, 20);
    cyanLight.position.set(3, -2, 4);
    scene.add(cyanLight);

    const pinkLight = new THREE.PointLight(0xec4899, 3, 15);
    pinkLight.position.set(0, 4, -2);
    scene.add(pinkLight);

    // Mouse Tracking Parallax
    let mouseX = 0, mouseY = 0;
    let targetX = 0, targetY = 0;

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouseX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
        mouseY = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
    });

    container.addEventListener('mouseleave', () => {
        mouseX = 0;
        mouseY = 0;
    });

    // Render Loop
    function animate() {
        requestAnimationFrame(animate);

        targetX += (mouseX - targetX) * 0.06;
        targetY += (mouseY - targetY) * 0.06;

        // Smooth continuous rotation
        crystalMesh.rotation.x += 0.005;
        crystalMesh.rotation.y += 0.008;

        wireframeMesh.rotation.x += 0.005;
        wireframeMesh.rotation.y += 0.008;

        coreMesh.rotation.x -= 0.009;
        coreMesh.rotation.y -= 0.012;

        // Interactive mouse tilt
        group.rotation.y = targetX * 0.7;
        group.rotation.x = -targetY * 0.5;

        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        if (!container) return;
        const w = container.clientWidth;
        const h = container.clientHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
    });
}

// REAL-TIME LIVE AURORA BOREALIS WEBGL SHADER ENGINE
function initAuroraBorealis() {
    const canvas = document.getElementById('auroraCanvas');
    if (!canvas) return;

    const gl = canvas.getContext('webgl', { alpha: false, antialias: false, powerPreference: 'low-power' }) ||
        canvas.getContext('experimental-webgl');
    if (!gl) return;

    const vsSource = `
        attribute vec2 a_position;
        void main() {
            gl_Position = vec4(a_position, 0.0, 1.0);
        }
    `;

    const fsSource = `
        #ifdef GL_ES
        precision highp float;
        #endif

        uniform vec2 u_resolution;
        uniform float u_time;
        uniform float u_theme; // 1.0 = dark, 0.0 = light

        void main() {
            vec2 uv = gl_FragCoord.xy / u_resolution.xy;
            
            // Clean velvet backdrop (smoothly blends between deep dark obsidian and fresh alabaster)
            vec3 darkSky = vec3(0.024, 0.027, 0.038);
            vec3 lightSky = vec3(0.965, 0.972, 0.982);
            vec3 sky = mix(lightSky, darkSky, u_theme);
            
            // Time drivers for smooth left-to-right fluid undulating wave
            float t1 = u_time * 0.26;
            float t2 = u_time * 0.20;
            
            // Flexible Ribbon Line 1 (Sinuous wave flowing left to right)
            float y1 = 0.52 
                     + sin(uv.x * 2.8 - t1) * 0.12 
                     + cos(uv.x * 5.0 + t1 * 0.7) * 0.045 
                     + sin(uv.x * 1.4 - t1 * 0.35) * 0.06;
            float d1 = abs(uv.y - y1);
            
            // Smooth line core + ambient minimal glow / shadow
            float line1 = exp(-d1 * 30.0) * 0.44 + exp(-d1 * 7.5) * 0.22;
            
            // Color gradient along Ribbon 1 (for Dark Mode: emerald / violet)
            float mix1 = clamp(0.5 + 0.5 * sin(uv.x * 3.14159 + (uv.y - y1) * 3.5 - t1 * 0.4), 0.0, 1.0);
            vec3 darkColor1 = mix(vec3(0.02, 0.88, 0.62), vec3(0.68, 0.28, 0.94), mix1) * line1;
            
            // Flexible Ribbon Line 2 (Harmonic crossing companion ribbon)
            float y2 = 0.48 
                     + cos(uv.x * 2.4 - t2 * 0.9) * 0.11 
                     + sin(uv.x * 4.2 + t2 * 0.5) * 0.035 
                     - cos(uv.x * 1.6 - t2 * 0.3) * 0.055;
            float d2 = abs(uv.y - y2);
            
            float line2 = exp(-d2 * 28.0) * 0.34 + exp(-d2 * 7.0) * 0.18;
            
            // Color gradient along Ribbon 2 (for Dark Mode: violet / cyan)
            float mix2 = clamp(0.5 + 0.5 * cos(uv.x * 3.14159 - (uv.y - y2) * 3.5 + t2 * 0.4), 0.0, 1.0);
            vec3 darkColor2 = mix(vec3(0.52, 0.24, 0.92), vec3(0.02, 0.82, 0.86), mix2) * line2;
            
            // --- Dark Mode Result: Radiant celestial aurora ribbons ---
            vec3 darkResult = darkSky + (darkColor1 + darkColor2) * 0.48;

            // --- Light Mode Result: Liquid ambient black/charcoal shadow wave ---
            // Creates high-contrast depth so all cards and text remain razor-sharp and ultra-readable
            float shadowIntensity = (line1 * 0.65 + line2 * 0.45);
            vec3 shadowTone = vec3(0.12, 0.14, 0.20);
            vec3 lightResult = mix(lightSky, lightSky - shadowTone * 0.42, clamp(shadowIntensity, 0.0, 1.0));
            
            vec3 finalColor = mix(lightResult, darkResult, u_theme);
            gl_FragColor = vec4(finalColor, 1.0);
        }
    `;

    function createShader(gl, type, source) {
        const shader = gl.createShader(type);
        gl.shaderSource(shader, source);
        gl.compileShader(shader);
        if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
            gl.deleteShader(shader);
            return null;
        }
        return shader;
    }

    const vs = createShader(gl, gl.VERTEX_SHADER, vsSource);
    const fs = createShader(gl, gl.FRAGMENT_SHADER, fsSource);
    if (!vs || !fs) return;

    const program = gl.createProgram();
    gl.attachShader(program, vs);
    gl.attachShader(program, fs);
    gl.linkProgram(program);
    if (!gl.getProgramParameter(program, gl.LINK_STATUS)) return;

    const positionAttr = gl.getAttribLocation(program, 'a_position');
    const resolutionUniform = gl.getUniformLocation(program, 'u_resolution');
    const timeUniform = gl.getUniformLocation(program, 'u_time');
    const themeUniform = gl.getUniformLocation(program, 'u_theme');

    let targetTheme = document.documentElement.classList.contains('light') ? 0.0 : 1.0;
    let currentTheme = targetTheme;
    window.setAuroraTheme = function (val) {
        targetTheme = val;
    };

    const buffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([
        -1, -1,
        1, -1,
        -1, 1,
        -1, 1,
        1, -1,
        1, 1
    ]), gl.STATIC_DRAW);

    function resize() {
        const dpr = Math.min(window.devicePixelRatio || 1, 1.5);
        const w = window.innerWidth;
        const h = window.innerHeight;
        canvas.width = Math.floor(w * dpr);
        canvas.height = Math.floor(h * dpr);
        gl.viewport(0, 0, canvas.width, canvas.height);
    }
    resize();
    window.addEventListener('resize', resize, { passive: true });

    let isVisible = true;
    document.addEventListener('visibilitychange', () => {
        isVisible = !document.hidden;
        if (isVisible) requestAnimationFrame(render);
    });

    const startTime = performance.now();
    function render(currentTime) {
        if (!isVisible) return;
        const elapsed = (currentTime - startTime) * 0.001;

        currentTheme += (targetTheme - currentTheme) * 0.08;

        gl.useProgram(program);
        gl.enableVertexAttribArray(positionAttr);
        gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
        gl.vertexAttribPointer(positionAttr, 2, gl.FLOAT, false, 0, 0);

        gl.uniform2f(resolutionUniform, canvas.width, canvas.height);
        gl.uniform1f(timeUniform, elapsed);
        gl.uniform1f(themeUniform, currentTheme);

        gl.drawArrays(gl.TRIANGLES, 0, 6);
        requestAnimationFrame(render);
    }
    requestAnimationFrame(render);
}
