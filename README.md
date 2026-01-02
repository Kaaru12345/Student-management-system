# Student Management System (Demo)

Demo Laravel-style project for Student Management System. This is a lightweight folder structure and sample code intended for learning and uploading to GitHub.

**Note:** This is a simplified demo. To run a full Laravel app you will need a real Laravel installation (`composer create-project laravel/laravel`) and to move these controllers/views into that project or use this as a reference implementation.

## Included
- app/Models/Student.php (Eloquent-style model)
- app/Http/Controllers/StudentController.php (basic controller)
- routes/web.php (route list)
- resources/views/layouts/app.blade.php and views for dashboard, students, attendance, marks, fees
- database/migrations/create_students_table.php (migration-like SQL file)
- .env.example and sample_data.sql

## How to use
1. If you already have a Laravel project, copy the relevant files into your project: models to app/Models, controllers to app/Http/Controllers, views to resources/views, and routes/web.php contents into your routes file, then run migrations.
2. Or upload this folder to GitHub as a demo repository.
