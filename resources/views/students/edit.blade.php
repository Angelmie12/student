<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student</title>
</head>
<body>
    <h1>Student Form</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student Name</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required>

        <label>Address</label>
        <input type="text" name="address" value="{{ old('address', $student->address) }}" required>

        <button type="submit">Update Student</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>