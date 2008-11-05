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
	$pageTitle 		= "The Cross References view (XRef)";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse, Cross References, XRef";
	$pageAuthor		= "Matt Chapman, Andrew Eisenberg";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	$rightcolumn = file_get_contents("../rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .1em }
  .tasklist th { padding: .1em }
</STYLE>

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<table border="0" cellpadding="4">
      <tr>
        <td valign="top">



	<p>The Cross References view (also known as "XRef") is an extensible Eclipse tool that can be used to 
       show information relating to Java elements shown in the editor or outline view.
       It is used in AJDT to show AspectJ crosscutting information, such as when a Java method is
       affected by advice.</p>
      
    <p>The latest version of the XRef tool is available in standalone from the update site below, and is the
    version included with the latest development builds of AJDT 1.6 for Eclipse 3.4. Note that
    this standalone version is only for use with other providers - none are included with the tool so it
    is not functional on its own.</p>
   
   		  	</td>
   		  	
      	<td valign="top">&nbsp;</td>
   		<td valign="top"><img border=0 src="xref.png" width="288" height="143" alt="XRef screenshot"></td>
   		  	
      </tr>

    </table>
       
       <div class="homeitem3col">
			<h3>Download</h3>
<ul>
<li>
			<a>XRef 1.6</a>
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/xref/update</code>

</li>

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
