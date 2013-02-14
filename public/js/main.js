$(function() {
	var navigation_links = $('nav a');
	navigation_links.click( function(event) {
		$.scrollTo(
			$(this).attr("href"),{
				duration: 1000,
				offset: { 'left':0, 'top':-0.15*$(window).height() }
			});
	});

	var submit = $('#submit');
	$('contactMe').isHappy({
		fields: {
			'#name':{
				message: 'Might I inquire your name?',
				test: happy.minLength($('#name').val().length, 5)
			},
			'#email': {

				message: 'How am I to reach you without email?',
				test: happy.email
			},
			'#message': {
				message: 'Please tell me more.',
				test: happy.minLength($('#message').val().length, 5)
			}
		},
		submitButton: submit
	});

	submit.click(function (e){
		e.preventDefault();
		if ($(".unhappyMessage:visible", '#contactMe').length === 0) {
			$.post('contactMe', $('#contactMe').serialize())
			.done(function (data){
				$('#alert h4').html(data);
				$('#alert').reveal();
			});
		}
	});

	$('a.print-preview').printPreview();

});





