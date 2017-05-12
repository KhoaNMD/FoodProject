
@if(Session::has('message'))
  <div class="alert alert-{!! Session::get('color') !!} ">
    <ul>
      {!! Session::get('message') !!}
    </ul>
  </div>
@endif

