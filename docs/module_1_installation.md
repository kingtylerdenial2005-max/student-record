# Module 1: Installation & Structure

Welcome to your first step in becoming a Laravel Master. In this module, we initialized our project and will now explore the fundamental structure and architecture.

## 1. Project Creation
We used the following command to create the project:
`composer create-project laravel/laravel .`

### What it does:
- Downloads the latest version of the Laravel framework and all its dependencies.
- Sets up the initial folder structure.
- Creates a `.env` file for configuration.
- Generates an application key.
- Runs initial migrations on a default SQLite database.

### Why we use it:
It's the standard, cleanest way to start a new Laravel project with all the necessary "boilerplate" code ready to go.

---

## 2. Folder Structure Walkthrough
Laravel follows a clean, expressive structure. Here are the keys:

- **`app/`**: The heart of your app. Contains your Models, Controllers, and Middleware.
- **`bootstrap/`**: Contains the `app.php` file which bootstraps the framework.
- **`config/`**: All your application's configuration files.
- **`database/`**: Database migrations, factories, and seeders.
- **`public/`**: The entry point (index.php) and assets like CSS/JS.
- **`resources/`**: Your Blade templates (views) and raw assets.
- **`routes/`**: Where you define all your web and API routes.
- **`storage/`**: Log files, caches, and uploaded files.
- **`vendor/`**: All Composer dependencies (do not edit these!).
- **`.env`**: Your environment-specific sensitive configuration (DB credentials, API keys).

---

## 3. MVC Architecture
Laravel is an **MVC (Model-View-Controller)** framework.

1. **Model**: Represents your data and business logic (usually mapping to a database table).
2. **View**: What the user sees (HTML/Blade templates).
3. **Controller**: The "brain" that handles requests, talks to the Model, and returns a View.

---

## 4. Request Lifecycle
When a user visits your site:
1. **Route** (`routes/web.php`) catches the URL.
2. **Route** sends it to a **Controller**.
3. **Controller** might ask a **Model** for data.
4. **Controller** sends that data to a **View**.
5. **View** is rendered as HTML in the browser.
