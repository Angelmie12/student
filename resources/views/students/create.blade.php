<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Student</title>
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
            max-width: 460px;
            background: #fff;
            padding: 2rem;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .10);
        }

        h1 {
            font-size: 1.3rem;
            margin: 0 0 1.5rem;
            letter-spacing: -.01em;
        }

        .field { display: block; margin-bottom: 1rem; }

        .field span {
            display: block;
            font-size: .8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: #64748b;
            margin-bottom: .4rem;
        }

        input[type="text"] {
            width: 100%;
            padding: .65rem .8rem;
            font-size: .95rem;
            font-family: inherit;
            color: inherit;
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            transition: border-color .15s, box-shadow .15s, background .15s;
        }

        input[type="text"]:focus {
            outline: none;
            background: #fff;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .18);
        }

        .actions {
            display: flex;
            align-items: center;
            gap: .6rem;
            margin-top: 1.5rem;
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
    </style>
</head>

<body>
    <div class="card">
        <h1>Add Student</h1>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <label class="field">
                <span>Student ID</span>
                <input type="text" name="student_id" value="{{ old('student_id') }}" required>
            </label>

            <label class="field">
                <span>Student Name</span>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </label>

            <label class="field">
                <span>Address</span>
                <input type="text" name="address" value="{{ old('address') }}" required>
            </label>

            <label class="field">
                <span>Contact No</span>
                <input type="text" name="contact_no" value="{{ old('contact_no') }}">
            </label>

            <div class="actions">
                <button type="submit" class="btn btn-primary">Save Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-ghost">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>