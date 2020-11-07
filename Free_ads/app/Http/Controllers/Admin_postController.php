<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Admin_postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at','desc')->paginate(50);
        return view('admins_post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins_post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'title' => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'picture'  => 'required',
        ]
    );
        $post = new Post;
        $post->title = $request->input('title');
        // $post->category = $request->input('category');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->picture = $request->input('picture');
        $post->user_id= auth()->user()->id;
        $post->save();

        return redirect ('admin/posts')->with('success', "Votre article a été créé en tant qu'administrateur !");
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admins_post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, 
        [
            'title' => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'picture'  => 'required',
        ]
    );
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->price = $request->input('price');
    $post->picture = $request->input('picture');
    $post->save();

    return redirect ('admin/posts')->with('success', "L'annonce a été modifiée en tant qu'administrateur !");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect ('/admin/posts')->with('success', "L'utilisateur été supprimé !");

    }
}
