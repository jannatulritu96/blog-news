@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Category</h4>
                  <p class="card-category">Create New Category</p>
                </div>
                <div class="card-body">
                  {{ Form::open(['route'=>'category.store'])}}
                  <!-- <form method="post" action="{{route('category.store')}}"> -->
                    <!-- @csrf -->
                    @include('admin.category._form')
                   
                    {{Form::submit('Store Category',['class'=>'btn btn-primary pull-right'])}}
                    <!-- <button type="submit" class="btn btn-primary pull-right">Store Category</button> -->
                    <div class="clearfix"></div>
                  <!-- </form> -->
                  {{ Form::close() }}
                </div>
              </div>
            </div>
@endsection       