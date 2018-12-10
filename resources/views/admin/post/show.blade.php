@extends('admin.layouts.master')
@section('content')
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">
                  	{{-- @foreach($categories as $category) 
						@if($category->id == $post->category_id)
							{{ $category->name }}
						@endif	
                  	@endforeach --}}
                  </h4>
                  <p class="card-category">{{ 
                  	$post->title }}</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                       <tbody>
                        <tr>
                          <td>Is Featured</td>
                          <td class="text-center">{{ $post->is_featured }}</td>
                         </tr>
                         <tr>
                          <td>Category Name</td>
                          <td class="text-center">
                            {{-- @foreach($categories as $category)
                           @if( $post->category_id==$category->id )
                            {{ $category->name }}
                           @endif
                          @endforeach  --}}
                          {{ $post->relCategory->name }}
                          </td>
                         </tr>
                         <tr>
                          <td>Author Name</td>
                          <td class="text-center">
                            {{-- @foreach($authors as $author)
                           @if( $post->author_id==$author->id )
                            {{ $post->relAuthor->name }}
                           @endif
                          @endforeach  --}}
                          {{-- {{ $post->relAuthor->name }} --}}
                          </td>
                         </tr>
                         <tr>
                          <td>Total hit</td>
                          <td class="text-center">{{ $post->total_hit }}</td>
                         </tr>
                         <tr>
                          <td>Published date</td>
                          <td class="text-center">{{ $post->published_date }}</td>
                         </tr>
                         <tr>
                          <td>Status</td>
                          <td class="text-center">{{ $post->status }}</td>
                         </tr>
                      
                       </tbody>
                    </table>
                  </div>
                  <div class="row">
					<div class="col-md-12">
						<img src="{{ asset($post->image) }}" width="100%">
						<p>
							{{ $post->description }}
						</p>
					</div>
					<div class="card-footer">
					
						<a href="{{ route('post.index') }}" class="btn btn-info">Back</a>
					</div>
                  </div>	
                </div>
              </div>
            </div>
@endsection       