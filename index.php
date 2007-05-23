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
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Matt Chapman";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings

	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

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
		resources.
		</p>

		  	</td>
          </tr>

        </table>
			 
		<div class="homeitem">
			<h3>New Features</h3>
			<ul>
			  <li>
      			<a href="newfeatures/#ccchanges">Crosscutting Changes</a>
				<br><span class="dates">posted 15-03-07</span>
			  </li>
			  <li>
      			<a href="newfeatures/#ccmaps">Crosscutting Maps and View changes</a>
				<br><span class="dates">posted 12-01-07</span>
			  </li>
			  <li>
      			<a href="newfeatures/#attributes">AspectJ Build Path configuration</a>
				<br><span class="dates">posted 21-12-06</span>
			  </li>
			  <li>
			  	<a href="newfeatures/">See all New Features...</a>
			  </li>
			</ul>
		</div>
				
		<div class="homeitem">
		<h3>Articles</h3>
			<ul>
			  <li>
			    <a href="http://www.infoq.com/articles/aspectj-with-ajdt">
       			InfoQ article: Making AspectJ development easier with AJDT</a>
       			<br><span class="dates">posted 22-11-06</span>
			  </li>

			  <li>
			    <a href="http://www.eclipse.org/articles/Article-Introducing-AJDT/article.html">
       			Eclipse Corner article: Introducing AJDT: The AspectJ Development Tools</a>
       			<br><span class="dates">posted 18-10-06</span>
			  </li>
			  						  
			  <li>
			    <a href="http://www.ibm.com/developerworks/java/library/j-aopwork9/">
       			developerWorks article: New AJDT releases ease AOP development</a>
       			<br><span class="dates">posted 15-08-05</span>
			  </li>

			</ul>
		</div>
		
		<hr class="clearer" />
		
		<div class="homeitem3col">
			<h3>News and Releases</h3>
			<ul>

			  <li>
			  	<img src="images/new.gif" width="11" height="11">
      			<a href="downloads/#milestone">AJDT 1.5RC1 for Eclipse 3.3RC1 released!</a>
				<br><span class="dates">posted 23-05-07</span>
			  </li>

			  <li>
      			<a href="downloads/#milestone">AJDT 1.5M7 for Eclipse 3.3M7 released!</a>
				<br><span class="dates">posted 14-05-07</span>
			  </li>
		
			  <li>
      			<a href="downloads/">AJDT 1.4.1 for Eclipse 3.2 and AJDT 1.5M3 for Eclipse 3.3M3 released!</a>
				See the <a href="whatsnew141/">New and Noteworthy</a>
				<br><span class="dates">posted 23-11-06</span>
			  </li>
			  			
				<li>AJDT and AspectJ have been promoted to Eclipse Tools
				projects! Read more at
				<a href="http://www.infoq.com/news/aspectj-ajdt-eclipse-tools">InfoQ.</a>
				<br><span class="dates">posted 22-09-06</span><br>
				</li>
			</ul>
		</div>
		
		<!--
		<div class="homeitem3col">
			<h3>Recent Events</h3>
			<ul>
			  <li>EclipseCon 2006: This year's conference contained
			  a well attended <a href="http://www.eclipsecon.org/2006/Sub.do?id=522">AOP Track.</a>
			  See the individual sessions for presentation materials, where available. 
			  The <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.ajdt/demos/EclipseCon2006/">AJDT
			  demo projects can be found in CVS. </a> The <a href="http://www.eclipse.org/ajdt/EclipseCon2006/">AspectJ
			  tutorial handouts</a> are also available, which include a link to the plug-in
			  containing the exercise projects.
			  	<br><span class="dates">posted 27-03-06</span><br>		  
			  </li>
			  			  
			  <li>AOSD'06: Check out the <a href="http://www.aosd.net/2006/program/">
			  conference program</a> to see the various AJDT/AspectJ sessions that
			  took place at this year's conference.
			  Presentation materials will be added shortly in some cases.
 			    <br><span class="dates">posted 27-03-06</span><br>				
          	  </li>

			</ul>			
		</div>
		-->

		
		<hr class="clearer" />
		
		<p>
			The AspectJ compiler is developed by the <a href="http://eclipse.org/aspectj">Eclipse AspectJ project</a>
			based on original research conducted at <a href="http://www.parc.xerox.com/research/projects/aspectj/default.html">PARC.</a>			
		</p>
	</div>

$rightcolumn

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
