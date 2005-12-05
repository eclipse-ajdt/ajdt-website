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
	$pageTitle 		= "AJDT Contributors";
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
	
	<p> We are grateful to the following for their contributions to the AJDT project:<br>
	</p>

	<div class="homeitem">
		<h3>Core Contributors</h3>
			<table cellpadding="2">
<tr>
        <td>Matt Chapman
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

	<div class="homeitem">
		<h3>Other Contributors</h3>
			<table cellpadding="2">
<tr>
        <td>Ben Dalziel
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Luzius Meisser
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Ian McGrath
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>George Harley
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Matthew Webster
	    </td>
        <td>
          IBM UK Ltd
	    </td>
      </tr>
      <tr>
        <td>Rory Slaney
	    </td>
        <td>
          IBM UK Ltd (<a href="http://www.ibm.com/extremeblue">Extreme Blue</a> team member)
	    </td>
      </tr>
      <tr>
        <td>Jonathan Davies
	    </td>
        <td>
          IBM UK Ltd (<a href="http://www.ibm.com/extremeblue">Extreme Blue</a> team member)
	    </td>
      </tr>
      <tr>
        <td>Nick Huismans
	    </td>
        <td>
          IBM UK Ltd (<a href="http://www.ibm.com/extremeblue">Extreme Blue</a> team member)
	    </td>
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
