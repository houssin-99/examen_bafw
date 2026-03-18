<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    { 
        $courses = Course::where('active', 1)->get();
        return view('courses.index', compact('courses'));
    }
    public function toggle(Course $course) {
        $course->update(['active' => !$course->active]);
        return back()->with('success', 'Course status updated successfully.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }
}
