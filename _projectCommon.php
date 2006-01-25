<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("technology.ajdt");
	$projectInfo->generate_common_nav( $Nav );

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("AJDT Project", 	"/ajdt/");
	$Nav->addCustomNav("Downloads", 	"/ajdt/downloads/", 	"_self", 1);
	$Nav->addCustomNav("New Features", 	"/ajdt/newfeatures/", "_self", 1);
	$Nav->addCustomNav("Demos", 		"/ajdt/demos/", 		"_self", 1);
	$Nav->addCustomNav("FAQ", 			"/ajdt/faq.php", 	"_self", 1);

?>
