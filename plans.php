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
	$pageTitle 		= "AJDT Plans";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
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
	
	<h1>Plans</h1>

<p>
<i>Last updated: 13 July 2007</i>
</p>

<p>
  Here are some details of recent and upcoming AJDT releases.
  The major releases are plotted on the
  <a href="http://www.eclipse.org/projects/timeline/">Eclipse timeline</a>.
  
  See also the <a href="tasks.php">AJDT Tasks page</a> for some of the features we hope to implement
  in a future release.
</p>

<div class="homeitem3col">
	<h3>Future releases: AJDT 1.6.1 for Eclipse 3.4</h3>
		<p>
		AJDT 1.6.1 will ship in November, 2008.<br>
		</p>

</div>

<div class="homeitem3col">
	<h3>AJDT 1.6.0</h3>
		<p>
		Status: 1.6.0 released 03 September 2008<br>
        Eclipse version: 3.4<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>

		<p>Incorporates AspectJ1.6.0</p>
</div>

<div class="homeitem3col">
	<h3>AJDT 1.5.3</h3>
		<p>
		Status: 1.5.3 released 19 July 2008<br>
        Eclipse version: 3.3<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>

		<p>Incorporates AspectJ1.6.0</p>
</div>

<div class="homeitem3col">
	<h3>AJDT 1.5.2</h3>
		<p>
		Status: 1.5.2 released 24 April 2008<br>
        Eclipse version: 3.3<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>

		<p>Incorporates AspectJ1.6.0</p>
</div>

<div class="homeitem3col">
	<h3>AJDT 1.4</h3>
		<p>
		Status: 1.4 released 30 June 2006, 1.4.1 released 23 November 2006, 1.4.2 released 28 June 2007<br>
        Eclipse version: 3.2<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>
		
		<p>
          Release themes:
        </p>

        <ul>
           <li>Scaling up: Improve support for working with large workspaces, and
           with projects containing many aspects.</li>
           <li>Improve tracing capabilities to better diagnose problems</li>
           <li>Incorporate latest AspectJ release</li>        
           <li>To support and benefit from Eclipse 3.2</li>
        </ul>
</div>

<div class="homeitem3col">
	<h3>AJDT 1.3</h3>
		<p>
		Status: 1.3 released 20 December 2005, 1.3.1 released 10 April 2006,
		1.3.2 released 4 August 2006, 1.3.3 released 23 November 2006<br>
        Eclipse version: 3.1<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>
		
        <p>
          Release themes:
        </p>

        <ul>
           <li>To support AspectJ 5</li>        
           <li>To support and benefit from Eclipse 3.1</li>
           <li>To build on AJDT 1.2 with bug fixes and enhanced function</li>
        </ul>
        
</div>

<div class="homeitem3col">
	<h3>AJDT 1.2</h3>
		<p>
        Status: 1.2 released 10 June 2005, 1.2.1 released 20 December 2005, 1.2.2 released 2 May 2006,
        1.2.3 released 23 November 2006<br>
        Eclipse version: 3.0.2<br>
        Platforms: Windows XP, Linux, Mac OS X
		</p>
		
        <p>
          Release themes:
        </p>

        <ul>
           <li>To put in place a solid, heavily unit tested foundation (to meet the quality needs of teams using AspectJ for serious development projects)</li>
           <li>To support incremental compilation and structure model generation as the default  mode of operation</li>        
           <li>To provide a comparable editing experience to that offered by the JDT for Java source </li>
        </ul>
            
</div>

		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
