@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/alladmin') }}">All Admin</a>
	</li>
	<li class="breadcrumb-item active">Edit Admin</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Edit Admin
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('/alladmin-update/'.$alladminrewrite->id) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	    <div class="form-group">
	      <label>Username</label>
	      <input type="text" name="name" value="{{ $alladminrewrite->name }}" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Email</label>
	      <input type="email" name="email" value="{{ $alladminrewrite->email }}" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Password</label>
	      <input type="password" name="password" value="{{ $alladminrewrite->password }}" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Phone</label>
	      <input type="number" name="phone" value="{{ $alladminrewrite->phone }}" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Address</label>
	      <input name="address" value="{{ $alladminrewrite->address }}" class="form-control" rows="5" required>
	    </div>
	    <button type="submit" class="btn btn-success">Update</button>
	  </form>
	</div>
</div>
@stop