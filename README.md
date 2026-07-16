# 🚀 Laravel Developer Portfolio

A modern, responsive, and SEO-friendly developer portfolio built with Laravel, Tailwind CSS, Alpine.js, and AOS. This project features a clean UI, reusable Blade components, and smooth scroll animations.

---

## ✨ Features

- **Modern UI/UX**: Premium aesthetic with dark blue and bright blue accents.
- **Fully Responsive**: Pixel-perfect scaling from 360px mobile screens to 1440px desktop displays.
- **Component-Driven**: Built using reusable Laravel Blade components (`<x-card.project>`, `<x-navbar>`, etc.).
- **Interactive Animations**: Micro-interactions powered by Tailwind CSS transitions, Alpine.js states, and AOS scroll reveals.
- **SEO & Accessibility**: Fully optimized with Meta tags, Open Graph tags, Twitter Cards, semantic HTML, and ARIA labels.
- **Centralized Data (MVC)**: Content is managed via configuration files and routed through `PortfolioController` following Laravel best practices.
- **Production Ready**: Assets compiled with Vite, secure forms with CSRF protection, and lazy-loaded images.

---

## 🛠️ Tech Stack

- **Backend**: [Laravel 11](https://laravel.com/) (PHP 8.2+)
- **Frontend**: [Tailwind CSS 3](https://tailwindcss.com/) (Utility-first styling)
- **Interactivity**: [Alpine.js 3](https://alpinejs.dev/) (Lightweight JavaScript)
- **Animations**: [AOS](https://michalsnik.github.io/aos/) (Animate on Scroll)
- **Build Tool**: [Vite](https://vitejs.dev/)

---

## 📂 Folder Structure

The project strictly follows Laravel's standard directory structure with additional organization for Blade components:

```text
c:\portfolio-ismina\
├── app/
│   └── Http/Controllers/
│       └── PortfolioController.php  # Main controller passing data to views
├── config/
│   ├── activities.php               # Data for Activities section
│   ├── experiences.php              # Data for Experience section
│   ├── projects.php                 # Data for Projects section
│   └── social.php                   # Centralized Social Media Links
├── public/
│   ├── build/                       # Compiled CSS/JS assets (Vite)
│   └── preview.png                  # Open Graph social sharing image
├── resources/
│   ├── css/app.css                  # Main Tailwind entry point
│   └── views/
│       ├── components/              # Reusable UI Blade Components (Buttons, Cards, Inputs)
│       ├── layouts/
│       │   └── app.blade.php        # Master layout (Meta tags, scripts)
│       ├── sections/                # Page sections (Hero, About, Contact, etc.)
│       └── welcome.blade.php        # Main homepage view
└── routes/
    └── web.php                      # Application routes
```

---

## ⚙️ Installation & Local Setup

Follow these steps to set up the project on your local machine:

1. **Clone the repository** (if applicable):
   ```bash
   git clone https://github.com/yourusername/portfolio.git
   cd portfolio
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install Node/NPM Dependencies**:
   ```bash
   npm install
   ```

4. **Environment Setup**:
   Copy the `.env.example` file to `.env` (if starting fresh):
   ```bash
   cp .env.example .env
   ```
   Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. **Compile Frontend Assets**:
   For local development (hot-reloading):
   ```bash
   npm run dev
   ```
   For production build:
   ```bash
   npm run build
   ```

6. **Serve the Application**:
   ```bash
   php artisan serve
   ```
   Visit `http://localhost:8000` in your browser.

---

## 🔧 Configuration Guide

To update the content of the portfolio without touching the UI code, modify the files inside the `config/` directory:

- **Social Links**: Update `config/social.php` to change your GitHub, LinkedIn, or Email links.
- **Projects**: Edit `config/projects.php` to add or remove items from the Featured Projects section.
- **Experience**: Edit `config/experiences.php` to update your work history.
- **Activities**: Edit `config/activities.php` to update your achievements or workshops.

To update global SEO information (like Meta Description and Keywords), open `resources/views/layouts/app.blade.php` and update the standard `<meta>` tags inside the `<head>`.

---

## 📜 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
