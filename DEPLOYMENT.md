# 🚀 Deployment Guide & Production Checklist

This guide provides everything you need to know to safely and efficiently deploy this Laravel portfolio to a production environment.

---

## ✅ Production Checklist

Before pushing to production, ensure you have completed the following:

- [x] **SEO Meta Tags Updated**: Update the placeholder Title, Description, and Keywords in `resources/views/layouts/app.blade.php`.
- [x] **Social Links Configured**: Verify all URLs in `config/social.php` are correct.
- [x] **Preview Image Added**: Ensure `public/preview.png` exists for Open Graph (social media sharing).
- [ ] **Environment Variables Secured**: `.env` `APP_ENV` is set to `production` and `APP_DEBUG` is `false`.
- [ ] **Assets Compiled**: Run `npm run build` so that the `public/build` directory contains the minified CSS/JS.
- [ ] **Cache Configured**: Run config and route caching commands on the server.

---

## 🔐 Environment Variables (.env)

When deploying, your production `.env` file should look similar to this:

```env
APP_NAME="John Doe Portfolio"
APP_ENV=production
APP_KEY=base64:your_generated_app_key_here
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Since this is a static-data portfolio (no database yet), DB variables can be left default or removed.
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

---

## 🛠️ Build & Deployment Commands

Once your code is on the production server, run the following commands via SSH or your CI/CD pipeline:

```bash
# 1. Install optimized PHP dependencies (no dev packages)
composer install --optimize-autoloader --no-dev

# 2. Install NPM dependencies & compile assets
npm install
npm run build

# 3. Cache configuration for speed
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## ☁️ Recommended Hosting Platforms

This Laravel portfolio can be hosted on a variety of platforms depending on your budget and expertise.

### 1. Vercel (Serverless / Best for Frontend-heavy Laravel)
Vercel is traditionally for JS frameworks, but with `laravel-vercel` bridges (like `vercel-php`), it's possible to deploy headless or simple Laravel apps.
- **Pros**: Free tier, automatic SSL, global CDN edge network.
- **Setup**: Requires a specific `api/index.php` and `vercel.json` configuration to route PHP requests. Not recommended for beginners unless using a dedicated Laravel Vercel package.

### 2. Railway / Render (PaaS / Recommended for Beginners)
Platform-as-a-Service providers that connect directly to your GitHub repository and automatically build your project.
- **Pros**: Very easy CI/CD, connects to GitHub, automatic SSL.
- **Setup**: 
  - Add a `Procfile` or use a Dockerfile.
  - Set the root directory to `public`.
  - Add your `.env` variables in their dashboard.

### 3. Shared Hosting (cPanel / Hostinger / Namecheap)
The most common and budget-friendly option.
- **Pros**: Cheap, includes email hosting, easy domain setup.
- **Setup**:
  1. Zip your entire project (excluding `node_modules`).
  2. Upload to the `public_html` or a folder outside `public_html`.
  3. Point the domain's document root to the `public/` directory of your Laravel app.
  4. Manually create the `.env` file and generate the key.

### 4. VPS (DigitalOcean / Linode / AWS EC2)
A dedicated Virtual Private Server (VPS). Best for total control.
- **Pros**: Highest performance, full root access, highly scalable.
- **Setup**: 
  - Install a stack like LEMP (Linux, Nginx, MySQL, PHP) or use a manager like **Laravel Forge** or **RunCloud**.
  - Clone your Git repo, run the Deployment Commands listed above, and point Nginx to the `/public` folder.

---

## 📁 Git Ignore

The project already includes a standard Laravel `.gitignore` file which ignores:
- `/vendor` (PHP dependencies)
- `/node_modules` (JS dependencies)
- `/public/build` (Compiled Vite assets - *Note: If using Shared Hosting without SSH, you may need to force-add this folder to Git or build locally before uploading*)
- `.env` (Environment variables - **NEVER COMMIT THIS**)
