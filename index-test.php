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
	
	<div align="center"><h1>$pageTitle</h1></div>
		<table border="0" cellpadding="4">
          <tr>
          	<td valign="top"><img border=0 src="logo.gif" width="164" height="229" alt="AJDT screenshot"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">

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

		  	</td>
          </tr>

        </table>
			 
		<div class="homeitem">
			<h3>New Features</h3>
			<ul>
			  <li>
      			<a href="newfeatures/#compilerM5">AspectJ 5 M5 now included in AJDT 
				development builds</a>
				<span class="dates">posted 17-11-05</span>
			  </li>
			  
			  <li>
			    <a href="newfeatures/#ltw">Support for Load-Time Weaving
				</a>
				<span class="dates">posted 09-11-05</span>
			  </li>
			  
			  <li>
			    <a href="newfeatures/#accessibility">Accessibility review
				</a>
				<span class="dates">posted 31-10-05</span>
			  </li>

			  <li>
			    <a href="newfeatures/#i18n">Internationalization: Help Needed!</a>
				<span class="dates">posted 03-10-05</span>
			  </li>

			  <li>
       			<a href="newfeatures/#comparison">Crosscutting Comparison view
       			to help manage changes to the crosscutting structure
       			of your projects.
       			</a>
       			<span class="dates">posted 26-09-05</span>
			  </li>

			  <li>
       			<a href="newfeatures/#pointcuts">Navigation and source hovers for pointcuts.
       			</a>
       			<span class="dates">posted 06-09-05</span>			  
			  </li>


			</ul>
		</div>
		
		<div class="homeitem">
			<h3>Other News and Events</h3>
			<ul>
			  <li>
			    EclipseCon 2006 proposals: <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=227">AJDT talk</a> and
			    <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=141">AspectJ tutorial</a>
			    <span class="dates">posted 01-12-05</span>
			  </li>
			  
			  <li>
			    <a href="http://www.ibm.com/developerworks/java/library/j-aopwork9/">
       			developerWorks article: New AJDT releases ease AOP development</a>
       			<span class="dates">posted 15-08-05</span>
			  </li>

			  <li>
 				<a href="http://aosd.net/conference">AOSD'06: Join us at the
 				fifth international conference on AOSD!
 				</a>
 				<span class="dates">posted 13-07-05</span>
          	  </li>
          
			  <li>
			    <a href="downloads/">AJDT 1.2 released for Eclipse 3.0</a>
			    See also <a href="whatsnew12/">New and Noteworthy for 1.2</a>
 			  	<span class="dates">posted 10-06-05</span>
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
