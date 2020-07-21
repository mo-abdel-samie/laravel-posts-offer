<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Auth;

//this liberary if you will use the query stetments
// use DB ;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = post::all();
        // $posts = post::orderBy('title' , 'asc')->get();
        //$posts = post::where('title','post one')->get();
        // $posts = DB::select('SELECT * FROM POST');
        $posts = post::orderBy('created_at' , 'desc')->paginate(5);
        return view('posts.index')-> with('posts',$posts);
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
        $this-> validate ($request,[
            'title' => 'required',
            'body'  => 'required',
            'cover_img' =>  'image|nullable|max:1999',//or max:999 uder 10mb
        ]);

        // handle file uplode
        if($request->hasFile('cover_img')){
            //get fill with the extention
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME );
            //get just file ext
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload imge
            $path = $request->file('cover_img')->storeAs('public/cover_imgs',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimg.jpg';
        }
        // create post
        $post = new post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id   = auth()->user()->id;
        $post->cover_img = $fileNameToStore;
        $post->save();

        return redirect('/posts') -> with('success' , 'post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts.show') -> with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit') -> with('post', $post);
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
            'title' => 'required',
            'body'  => 'required',
        ]);
        // create post
        $post = post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts') -> with('success' , 'post Updeted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post -> delete();
        return redirect('/posts') -> with('success' , 'post Deleted');
    }
}
