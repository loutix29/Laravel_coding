<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at','desc')->paginate(50);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dd($request);
        $this->validate($request, 
        [
            'title' => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'picture'  => 'required',
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

        return redirect ('/posts')->with('success', 'Votre article a été créé !');
           
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
        return view('posts.show')->with('post',$post);

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
        return view('posts.edit')->with('post',$post);
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

    return redirect ('/posts')->with('success', 'Votre article a été modifié !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect ('/posts')->with('success', 'Votre article a été supprimé !');

 
    }
}
