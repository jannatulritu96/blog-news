@extends('admin/layouts/master')
@section('content')
<div class="col-md-12">
  @if(session()->has('success'))
  <div class="alert alert-primary" role="alert">
    {{session('success')}}
  </div>
  @endif
	<a href="{{route('category.create')}}" class="btn btn-primary">Add New</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories</h4>
                  <p class="card-category">All categories here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                    </thead>
                      <tbody>
                       
                        @foreach($categories as $category)
                      <tr>
                         <td>{{$category->id}}</td>
                         <td>{{$category->name}}</td>
                         <td>{{$category->status}}</td>
                         <td>
                       
                      <a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                    
                  {{ Form::open(['route'=>['category.destroy',$category->id],'method'=>'DELETE']) }}
                  
                   {{ Form::submit('Delete',['class'=>'btn btn-danger  pull-right'],
                   ['onclick'=>"return confirm('Are you confirm to delete?')"]) }}
                          
                    {{ Form::close() }}
                    
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
