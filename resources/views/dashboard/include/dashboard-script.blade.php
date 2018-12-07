	

	<script src="dashboard/js/common.min.js"></script>

    <script src="dashboard/js/scripts.js"></script>
<!-- -->

    <script src="dashboard/js/circle-progress.min.js"></script>

    <!-- Morris Chart -->

    <script src="dashboard/js/chartist.min.js"></script>


    <script src="dashboard/js/chartist-plugin-tooltip.min.js"></script>


    <script src="dashboard/js/dashboard.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" integrity="sha256-tW5LzEC7QjhG0CiAvxlseMTs2qJS7u3DRPauDjFJ3zo=" crossorigin="anonymous"></script>


    <!-- For calender -->
    <script src="dashboard/js/jquery-ui.min.js"></script>
    <script src="dashboard/js/moment.js"></script>
    <script src="dashboard/js/fullcalendar.min.js"></script>
    <script src="dashboard/js/fullcalendar-init.js"></script>
    <!-- For date and time input scripts 
	<script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
-->
<!-- Checkbox Rules Conditions click for hidding submit button -->
<script type="text/javascript">
  $(".abcd").attr('disabled', true);
  $(".abcd").css('opacity', '.2');
  function disabler(obj){
  if(obj.checked==true){
    $(".abcd").attr('disabled', false);
    $(".abcd").css('opacity', '1');
  }
  else{
    $(".abcd").attr('disabled', true);
    $(".abcd").css('opacity', '.2');
  }
}
</script>
<!-- ####Checkbox Rules Conditions click for hidding submit button -->
<!-- Cataring yes no for hidding content -->
<script type="text/javascript">
  /*
$(document).ready(function() {
  function show2(){
  document.getElementById('aggreed').disabled ='false';
}
*/
// By Default Disable radio button
$(".second").attr('disabled', true);
$(".abc").css('opacity', '.2');


//$('.aggreed').prop('indeterminate', true)
/*
$(".abcd").attr('disabled', true);
$(".abcd").css('opacity', '.2');
*/
 // This line is used to lightly hide label for disable radio buttons.
// Disable radio buttons function on Check Disable radio button.
$("form input:radio").change(function() {
if ($(this).val() == "no") {
//$(".second").attr('checked', false);
$(".second").attr('disabled', true);
$(".abc").css('opacity', '.2');
}
// Else Enable radio buttons.
else {
$(".second").attr('disabled', false);
$(".abc").css('opacity', '1');
}
});

/*
$("form input:checkbox").change(function() {
if ($(this).val() == "aggreed") {
$(".abcd").attr('disabled', false);
$(".abcd").css('opacity', '1');
//$("#aggreed").attr("disabled", true);
}
});
*/
</script>
<!-- ####Cataring yes no for hidding content -->
    <script type="text/javascript">
      $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
        });
      });
      $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
  });
    </script>