<?php

$branding = <<<EOBRANDING
<div id="branding">
<h1>AJDT: AspectJ Development Tools</h1>
</div>
EOBRANDING;
$Menu->setProjectBranding($branding);

	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("AJDT", 	"/ajdt/");
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/ajdt/about.php", "_self", 1);
	$Nav->addCustomNav( "About This Project",
    "/projects/project_summary.php?projectid=tools.ajdt", "", 1  );
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/ajdt/team.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plans", "/ajdt/plans.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", 	"/ajdt/gettingstarted.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", 	"/ajdt/downloads/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/ajdt/bugs.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "http://wiki.eclipse.org/FAQ_for_AJDT", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/ajdt/demos/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New Features", "/ajdt/newfeatures/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt", "_self", 1);

	$Nav->addNavSeparator("Developers", "", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "http://wiki.eclipse.org/AJDT_Developer_FAQ", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CVS", "http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ajdt/AJDT_src/?cvsroot=Tools_Project", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing list", "http://dev.eclipse.org/mailman/listinfo/ajdt-dev", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Work tasks", "/ajdt/tasks.php", 	"_self", 1);

?>
