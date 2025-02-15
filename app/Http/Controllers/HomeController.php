<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{

  

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $courses = Course::all();
        $categories = Category::pluck('name', 'id');
        return view('User.Home',compact('courses', 'categories'));


    }





}
