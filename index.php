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


		<div class="homeitem3col">
			<h3>News and Releases</h3>
			<ul>
			   <li>
			  	<img src="images/new.gif" width="11" height="11">
			  	AJDT 1.6.1 is now available for Eclipse 3.4.  This includes the latest stable build of AspectJ 1.6.3.
			  	See the <a href="whatsnew161/index.html">New and Noteworthy</a> for more details on AJDT 1.6.1 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-162.html">AspectJ 1.6.2 Readme</a> for
			  	more details on what is in AspectJ1.6.3. AJDT 1.6.1 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 29-10-08</span>
			  </li>
			   <li>
			  	AJDT 1.6.0 is now available for Eclipse 3.4.  This includes the latest stable build of AspectJ 1.6.2.
			  	See the <a href="whatsnew16/index.html">New and Noteworthy</a> for more details on AJDT 1.6 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on what was in AspectJ1.6.1. AJDT 1.6 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 03-09-08</span>
			  </li>
			   <li>
			  	AJDT 1.5.3 is now available for Eclipse 3.3.  This includes AspectJ1.6.1.
			  	See the <a href="whatsnew153/index.html">New and Noteworthy</a> for more details on AJDT 1.5.3 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on AspectJ1.6.1. AJDT 1.5.3 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 19-07-08</span>
			  </li>
 			  <li>
			  	AJDT 1.5.3 release candidate 1 is now available for Eclipse 3.3.  This includes AspectJ1.6.1.
			  	See the <a href="whatsnew153/index.html">New and Noteworthy</a> for more details on AJDT 1.5.3 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on AspectJ1.6.1. AJDT 1.5.3rc1 is available as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 15-07-08</span>
			  </li>
 			  <li>
			  	AJDT 1.5.2 is now available for Eclipse 3.3.  This includes AspectJ1.6.0 - there are
			  	more details about AspectJ1.6.0 in <a href="http://www.eclipse.org/aspectj/doc/released/README-160.html">this readme</a>. See the AJDT downloads page for the
			  	.zip download of 1.5.2 or use the release update site for Eclipse 3.3:
			  	http://download.eclipse.org/tools/ajdt/33/update .  The AJDT <b>dev</b> builds for Eclipse 3.3
			  	will now be AJDT 1.5.3 builds incorporating AspectJ 1.6.1 drivers.
				<br><span class="dates">posted 24-04-08</span>
			  </li>
			  
 			  <li>
      			<a href="downloads/">AJDT 1.5.1 for Eclipse 3.3 released (includes AspectJ 1.5.4)</a>
				<br><span class="dates">posted 11-01-08</span>
			  </li>
			  <!--
			  <li>
			  	
      			<a href="downloads/">AJDT 1.5 for Eclipse 3.3 released as part of Europa!</a>
				See the <a href="whatsnew15/">New and Noteworthy</a>
				<br><span class="dates">posted 29-06-07</span>
			  </li>

			  <li>
			  	<a href="downloads/">AJDT 1.4.2 for Eclipse 3.2 released!</a>
				<br><span class="dates">posted 28-06-07</span>
			  </li>

			  <li>
      			<a href="downloads/#milestone">AJDT 1.5RC4 for Eclipse 3.3RC4 released!</a>
				<br><span class="dates">posted 20-06-07</span>
			  </li>
					  			
				<li>AJDT and AspectJ have been promoted to Eclipse Tools
				projects! Read more at
				<a href="http://www.infoq.com/news/aspectj-ajdt-eclipse-tools">InfoQ.</a>
				<br><span class="dates">posted 22-09-06</span><br>
				</li>
				-->
			</ul>
		</div>
				
		<hr class="clearer" />
					 
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
