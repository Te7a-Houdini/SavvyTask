<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', ['posts' => Post::with('category')->paginate(4)]);

    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            'post' => new Post(),
            'url' => route('post.store'),
            'method' => 'POST',
            'action' => 'Create',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $newFileName = Post::uploadFile($request);

        $request_array = $request->all();
        $request_array['image_url'] = '/images/posts/'. $newFileName;

        Post::create($request_array);

        return redirect()->route('post.index');
    }

    /**
     * show one category
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
            'url' => route('post.update', $post->id),
            'method' => 'PATCH',
            'action' => 'Update',
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     *  @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $request_array = $request->all();
        unset($request_array['image_url']);

        // we are uploading a new image
        if ($request->file('image_url') != null) {
            $newFileName =  Post::uploadFile($request);
            $request_array['image_url'] = '/images/posts/'. $newFileName;
        }

        $post->update($request_array);

        return redirect()->route('post.index');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}
