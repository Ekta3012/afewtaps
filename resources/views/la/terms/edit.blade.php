@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/terms') }}">Term</a> :
@endsection
@section("contentheader_description", $term->$view_col)
@section("section", "Terms")
@section("section_url", url(config('laraadmin.adminRoute') . '/terms'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Terms Edit : ".$term->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($term, ['route' => [config('laraadmin.adminRoute') . '.terms.update', $term->id ], 'method'=>'PUT', 'id' => 'term-edit-form']) !!}
					@la_input($module, 'terms',null,null,"form-control summernote")
					
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/terms') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
@push('styles')
 <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
 <link href="{{ URL::asset('css/dist/summernote.css') }}" rel="stylesheet">  
@endpush
@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script src="{{ asset('/assets/css/dist/summernote.min.js') }}"></script>
<script>
$(function () {
	$("#term-edit-form").validate({
		
	});
});
$(document).ready(function() {
    $('.summernote').summernote({
      height:300,
    });
});
</script>
@endpush
