<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.posts.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        //dd($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->image_path = $request->image_path;
        $post->published = $request->published;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->published_at = $request->published_at;
        //dd($post);
        $post->save();

        //Post::create($request->all());

        session()->flash('swal', [
            'type' => 'success',
            'title' => 'Post creado correctamente',
            'text' => 'El post se creó con éxito',
        ]);

        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'users', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //dd($request->all());
        $post->update($request->all());

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->image_path = $request->image_path;
        // $post->published = $request->published;
        // $post->category_id = $request->category_id;
        // $post->user_id = $request->user_id;
        // $post->published_at = $request->published_at;
        // //dd($post);
        // $post->update();

        session()->flash('swal', [
            'type' => 'success',
            'title' => 'Post actualizado correctamente',
            'text' => 'El post se actualizó con éxito',
        ]);

        return redirect()->route('admin.posts.index', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('swal', [
            'type' => 'success',
            'title' => 'Post eliminado correctamente',
            'text' => 'El post se eliminó con éxito',
        ]);

        return redirect()->route('admin.posts.index');
    }
}
