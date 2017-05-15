<div class = "datepicker">
  <input type = "text" name = "{!! $name !!}" placeholder="{!! $placeholder !!}" value="{!! $value !!}"  class="form-control form-control-info"  >
</div>
<script>
  $(document).ready(function(){
    $(".datepicker input").datepicker({
      dateFormat: 'dd-mm-yy',
    });
  });
</script>