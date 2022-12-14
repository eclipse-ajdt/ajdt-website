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
	

    <h1>
      What's new in AJDT 1.5
    </h1>

<p>Here are some of the more interesting or significant changes made to the 
AspectJ Development Tools since the 1.4.1 release (see the
<a href="http://www.eclipse.org/ajdt/whatsnew141/">What's new in AJDT 1.4.1</a>
page for the changes in that release).</p>

<table border="1" cellpadding="10" cellspacing="0" width="600">
  <colgroup>
    <col width="20%" valign="top" align="left">
    <col width="80%" valign="top" align="left">
  </colgroup>
  <tbody>

  <tr>
    <td valign="top" align="left"><b>Crosscutting Changes</b></td>
    <td>

		   It is now possible to show when there has been a
		   change in the crosscutting relationships in your project.

        <p>        
        <img src="changedadvicemarker.png" width="309" height="104" alt="Change in advice marker">     
        </p>
        
        <p>
           As shown above, advice markers are highlighted when the crosscutting
           has changed, such when a method is advised for the first time, or when
           there has been a change in the set of places affected by some advice.
        </p>
        
        <p>
           This functionality needs to be enabled by going to
           <b>Window &gt; Preferences...</b> then selecting
           <b>General &gt; Editors &gt; Text Editors &gt; Annotations.</b>
           Now select "<b>AspectJ change in crosscutting</b>" and select
           <b>Vertical ruler</b> option.
        </p>
        	
        <p>
           You can also right-click the new markers and select
           <b>AspectJ Tools &gt; Show changes in Crosscutting Comparison view.</b>          
        </p>
  
  		<p>
        <img src="comparisonref.png" width="249" height="107" alt="Reference point for comparison">     
        </p>
        
        <p>
           The reference point for the comparison can be changed using the new
           drop-down on the Cromsscutting Comparison view. The choices are
           to use the last build (of any type), the last full build, or a
           crosscutting map file in the project.
        </p>
        
        <p>
           This new functionality can be seen in action in the
           animated demo shown at EclipseCon:
           <a href="http://www.eclipse.org/ajdt/demos/#ECLIPSECON07">What's New In AJDT.</a>
        </p>

    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Crosscutting Maps and View changes</b></td>
    <td>

			    Changes relating
			    to crosscutting maps and the crosscutting comparison view:

			<ul>
			  <li>Two entries have been added to the filters dialog in the crosscutting
			  comparison view, to allow all added relationships or all removed
			  relationships to be filtered from the view.</li>
			  <li>The columns of the view now resize appropriately as the view is resized.</li>
			  <li>Settings in the view, such as the state of the "Propagate Up"
			  button are now persisted across workspace sessions.</li>
			  <li>The editor for crosscutting map files (with the ".ajmap" extension)
			  has been enhanced to show more information, including the date the
			  file was created or modified, and the number of relationships stored
			  in the file.</li>
			</ul>

    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>AspectJ Build Path configuration</b></td>
    <td>

				AspectJ aspectpath and inpath entries were previously stored
				as Eclipse preferences in a ".settings" folder.
				These settings are now stored
				in the ".classpath" file instead. They appear as regular classpath entries with
				the addition of a custom attribute which indicates if that entry is
				also on the aspectpath or inpath.
			
			<p>
			    The same AspectJ Build properties page and context menu entries
			    are available for configuring the aspectpath and inpath settings. Any
			    old preferences settings will be automatically migrated
			    to the new .classpath format (which will then not be recognised by
			    older versions of AJDT).
			</p>
			<p>
			    When entries are added to the aspectpath or inpath, they are now also
			    added to the classpath. Note that removing entries from the classpath
			    will mean they are also removed from the aspectpath or inpath. But
			    removing entries from the aspectpath or inpath will NOT remove them from
			    the build path. This can be considered as a move away from the "3 paths"
			    model toward one where there is a single path, the regular classpath, and
			    some entries on this path can be given additional properties.
			</p>
			<p>
			    The AJDT image decorator is now used to indicate which build path
			    entries are also on the aspectpath or inpath.
			</p>
			
			<p>
			<img src="ajbuildpath.png" width="339" height="167" alt="Aspectpath and inpath entries">     
			</p>

    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Select and copy from the Cross References view</b></td>
    <td>

				The contents of the Cross References view can now be copied to the clipboard
				as text. You can
				do this by selecting the entries required or by using the "Select All" action, and
				then using the standard "Copy" action -- either with the standard key bindings,
				the workbench Edit menu, or the new context menu as shown below.

			<p>
			<img src="xrefcopy.png" width="290" height="116" alt="Select and copy from the Cross References view">     
			</p>

   </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Bug fixes</b></td>
    <td>

<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">List of bugs fixed in AJDT 1.5.</a>
 
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
