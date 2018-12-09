   <div class="row">
    <div class="col-md-10">
     <div class="form-group">
  	 {{ Form::label('name', 'Author name',['class'=>'bmd-label-floating']) }}
                          <!-- <input type="" name="name" class="form-control" required> -->
     {{ Form::text('name',null,['class' => 'form-control','required']) }}
     </div>
    </div>

    <div class="col-md-10">
     <div class="form-group">
     {{ Form::label('phone', 'Author phone',['class'=>'bmd-label-floating']) }}
     {{ Form::text('phone',null,['class' => 'form-control','required']) }}
     </div>
    </div>

    <div class="col-md-10">
     <div class="form-group">
     {{ Form::label('description', 'Author description',['class'=>'bmd-label-floating']) }}
     {{ Form::textarea('description',null,['class' => 'form-control','required']) }}
     </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">

      {{ Form::label('status','Status',['class'=>'bmd-label-floating']) }}<br>
      {{ Form::radio('status', 'Active', null,['checked']) }} Active
      {{ Form::radio('status', 'Inactive', null) }} Inactive
                         
      </div>
     </div>
   </div>