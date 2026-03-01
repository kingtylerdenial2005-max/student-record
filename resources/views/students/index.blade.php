<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List - EduLaravel</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
            margin: 0;
            padding: 2rem;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        h1 {
            color: #38bdf8;
            margin: 0;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: #38bdf8;
            color: #0f172a;
        }

        .btn-primary:hover {
            background: #0ea5e9;
        }

        .btn-danger {
            background: #ef4444;
            color: white;
        }

        .btn-warning {
            background: #f59e0b;
            color: #0f172a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(30, 41, 59, 0.5);
            border-radius: 1rem;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            background: rgba(56, 189, 248, 0.1);
            color: #38bdf8;
        }

        tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border-color: #22c55e;
            color: #22c55e;
        }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Student Management</h1>
            <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add New Student</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <div class="action-btns">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 2rem;">
            <a href="/" style="color: #94a3b8; text-decoration: none;">&larr; Back to App Home</a>
        </div>
    </div>
</body>

</html>