<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.post.list', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.form')->with([
            'id' => '',
            'title' => '', 
            'body' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:100'],
            'post_image' => ['file'],
            'body' => ['required'],
        ]);

        if($request->post_image) {
            $validatedData['post_image'] = $request->file('post_image')->store('images');
        }

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $validatedData['title'],
            'post_image' => $validatedData['post_image'],
            'body' => $validatedData['body']
        ]);

        return redirect()->route('admin.post.show', [
            'id' => $post->id
        ])->with([
            'title' => $post->title,
            'post_image' => $post->post_image,
            'body' => $post->body
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post.details', [
            'title' => $post->title,
            'image' => $post->post_image,
            'body' => $post->body
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.form', [
            'id' => $post->id,
            'title' => $post->title, 
            'body' => $post->body
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Post::where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        $post = Post::find($id);
        return redirect()->route('admin.post.show', ['id' => $post->id])->with([
            'id' => $post->id,
            'title' => $post->title,
            'body' => $post->body
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Post::destroy($id);
        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Post was succesfully deleted!!!');
        return back();
    }
}
