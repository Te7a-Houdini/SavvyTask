<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategories()
    {
        return view('home.indexCategories', ['categories' => Category::all()]);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCategory(Category $category)
    {
        return view('home.showCategory', ['posts' => $category->posts()->paginate(10),'category' => $category]);
    }


    public function readMore (Post $post)
    {
        dd($post);
    }
}
