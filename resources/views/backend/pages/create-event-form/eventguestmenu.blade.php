@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">
	  <a href="#">Event Cuests Plan</a>
	</li>
</ol>
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
      {{ session('success') }}
    </div>
@endif

<div style="float: center;">
<form action="{{ URL::to('eventguestmenu_store') }}" method="post">
	{{ csrf_field() }}
	<div class="input-group mb-3">
	<div class="input-group-prepend">
<span class="input-group-text" id="inputGroup-sizing-default">Event Cuests Plan</span>
	</div>
	<input style="margin-right: 10px;" name="eventguestmenu" type="text" class="form-control col-md-2" aria-describedby="inputGroup-sizing-sm">
	<button type="submit" style="color: white;" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
</div>
</form>
</div>


<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Event Guests Plan
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
	          <th>Event Guests Plan</th>
	          <th>Action</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@if(count($eventguestmenu))
				@foreach($eventguestmenu as $d)
					<tr>
						<td>{{ $d->event_guest_menu }}</td>
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
        <a href="{{ URL::to('/eventguestmenu-delete/'.$d->id) }}" class="btn btn-danger">Delete</a>
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