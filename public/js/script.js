$(function(){
	function openCall(){
		window.setTimeout(function(){
			$('.body_inner').addClass('openCall');
		}, 1200);
	}
	function closeCall(){
		$('.body_inner').removeClass('openCall');
	}
	$('.icobutton--unicorn').click(openCall);
	$('.call_close').click(closeCall);
});