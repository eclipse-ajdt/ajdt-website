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
      What's new in AJDT 1.4
    </h1>

<p>Here are some of the more interesting or significant changes made to the 
AspectJ Development Tools since the 1.3 release (see the online
<a href="http://www.eclipse.org/ajdt/whatsnew13/">What's new in AJDT 1.3</a>
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
		This release of AJDT incorporates the AspectJ 1.5.2 release.
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>New Plug-in Example</b></td>
    <td>
			A new example project has been added to demonstrate the use of
			aspects in Eclipse plug-in projects. The example checks for
			improper usage of the Eclipse IProgressMonitor interface, such
			as calling beginTask() twice on the same instance, or over-reporting
			progress across sub-monitors.
	   <p>
	     <img src="pluginexample.png" width="377" height="393" alt="new plug-in example">
	   </p>    
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Drag and Drop Aspects</b></td>
    <td>

		   Moving an aspect to a new package via drag and drop now works!
      <p>
		<img src="AspectDnD.gif" width="177" height="137" alt="animation showing drag and drop of an aspects">
	  </p>     
    </td>
  </tr>
  
  
  <tr>
    <td valign="top" align="left"><b>Eclipse Product Export Wizard</b></td>
    <td>
 		   There is a new export wizard called <b>Export Eclipse product
		   with AspectJ support.</b> This is exactly the same as the regular
		   version, except it handles AspectJ-enabled plug-in
		   projects. This means the AspectJ compiler is used to build the
		   project, and .aj files are correctly treated as source code.
        
        <p>
        <img src="exportwizard.png" width="379" height="430"
           alt="Export Wizard with AspectJ support">
        </p>
    </td>
  </tr>
  
  <tr>
    <td valign="top" align="left"><b>Greater control over advice markers</b></td>
    <td>

In AJDT you can now change the icons used for advice
markers or stop advice markers being shown altogether.  This is configured
on a per-aspect basis and the settings are persisted so that they
can be shared with a team (e.g. through CVS).

<p>
To change the image for advice markers relating to an aspect 
select the aspect, file or project in the Package Explorer, 
right-click and select <b>AspectJ Tools > Configure Advice Markers...</b> from the context menu. 
Alternatively, the same option is available by right-clicking on an
existing marker in the editor margin.
</p>

<p>You can also choose to have no image for advice markers for a 
particular aspect.</p>

<img src="markers.png" width="450" height="283"
alt="Screenshot showing custom advice markers">
		
<p>Images can be selected from a list of samples, or from .gif or .png files
contained in the project.  If you want to provide your own they should
be 12 pixels wide and no more than 14 pixels high and ideally have
a transparent background.</p>

    </td>
  </tr>


  <tr>
    <td valign="top" align="left"><b>Integrated build configurations</b></td>
    <td>
			The process of including and excluding files used to be different
			between AspectJ projects and Java projects (for historical reasons).
			Thanks to changes in Eclipse 3.2, it has now been possible to
			align the two, providing a single mechanism which is compatible
			across both project types.

		<p>
			Simply select one or more files or packages in the package
		    explorer, right-click and select entries such as <b>Include</b>
		    and <b>Exclude</b> from the <b>Build Path</b> context menu.
			This works with both .java and .aj files, in both Java and
			AspectJ projects.
		</p>

		<p>
			When converting Java projects to AspectJ projects the current
			state of included and excluded files is preserved. The same
			is true in reverse, except that .aj files are automatically
			excluded as otherwise the Java builder will try to compile
			the AspectJ-specific source code in .aj files.
		</p>

		<p>
			AJDT still offers the additional capability of being able to
			preserve an include/exclude configuration in a .ajproperties
			file, which can then be applied later as required.
		</p>

    </td>
  </tr>
  
  <tr>
    <td valign="top" align="left"><b>Additional Crosscutting Comparison functionality</b></td>
    <td>

  A <b>Propagate Up</b> toggle button has been added to the Crosscutting
  Comparison view. The sources and targets of relationships shown in the view
  can be methods, types, and also join points within methods, such as calls to
  other methods and catch blocks. Pressing the toggle button increases
  the level of granularity by replacing these sub-method elements with their
  enclosing method. This means that a comparison between two locations
  within the same method would normally show as a difference, but with the
  toggle selected, they would be considered the same.

<p>
  The original crosscutting comparison functionality allows comparison
  between two projects (or more usually two versions of the same project).
  It is now possible to compare two elements within the same project. These
  elements can be either advice statements or declare error/warning statements.
  For example, to see whether two advice statements affect the same
  locations, select them both in the outline view (or package explorer) and select
  <b>Comparing Crosscutting With &gt; Each Other</b> from the context-menu.
</p>
<a href="arv1.png">
<img src="arv1_sm.png" width="312" height="260" border=0
alt="Screenshot showing the compare menu"></a>

<p>
  The Crosscutting Comparison view will then show the differences between
  the locations affected. One use of this would be when refactoring a
  pointcut from one which lists the join points to match individually, to
  one which attempts to match the same join points but with a more robust
  property-based pointcut.
</p>
<a href="arv2.png">
<img src="arv2_sm.png" width="450" height="119" border=0
alt="Screenshot showing the results of comparing two advice elements"></a>

<p>
  You can also compare two declare error/warning statements, or
  compare one declare statement with an advice statement. This second
  combination can be particularly useful when refactoring code to
  use aspects. You might first use a declare warning statement to identify
  behaviour that is going to be handled by an aspect, such as certain
  calls to a method. You then write some advice to capture that policy,
  by advising the relevant methods. But you need to check that the advice is
  accurate, in that it affects the same locations identified by the declare
  warning. Such a comparison might look like this: 
</p>
<a href="arv3.png">
<img src="arv3_sm.png" width="450" height="119" border=0
alt="Screenshot showing the results of comparing declare warning with advice"></a>

<p>
  On its own this is not that useful (particularly when the number of advised
  locations is large), because the declare warning targets
  specific method calls, but the advice targets the execution of methods,
  so they all appear as differences in the comparison. This is where the
  <b>Propagate Up</b> button comes in! By selecting this the granularity
  of comparison is raised to the level of enclosing methods. This makes
  the significant difference between the two elements clear:
</p>
<a href="arv4.png">
<img src="arv4_sm.png" width="450" height="119" border=0
alt="Screenshot showing the results after propagating up to enclosing methods"></a>

<p>
  This shows that the declare warning affects a method (in this case it is
  a method call within that method) which is not also affected by the after
  advice. Naturally comparisons like this are most useful with large projects,
  where the crosscutting is more wide-spread.
</p>

<p>
  <b>Note:</b> We are very grateful to Charles Zhang, Irum Godil,
  and Arno Jacobsen of the Middleware Systems Research Group at the University
  of Toronto for contributing this functionality, as part of their 
  research into "Aspect Refactoring Verification" sponsored by the IBM
  CAS fellowship.
</p>

    </td>
  </tr>
   
 
  <tr>
    <td valign="top" align="left"><b>Bug fixes</b></td>
    <td>
		This release contains a large number of bug fixes. The full list is available via
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.3.1&target_milestone=1.4.0+M1&target_milestone=1.4.0&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">this CVS query.</a>
 
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
