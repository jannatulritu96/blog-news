<style>
    .fileOverride{
        position: static!important;
        opacity: 1!important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('category_id', 'Category',['class'=>'bmd-label-floating']) }}
            {{ Form::select('category_id',$categories,null,['class'=>'form-control','required','placeholder'=>'Select Category']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('author_id', 'Author',['class'=>'bmd-label-floating']) }}
            {{ Form::select('author_id',$authors,null,['class'=>'form-control','required','placeholder'=>'Select Author']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('title', 'Title',['class'=>'bmd-label-floating']) }}
            {{ Form::text('title',null,['class'=>'form-control','required']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description',['class'=>'bmd-label-floating']) }}
            {{ Form::textarea('short_description',null,['class'=>'form-control','cols'=>10,'required']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('description', 'Description',['class'=>'bmd-label-floating']) }}
            {{ Form::textarea('description',null,['class'=>'form-control','cols'=>10,'required']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('published_date', 'Published Date',['class'=>'bmd-label-floating']) }}
            {{ Form::date('published_date',null,['class'=>'form-control','required']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('image', 'Image',['class'=>'bmd-label-floating']) }}
            <br>
            <?php $image_required= 'Required'; ?>
            @if(isset($post))
                <?php $image_required= null; ?>
            @endif
            {{ Form::file('image',[$image_required,'class'=>'fileOverride']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('is_featured', 'Is Featured',['class'=>'bmd-label-floating']) }}
            <br>
            {{ Form::checkbox('is_featured','Yes') }} Yes
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('status', 'Status',['class'=>'bmd-label-floating']) }}
            <br>
            {{ Form::radio('status','Published',null,['checked']) }} Published
            {{ Form::radio('status','Unpublished',null) }} Unpublished
        </div>
    </div>
</div>