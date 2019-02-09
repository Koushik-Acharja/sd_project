@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/rules') }}">All Event Services</a>
	</li>
	<li class="breadcrumb-item active">Add Event Services</li>
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
	  <form method="post" action="{{ URL::to('service-store') }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	  	<div class="form-group">
	      <label>Service Name</label>
	      <input name="service_name" class="form-control" rows="5" required>
	    </div>
	    <div class="form-group">
	      <label>Describe Service</label>
	      <textarea name="describe_service" class="form-control" rows="5" required></textarea>
	    </div>
	    <div class="form-group">
	      <label>Demo Picture</label>
	      <input type="file" name="demo_pic" class="form-control" required>
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" name="sort_order" class="form-control">
	    </div>
	    <button type="submit" class="btn btn-success">Add</button>
	  </form>
	</div>
</div>
@stop