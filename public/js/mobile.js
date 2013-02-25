(function ($){
	$(document).on("pageinit", "#homeMobile", function(){
		$("#contactMobile").validate({
			submitHandler:function(form) {
				$.post('contactMobile', $('#contactMobile').serialize())
				.done(function (data){
					$('#formResponse').popup({overlayTheme: "a"});
					$('#formResponse').popup("open").html(data);
					// $('#formResponse p').html(data);
				});
			}
		});
	});

	$(document).on("mobileinit", function(){
		$.mobile.defaultPageTransition = "slide";
	});

})(jQuery);




