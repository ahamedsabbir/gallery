@extends('starlight/app')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
        <span class="breadcrumb-item active">Story</span>
      </nav>
	  <form action="{{ url('dashboard/story/insert/function') }}" method="post"  enctype="multipart/form-data">
		  @csrf
		  <div class="card pd-20 pd-sm-40">
			  <h6 class="card-body-title">Top Label Layout</h6>
			  <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="title" placeholder="Enter title">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-8">
					<div class="form-group">
					  <label class="form-control-label">Thumb: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="thumb">
					</div>
				  </div><!-- col-8 -->
				  <div class="col-lg-8">
					<div class="form-group">
						<h6 class="card-body-title">Summernote Editor</h6>
						<p class="mg-b-20 mg-sm-b-30">A super simple WYSIWYG editor on Bootstrap.</p>
						<textarea class="form-control" id="summernote" name="description">Hello, universe!</textarea>
					</div>
				  </div><!-- col-8 -->
				</div><!-- row -->
				<div class="form-layout-footer">
				  <button class="btn btn-info mg-r-5" type="submit" name="submit" value="insert">Category Submit</button>
				</div><!-- form-layout-footer -->
			  </div><!-- form-layout -->
			</div><!-- card -->
		</form>
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<script>
  $(function(){
	'use strict';

	// Inline editor
	var editor = new MediumEditor('.editable');

	// Summernote editor
	$('#summernote').summernote({
	  height: 150,
	  tooltip: false
	})
  });
</script>
@endsection