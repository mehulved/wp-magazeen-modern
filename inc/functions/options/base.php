<?php
	// Create an array of options.
	$options = array(
		array(
			"name" => "General Settings",
			"type" => "section"
		),
		array(	
			"name" => "About this Blog",
			"description" => "What is this blog all about?",
			"id" => $pre."_about_blog",
			"std" => "",
			"type" => "textarea",
		),
        array(
            "name" => "Adsense Code",
            "description" => "Place your adsense code here(can be alternatively used to display any image/ad that is 728px by 90px)",
            "id" => $pre."_adsense",
            "std" => "",
            "type" => "textarea",
        )
	);
				
?>
