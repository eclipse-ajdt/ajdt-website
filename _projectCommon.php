<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	#$projectInfo = new ProjectInfo("technology.ajdt");
	#$projectInfo->generate_common_nav( $Nav );

	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("AJDT", 	"/ajdt/");
	$Nav->addCustomNav("About", "/ajdt/about.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/ajdt/team.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plans", "/ajdt/plans.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "/ajdt/users.php/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", 	"/ajdt/gettingstarted.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", 	"/ajdt/downloads/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "http://bugs.eclipse.org/bugs", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/ajdt/faq.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/ajdt/demos/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New Features", "/ajdt/newfeatures/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt", "_self", 1);

	$Nav->addNavSeparator("Developers", "/ajdt/developers.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "/ajdt/developers.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CVS", "http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.ajdt/AJDT_src/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing list", "http://dev.eclipse.org/mailman/listinfo/ajdt-dev", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Work tasks", "/ajdt/tasks.php", 	"_self", 1);

?>
