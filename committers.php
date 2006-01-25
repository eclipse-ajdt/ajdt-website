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
	$pageTitle 		= "AJDT Commiters and Contributors";
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
	
	<p> Below is the list of core committers for the AJDT project.
	See also the list of <a href="contributors.php">contributors.</a>
	</p>

	<div class="homeitem">
		<h3>Committers</h3>
			<table cellpadding="2">
<tr>
        <td>Matt Chapman (project lead)
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Andy Clement
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Adrian Colyer
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Helen Hawkins
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Sian January
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>
		<a href="http://kerstens.org/mik">Mik Kersten</a>
	    </td>
        <td>
          PARC
	    </td>
      </tr>
      <tr>
        <td>Julie Waterhouse
	    </td>
        <td>
          IBM Canada
	    </td>
      </tr>			
			</table>
	</div>
	
		<hr class="clearer" />
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
