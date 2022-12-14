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
      What's new in AJDT 1.2.1 and 1.3
    </h1>

<p>Here are some of the more interesting or significant changes made to the 
AspectJ Development Tools since the 1.2 release (see the
<a href="http://www.eclipse.org/ajdt/whatsnew12/">What's new in AJDT 1.2</a>
page for the changes in that release).</p>

<p>AJDT 1.2.1 is for Eclipse 3.0 only and AJDT 1.3 is for Eclipse 3.1 only. The
content of both releases has been kept as similar as possible. Therefore
everything described here applies to both, except where noted otherwise.</p>

<table border="1" cellpadding="10" cellspacing="0" width="600">
  <colgroup>
    <col width="20%" valign="top" align="left">
    <col width="80%" valign="top" align="left">
  </colgroup>
  <tbody>

  <tr>
    <td valign="top" align="left"><b>AspectJ 5</b></td>
    <td>
		This release of AJDT incorporates the final AspectJ 5 release,
		which includes support for Java 5 features, enhancements to load-time weaving,
		and support for an annotation-based development style for aspects.
		
		<p>
		Note however that AJDT 1.2.1 is for Eclipse 3.0, which doesn't support Java 5.
		For this you need AJDT 1.3 for Eclipse 3.1.
		</p>
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Navigation and source hover support for pointcuts</b></td>
    <td>

			<b>F3 "open declaration" action for pointcuts</b>
		     
		     <br>
		     If you have an aspect open in the AspectJ editor, you can now position the
		     cursor on the use of a named pointcut, either in some advice or in the
		     definition of another pointcut, and then press F3 (or whichever key you
		     have assigned to the "Open Declaration" action) to jump to the definition
		     of that pointcut.
		     </p>

		     <p>
		     <b>Control-click hyperlink navigation for pointcuts (AJDT 1.3 only)</b>
             <br>You can also hold down the control key and mouse over the use of named
             pointcuts, which now appear as hyperlinks, so that you can click to
             navigate to the pointcut definition.
             </p>

		     <p>
		     <b>Source hover for pointcuts</b>
		     <br>As an alternative to navigating to a pointcut's definition, you can also
		     hover over the use of the pointcut, and the source code for it will
		     appear as a tooltip.
		     </p>
		     <p><img src="sourcehover.png" width="450" height="127" alt="Screenshot showing a pointcut source hover">
		     </p>
		     
    </td>
  </tr>

  <tr>
    <td valign="top" align="left"><b>Relationship Filter for Cross References View</b></td>
    <td>

		     A new 'Filters...' button has been added to the Cross References view menu which can be
		     accessed via the drop down toggle button on the toolbar or by pressing the key
		     combination Ctrl + F10.
		     
		     <p>
		     This presents a dialog containing the various types of relationship which can be excluded
		     from the view.</p>
		     <p><img src="xreffilters.png" width="301" height="135" alt="Screenshot showing the Cross References filter dialog">
		     </p>
		    
		     <p>
             Selecting relationships in the dialog and clicking OK will result in any relationships of this
             type being filtered from the view.
		     </p>
		     <p>
		     The same functionality is available in the quick form of the Cross References view
		     which appears over the editor (by pressing Alt+Shift+P by default). The filters applied to
		     each view are independent of each other.
		     </p>
		     
    </td>
  </tr>
  
  
  <tr>
    <td valign="top" align="left"><b>Crosscutting Comparison view</b></td>
    <td>
    	The goal of this new view is to answer the "What's changed?" question in relation
        to the aspect-oriented structure of your application. Say you make a release of your project
        and then you do some refactoring such as renaming some methods, adding new methods, optimizing
        pointcuts etc. The advice in your project may now be matching in different places (or in
        additional, or fewer places) but in anything other than very small projects it would be hard to
        spot this purely from the editor markers, Cross References view, and Visualiser view offered by
        AJDT. These views show you the current state of the crosscutting but not how it has changed --
        this is where the Crosscutting Comparison view comes in.
        
        <p>
        <img src="comparison.png" width="450" height="165" alt="screenshot showing the Crosscutting Comparison view">
        </p>

		<p>To see this functionality in action view the
		<a href="http://www.eclipse.org/ajdt/demos/index.php#COMPARISON-DEMO">animated demo</a> available from the AJDT demos page.
		</p>
    </td>
  </tr>
  
  <tr>
    <td valign="top" align="left"><b>Load-time Weaving configuration</b></td>
    <td>
			This new launch configuration simplifies the process of running an application
			where weaving occurs as the classes are loaded. This typically involves a
			Java project containing the application to be woven, and an AspectJ project
			containing the aspects.
       <p>
       <img src="ltwconfig.png" width="450" height="220" alt="Screenshot showing the load-time weaving launch configuration">
       </p>

		<p>To see this functionality in action view the
		<a href="http://www.eclipse.org/ajdt/demos/index.php#LTW-DEMO">animated demo</a> available from the AJDT demos page.
		</p>

    </td>
  </tr>
  
  <tr>
    <td valign="top" align="left"><b>Updated New Aspect Wizard</b></td>
    <td>

           The <b>New Aspect wizard</b> now more closely matches the appearance and
           behaviour of the current version of the New Class wizard.
           In addition to supporting the modifiers and extra instantiation options
           applicable to aspects, code completion is available for package names,
           and when extending an abstract aspect, stubs can be created for any
           inherited abstract pointcuts.
           </p>
           <p>The comments generated and formatting
           used for new aspects matches the Eclipse settings for new
           classes.
           </p>

    </td>
  </tr>
   
  <tr>
    <td valign="top" align="left"><b>Bug fixes</b></td>
    <td>
		This release contains a large number of bug fixes. The full list is available via
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.2.1&target_milestone=1.3.0&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">this CVS query.</a>
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
