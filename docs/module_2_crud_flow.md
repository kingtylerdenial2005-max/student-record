# Module 2: CRUD Logic & Request Flow

CRUD stands for **Create, Read, Update, and Delete**. These are the four basic operations of persistent storage.

## 1. Resource Routing
In `web.php`, we used:
```php
Route::resource('students', StudentController::class);
```
This single line automatically creates **7 routes** for our students (index, create, store, show, edit, update, destroy).

---

## 2. Request Flow: The Lifecycle
Let's trace what happens when you create a student:

1. **GET `/students/create`**:
   - Route finds `StudentController@create`.
   - Controller returns the `students.create` view.
2. **POST `/students`** (Submitting the form):
   - Form sends data + a `@csrf` token.
   - Route finds `StudentController@store`.
   - **Validation**: Controller checks if name/email are valid.
   - **Eloquent**: `Student::create($data)` inserts the record into the database.
   - **Redirect**: Controller sends user back to the index with a "Success" message.

---

## 3. Form Security: CSRF
In every Laravel form, you must include `@csrf`:
```html
<form action="/students" method="POST">
    @csrf
    ...
</form>
```
### Why?
CSRF (Cross-Site Request Forgery) is an attack where a malicious site tricks a user into submitting a form on your site. The `@csrf` directive generates a hidden token that Laravel checks to ensure the request is coming from *your* application.

---

## 4. Method Spoofing
HTML forms only support `GET` and `POST`. To use `PUT` (for updates) or `DELETE` (for deletions), Laravel uses method spoofing:
```html
@method('PUT')
```
This tells Laravel: "Treat this POST request as a PUT request".
