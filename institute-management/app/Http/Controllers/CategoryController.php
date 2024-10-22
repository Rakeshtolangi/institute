<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;  
use App\Models\Teacher;
use App\Models\ClassModel;
USE App\Models\Category;
USE App\Models\Student;



class CategoryController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Category-list|Category-create|Category-edit|Controller-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Category-create', ['only' => ['create','store']]);
        $this->middleware('permission:Category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Category-delete', ['only' => ['destroy']]);
    }


   public function index()
   {
    $categories = Category::with('courses')->get();
    return view('backend.categories.index', compact('categories'));
    
   }

   public function create()
   {
      $courses = Course::all();
      return view('backend.categories.create', compact('courses'));
      
   }

   public function store(Request $request)
   
   {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
       ]);
       
       Category::create($validated);
       return redirect() -> route('categories.index')->with('success','Category added successfully!');
   }

   
   public function show(Category $cateogry)
   {
    return view('backend.categories.show', compact('category'));
   }

   public function edit(Category $category)
   {
    $courses = Course::all();
    return view('backend.categories.edit', compact('category', 'courses' ));
   }

   public function update(Request $request, Category $category)
   {
        $validated = $request ->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

    $category->update($validated);
    {
        return redirect()->route('categories.index') ->with ('success', 'Student updated successfully!');
    }
        
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Student deleted successfully!');
    }
}
   