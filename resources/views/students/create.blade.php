<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Student</title>
</head>
<body>
    <h1>Student Form</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Student ID</label>
        <input type="text" name="student_id" value="{{ old('student_id') }}" required>

        <label>Student Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Address</label>
        <input type="text" name="address" value="{{ old('address') }}" required>

        <button type="submit">Save Student</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>