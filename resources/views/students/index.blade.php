<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>Students</title>
</head>

<body>
    <h1>Student List</h1>

    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->student_id }} , {{ $student->name }} , {{ $student->address }} , {{ $student->contact_no }}
            </li>
        @endforeach
    </ul>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #1e293b;
            background: linear-gradient(135deg, #eef2ff 0%, #f8fafc 100%);
        }

        .card {
            width: 100%;
            max-width: 720px;
            background: #fff;
            padding: 2rem;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .10);
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .page-header h1 {
            margin: 0;
            font-size: 1.3rem;
            letter-spacing: -.01em;
        }

        .list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .list-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: .9rem 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .list-item:last-child { border-bottom: 0; }

        .student-info {
            display: flex;
            flex-direction: column;
            gap: .15rem;
            min-width: 0;
        }

        .student-id {
            font-size: .75rem;
            font-weight: 600;
            color: #64748b;
            letter-spacing: .03em;
            text-transform: uppercase;
        }

        .student-name { font-weight: 600; }

        .student-address {
            font-size: .85rem;
            color: #64748b;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .row-actions {
            display: flex;
            align-items: center;
            gap: .5rem;
            flex-shrink: 0;
        }

        .btn {
            display: inline-block;
            padding: .65rem 1.1rem;
            font-size: .9rem;
            font-weight: 600;
            font-family: inherit;
            border: 0;
            border-radius: 9px;
            cursor: pointer;
            text-decoration: none;
            transition: background .15s, transform .05s;
        }

        .btn:active { transform: translateY(1px); }

        .btn-primary { background: #4f46e5; color: #fff; }
        .btn-primary:hover { background: #4338ca; }

        .btn-ghost {
            background: transparent;
            color: #475569;
            border: 1px solid #cbd5e1;
        }
        .btn-ghost:hover { background: #f1f5f9; }

        .btn-danger { background: #ef4444; color: #fff; }
        .btn-danger:hover { background: #dc2626; }

        .btn-sm {
            padding: .45rem .75rem;
            font-size: .8rem;
            border-radius: 7px;
        }

        .inline-form { display: inline; }

        .empty {
            padding: 2rem 0;
            text-align: center;
            color: #64748b;
            font-size: .95rem;
        }

        @media (max-width: 520px) {
            .list-item { flex-direction: column; align-items: flex-start; }
            .row-actions { width: 100%; }
            .btn-sm { flex: 1; text-align: center; }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="page-header">
            <h1>Students</h1>
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">Add Student</a>
        </div>

        <ul class="list">
            @forelse ($students as $student)
                <li class="list-item">
                    <div class="student-info">
                        <span class="student-id">{{ $student->student_id }}</span>
                        <span class="student-name">{{ $student->name }}</span>
                        <span class="student-address">{{ $student->address }}</span>
                    </div>

                    <div class="row-actions">
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-ghost btn-sm">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                              class="inline-form"
                              onsubmit="return confirm('Delete this student?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="empty">No students yet. Add your first student above.</li>
            @endforelse
        </ul>
    </div>
>>>>>>> 39a8b44 (feat: implement student crud operations)
</body>
</html>