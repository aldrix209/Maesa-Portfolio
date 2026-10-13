import * as THREE from 'three';
import { createIcons, icons } from 'lucide';

document.addEventListener('DOMContentLoaded', () => {
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

    // 6. Interactive Category Filter Tabs
    const filterTabs = document.querySelectorAll('.filter-tab');
    const projectCards = document.querySelectorAll('.project-card');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update active styles
            filterTabs.forEach(t => {
                t.className = 'filter-tab px-4 py-1.5 rounded-full text-xs font-medium glass-pill text-slate-300 hover:text-white transition-all';
            });
            tab.className = 'filter-tab px-4 py-1.5 rounded-full text-xs font-semibold bg-white text-black transition-all';

            const filter = tab.getAttribute('data-filter');
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 7. Case Study Modal Data & Handlers
    const projectDetails = {
        nxtgen: {
            title: "NxtGen Bank",
            category: "Enterprise Desktop Banking System",
            desc: "Architected a full-featured standalone desktop banking system designed for high reliability, atomic financial transactions, and secure ledger bookkeeping. Features an intuitive Java Swing GUI backed by a normalized MySQL relational schema.",
            tags: ["Java", "MySQL", "Swing GUI", "JDBC", "ACID Compliance", "Security"],
            bannerTitle: "NxtGen Core Banking System",
            icon: "B"
        },
        brewvanti: {
            title: "BrewVanti POS & Storefront",
            category: "Commercial ERP & Food Service Point-of-Sale",
            desc: "Engineered a commercial POS and inventory telemetry suite for retail coffee shops and food enterprises. Features real-time stock deductions, multi-tender transactions, sales forecasting, and an intuitive cashier touch-screen interface.",
            tags: ["Laravel", "Vue 3", "Tailwind CSS", "MySQL", "Inventory Telemetry", "Receipt Engine"],
            bannerTitle: "BrewVanti Commercial POS Terminal",
            icon: "P"
        },
        appointmed: {
            title: "AppointMed Patient Portal",
            category: "Clinical Scheduling & Healthcare System",
            desc: "Designed an accessible, human-centered medical appointment and clinical scheduling platform. Allows patients to browse healthcare specialists, book time slots in real time, and view digital consultation slips without friction.",
            tags: ["HTML5", "CSS3", "JavaScript", "Responsive Design", "Healthcare UX", "Accessibility"],
            bannerTitle: "AppointMed Healthcare Portal",
            icon: "M"
        },
        adaptive: {
            title: "Adaptive Material Analysis",
            category: "Scientific Telemetry & Stress Modeling",
            desc: "Developed an interactive scientific telemetry application simulating physical material stress thresholds and elasticity metrics. Integrates responsive interactive charts, automated report compilation, and modular Vue 3 interface components.",
            tags: ["Vue 3", "Laravel API", "Chart.js", "AI Analysis", "Tailwind CSS", "Data Vis"],
            bannerTitle: "Adaptive Material Stress Visualizer",
            icon: "A"
        }
    };

    const modal = document.getElementById('projectModal');
    const modalCard = document.getElementById('modalCard');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalDesc = document.getElementById('modalDesc');
    const modalBannerTitle = document.getElementById('modalBannerTitle');
    const modalIconPreview = document.getElementById('modalIconPreview');
    const modalTags = document.getElementById('modalTags');

    window.openProjectModal = function (id) {
        const p = projectDetails[id];
        if (!p || !modal) return;
        modalTitle.textContent = p.title;
        modalCategory.textContent = p.category;
        modalDesc.textContent = p.desc;
        if (modalBannerTitle) modalBannerTitle.textContent = p.bannerTitle;
        if (modalIconPreview) modalIconPreview.textContent = p.icon;

        modalTags.innerHTML = p.tags.map(t => `<span class="px-2.5 py-1 rounded-md text-[11px] bg-white/5 text-slate-300 border border-white/5 font-mono">${t}</span>`).join('');

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalCard.classList.remove('scale-95');
        modalCard.classList.add('scale-100');
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
