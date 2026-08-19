# Institute Management System

A web-based institute/school management system built with Laravel, handling student admissions, academics, attendance, fees, staff, and reporting.

Tech Stack
Backend: PHP 8.3 / Laravel 11.21
Database: MySQL (MariaDB 10.4 via XAMPP in local dev)
Frontend: Blade templates, Bootstrap 5, vanilla JS
Auth & Access Control: Laravel UI (session-based auth) + Spatie Laravel Permission (roles/permissions) + Laravel Sanctum (token-based, for API use)
PDF Generation: barryvdh/laravel-dompdf, dompdf, FPDF/FPDI, clegginabox/pdf-merger
Requirements
PHP >= 8.3
Composer
MySQL / MariaDB
Node.js + npm
Local Setup
bash
# 1. Install PHP dependencies
composer install

# 2. Environment setup
cp .env.example .env
php artisan key:generate

# 3. Configure .env with your local DB credentials
# DB_DATABASE=institute
# DB_USERNAME=root
# DB_PASSWORD=

# 4. Create the database (e.g. via phpMyAdmin or CLI)
# CREATE DATABASE institute;

# 5. Run migrations
php artisan migrate

# 6. Install & build frontend assets
npm install
npm run dev

# 7. Serve the application
php artisan serve

App will be available at http://127.0.0.1:8000.

Modules
Module	Description
Admissions	Enquiries, student admission records
Academics	Courses, Classes, Batches, Shifts, Categories
Students	Student profiles, linked to Course/Batch/Shift/Class
Staff	Teachers, Designations
Attendance	Attendance tracking
Fees	Fee categories, fee records per student
Expenses	Expense categories, expense tracking
Payroll	Staff payroll records
Certificates	Certificate generation
Reports	Reporting (PDF export supported)
Access Control	Roles, Permissions, Users (via Spatie Permission)
Known Issues
admin.dashboard route in routes/web.php references a controller (AdminController) that does not currently exist in the codebase, which breaks php artisan route:list. Needs to be resolved (see Immediate Improvements below).
attandances table/migration is a misspelling of "attendances." Cosmetic, low priority, but affects naming consistency across the codebase.
Status

Core functionality is complete and running locally. Project is in a pre-documentation, pre-hardening phase — see Roadmap below.

License

Not yet specified.
