<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

    	$data['categories']=Category::all();
    	return view('admin/category/index',$data);
    }

    public function create(){
    	return view('admin/category/create');
    }


    public function store(Request $request){

    	$category= new Category;
    	$category->name=$request->name;
    	$category->status=$request->status;
		$category->save();
		session()->flash('success', 'Categories stored successfuly!');
		return redirect()->route('category.index');
    }

    public function edit($id){
    	$data['category']=Category::findOrFail($id);

    	return view('admin.category/edit',$data);
    } 

     public function update(Request $request, $id){

     	$category= Category::findOrFail($id);
    	$category->name=$request->name;
    	$category->status=$request->status;
		$category->save();
		session()->flash('success',$request->name.' Category stored successfuly!');
		return redirect()->route('category.index');
	}

	public function destroy($id){

		Category::findOrFail($id)->delete();
		session()->flash('delete','Category deleted successfully!');
		return redirect()->route('category.index');
	}
    	
}
