$(document).ready(function(){
	 $( "#autocomplete" ).autocomplete({
	  source: "socios/autocomplete",
	  minLength: 3,
	  select: function(event, ui) {
	  	$('#autocomplete').val(ui.item.value);
	  }
	  alert("111");
	});
});	

