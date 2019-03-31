@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('event-service') }}">All Service Overviews</a>
	</li>
	<li class="breadcrumb-item active">Add Service Overview</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
        {{ session('success') }}
    </div> 
@endif
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Add Event Services
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/overview-update/'.$overviewedit->id) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	  	<div class="form-group">
	      <label>Service Name</label>
	      <input name="service_name" value="{{ $overviewedit->service }}" class="form-control" rows="5" required>
	    </div>
	    <div class="form-group">
	      <label>Describe Service</label>
	      <textarea name="describe_service" class="form-control" rows="5" required>{{ $overviewedit->describe_service }}</textarea>
	    </div>
	    <div class="form-group">
	      @if($overviewedit->demo_pic)
	      <label>Previous Picture:</label>
	      <br><img width="100" height="auto" src="/thumbnail/{{$overviewedit->demo_pic}}"/>
	      @else
	      @endif
	      <br><br><label>Update Picture</label>
	      <input type="file" name="demo_pic" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" name="sort_order" value="{{ $overviewedit->sort_order }}" class="form-control">
	    </div>
	    <button type="submit" class="btn btn-success">Update</button>
	  </form>
	</div>
</div>
@stop