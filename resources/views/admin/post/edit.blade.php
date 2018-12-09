@extends('admin.layouts.master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit post</h4>
                  <p class="card-post">Edit <b>{{ $post->title }}</b> post here</p>
                </div>
                <div class="card-body">
                  {{ Form::model($post,['route'=>['post.update',$post->id],'method'=>'put','files'=>true]) }}
                  {{-- {{ Form::model($category,['route'=>['category.update',$category->id],'method'=>'put'])}} --}}
                  {{-- <form method="post" action="{{route('post.store')}}"> --}}
                    {{-- @csrf --}}
                    @include('admin.post._form')
                   
                    {{ Form::submit('Update post',['class'=>'btn btn-primary pull-right']) }}
                    <!-- <button type="submit" class="btn btn-primary pull-right">Store Category</button> -->
                    <div class="clearfix"></div>
                  <!-- </form> -->
                  {{ Form::close() }}
                </div>
              </div>
            </div>
@endsection       