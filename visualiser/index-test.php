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
	$pageTitle 		= "The Visualiser";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse, Visualiser";
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

	<p>The Visualiser is an extensible Eclipse plugin that can be used to 
       visualize anything that lends itself to a 'bars and stripes' style representation. 
       It began as the Aspect Visualiser, which was a part of AJDT. 
       It was originally created to visualize how aspects were 
       affecting classes in a project. It has since been extracted 
       to become its own plug-in and given extension points in order that 
       other types of information can be visualized.</p>
       
       <p>An on-line demo showing how to use the Visualiser with AJDT is available
        from the 
       <a href="http://www.eclipse.org/ajdt/demos/index.html#VISUALISER-DEMO">AJDT demos page.</a>
       </p>
       
       <p>A tutorial exploring the Visualiser in detail, and describing the process
       of creating a new provider, using the Google provider as an illustration,
       is available from developerWorks:
       <a href="http://www.ibm.com/developerworks/edu/j-dw-java-visual-i.html">Create your own visualisations in Eclipse.</a>
       </p>
       
       <div class="homeitem3col">
			<h3>Download</h3>
		<table class="tasklist" width="80%">
  <tr>
    <th align="left">Visualiser Version</th>
    <td>2.1.0</td>
  </tr>
  <tr>
    <th align="left">Release Date:</th>
    <td>December 14, 2004</td>
  </tr>
  <tr>
    <th align="left">Eclipse Versions:</th>
    <td>3.0 or 3.1</td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/visualiser/visualiser_2.1.0_archive.zip">visualiser_2.1.0_archive.zip</a></td>
  </tr>
</table>
		</div>
		
       <div class="homeitem3col">
       <h3>Providers included with the Visualiser</h3>
       <p>
       <ul>
         <li>A simple file-based provider that reads bar and stripe information from two files.</li> 
		 <li>A resources and markers provider that responds to selections in the workbench 
			and displays files as bars, with associated Eclipse markers as stripes.</li> 
		 <li>An Eclipse JDT search results provider that displays Java classes as bars and the results 
			of the most recent Java search as stripes. </li>
	    </ul>
		
	   </p>
	   </div>
      
       <div class="homeitem3col">
       <h3>Providers available separately</h3>
       
       <table class="tasklist" width="80%">
  <tr>
    <td>Provider:</td><td>Visualize the results of Google searches</td>
  </tr>
  <tr>
    <td>Version:</td><td>1.0.0</td>
  </tr>
  <tr>
    <td>Release Date:</td><td>January 5, 2005</td>
  </tr>
  <tr>
    <td>Eclipse Versions:</td><td>3.0 or 3.1</td>
  </tr>
  <tr>
    <td>Dependencies:</td><td>License key and googleapi.jar from <a href="http://www.google.com/apis/">Google Web APIs</a></td>
  </tr>
  <tr>
    <td>Zip file:</td>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/visualiser/googleprovider_1.0.0_archive.zip">googleprovider_1.0.0_archive.zip</a></td>
  </tr>
</table>

<p></p>

<table class="tasklist" width="80%">
  <tr>
    <td>Provider:</td><td>Visualize the CVS history of files in your workspace</td>
  </tr>
  <tr>
    <td>Version:</td><td>0.1.1</td>
  </tr>
  <tr>
    <td>Release Date:</td><td>February 14, 2005</td>
  </tr>
  <tr>
    <td>Eclipse Versions:</td><td>3.0 or 3.1</td>
  </tr>
  <tr>
    <td>Zip file:</td>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/visualiser/cvsprovider_0.1.1_archive.zip">cvsprovider_0.1.1_archive.zip</a></td>
  </tr>
</table>

	</div>

		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
