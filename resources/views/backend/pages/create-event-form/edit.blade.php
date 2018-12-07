@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/rules') }}">Event Requirements</a>
	</li>
	<li class="breadcrumb-item active">Edit Requirement</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Edit Requirement
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/requirements-update/'.$uprequirement->id) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	    <div class="form-group">
	      <label>Describe Rule</label>
	      <textarea name="option" value="" class="form-control" rows="5" required>{{ $uprequirement->option }}</textarea>
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" value="{{ $uprequirement->sort_order }}" name="sort_order" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Option Type</label>
	      <select  id="type" class="form-control drop" name="type">
			<option value="CheckBox">CheckBox</option>
			<option value="RadioButton">RadioButton</option>
		  </select>
	    </div>
	    <button type="submit" class="btn btn-success">Update</button>
	  </form>
	</div>
</div>
@stop