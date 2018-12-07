@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">
	  <a href="{{ URL::to('alluser') }}">All Users</a>
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
	  All Users
	</div>
	<div class="card-body">
	  <div class="table-responsive">
	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	      <thead>
	        <tr>
	          <th>Username</th>
	          <th>Email</th>
	          <th>Password</th>
	          <th>Phone</th>
	          <th>Address</th>
	          <th>Action</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@if($alluser)
				@foreach($alluser as $d)
					<tr>
						<td>{{ $d->name }}</td>
						<td>{{ $d->email }}</td>
						<td>{{ $d->password }}</td>
						<td>{{ $d->phone }}</td>
						<td>{{ $d->address }}</td>
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
        <a href="{{ URL::to('/alluser-delete/'.$d->id) }}" class="btn btn-danger">Delete</a>
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