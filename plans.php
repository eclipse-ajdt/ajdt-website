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
	#
		
	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<p>
<i>Last updated: 4 November 2005</i>
</p>

<p>
  Here are some details of recent and upcoming AJDT releases. These are plotted on the
  <a href="http://www.eclipse.org/org/processes/master-timeline.php">Eclipse timeline</a>.
  See also the <a href="tasks.html">AJDT Tasks page</a> for some of the features we hope to implement
  in a future release.
</p>

<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >

    <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">&nbsp;AJDT 1.2</font></b></td>
  </tr>

   <tr>
     <td>
        Status: Released 10 June 2005<br>
        Eclipse version: 3.0.2<br>
        Platforms: Windows XP, Linux, Mac OS X

        <p>
          Release themes:
        </p>

        <ul>
           <li>To put in place a solid, heavily unit tested foundation (to meet the quality needs of teams using AspectJ for serious development projects)</li>
           <li>To support incremental compilation and structure model generation as the default  mode of operation</li>        
           <li>To provide a comparable editing experience to that offered by the JDT for Java source </li>
        </ul>

        <p>
           Update: Following the 1.2 release there will be further releases
           for Eclipse 3.0 as necessary, starting with 1.2.1.
        </p>
        
		<br>
    
     </td>
   </tr>


    <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">&nbsp;AJDT 1.3</font></b></td>
  </tr>

   <tr>
     <td>

        Status: Planned for December 2005 (after the AspectJ 5 release, see <a href="http://www.eclipse.org/aspectj/plans.php">AspectJ plans page</a>)<br>
        Eclipse version: 3.1<br>
        Platforms: Windows XP, Linux, Mac OS X

        <p>
          Release themes:
        </p>

        <ul>
           <li>To support AspectJ 5</li>        
           <li>To support and benefit from Eclipse 3.1</li>
           <li>To build on AJDT 1.2 with bug fixes and enhanced function</li>
        </ul>

     
     </td>
   </tr>

  
</table>

		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
