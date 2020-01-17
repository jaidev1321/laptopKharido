<?php
	$dynamic_content_array = array(
			"jquery" => "<img src='jquery-logo.jpg' /><div class='modal-text'>jQuery is a Javascript library provides API functions for handling events with animation effects.</div>",
			"bootstrap" => "<img src='bootstrap-logo.jpg' /><div class='modal-text'>Bootstrap is a popular framework helps in fast and furious web developement.</div>",
			"responsive" => "<img src='responsive.jpg' /><div class='modal-text'>Web design methodology used to make the page content responsive to the size of various viewport.</div>"
	);
	
	if(!empty($_GET["modal"])) {
		print $dynamic_content_array['jquery'];
	}
?>