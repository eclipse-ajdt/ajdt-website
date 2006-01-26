<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting started with AJDT";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse, Contributors";
	$pageAuthor		= "Matt Chapman";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>
	
	<p>Welcome to this gentle introduction to AJDT, the AspectJ Development
	Tools. It aims to serve as a guided reference to the other many resources
	available, and also includes a few tips along the way.
	</p>
	
	<p><em>What is it?</em> Essentially, AJDT enables you to write AspectJ
	code in Eclipse. You can read a bit more about this on the
	<a href="description.php">description page.</a> If phrases like
	"modularization of crosscutting concerns" sound a bit mysterious to you,
	or you just want to learn more about the AspectJ language itself, then
	you should head over to the <a href="/aspectj/">AspectJ project.</a> A
	good place to start there is the 
	<a href="/aspectj/doc/released/progguide/index.html">Programming Guide</a> on
	the <a href="/aspectj/docs.php">Documentation page.</a>
	</p>
	
	<p><em>What does it look like?</em> You'll see the odd screenshot dotted
	about here and there, but it's better to see AJDT in action by
	viewing some of the <a href="demos/">animated demos</a>.
	</p>
	
	<p><em>How can I get it?</em> So you've read the blurb and watched the
	demos. Now would be the perfect time to try it out for yourself!
	If you're not already running Eclipse, <a href="/downloads/">install that
	first</a> (go for the latest stable release). Then visit the
	<a href="downloads/">AJDT downloads</a> page and pick the most recent
	stable release that matches the version of Eclipse you have. It's vital
	you get a matching versions, so check the information carefully. You
	can install AJDT either by getting the zip file and unzipping it into
	your eclipse directory, or (and probably easier) you can use the URL
	listed on the download page in the Eclipse Update Manager. You can
	access this via <code>Help &gt; Software Updates &gt; Find And Install...</code>
	</p>
	
	<p><em>How do I use it?</em>
	</p>

	<p><em>What else should I know?</em>
	</p>
	
	
		<hr class="clearer" />
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
