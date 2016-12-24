@if(session()->has('flash_message'))

  <script type="text/javascript">
    
    swal({
  		title: "Error!",
  		text: "{{session(flash_message)}}",
  		type: "info",
  		timer: 100,
  		showConfirmationButton:false
	});
  </script>
@endif