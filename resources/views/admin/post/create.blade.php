@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create post</h4>
                  <p class="card-post">Create New post</p>
                </div>
                <div class="card-body">
                  {{ Form::open(['route'=>'post.store','files'=>true]) }}
                  {{-- <form method="post" action="{{route('post.store')}}"> --}}
                    {{-- @csrf --}}
                    @include('admin.post._form')
                   
                    {{ Form::submit('Store post',['class'=>'btn btn-primary pull-right']) }}
                    <!-- <button type="submit" class="btn btn-primary pull-right">Store Category</button> -->
                    <div class="clearfix"></div>
                  <!-- </form> -->
                  {{ Form::close() }}
                </div>
              </div>
            </div>
@endsection       