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
	$pageTitle 		= "AJDT New Features";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Matt Chapman";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings

	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<p>This page gives details of the latest new features added to the
<a href="http://www.eclipse.org/ajdt/downloads/#dev">development builds</a>
of AJDT. If you find any problems with these new features please
<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT">raise a bug,</a>
or for further discussion or suggestions please visit the
<a href="news://eclipse.org/eclipse.technology.ajdt">AJDT newsgroup</a> 
(<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt">web interface</a> 
- first <a href="http://dev.eclipse.org/newsManager/newsRequestForm.html">request a password</a> if you don't have one).
</p>

<div class="midlist">

   <ul>
     <li>November 30, 2005: 
     <a href="#compiler20051130">Updated AspectJ Compiler</a> 
     </li>
     <li>November 29, 2005: 
     <a href="#compiler20051129">Updated AspectJ Compiler</a> 
     </li>
     <li>November 24, 2005: 
     <a href="#compiler20051124">Updated AspectJ Compiler</a> 
     </li>
     <li>November 17, 2005: 
     <a href="#compilerM5">AspectJ 5 M5</a> 
     </li>
     <li>November 9, 2005: 
     <a href="#ltw">Load-time Weaving in AJDT</a> 
     </li>
     <li>November 8, 2005: 
     <a href="#compiler20051107">Updated AspectJ Compiler and single JAR files</a> 
     </li>
     <li>October 31, 2005: 
     <a href="#accessibility">Accessibility Review</a> 
     </li>
     <li>October 11, 2005: 
     <a href="#compilerM4">AspectJ 5 M4</a> 
     </li>
     <li>October 3, 2005: 
     <a href="#i18n">Improved internationalization support & call for help!</a> 
     </li>
     <li>September 26, 2005: 
     <a href="#comparison">Crosscutting Comparison view</a> 
     </li>
     <li>September 21, 2005: 
     <a href="#compiler20050921">Updated AspectJ Compiler and new weaver plugin</a> 
     </li>
     <li>September 20, 2005: 
     <a href="#newaspect">Updated New Aspect Wizard</a> 
     </li>
     <li>September 12, 2005: 
     <a href="#xrefFilter">Relationship Filter for Cross References View</a> 
     </li>
     <li>September 6, 2005: 
     <a href="#pointcuts">Navigation and source hover support for pointcuts</a> 
     </li>
   </ul>

</div>

	<div class="homeitem3col">
	<h3>New Features</h3>
		<ul>
			<li>
				<a name="compiler20051130">Updated AspectJ Compiler</a>
				
		<p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20051130152622 for Eclipse 3.0
           <br>1.3.0.20051130095036 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20051130133549.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-11-29&chfieldto=2005-11-30&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since yesterdays update.</a> This build also includes further
           work for <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=116679">aspectj bug 116679</a>.
        </p>
        
			</li>
			
			<li>
			<a name="compiler20051129">Updated AspectJ Compiler</a>
			        <p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20051129174701 for Eclipse 3.0
           <br>1.3.0.20051129121844 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20051129161753.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-11-24&chfieldto=2005-11-29&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since last weeks update.</a>
        </p>
			</li>
			
			<li>
			<a name="compiler20051124">Updated AspectJ Compiler</a>
			        <p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20051124105700 for Eclipse 3.0
           <br>1.3.0.20051124045634 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20051124084452.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-11-16&chfieldto=2005-11-24&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since M5.</a>
        </p>
			</li>
			
			<li>
			     <a name="compilerM5">AspectJ 5 M5</a>

        <p>
           AJDT now includes AspectJ 5 M5 as of the following development builds:
           <br>1.3.0.20051117105200 for Eclipse 3.2M3
           <br>1.3.0.20051116143457 for Eclipse 3.1
           <br>1.2.1.20051116165827 for Eclipse 3.0
        </p>
        <p>
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&bug_status=RESOLVED&chfieldfrom=2005-10-07&chfieldto=2005-11-16">
           complete list of resolved issues since M4.</a>
        </p>
			</li>
			
			<li>
				<a name="ltw">Load-time Weaving in AJDT</a>

		<p>
           AJDT now contains support for load-time weaving in both 1.2.1 and 1.3.0.
           We have also created an animated demo to demonstrate this new feature.
           See the <a href="../demos/index.html#LTW-DEMO">demos page</a> for details.
        </p>
       <p><img src="ltwscreenshot.png" width="666" height="580" alt="Screenshot showing the load-time weaving launch configuration"></p>
			
			</li>
			
			<li>
   				<a name="compiler20051107">Updated AspectJ Compiler and single JAR files</a>
 
        <p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20051108115442 for Eclipse 3.0
           <br>1.3.0.20051107165911 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20051107153637.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-10-08&chfieldto=2005-11-07&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since M4.</a>
        </p>

        <p>
          The packaging of AJDT has also changed recently in that most of the
          AJDT plug-ins are now single JAR files, instead of a directory containing
          many files. This should improve install time and reduce disk usage.
          The plug-ins that provide AspectJ have not been converted - that will
          be considered
          <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113948">later.</a>  
        </p>
			
			</li>
			
			<li>
			   <a name="accessibility">Accessibility Review</a>
        <p>
           AJDT 1.3 is now accessibility compliant after undergoing a full review against the
           IBM accessibility checklist.
           We found and fixed various problems.  These fixes include some new icons, a new
           'patterns' palette in the Visualiser and some changes to the key sequences for AJDT
           commands.           
        </p>
        <p>
           See the <a href="../accessibility1_3.html">
           completed checklist.</a>
        </p>
        <p>
        	If you think you have found an accessibility related bug please <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT">raise a bug</a>
        	with "[Accessibility]" at the start of the summary.
		</p>
			</li>
			
			<li>
			   <a name="compilerM4">AspectJ 5 M4</a>
        <p>
           AJDT now includes AspectJ 5 M4 as of the following development builds:
           <br>1.3.0.20051011134207 for Eclipse 3.1
           <br>1.2.1.20051008130634 for Eclipse 3.0
        </p>
        <p>
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&bug_status=RESOLVED&chfieldfrom=2005-08-27&chfieldto=2005-10-07">
           complete list of resolved issues since M3.</a>
        </p>
        <p>
          The build and packaging process has also changed in this build, so look out for any problems. The only noticeable
          change should be that the source code zip files have been moved out from each plug-in, into a separate
          org.eclipse.ajdt.source plug-in.
        </p>
			</li>
			
			<li>
				<a name="i18n">Improved internationalization support & call for help!</a>
        <p>
        We have made sure that all end-user messages in AJDT are stored in properties
        files instead of being hardcoded. This
        allows AJDT to be translated to other languages.
        </p>
        <p>
        This is where you come in! If English is not your native language
        and you would like to see an AJDT translation pack for your language,
        please consider contributing some translated messages. There are quite
        a number of messages involved, but if you'd like to take a look,
        we've collected them together in one file:
        <a href="messages.zip">messages.zip</a>. If you plan on working
        on a particular language, please post to the
        <a href="http://dev.eclipse.org/mailman/listinfo/ajdt-dev">ajdt-dev mailing list</a>, to avoid any duplication
        of effort. Also post there if you have any questions about the process.
        </p>
        <p>
        The AspectJ build in AJDT has also been updated to a level of
        200509301030, fixing
        <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-09-20&chfieldto=2005-09-30&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">these bugs.</a>
        </p>
			</li>
			
			<li>
				<a name="comparison">Crosscutting Comparison view</a>
        <p>This feature has been in the development builds of AJDT 1.2.1 and 1.3 for a little while,
        but in case you missed it or are unsure how to use it we've created an
        <a href="../demos/index.html#COMPARISON-DEMO">animated demo</a> available from the AJDT demos page.</p>
        
        <ul>
        <li>
        <p>The goal of this new functionality is to answer the "What's changed?" question in relation
        to the aspect-oriented structure of your application. Say you make a release of your project
        and then you do some refactoring such as renaming some methods, adding new methods, optimizing
        pointcuts etc. The advice in your project may now be matching in different places (or in
        additional, or fewer places) but in anything other than very small projects it would be hard to
        spot this purely from the editor markers, Cross References view, and Visualiser view offered by
        AJDT. These views show you the current state of the crosscutting but not how it has changed --
        this is where the Crosscutting Comparison view comes in.</p>
        <p><img src="comparison.png" width="565" height="165" alt="screenshot showing the Crosscutting Comparison view"></p>
		</li>
		</ul>
			</li>
			
			<li>
				<a name="compiler20050921">Updated AspectJ Compiler and new weaver plugin</a>
        <p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20050921121359 for Eclipse 3.0
           <br>1.3.0.20050921124737 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20050919101948.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-09-13&chfieldto=2005-09-19&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since last week's update.</a>
        </p>
        <p>
           The compiler in this release includes further enhancements to ensure it
           can better handle any 1.2.1 built aspects that it encounters (maybe from
           old aspect libraries).  These changes will require any code built with a
           previous version of AspectJ 1.5.0 to be rebuilt with this version.
        </p>
        <p>
          Another change in this build is the creation of a new org.aspectj.weaver plugin,
          which separates the AspectJ weaver classes from the org.aspectj.ajde plugin.
          This should be a largely internal change, but if you are referring
          directly to the ajde.jar file (from an Ant build file for example)
          you will need to add aspectjweaver.jar from the org.aspectj.weaver
          plugin.
        </p>			
			</li>
			
			<li>
				<a name="newaspect">Updated New Aspect Wizard</a>
        <p>
           A new version of the New Aspect wizard is included as of the following development builds:
           <br>1.2.1.20050919172634 for Eclipse 3.0
           <br>1.3.0.20050916181211 for Eclipse 3.1
        </p>
        <p>
        
        <p>
           <ul>
           <li>
           The <b>New Aspect wizard</b> now more closely matches the appearance and
           functionality of the current version of the New Class wizard.
           In addition to supporting the modifiers and extra instantiation options
           applicable to aspects, code completion is available for package names,
           and when extending an abstract aspect, stubs can be created for any
           inherited abstract pointcuts.
              <br><img src="NewAspect.png" width="495" height="625" alt="screenshot showing the New Aspect wizard">
           </li>
           <li>The comments generated and formatting
           used for new aspects matches the Eclipse settings for new
           classes - for example on Eclipse 3.1 the default is not to
           generate comments.
              <br><img src="generatedAspect.png" width="479" height="218" alt="screenshot showing a generated aspect">
           </li>
           </ul>
 
 			</li>
			
			<li>
				<a name="xrefFilter">Relationship Filter for Cross References View</a>
		<p>
        This was added a while ago, but in case you missed it, it is available in recent
        development builds of 1.2.1 for Eclipse 3.0 and 1.3.0 for Eclipse 3.1.
		See the
		<a href="http://www.eclipse.org/ajdt/downloads/#dev">download page</a> to
		obtain the latest builds.
		
		<p>
		   <ul>
		     <li>
		     <p>
		     <b>Cross References View</b> (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=95724">95724</a>)
		     <br>
		     A new 'Filters...' button has been added to the Cross References view menu which can be
		     accessed via the drop down toggle button on the toolbar or by pressing the key
		     combination Ctrl + F10.
			 <br><img src="xRefViewMenu.PNG" width="545" height="181" alt="Screenshot showing the Cross References view menu">
		     </p>
		     <p>
		     This presents a dialog containing the various types of relationship which can be excluded
		     from the view.
		     <br><img src="xRefFilterDialog.PNG" width="301" height="135" alt="Screenshot showing the Cross References filter dialog">
		     </p>
		    
		     <p>
             Checking relationships in the dialog and clicking OK will see any relationships of this
             type filtered from the view.
		     <br><img src="xRefViewFiltered.PNG" width="545" height="131" alt="Screenshot showing the filtered Cross References view">
		     </p>

		     </li>

		     <li>
		     <p>
		     <b>Cross References In-place View</b> (Ctrl+Alt+X)
             	     <br>
		     The same functionality is available in the quick form of the Cross References view
		     which appears over the editor. The filters applied to each view are independent of each
		     another.
		     <br><img src="xRefInplaceViewMenu.PNG" width="531" height="157" alt="Screenshot showing the Cross References in-place view menu">
		     </p>

		     </li>		   
		   </ul>
		</p>
			</li>
			
			<li>
			   <a name="pointcuts">Navigation and source hover support for pointcuts</a>
		<p>
		Available in development builds: 1.2.1.20050905225434 for Eclipse 3.0 and
		1.3.0.20050905154239 for Eclipse 3.1 or later. See the
		<a href="http://www.eclipse.org/ajdt/downloads/#dev">download page</a> to
		obtain the latest builds.
		</p>
		
		<p>
		   This is really 3 features in 1:
		   
		   <ul>
		     <li>
		     <p>
		     <b>F3 "open declaration" action for pointcuts</b>
		     (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=107582">107582</a>)
		     <br>
		     If you have an aspect open in the AspectJ editor, you can now position the
		     cursor on the use of a named pointcut, either in some advice or in the
		     definition of another pointcut, and then press F3 (or whatever key you
		     have assigned to the "Open Declaration" action) to jump to the definition
		     of that pointcut.
		     </p>
		     </li>

		     <li>
		     <p>
		     <b>Control-click hyperlink navigation for pointcuts</b>
		     (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108341">108341</a>)
             <br>You can also hold down the control key and mouse over the use of named
             pointcuts, which now appear as hyperlinks, so that you can click to
             navigate to the pointcut definition. Note that the implementation of this
             hyperlink feature uses Eclipse 3.1 API and so is not available on AJDT 1.2.1 for Eclipse 3.0.
		     <br><img src="hyperlink.png" width="599" height="93" alt="Screenshot showing a control-click hyperlink">		     
		     </p>
		     </li>

		     <li>
		     <p>
		     <b>Source hover for pointcuts</b>
		     (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108730">108730</a>)
		     <br>As an alternative of navigating to a pointcut's definition, you can also
		     hover over the use of the pointcut, and the source code for it will
		     appear as a tooltip.
		     <br><img src="sourcehover.png" width="599" height="127" alt="Screenshot showing a pointcut source hover">
		     </p>
		     </li>		   
		   </ul>
		</p>
		<p>
		   There may be some limited cases where the referenced pointcut cannot be resolved. Please raise
		   a bug if you find any, or if anything else goes wrong.
		</p>			
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
