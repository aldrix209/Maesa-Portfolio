import * as THREE from 'three';
import { createIcons, icons } from 'lucide';

// Initialize Lucide Icons
document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });

    // Dynamic Copyright Year
    const yearElem = document.getElementById('year');
    if (yearElem) {
        yearElem.textContent = new Date().getFullYear();
    }

    // Mobile Menu Toggle
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

    // Clipboard Copy Toast
    const toast = document.getElementById('toast');
    window.copyEmail = function (email = 'maesa.creates@gmail.com') {
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

    const quickCopy = document.getElementById('quickCopyEmail');
    if (quickCopy) quickCopy.addEventListener('click', () => window.copyEmail());

    const contactCopy = document.getElementById('contactCopyEmail');
    if (contactCopy) contactCopy.addEventListener('click', () => window.copyEmail());

    // Project Modal Data & Logic
    const projectDetails = {
        quantum: {
            title: "Quantum Analytics Platform",
            category: "Fintech & WebGL Telemetry",
            desc: "Designed and engineered a high-throughput financial telemetry platform handling real-time streams with sub-50ms latency. Implemented modular widget architecture and custom WebGL data visualizers.",
            tags: ["UI/UX", "React", "3D", "WebGL", "Tailwind"],
            bannerText: "Quantum Analytics • GPU Accelerated"
        },
        artemis: {
            title: "Artemis e-Commerce Storefront",
            category: "Creative Commerce & Brand",
            desc: "A boutique luxury storefront focused on sensory photography, seamless product transitions, and a streamlined frictionless one-step checkout process with 42% higher conversion rate.",
            tags: ["UI/UX", "Next.js", "Shopify", "Tailwind"],
            bannerText: "Artemis • Minimalist Luxury"
        },
        nexio: {
            title: "Nexio Cloud Platform",
            category: "Enterprise Cloud Console",
            desc: "Redesigned complex multi-cluster cloud management software. Reduced onboarding friction and system administration errors by introducing intuitive visual dependency trees.",
            tags: ["UI/UX", "React", "TypeScript", "Design Systems"],
            bannerText: "Nexio • Enterprise Console"
        },
        vibe: {
            title: "Vibe Spatial Social Feed",
            category: "Next-Gen Mobile & Web Social",
            desc: "An experimental social audio and spatial canvas application featuring real-time collaborative avatars, fluid gestures, and personalized gradient identities.",
            tags: ["UI/UX", "React Native", "Three.js", "WebRTC"],
            bannerText: "Vibe Social • Spatial Hub"
        }
    };

    const modal = document.getElementById('projectModal');
    const modalCard = document.getElementById('modalCard');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalDesc = document.getElementById('modalDesc');
    const modalBanner = document.getElementById('modalBanner');
    const modalTags = document.getElementById('modalTags');

    window.openProjectModal = function (id) {
        const p = projectDetails[id];
        if (!p || !modal) return;
        modalTitle.textContent = p.title;
        modalCategory.textContent = p.category;
        modalDesc.textContent = p.desc;
        modalBanner.textContent = p.bannerText;
        modalTags.innerHTML = p.tags.map(t => `<span class="px-2 py-0.5 rounded-full text-[10px] bg-white/5 text-slate-300 border border-white/5">${t}</span>`).join('');

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

    // Three.js Iridescent 3D Interactive Canvas
    initThreeJs();
});

function initThreeJs() {
    const container = document.getElementById('threeCanvasContainer');
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.z = 7;

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer);

    const cluster = new THREE.Group();
    scene.add(cluster);

    const iridescentMaterial = new THREE.MeshPhysicalMaterial({
        color: 0x9333ea,
        emissive: 0x1e1035,
        roughness: 0.18,
        metalness: 0.9,
        clearcoat: 1.0,
        clearcoatRoughness: 0.1,
        reflectivity: 0.9
    });

    const cyanMaterial = new THREE.MeshPhysicalMaterial({
        color: 0x06b6d4,
        emissive: 0x082f49,
        roughness: 0.2,
        metalness: 0.85,
        clearcoat: 1.0,
        clearcoatRoughness: 0.1
    });

    // 1. Central Torus Knot
    const centralKnotGeo = new THREE.TorusKnotGeometry(1.2, 0.35, 120, 20, 2, 3);
    const centralKnot = new THREE.Mesh(centralKnotGeo, iridescentMaterial);
    cluster.add(centralKnot);

    // 2. Floating Torus Ring
    const ringGeo = new THREE.TorusGeometry(0.8, 0.18, 16, 50);
    const ring = new THREE.Mesh(ringGeo, cyanMaterial);
    ring.position.set(-1.8, -1.1, 0.5);
    ring.rotation.x = 1.2;
    cluster.add(ring);

    // 3. Floating 3D Cube
    const cubeGeo = new THREE.BoxGeometry(0.75, 0.75, 0.75);
    const cube = new THREE.Mesh(cubeGeo, iridescentMaterial);
    cube.position.set(1.9, 1.4, 0.2);
    cube.rotation.set(0.5, 0.7, 0.2);
    cluster.add(cube);

    // 4. Floating Octahedron (Diamond / Pyramid)
    const octaGeo = new THREE.OctahedronGeometry(0.65, 0);
    const octa = new THREE.Mesh(octaGeo, cyanMaterial);
    octa.position.set(-1.6, 1.5, -0.4);
    cluster.add(octa);

    // 5. Floating Sphere
    const sphereGeo = new THREE.SphereGeometry(0.28, 32, 32);
    const sphere = new THREE.Mesh(sphereGeo, iridescentMaterial);
    sphere.position.set(-2.2, 0.3, 0.8);
    cluster.add(sphere);

    // Ambient & Point Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.2);
    scene.add(ambientLight);

    const purpleLight = new THREE.PointLight(0xa855f7, 4, 20);
    purpleLight.position.set(-4, 3, 5);
    scene.add(purpleLight);

    const cyanLight = new THREE.PointLight(0x06b6d4, 4, 20);
    cyanLight.position.set(5, -3, 4);
    scene.add(cyanLight);

    const topLight = new THREE.DirectionalLight(0xffffff, 2);
    topLight.position.set(0, 5, 5);
    scene.add(topLight);

    // Mouse Movement Tracking
    let mouseX = 0, mouseY = 0;
    let targetX = 0, targetY = 0;

    window.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouseX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
        mouseY = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
    });

    function animate() {
        requestAnimationFrame(animate);

        targetX += (mouseX - targetX) * 0.05;
        targetY += (mouseY - targetY) * 0.05;

        centralKnot.rotation.x += 0.006;
        centralKnot.rotation.y += 0.008;

        ring.rotation.x += 0.01;
        ring.rotation.z += 0.007;

        cube.rotation.x += 0.008;
        cube.rotation.y += 0.005;

        octa.rotation.y += 0.012;

        cluster.rotation.y = targetX * 0.45;
        cluster.rotation.x = -targetY * 0.35;

        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        if (!container) return;
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    });
}
