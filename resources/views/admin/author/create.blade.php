@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Author</h4>
                  <p class="card-category">Create New Author</p>
                </div>
                <div class="card-body">
                 {{-- @include('admin.layouts._error_message') --}}
                  
                  {{ Form::open(['route'=>'author.store']) }}
                  {{-- <form method="post" action="{{route('author.store')}}"> --}}
                   {{-- @csrf --}}
                    @include('admin.author._form')
                   
                    {{ Form::submit('Store author',['class'=>'btn btn-primary pull-right'] )}}
                    <!-- <button type="submit" class="btn btn-primary pull-right">Store Category</button> -->
                    <div class="clearfix"></div>
                  <!-- </form> -->
                  {{ Form::close() }}
                </div>
              </div>
            </div>

@endsection       