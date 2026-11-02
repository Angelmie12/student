<?php

namespace App\Http\Controllers;

use App\Models\Student;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 39a8b44 (feat: implement student crud operations)

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }
<<<<<<< HEAD
}
=======

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_no' => 'nullable|string|max:255',
        ]);

        Student::create($validated);
        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_no' => 'nullable|string|max:255',
        ]);

        $student->update($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}
>>>>>>> 39a8b44 (feat: implement student crud operations)
