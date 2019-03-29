@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Overview</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
      {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger" style="margin-top: 20px">
      {{ session('error') }}
    </div>
@endif
<div style="float: center;">
<form action="{{ URL::to('service-store') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-default">Service Name</span>
		</div>
		<input name="service_name" type="text" class="form-control col-md-2" aria-describedby="inputGroup-sizing-sm">
		<div class="input-group-prepend" style="padding-left: 25px">
			<input type="file" name="demo_icon" class="form-control-sm">
		</div>
		<div class="input-group-prepend" style="padding-left: 25px">
			<span class="input-group-text" id="inputGroup-sizing-default">Sort Order</span>
		</div>
		<input type="number" class="form-control col-md-2" name="sort_order" class="form-control">
		<button type="submit" style="color: white; margin-left: 15px;" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
	</div>	
</form>
</div>
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  All Services
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
	          <th>Services</th>
	          <th>Icons</th>
	          <th>Sort Order</th>
	          <th>Action</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@if($data)
				@foreach($data as $d)
					<tr>
						<td>{{ $d->service }}</td>
						<td><img width="55" height="auto" src="/icon/{{$d->demo_icon}}"/></td>
						<td>{{ $d->sort_order }}</td>
						<td><button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm">Delete</button></td>
					</tr>
				
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
        <a href="{{ URL::to('/service-delete/'.$d->id) }}" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>@endforeach
	      	@endif
	      </tbody>
	    </table>
	  </div>
	</div>
</div>
@stop