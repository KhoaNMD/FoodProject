<div class = "timepicker">
  <input type = "input" name = "{!! $name !!}" placeholder="{!! $placeholder !!}" value="{!! $value !!}"  class="form-control"  >
</div>
<script>
  $(document).ready(function(){
    $(".timepicker input").timepicker({
      timeFormat: 'HH:mm:ss',
    });
  });
</script>