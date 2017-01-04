<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

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
    public function showCategoryPosts(Category $category)
    {
        return view('home.showCategoryPosts', ['posts' => $category->posts()->paginate(10),'category' => $category]);
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function readMore(Post $post)
    {
        return view('home.readMorePost', ['post' => $post]);
    }
}
