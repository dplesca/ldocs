$(function(){
	$("pre").addClass("prettyprint");
	prettyPrint();
	$(".docs-content").waypoint(
		function(a,b){
			$(".to_top").toggleClass("hidden",b==="up");
		},
		{offset:"-150%"}
	);
	setTimeout(function(){
		$('.alert').removeClass('hidden');
	}, 2000);
	
});