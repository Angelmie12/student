<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>

    <a href="{{ route('students.create') }}">Add Student</a>

    <ul>
        @forelse ($students as $student)
            <li>
                <span>{{ $student->student_id }}</span>
                <span>{{ $student->name }}</span>
                <span>{{ $student->address }}</span>

                <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                      style="display:inline"
                      onsubmit="return confirm('Delete this student?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <li>No students yet.</li>
        @endforelse
    </ul>
</body>
</html>