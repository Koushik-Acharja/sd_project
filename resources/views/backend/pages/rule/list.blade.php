@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">
	  <a href="#">All Rules</a>
	</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
      {{ session('success') }}
    </div>
@endif
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  All Rules
	  <span><a style="float: right;" href="{{ URL::to('/rule-add') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></span>

	</div>
<style type="text/css">
	th[colspan="2"] {
	text-align: center;
	}
</style>
	<div class="card-body">
	  <div class="table-responsive">
	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	      <thead>
	        <tr>
	          <th>Rules</th>
	          <th>Sort Order</th>
	          <th>Status</th>
	          <th colspan="2">Action</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@if(count($data))
				@foreach($data as $d)
					<tr>
						<td>{{ $d->describe }}</td>
						<td>{{ $d->sort_order }}</td>
						<td>{{ ($d->status)==1 ? 'Active' : 'Inactive' }}</td>
						<td><a class="btn btn-secondary btn-sm" href="{{ URL::to('/rule-edit/'.$d->id) }}">Edit</a></td>
						<td><button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm">Delete</button></td>
					</tr>
				@endforeach
				<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ URL::to('/rule-delete/'.$d->id) }}" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
	      	@endif
	      </tbody>
	    </table>
	  </div>
	</div>
</div>

@stop