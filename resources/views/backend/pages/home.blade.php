@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('admin') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Overview</li>
</ol>

<h1>Dashboard</h1>
<hr>
<p>This is dashboard page.</p>
@stop