<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("AJDT Technology Project", 	"/ajdt/");
	$Nav->addCustomNav("Downloads", 	"downloads/", 	"_self", 2);
	$Nav->addCustomNav("New Features", 	"newfeatures/", "_self", 2);
	$Nav->addCustomNav("Demos", 		"demos/", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 			"faq.html", 	"_self", 2);

?>
