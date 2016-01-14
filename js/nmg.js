$( document ).ready(function() {

	$("#rru-quote").hide()
	$("#uw-quote").hide()
	$("#sidney-quote").hide()
	$("#smc-quote").hide()
	$("#vbn-quote").hide()
	$("#urban-mortgage-quote").hide()


	$('body').bind('touchstart', function() {});

});


$( "#rru" ).hover( function(){
	$("#rru-quote").fadeIn();},
	function(){$("#rru-quote").fadeOut();
});
$( "#uw" ).hover( function(){
	$("#uw-quote").fadeIn();},
	function(){$("#uw-quote").fadeOut();
});
$( "#sidney" ).hover( function(){
	$("#sidney-quote").fadeIn();},
	function(){$("#sidney-quote").fadeOut();
});
$( "#social" ).hover( function(){
		$("#smc-quote").fadeIn();},
	function(){$("#smc-quote").fadeOut();
	});
$( "#vbn" ).hover( function(){
		$("#vbn-quote").fadeIn();},
	function(){$("#vbn-quote").fadeOut();
});
$( "#urban-mortgage" ).hover( function(){
		$("#urban-mortgage-quote").fadeIn();},
	function(){$("#urban-mortgage-quote").fadeOut();
});
