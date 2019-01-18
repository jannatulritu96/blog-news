@extends('admin/layouts/master')
@section('content')
<style>
  .btn{
       padding: 7px 22px !important;
       margin: 0.313rem 3px !important;;
     }
</style>

<div class="col-md-12">
 
	<a href="{{route('post.create')}}" class="btn btn-primary">Add New</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Posts</h4>
                  <p class="card-post">All post here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author Name</th>
                        <th>Short description</th>
                        <th>Published date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </thead>
                      <tbody>
                       
                        @foreach($posts as $post)
                      <tr>
                         <td>{{ $post->id }}</td>
                         <td>{{ $post->title }}</td>
                        {{--  <td>{{ $post->relAuthor->name }}</td> --}}
                         <td>{{ $post->short_description }}</td>
                         <td>{{ $post->published_date }}</td>
                         <td>{{ $post->status }}</td>
                         <td>
                       
                      <a href="{{route('post.edit',$post->id)}}" class="btn btn-success">Edit</a><br>
                      <a href="{{route('post.show',$post->id)}}" class="btn btn-success">Show</a><br>
                    
                  {{ Form::open(['route'=>['post.destroy',$post->id],'method'=>'DELETE']) }}
                  {{ Form::submit('Delete',['class'=>'btn btn-danger  pull-right'],
                   ['onclick'=>"return confirm('Are you confirm to delete?')"]) }}
                          
                    {{ Form::close() }}
                    
                        </td>
                      </tr>
                      @endforeach   
                      </tbody>
                     
                    
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
