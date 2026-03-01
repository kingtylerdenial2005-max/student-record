<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student - EduLaravel</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
            margin: 0;
            padding: 2rem;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(30, 41, 59, 0.7);
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h1 {
            color: #38bdf8;
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #94a3b8;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: #0f172a;
            color: white;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #38bdf8;
        }

        .error {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #38bdf8;
            color: #0f172a;
        }

        .btn-primary:hover {
            background: #0ea5e9;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Add New Student</h1>
            <a href="{{ route('students.index') }}" style="color: #94a3b8; text-decoration: none;">Cancel</a>
        </div>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ old('age') }}">
                @error('age') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" value="{{ old('course') }}">
                @error('course') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Student</button>
        </form>
    </div>
</body>

</html>