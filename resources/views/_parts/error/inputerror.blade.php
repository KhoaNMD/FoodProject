@if (count($errors) > 0)
  <div class="alert alert-danger ">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(Session::has('message'))
  <div class="alert alert-{!! Session::get('color') !!} ">
    <ul>
      {!! Session::get('message') !!}
    </ul>
  </div>
@endif

