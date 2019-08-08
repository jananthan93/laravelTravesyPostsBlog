<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import Post model
use App\Post;
use App\User;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $posts=Post::all(); 
        $posts=Post::orderBy('id','desc')->paginate(3);
        //  $posts=Post::where('id','2')->get();
        //  $posts=DB::select('SELECT * from posts');
        //  $posts=Post::orderBy('title','desc')->paginate(3);
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
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required'
        ]);
       //create new post
       $post= new Post;
       $post->title=$request->get('title');
       $post->body=$request->get('body');
       $post->user_id= auth()->user()->id;
       $post->save();

       return redirect('/posts')->with('success','Post Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
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
        $post=Post::find($id);
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
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required'
        ]);
       //create new post
       $post= Post::find($id);
       $post->title=$request->get('title');
       $post->body=$request->get('body');
       $post->save();

       return redirect('/posts')->with('success','Post Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post Successfully Deleted!');
    }
}
