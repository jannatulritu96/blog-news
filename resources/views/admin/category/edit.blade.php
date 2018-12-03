@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Category</h4>
                  <p class="card-category">Edit {{$category->name}} Category</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('category.update',$category->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" name="name" class="form-control"  value="{{$category->name}}" required checkbox="Enter first name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label><br>
                          <input type="radio" name="status" @if($category->status=='Active') checked @endif value="Active">Active<br>
                          <input type="radio" name="status" @if($category->status=='Inactive') checked @endif value="Inactive">Inactive
                        </div>
                      </div>
                    </div>
                                     
                    <button type="submit" class="btn btn-primary pull-right">Update Category</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
@endsection       