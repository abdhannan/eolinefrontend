$(document).ready(function() {
	// body...
	$('.nav-left li a').click(function() {
		$('.nav-left li a').removeClass("nyala");
		$(this).addClass("nyala");
	});
});

$(document).ready(function() {
	// body...
	$('[data-toggle="tooltip"]').tooltip();
});