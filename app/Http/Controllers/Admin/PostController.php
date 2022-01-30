<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Auth::user()->posts()->orderByDesc('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => ['required', 'unique:posts', 'max:200'],
            'image' => ['nullable'],
            'text' => ['nullable'],
            'category_id' => ['nullable', 'exists:categories,id'],
        ]);

        $validated['user_id'] = Auth::id();

        Post::create($validated);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        if (Auth::id() === $post->user_id) {
            return view('admin.posts.edit', compact('post', 'categories'));
        } else {
            abort(403);
        }


        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (Auth::id() === $post->user_id) {
            $validated = $request->validate([
                'title' => ['required', Rule::unique('posts')->ignore($post->id), 'max:200'],
                'image' => 'nullable',
                'text' => 'nullable',
                'category_id' => 'nullable | exists:categories,id',
            ]);

            $validated['user_id'] = Auth::id();
            $post->update($validated);

            return redirect()->route('admin.posts.index')->with('msg', "Post");
        } else {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function destroy(Post $post)
    {
        if (Auth::id() === $post->user_id) {

            $title = $post->title;
            $post->delete();
            return redirect()->back()->with('message', "Success! Post $title Deleted ");
        } else {
            abort(403);
        }
    }
}