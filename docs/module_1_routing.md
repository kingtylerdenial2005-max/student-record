# Module 1: Routing & Views

Now that we have the project structure, let's make our first change.

## 1. Defining a Route
Open `routes/web.php`. You'll see:
```php
Route::get('/', function () {
    return view('welcome');
});
```

### Explanation:
- `Route::get`: We are defining a route for an HTTP **GET** request.
- `'/'`: This is the URL path (the homepage).
- `function () { ... }`: A closure that defines what happens when this URL is visited.
- `return view('welcome')`: This tells Laravel to find a file named `welcome.blade.php` in `resources/views` and render it.

---

## 2. Creating a View
Views in Laravel use the `.blade.php` extension. Blade is Laravel's powerful templating engine.

### Why Blade?
- It allows you to use plain PHP in your templates easily.
- It provides shortcuts for common tasks (loops, conditionals).
- It compiles into plain PHP code and caches it for performance.

---

## 3. The Flow: Route -> View
1. The user navigates to `your-site.com/`.
2. Laravel looks at `routes/web.php` and finds the `/` route.
3. The route instructions say: "Return the 'welcome' view".
4. Laravel looks for `resources/views/welcome.blade.php`.
5. The view is rendered and sent to the user.
