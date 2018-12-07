@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/rules') }}">All Rules</a>
	</li>
	<li class="breadcrumb-item active">Add Rule</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
        {{ session('success') }}
    </div> 
@endif
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Add Rule
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/rule-store') }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	    <div class="form-group">
	      <label>Describe Rule</label>
	      <textarea name="describe" class="form-control" rows="5" required></textarea>
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" name="sort_order" class="form-control">
	    </div>
	    <div class="form-group">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" checked name="status">
	        <label class="form-check-label">Active</label>
	      </div>
	    </div>
	    <button type="submit" class="btn btn-success">Add</button>
	  </form>
	</div>
</div>
@stop