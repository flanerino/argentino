$(document).ready(function(){
	 $( "#autocomplete" ).autocomplete({
	  source: $("#autocomplete").attr("data-autocomplete"),
	  minLength: 3,
	  select: function(event, ui) {
	  	$('#autocomplete').val(ui.item.value);
	  }	  
	});
});	

