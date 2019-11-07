$(document).ready(function(){
	
	$('.navlink').on('mouseenter', function() {
		$(this).addClass('highlight');
	});
	$('.navlink').on('mouseleave', function() {
		$(this).removeClass('highlight');
	});	
	
	
	$('.navlink').click(function(){
		$(this).addClass('active');
	});
	

	$("#contactform").validate();
	
});