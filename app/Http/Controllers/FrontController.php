<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	$data['categories']= Category::select(['id','name'])->where('status','Active')->get();
    	
    	$data['recent_posts'] = Post::with(['relCategory'])
    		 ->where('status','published')
    		 ->orderBy('id','Desc')
    		 ->limit(6)
    		  ->get();
    	
    	$data['last2featuredpost'] = Post::with(['relCategory'])
    		->where('status','published')
    		->where('is_featured','Yes')
    		->orderBy('id','Desc')
    		->limit(2)
    		->get();
    	// dd($data);
    		 $data['last3featureds'] = Post::with(['relCategory'])
            ->where('status','Published')
            ->where('is_featured','Yes')
            ->orderBy('id','Desc')
            ->limit(3)
            ->get();

        $data['all_posts'] = Post::with(['relCategory'])
            ->where('status','Published')
            ->limit(4)
            ->orderBy('id','Desc')
            ->get();

        $data['popular_posts'] = Post::where('status','Published')
            ->orderBy('total_hit','DESC')
            ->limit(4)
            ->get();

        $data['all_categories']= Category::select(['id','name'])->where('status','Active')->get(); 

        $data['posts']=Post::with('relCategory')
            // ->where('category_id',$category_id)
            ->where('status','Published')
            ->orderBy('id','DESC')
            ->get();   
          

    	return view('frontend.home',$data);
    }

    public function details($id)
    {
    	 Post::where('id',$id)->increment('total_hit');
    	
        $data['categories']= Category::select(['id','name'])->where('status','Active')->get();
    	
        $data['post']= Post::with(['relCategory','relAuthor'])->findOrFail($id);
    	
        $data['popular_posts'] = Post::where('status','Published')
            ->orderBy('total_hit','DESC')
            ->limit(4)
            ->get();


        $data['last2featureds'] = Post::with(['relCategory'])
            ->where('status','Published')
            ->where('is_featured','Yes')
            ->orderBy('id','Desc')
            ->limit(2)
            ->get();
    	return view ('frontend.details',$data);
    }
    public function category_post($category_id)
    {
       
        $data['categories']= Category::select(['id','name'])->where('status','Active')->get();
        $data['posts']=Post::with('relCategory')
            ->where('category_id',$category_id)
            ->where('status','Published')
            ->orderBy('id','DESC')
            ->get();

        $data['popular_posts'] = Post::where('status','Published')
            ->orderBy('total_hit','DESC')
            ->limit(4)
            ->get();

        $data['last2featureds'] = Post::with(['relCategory'])
            ->where('status','Published')
            ->where('is_featured','Yes')
            ->orderBy('id','Desc')
            ->limit(2)
            ->get();
                
        return view('frontend.category_posts',$data);

    }
    public function search(Request $request)
    {
         $data['posts']=Post::with('relCategory')
            ->where('title','like','%'.$request->search.'%')
            ->where('description','like','%'.$request->search.'%')
            ->where('status','Published')
            ->orderBy('id','DESC')
            ->get();

            $data['categories']= Category::select(['id','name'])->where('status','Active')->get();
        

            return view('frontend.search',$data);

    }
}
