@extends('admin/layouts/master')
@section('content')
<div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Category</h4>
                  <p class="card-category">Create New Category</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('category.store')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" name="name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label><br>
                          <input type="radio" name="status" value="Active" checked>Active<br>
                          <input type="radio" name="status" value="Inactive">Inactive
                        </div>
                      </div>
                    </div>
                                     
                    <button type="submit" class="btn btn-primary pull-right">Store Category</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
@endsection       