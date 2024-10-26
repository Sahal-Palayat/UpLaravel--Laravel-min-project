<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Redirect;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('success','Student Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
{
    return view('students.show')->with('students', $student);
}

public function edit(Student $student): View
{
    return view('students.edit')->with('students', $student);
}

public function update(Request $request, Student $student): RedirectResponse
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,'.$student->id,
        // Additional fields
    ]);

    $student->update($validatedData);
    return redirect('students')->with('success', 'Student Updated');
}

public function destroy(Student $student): RedirectResponse
{
    $student->delete();
    return redirect('students')->with('success', 'Student Deleted');
}
}
