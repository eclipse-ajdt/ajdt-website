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
	
<!-- Insert contents here -->
    <h1>
      What's new in AJDT 1.4.1
    </h1>

<p>Here are some of the more interesting or significant changes made to the 
AspectJ Development Tools since the 1.4 release (see the
<a href="http://www.eclipse.org/ajdt/whatsnew14/">What's new in AJDT 1.4</a>
page for the changes in that release).</p>

<table border="1" cellpadding="10" cellspacing="0" width="600">
  <colgroup>
    <col width="20%" valign="top" align="left">
    <col width="80%" valign="top" align="left">
  </colgroup>
  <tbody>

  <tr>
    <td valign="top" align="left"><b>AspectJ 5</b></td>
    <td>
		This release of AJDT incorporates the AspectJ 1.5.3 release.
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Refactoring participant</b></td>
    <td>
			When you rename a Java class, there is now an aspect
			rename participant that will search for and update
			references to that class from any aspects in the same
			project.
         <p><img src="renameparticipant.png" width="442" height="261" alt="Rename type participant"></p>
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Improved Binary Weaving support</b></td>
    <td>
			Prior to this release, if you had a project containing some aspects, and you
			added the output folder to the aspect path of another
			project, the advised locations would show as being advised
			by a binary aspect and navigation to the advice would not be
			possible. Also no "advises" relationships would be shown
			in the project containing the aspects, as the weaving
			took place in the other project. Now AJDT looks for these
			binary aspects in your workspace, and locates the
			corresponding source code. The appropriate relationships
			and markers can then be shown (for both the source and
			target of the advice) in the same way as for source
			weaving within a single project. This functionality works
			when either a class folder or
		    a JAR file is added to the aspect path, so long as
		    the containing project has a source folder containing the
		    code for the relevant aspects.
		<p><img src="binaryweaving.gif" width="450" height="248" alt="Improve support for binary weaving"></p>
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Improved AspectJ Build Properties</b></td>
    <td>

		  The project properties pages for configuring a project's
		  inpath, aspect path, and output jar have been
		  organised into a single <b>AspectJ Build</b> page.
		<p><img src="ajbuildprops.png" width="390" height="179" alt="new AspectJ build properties page"></p>
		<p>
	      There is an <b>AspectJ Tools &gt; Configure AspectJ Build Path...</b>
		  shortcut to this page, available by right-clicking on a project. It
		  is also now possible to right-click on a JAR or ZIP file in a project
		  and select to add it to the in-path or aspect path, or remove it.
		</p>
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Build Automation for AspectJ-enabled plug-ins</b></td>
    <td>
			AJDT now includes
			a replacement pdebuild-ant.jar file to enable the AspectJ
			compiler to be used by automated PDE builds. This can be
			found in the org.eclipse.ajdt.pde.build plug-in, along with
			a README.txt file containing more information.
   </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Bug fixes</b></td>
    <td>

<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.4.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">List of bugs fixed in AJDT 1.4.1.</a>
 
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
