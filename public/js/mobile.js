$(document).ready(function(){
	$("#contactMobile").validate();

	submit.click(function (e){
		e.preventDefault();
		if ($(".error:visible", '#contactMobile').length === 0) {
			$.get('contactMobile', $('#contactMobile').serialize())
			.done(function (data){
				$('#alert h4').html(data);
				$('#alert').reveal();
			});
		}
	});
});





