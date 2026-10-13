# Maesa — Portfolio Website

A sleek, modern portfolio website for **Maesa** (Digital Designer & Creative Developer), built with **Laravel**, **Tailwind CSS**, **Three.js**, and **Vite**.

## ✨ Features
- **Modern Dark Glassmorphism UI:** Subtle ambient purple/cyan lighting, frosted glass cards, and clean typography.
- **Interactive 3D WebGL Canvas:** Floating iridescent metallic shapes created with Three.js that smoothly track cursor movement.
- **Bento Showcase Grid:** Curated project cards with category tags, performance metrics, and interactive case study modals.
- **Micro-Interactions:** One-click copy email to clipboard with animated toast notification.
- **Responsive & Accessible:** Fully mobile-optimized with collapsible navigation.

---

## 🛠 Tech Stack
- **Backend:** [Laravel](https://laravel.com/)
- **Frontend / Styling:** [Tailwind CSS v4](https://tailwindcss.com/)
- **Build Tool:** [Vite](https://vite.dev/)
- **3D Graphics:** [Three.js](https://threejs.org/)
- **Icons:** [Lucide Icons](https://lucide.dev/)

---

## 🚀 Getting Started

### 1. Prerequisites
- PHP >= 8.2 (Tested on PHP 8.5)
- Composer
- Node.js >= 18 & npm

### 2. Installation
```bash
# Clone the repository
git clone https://github.com/aldrix209/Maesa-Portfolio.git
cd Maesa-Portfolio

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Setup environment
cp .env.example .env
php artisan key:generate
```

### 3. Development Server
Run Vite and Laravel artisan server concurrently:
```bash
# Terminal 1: Vite Dev Server
npm run dev

# Terminal 2: Laravel Server
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## 📄 License
This project is open-source under the [MIT License](LICENSE).
