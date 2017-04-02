<div class = "timepicker">
  <input type = "input" name = "{!! $name !!}"  placeholder = "Giờ đóng cửa" class="form-control"  >
</div>
<script>
  $(document).ready(function(){
    $(".timepicker input").timepicker({
      timeFormat: 'HH:mm:ss',
    });
  });
</script>