# Institute Management System

A web-based institute/school management system built with Laravel, handling student admissions, academics, attendance, fees, staff, and reporting.

---

## Table of Contents

- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Local Setup](#local-setup)
- [Modules](#modules)
- [Known Issues](#known-issues)
- [Project Status](#project-status)
- [Roadmap](#roadmap)
- [License](#license)

---

## Tech Stack

- **Backend:** PHP 8.3 / Laravel 11.21
- **Database:** MySQL (MariaDB 10.4 via XAMPP in local dev)
- **Frontend:** Blade templates, Bootstrap 5, vanilla JS
- **Auth & Access Control:** Laravel UI (session-based auth) + Spatie Laravel Permission (roles/permissions) + Laravel Sanctum (token-based, for API use)
- **PDF Generation:** barryvdh/laravel-dompdf, dompdf, FPDF/FPDI, clegginabox/pdf-merger

---

## Requirements

- PHP >= 8.3
- Composer
- MySQL / MariaDB
- Node.js + npm

---

## Local Setup

### 1. Install PHP dependencies
```bash
composer install
```

### 2. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Configure `.env`
```env
DB_DATABASE=institute
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Create the database
```sql
CREATE DATABASE institute;
```

### 5. Run migrations
```bash
php artisan migrate
```

### 6. Install & build frontend assets
```bash
npm install
npm run dev
```

### 7. Serve the application
```bash
php artisan serve
```

App will be available at `http://127.0.0.1:8000`.

---

## Modules

| Module | Description |
|---|---|
| **Admissions** | Enquiries, student admission records |
| **Academics** | Courses, Classes, Batches, Shifts, Categories |
| **Students** | Student profiles, linked to Course/Batch/Shift/Class |
| **Staff** | Teachers, Designations |
| **Attendance** | Attendance tracking |
| **Fees** | Fee categories, fee records per student |
| **Expenses** | Expense categories, expense tracking |
| **Payroll** | Staff payroll records |
| **Certificates** | Certificate generation |
| **Reports** | Reporting (PDF export supported) |
| **Access Control** | Roles, Permissions, Users (via Spatie Permission) |

---

## Known Issues

- `admin.dashboard` route in `routes/web.php` references a controller (`AdminController`) that does not currently exist in the codebase, which breaks `php artisan route:list`.
- `attandances` table/migration is a misspelling of "attendances." Cosmetic, low priority, but affects naming consistency across the codebase.

---

## Project Status

Core functionality is complete and running locally. Project is in a pre-documentation, pre-hardening phase — see [Roadmap](#roadmap) below.

---

## Roadmap

### Immediate
- [ ] Fix `AdminController` missing-class route bug
- [ ] Rename `attandances` → `attendances`
- [ ] Document pre-deploy checklist (disable `APP_DEBUG`, cache config/routes)
- [ ] Complete `FEATURES.md` and `SCHEMA.md`
- [ ] Document auth strategy (session vs Sanctum token use)
- [ ] Audit `.env.example` for completeness

### Future
- [ ] REST API layer via Sanctum (mobile/parent portal)
- [ ] Email/SMS notifications (fee due dates, attendance, results)
- [ ] Dashboard analytics (attendance trends, fee collection summaries)
- [ ] Role-based UI audit across all user types
- [ ] Automated test suite (PHPUnit)
- [ ] `DEPLOY.md` — production environment, queue workers, caching

---

## License

_Not yet specified._
