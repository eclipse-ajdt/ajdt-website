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
	$pageTitle 		= "AspectJ Development Tools (AJDT)";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development";
	$pageAuthor		= "Matt Chapman";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
		Some aspects of system implementation, such as logging, error
		handling, standards enforcement and feature variations are
		notoriously difficult to implement in a modular way. The result
		is that code is tangled across a system and leads to quality,
		productivity and maintenance problems. Aspect Oriented Software
		Development enables the clean modularization of these crosscutting
		concerns. The AspectJ Development Tools (AJDT) project provides
		Eclipse platform based tool support for AOSD with AspectJ. Our goal
		is to deliver a user experience that is consistent with the Java
		Development Tools (JDT) when working with AspectJ projects and
		resources. This will be accomplished by developing an integration
		layer between the AspectJ Development Environment Framework and
		Eclipse/JDT extension points.
		</p>
		 
		<div class="homeitem">
			<h3>What's New</h3>
			<ul>
			  <li>
      			<b>November 17, 2005: AspectJ 5 M5:</b>
				The latest AspectJ milestone release is now included in AJDT 
				development builds. Please see the
				<a href="newfeatures/#compilerM5">New Features page</a>
				for more details.
			  </li>
			  
			  <li>
			    <b>November 9, 2005: Load-time Weaving:</b>
				AJDT 1.2.1 and 1.3 have added support for load-time weaving your applications.
				Please see the <a href="newfeatures/#ltw">New Features page</a>
				for more details.
			  </li>
			  
			  <li>
			    <b>October 31, 2005: Accessibility:</b>
				AJDT 1.3 has undergone a full accessibility review in anticipation of the upcoming release. 
				Please see the <a href="newfeatures/#accessibility">New Features page</a>
				for more details.
			  </li>

			  <li>
			    <b>October 11, 2005: AspectJ 5 M4:</b>
				The latest AspectJ milestone release is now included in AJDT development
				builds. Please see the <a href="newfeatures/#compilerM4">New Features page</a>
				for more details.
			  </li>

			  <li>
			    <b>October 3, 2005: Internationalization:</b>
				Recently we have been focusing on improving support for message translations in AJDT. But we need
				your help with this! Please see the <a href="newfeatures/#i18n">New Features page</a>
				for more details.
			  </li>

			  <li>
			    <b>September 26, 2005: Another new feature:</b>
       			The <a href="newfeatures/#comparison">Crosscutting Comparison view</a>
       			and related functionality helps you manage changes to the crosscutting structure
       			of your project.
			  </li>

			  <li>
			    <b>September 20, 2005: This week's new AJDT feature:</b>
       			The <a href="newfeatures/#newaspect">New Aspect wizard</a> now more
       			closely matches the appearance and
       			functionality of the New Class wizard, plus it can generate stubs
       			for pointcuts inherited from an abstract aspect. The version of the
       			AspectJ compiler included in AJDT has also been updated.
			  </li>

			  <li>
			    <b>September 12, 2005: More new features in AJDT:</b>
       			The <a href="newfeatures/">New Features</a> page has been updated
       			to cover the filtering capability added to the Cross References view. The version of the
       			AspectJ compiler included in AJDT has also been updated to the latest development build.
			  </li>

			  <li>
       			<b>September 6, 2005: New features in AJDT:</b>      
       			Find out more about the latest new features added to AJDT
       			development builds from the <a href="newfeatures/#pointcuts">New Features</a> page,
       			starting this week with support for navigation and source hovers for
       			pointcuts.			  
			  </li>

			  <li>
			    <b>August 15, 2005: AJDT article published on developerWorks:</b> 
       			<a target="_top" href="http://www.ibm.com/developerworks/java/library/j-aopwork9/">
       			New AJDT releases ease AOP development</a>
			  </li>

			  <li>
			    <b>June 10, 2005: AJDT 1.2 released for Eclipse 3.0.</b> 
       			The stable release is now here! See the <a href="whatsnew12/">New and Noteworthy for 1.2</a>
       			for a summary of the changes since version 1.1. The release is available from the update site
       			and as a zip file. See the <a href="downloads/">download page</a> for more information.</td>
			  </li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>New to Eclipse?</h6>
			<ul>
				<li><a href="#">Community Resources</a></li>
				<li><a href="#">News Corner</a></li>
				<li><a href="#">Newsgroup</a></li>
				<li><a href="#">Registration</a></li>
				<li><a href="#">Downloads</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Eclipse Roadmap</a></li>
				<li><a href="#">Document</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="#">Business Intelligence and Reporting</a></li>
				<li><a href="#">Platform</a></li>
				<li><a href="#">Technology Project</a></li>
				<li><a href="#">Test &amp; Performance Tools Platform</a></li>
				<li><a href="#">Web Tools</a></li>
				<li><a href="#">Project Proposals</a></li>
				<li><img src="images/jdj.jpg" width="40" height="42" class="inset" /><a href="#">Cast your vote for Eclipse</a></li>
				<li><a href="#">Eclipse wins Jolt Award</a><br /><img src="images/jolt.jpg" width="100" height="68" /></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
