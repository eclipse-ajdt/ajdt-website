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

<!-- Insert contents here -->
    <h1>
      What's new in AJDT 1.3.1
    </h1>

<p>The release of the AspectJ Development Tools incorporates the latest AspectJ 1.5.1
release, and includes a number of bug fixes since the AJDT 1.3 release
(see the <a href="http://www.eclipse.org/ajdt/whatsnew12/">What's new in AJDT 1.3</a>
page for the changes in that release).</p>

<p>AJDT 1.3.1 is for Eclipse 3.1.2 only. The same bug fixes and AspectJ release have
also been included in the development builds of AJDT 1.4 for Eclipse 3.2.</p>

<table border="1" cellpadding="10" cellspacing="0" width="600">
  <colgroup>
    <col width="20%" valign="top" align="left">
    <col width="80%" valign="top" align="left">
  </colgroup>
  <tbody>

  <tr>
    <td valign="top" align="left"><b>Reduced memory usage</b></td>
    <td>
		<p>This release of AJDT incorporates the AspectJ 1.5.1 release,
		which includes bug fixes and dramatic improvements to memory usage.
		Combined with improvements in AJDT, overall memory usage is now
		typically <b>less than half</b> that of AJDT 1.3!
		</p>
		
		<p>To measure these improvements we used JConsole (available in
		J2SE 5.0) to profile memory usage during five full build cycles
		of a workspace, forcing a garbage collection between each run
		(plus a slight pause to separate each cycle). The test
		workspace was the main codebase of AJDT 1.3.1 itself, which consists
		of ten source code projects, with a total of around 130,000 lines
		of code. Here are the results comparing AJDT 1.3.1 against AJDT 1.3,
		using Eclipse 3.1.2 in both cases:
		</p>
		
		<p><img src="compare.png" width="671" height="378" alt="Memory usage comparison"></p>

		<p>Yes the scale really is the same in both cases! The two charts
		generated by JConsole have been carefully superimposed using
		the same scale. Whilst preserving similar compile times, memory usage
		has been improved in two ways in this scenario: peak usage is down from
		around 550Mb to around 250Mb, and residual usage between compiles is down
		from 300 - 330Mb to just over 100Mb (this is for the entire
		JVM so includes the rest of Eclipse).
		</p>
    </td>
  </tr>
   
  <tr>
    <td valign="top" align="left"><b>Bug fixes</b></td>
    <td>
		This release contains a number of bug fixes. The full list is available via
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.3.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">this CVS query.</a>
    </td>
  </tr>
  


</tbody>
</table>


		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
