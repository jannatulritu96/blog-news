@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Category</h4>
                  <p class="card-category">Edit {{$category->name}} Category</p>
                </div>
                <div class="card-body">
                {{ Form::model($category,['route'=>['category.update',$category->id],'method'=>'put'])}}
                     
                    <!-- <input type="hidden" name="_method" value="PUT"> -->
                    @include('admin.category._form')
                                     
                    {{Form::submit('Update Category',['class'=>'btn btn-primary pull-right'])}}
                  
                  <div class="clearfix"></div>
                    {{Form::close()}}
                </div>
              </div>
            </div>
@endsection       