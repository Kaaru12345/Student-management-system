<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function dashboard()
    {
        $total = Student::count();
        $avgMarks = Student::avg('marks') ?? 0;
        return view('dashboard', compact('total','avgMarks'));
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'section' => 'required',
            'marks' => 'nullable|numeric'
        ]);
        Student::create($data);
        return redirect()->route('students.index')->with('success','Student Added!');
    }

    public function attendance()
    {
        $students = Student::all();
        return view('attendance', compact('students'));
    }

    public function marks()
    {
        $students = Student::all();
        return view('marks', compact('students'));
    }

    public function fees()
    {
        $students = Student::all();
        return view('fees', compact('students'));
    }
}
