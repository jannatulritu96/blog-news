@extends('admin/layouts/master')
@section('content')
<style>
  .btn{
    padding: 9px 21px !important;
    margin: 0.313rem 1px !important;
  }
</style>

<div class="col-md-12">
  
	<a href="{{ route('author.create') }}" class="btn btn-primary">Add New</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Author</h4>
                  <p class="card-category">All author here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                      
                      <tbody>
                       @foreach($authors as $author)
                        <tr>
                         <td>{{ $author->id }}</td>
                         <td>{{ $author->name }}</td>
                         <td>{{ $author->phone }}</td>
                         <td>
                           
                             <div class="col-md-8">
                               {{ $author->description }}
                             </div>
                          
                         </td>
                         <td>{{ $author->status }}</td>
                         <td>
                           <a href="{{ route('author.edit',$author->id) }}" class="btn btn-success">Edit</a>
                    
                           {{ Form::open(['route'=>['author.destroy',$author->id],'method'=>'DELETE']) }}
                  
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
