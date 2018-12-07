@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/rules') }}">All Rules</a>
	</li>
	<li class="breadcrumb-item active">Edit Rule</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Edit Rule
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/rule-update/'.$uprule->id) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	    <div class="form-group">
	      <label>Describe Rule</label>
	      <textarea name="describe" value="" class="form-control" rows="5" required>{{ $uprule->describe }}</textarea>
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" value="{{ $uprule->sort_order }}" name="sort_order" class="form-control">
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