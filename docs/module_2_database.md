# Module 2: Databases & Eloquent

In this module, we move from static pages to dynamic data.

## 1. Database Connection
Laravel uses the `.env` file to manage database credentials. By default, fresh Laravel projects use **SQLite**, which is a file-based database. No setup is required!
- **Path**: `database/database.sqlite`

---

## 2. Migrations
Migrations are like "Version Control" for your database. Instead of sharing SQL dumps, you share PHP files that define the table structure.

### Command used:
`php artisan make:model Student -m`

### What it does:
- `make:model Student`: Creates the `app/Models/Student.php` file.
- `-m` (Flag): Simultaneously creates a migration file in `database/migrations/`.

### Why use Migrations?
- **Consistency**: Every developer on the team has the exact same table structure.
- **Rollbacks**: You can easily undo changes with `php artisan migrate:rollback`.

---

## 3. Eloquent ORM (Models)
Eloquent is Laravel's built-in Object-Relational Mapper (ORM). It allows you to interact with your database using PHP syntax instead of raw SQL.

### Example:
- **Raw SQL**: `SELECT * FROM students;`
- **Eloquent**: `Student::all();`

### Mass Assignment
In our `Student.php` model, we added:
```php
protected $fillable = ['name', 'email', 'age', 'course'];
```
This is a security feature. It tells Laravel which fields are safe to be filled via a form. Without this, Laravel blocks "Mass Assignment" to prevent users from maliciously updating sensitive fields (like `is_admin`).
