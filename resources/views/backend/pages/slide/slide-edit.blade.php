@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('event-overview') }}">Slides</a>
	</li>
	<li class="breadcrumb-item active">Edit slide</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
        {{ session('success') }}
    </div> 
@endif
@if ($errors->any())
    <div class="alert alert-danger" style="margin-top: 20px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Add Event Services
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/slide-update/'.$slideedit->id) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	  	<div class="form-group">
	      <label>Title</label>
	      <input name="title" value="{{ $slideedit->title }}" class="form-control" rows="5" required>
	    </div>
	    <div class="form-group">
	      @if($slideedit->picture)
	      <label>Previous Picture:</label>
	      <br><img width="100" height="auto" src="/slide/{{$slideedit->slide_pic}}"/>
	      @else
	      @endif
	      <br><br><label>Update Picture ≥ "1349 X 590"</label>
	      <input type="file" name="slide_pic" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" name="sort_order" value="{{ $slideedit->sort_order }}" class="form-control">
	    </div>
	    <div class="form-group">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" checked name="status">
	        <label class="form-check-label">Active</label>
	      </div>
	    </div>
	    <button type="submit" class="btn btn-success">Update</button>
	  </form>
	</div>
</div>
@stop