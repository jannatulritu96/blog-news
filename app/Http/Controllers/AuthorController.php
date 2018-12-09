<?php

namespace App\Http\Controllers;

use App\Author;
//use Illuminate\Http\Request;


use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data['authors']=Author::all();
        return view('admin.author.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      // $data['authors'] = Author::where('status','Active')->pluck('name','id');
      /**pluck->use form laravel collective and use for dropdown**/
      return view('admin.author.create');
    }


    public function store(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'phone'=>'required',
    		'description'=>'required',
    		'status'=>'required'
    	]);

        $author = new Author(); 
        $author->name=$request->name;
        $author->phone=$request->phone;
        $author->description=$request->description;
        $author->status=$request->status;

        $author->save();
        session()->flash('success',$request->name.' Author stored successfuly!');
        return redirect()->route('author.index');

    }
 	 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data['author']=Author::findOrFail($id);
        // $data['categories']=Category::where('status','Active')->pluck('name','id');
        return view('admin.author.edit',$data);
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

    	$request->validate([
    		'name'=>'required',
    		'phone'=>'required',
    		'description'=>'required',
    		'status'=>'required'
    	]);
    	
        $author=Author::findOrFail($id);
        $author->name=$request->name;
        $author->phone=$request->phone;
        $author->description=$request->description;
        $author->status=$request->status;

        $author->save();
        session()->flash('success',$request->name.' Author stored successfuly!');
        return redirect()->route('author.index');
    }

    public function destroy($id)
    {
        $author=Author::findOrFail($id);
        // if(file_exists(public_path($author->image)))
        //     {
        //         unlink(public_path($author->image));
        //     }
        $author->delete();
        session()->flash('delete','Author deleted successfully!');
        return redirect()->route('author.index');
    }
}
