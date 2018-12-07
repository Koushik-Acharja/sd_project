<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
  @include('dashboard.include.dashboard-link')
</head>
<body>
<form action="{{ URL::to('trytest') }}"" method="post">
@if(count($requireradio))
  @foreach($requireradio as $d)
<div class="row" style="margin-bottom: 5px;">
  <div class="col-md-12">
    <label>{{ $d->option }}</label>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="{{ $d->id }}" name="{{ $d->id }}" class="custom-control-input">
        <label class="custom-control-label" for="{{ $d->id }}">Yes</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="{{ $d->option }}" name="{{ $d->id }}" class="custom-control-input">
        <label class="custom-control-label" for="{{ $d->option }}">No</label>
      </div>
  </div>
</div>
@endforeach
@endif
</form>
</body>
</html>