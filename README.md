# DevPhoria

DevPhoria is a Laravel 11 web application for an IT services agency website.

It is primarily built from an HTML Codex multi-page template and adapted into Blade views, with a small set of custom backend features (contact submission storage, simple keyword search, and simulated payment record storage).

## Tech Stack

### Backend
- PHP 8.2+
- Laravel Framework 11 (`laravel/framework`)
- Laravel Sanctum
- Laravel Tinker

### Frontend / Assets
- Blade templates
- Bootstrap-based static assets served from `public/`
- jQuery + template JS libraries in `public/lib`
- Vite config and Node tooling are present (`vite`, `laravel-vite-plugin`, `axios`), but current page templates load assets directly from `public/`.

## What Is Implemented

### Template-driven pages (presentation)
Routes and pages exist for:
- Home, About, Services, Projects, Blog, Team, Testimonials, Contact, 404

These are mostly content/template pages rendered from `resources/views/pages/*`.

### Custom/backend behavior
- **Contact submission endpoint**: `POST /contact` validates and stores messages in the `contacts` table.
- **Service inquiry to payment flow**: service cards link to `/payment` with service and price query parameters.
- **Simulated payment processing**: `POST /payment/process` validates input and stores a payment record with generated transaction ID in the `payments` table.
- **Keyword search modal**: `GET /search` performs a simple text search against `home.blade.php` content and renders result entries.

## Getting Started

### Prerequisites
- PHP 8.2 or newer
- Composer
- A database supported by Laravel (default `.env.example` is SQLite)
- Optional: Node.js + npm (only needed if you want to work on Vite-managed source assets)

### Installation

```bash
git clone https://github.com/Badr-Al-Zekri/DevPhoria.git
cd DevPhoria
composer install
cp .env.example .env
php artisan key:generate
```

### Database Setup

By default, `.env.example` uses SQLite.

```bash
touch database/database.sqlite
php artisan migrate
```

If you prefer MySQL/PostgreSQL, update `.env` database variables before running migrations.

### Run Locally

```bash
php artisan serve
```

Application default URL:
- `http://127.0.0.1:8000`

### Frontend Build (Optional)

Use this only if you are developing files in `resources/js` or `resources/css`:

```bash
npm install
npm run dev
# or
npm run build
```

Current Blade templates already reference static files under `public/`, so asset compilation is not required for normal local viewing.

## Useful Commands

```bash
php artisan test
php artisan migrate:fresh
```

## Project Structure (Concise)

- `app/Http/Controllers/` — request handlers (`ContactController`, `PaymentController`, `SearchController`)
- `app/Models/` — Eloquent models (`Contact`, `Payment`)
- `routes/web.php` — web routes
- `resources/views/` — Blade layouts, partials, and page templates
- `database/migrations/` — schema definitions including `contacts` and `payments`
- `public/` — static template assets (CSS, JS, images, vendor libs)

## Troubleshooting

- **Migration errors with SQLite**: ensure `database/database.sqlite` exists and `.env` points to SQLite.
- **500 error after pulling changes**: run `composer install` then `php artisan optimize:clear`.
- **Frontend edits not appearing**: if editing files in `resources/`, run Vite (`npm run dev`); if editing `public/` assets, no build step is needed.

## License

- Template and frontend base assets: see `LICENSE.txt` (HTML Codex license terms).
- Framework/dependencies: Laravel and package licenses are defined by their respective upstream projects.
