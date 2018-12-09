<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
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
        $data['posts']=Post::all();
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['categories'] = Category::where('status','Active')->pluck('name','id');
      /**pluck->use form laravel collective and use for dropdown**/
      return view('admin.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post(); 
        $post->category_id=$request->category_id;
        $post->title=$request->title;
        $post->short_description=$request->short_description;
        $post->description=$request->description;
        $post->published_date=$request->published_date;
        $post->status=$request->status;
        $post->is_featured=$request->is_featured;

        $image=$request->file('image');
        $image ->move('/image/post',$image->getClientOriginalName());
        $post->image='/image/post/'.$image->getClientOriginalName();


        $post->save();
        session()->flash('success',$request->title.' Post stored successfuly!');
        return redirect()->route('post.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['post']= Post::findOrFail($id);
        $data['categories']= Category::all();
        return view ('admin.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post']=Post::findOrFail($id);
        $data['categories']=Category::where('status','Active')->pluck('name','id');
        return view('admin.post.edit',$data);
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
       
        $post=Post::findOrFail($id);
        $post->category_id=$request->category_id;
        $post->title=$request->title;
        $post->short_description=$request->short_description;
        $post->description=$request->description; 
        $post->published_date=$request->published_date;
        $post->status=$request->status;
        if(isset($request->is_featured))
        {
            $post->is_featured=$request->is_featured;

        }

        if($request->hasFile('image')) {

            if(file_exists(public_path($post->image)))
            {
                unlink(public_path($post->image));
            }
         
        $image=$request->file('image');
        $image ->move('images/post',$image->getClientOriginalName());
        $post->image='public/images/post/'.$image->getClientOriginalName();

        }

        $post->save();
        session()->flash('success',$request->title.'Post updated successfuly!');
        return redirect()->route('post.index');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        if(file_exists(public_path($post->image)))
            {
                unlink(public_path($post->image));
            }
        $post->delete();
        session()->flash('delete','Post deleted successfully!');
        return redirect()->route('post.index');
    }
}
