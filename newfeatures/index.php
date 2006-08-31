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

	$rightcolumn = file_get_contents("../rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<h1>New Features</h1>

<p>This page gives details of the latest new features added to the
<a href="http://www.eclipse.org/ajdt/downloads/#dev">development builds</a>
of AJDT. If you find any problems with these new features please
<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT">raise a bug,</a>
or for further discussion or suggestions please visit the
<a href="news://eclipse.org/eclipse.technology.ajdt">AJDT newsgroup</a> 
(<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt">web interface</a> 
- first <a href="http://dev.eclipse.org/newsManager/newsRequestForm.html">request a password</a> if you don't have one).
</p>

    <div class="homeitem3col">
	<h3>New Features added during AJDT 1.5 and 1.4.1 development</h3>
		<ul>
		<li>
			<a name="ajbuild">Improved AspectJ Build Properties</a>	
			<span class="dates">(posted 31-08-06)</span>
		<p>
		  The project properties pages for configuring a project's
		  inpath, aspect path, and output jar have been
		  organised into a single <b>AspectJ Build</b> page.
		</p>
		<img src="ajbuildprops.png" width="390" height="179" alt="new AspectJ build properties page">
		<p>
	      There is an <b>AspectJ Tools &gt; Configure AspectJ Build Path...</b>
		  shortcut to this page, available by right-clicking on a project. It
		  is also now possible to right-click on a JAR or ZIP file in a project
		  and select to add it to the in-path or aspect path, or remove it.
		</p>
		<p>
		  All of these changes are in development builds
		  1.4.1.200608301425 for Eclipse 3.2 and
		  1.5.0.200608301302 for Eclipse 3.3M1.
		</p>	
		</li>
		
		<li>
			<a name="compiler20060829">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 29-08-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200608290806 for Eclipse 3.2
           <br>1.5.0.200608290906 for Eclipse 3.3M1
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200608290814.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-08-21&chfieldto=2006-08-29&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>
		<li>
			<a name="compiler20060821">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 22-08-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200608210736 for Eclipse 3.2
           <br>1.5.0.200608211312 for Eclipse 3.3M1
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200608210847.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-08-01&chfieldto=2006-08-21&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="PDE">Build Automation for AspectJ-enabled plug-ins</a>	
			<span class="dates">(posted 16-08-06)</span>
		<p>
			As of development builds 1.4.1.200608161046 for Eclipse 3.2
			and 1.5.0.200608161216 for Eclipse 3.3M1, AJDT now includes
			a replacement pdebuild-ant.jar file to enable the AspectJ
			compiler to be used by automated PDE builds. This can be
			found in the org.eclipse.ajdt.pde.build project, along with
			a README.txt file containing more information.
		</p>
		<p>
		    Note also that AJDT itself is now built using the PDE
		    build process and the replacement jar file. As a side-effect
		    of this change, the version of the AspectJ plug-ins now
		    matches the actual version of AspectJ included, rather
		    than the version of the AJDT build. This means
		    that when upgrading to a newer version of AJDT using the
		    Eclipse Update Manager, if the version of AJDT has changed
		    but not the included version of AspectJ, the AspectJ
		    plug-ins will not be downloaded again. It is therefore
		    more efficient to use the Update Manager than installing
		    from zip files.
		</p>
		</li>
		
		<li>
			<a name="33M1">New release stream for Eclipse 3.3M1</a>	
			<span class="dates">(posted 11-08-06)</span>
		<p>
			New development builds of AJDT 1.5 have been created to
			support the development of Eclipse 3.3. Note that these are
			not as well tested as the development builds for Eclipse 3.2.
		</p>
		<p>
			Development focus for AJDT will remain on Eclipse 3.2 for now, but the
			development builds for 3.3 will be updated regularly with
			changes made in the AJDT 1.4.1 for Eclipse 3.2 line.
		</p>
		
		</li>
		
		<li>
			<a name="compiler20060728">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 02-08-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.1.20060802071129 for Eclipse 3.2</b>
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.20060801132048.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-07-26&chfieldto=2006-08-01&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="compiler20060726">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 26-07-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.1.20060726064959 for Eclipse 3.2</b>
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.20060726092219.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-06-30&chfieldto=2006-07-26&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since AspectJ 1.5.2.</a>
        </p>        
  
		</li>

		<li>
			<a name="container">Classpath container for AspectJ Runtime Library</a>	
			<span class="dates">(posted 21-07-06)</span>
		<p>
			Regular AspectJ projects (non plug-in projects) require the aspectjrt.jar
			file to be on the project's build path. Prior to
		    development build 1.4.0.20060721111048 for Eclipse 3.2,
		    this was handled via the ASPECTJRT_LIB classpath variable.
		    Now when projects are built, this entry will be changed to
		    a more flexible "AspectJ Runtime Library" classpath container, similiar
		    to the classpath container used for JRE libraries. This change
		    should be close to transparent, except that each
		    project's .classpath file will be updated by the conversion.
		</p>
		</li>

		</ul>
    </div>

	<div class="homeitem3col">
	<h3>New Features added during AJDT 1.4 development</h3>
		<ul>

		<li>
			<a name="ajrc1">AJDT 1.4 RC1 and AspectJ 1.5.2 RC1</a>	
			<span class="dates">(posted 26-06-06)</span>

		<p>
			AJDT development build 1.4.0.20060626090402 for Eclipse 3.2
			is the Release Candidate build for AJDT 1.4. It has been
			updated to contain AspectJ 1.5.2 RC1.
		</p>
		
		</li>
		
		<li>
			<a name="compiler20060622">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 22-06-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.0.20060622064301 for Eclipse 3.2RC4 - RC7</b>
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060622090838.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-05-31&chfieldto=2006-06-22&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="compiler20060530">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 30-05-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.0.20060530100558 for Eclipse 3.2RC4 / RC5 / RC6</b>
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060530125805.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-05-18&chfieldto=2006-05-31&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>	
		<li>
			<a name="pluginexample">New Plug-in Example</a>	
			<span class="dates">(posted 26-05-06)</span>
		<p>
			A new example project has been added to demonstrate the use of
			aspects in Eclipse plug-in projects. The example checks for
			improper usage of the Eclipse IProgressMonitor interface, such
			as calling beginTask() twice on the same instance, or over-reporting
			progress.
		</p>
		<img src="pluginexample.png" width="377" height="393" alt="new plug-in example">
		<p>
		   This simple example is included in development build
		   AJDT 1.4.0.20060525055413 for Eclipse 3.2RC4 or RC5. Please
		   let us know via the <a href="news://eclipse.org/eclipse.technology.ajdt">newsgroup</a>
		   or <a href="http://dev.eclipse.org/mailman/listinfo/ajdt-dev">dev list</a> if you have any
		   feedback on this project, or if you have any suggestions or
		   requests for additional examples (or maybe you would like to
		   contribute one).
		</p>
		</li>

		<li>
			<a name="dnd">Drag and Drop Aspects</a>	
			<span class="dates">(posted 19-05-06)</span>
		<p>
		   Moving an aspect to a new package via drag and drop now (finally) works!
        </p>
		<img src="AspectDnD.gif" width="177" height="137" alt="animation showing drag and drop of an aspects">
		<p>
		   This capability is available as of development build
		   AJDT 1.4.0.20060518035008 for Eclipse 3.2RC4.
		</p>
		</li>

		<li>
			<a name="compiler20060518">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 18-05-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.0.20060518082333 for Eclipse 3.2RC4</b>
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060518084747.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-05-12&chfieldto=2006-05-18&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>	

		<li>
			<a name="compiler20060512">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 12-05-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in development build
           <b>1.4.0.20060512045122 for Eclipse 3.2RC2 / RC3</b>
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060511130959.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-04-10&chfieldto=2006-05-12&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
        <p>
           In particular, this build includes fixes for two important problems:
           <ul>
		    <li>
		      on making some kinds of change to an aspect and saving it, the
			  gutter markers related to the aspect were disappearing (the code on
              the disk was still fine...).
		    </li>
		    <li>
		      some errors in projects were not being reported to the user and had
			  to be discovered through the AJDT event trace view or by doing an Ant
              build of the code.
		    </li>
		   </ul>
        </p>
        <p>
           We have fixed the scenarios we know about that caused these problems -
           if these fixes don't seem to work for your scenario, please let us
           know.
        </p>
  
		</li>	

		<li>
		   <a name="rc2">Support for Eclipse 3.2RC2</a>	
			<span class="dates">(posted 02-05-06)</span>
		<p>
		   If you are using Eclipse 3.2RC2, please make sure you
		   are using a development build from 1.4.0.20060502080233
		   onwards.
        </p>
		</li>
		
		<li>
		   <a name="product">Eclipse Product Export Wizard</a>	
			<span class="dates">(posted 27-04-06)</span>
		<p>
		   As of development build 1.4.0.20060426123658 for Eclipse 3.2RC1,
		   there is a new export wizard called <b>Export Eclipse product
		   with AspectJ support.</b> This is exactly the same as the regular
		   version, except it handles AspectJ-enabled plug-in
		   projects. This means the AspectJ compiler is used to build the
		   project, and .aj files are correctly treated as source code.
        </p>
        
        <img src="exportwizard.png" width="379" height="430"
           alt="Export Wizard with AspectJ support">
        
		</li>
		
		<li>
		   <a name="rc1">Support for Eclipse 3.2RC1</a>	
			<span class="dates">(posted 20-04-06)</span>
		<p>
		   Development builds from 1.4.0.20060420091148 onwards
		   require Eclipse 3.2RC1. They will not work properly on 3.2M6
		   or earlier builds.
        </p>
		</li>
		
		<li>
		   <a name="compiler151">AspectJ 1.5.1</a>
           <span class="dates">(posted 05-04-06)</span>

        <p>
           AJDT now includes AspectJ 1.5.1 as of the following development builds:
           <br>1.4.0.20060405055725 for Eclipse 3.2M6
           <br>1.3.1.20060405045058 for Eclipse 3.1
        </p>
        <p>
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&product=AspectJ&target_milestone=1.5.1&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED">
           list of AspectJ bugs and enhancements resolved since AspectJ 1.5.</a>
        </p>
		</li>
			
		<li>
		   <a name="m6">Support for Eclipse 3.2M6</a>	
			<span class="dates">(posted 03-04-06)</span>
		<p>
		   Eclipse 3.2M6 is now supported by AJDT, as of development build
		   1.4.0.20060403091136. Earlier builds will not work
		   with 3.2M6, and builds from this one onwards will not work with any previous
		   milestones.
        </p>
		</li>
		
		<li>
			<a name="compiler20060321">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 21-03-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.3.1.20060321083206 for Eclipse 3.1
           <br>1.4.0.20060321085039 for Eclipse 3.2M5a
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060320075953.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-03-10&chfieldto=2006-03-21&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
		</li>		
		<li>
			<a name="compiler20060309">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 13-03-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.3.1.20060131093325 for Eclipse 3.1
           <br>1.4.0.20060310120028 for Eclipse 3.2M5a
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060309143651.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-02-01&chfieldto=2006-03-10&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
		</li>
		
		
		<li>
		<a name="markers">Greater control over advice markers</a>	
			<span class="dates">(posted 09-03-06)</span>

<p>	
	  This new feature is available in development builds
  1.4.0.20060303064646 or later, for Eclipse 3.2M5a. Click on the
  images for full-sized versions.	
</p>	
<p>
In AJDT you can now change the icons used for advice
markers or stop advice markers being shown altogether.  This is configured
on a per-aspect basis and the settings are persisted so that they
can be shared with a team (e.g through CVS).
</p>	

<p>
To change the image for advice markers relating to an aspect 
select the aspect, file or project in the Package Explorer, 
right click and select <b>AspectJ Tools > Configure Advice Markers...</b> from the context menu. 
Alternatively, right click on one of the markers in the margin of the editor. Select 
<b>AspectJ Tools > Configure Advice Markers...</b> from the context menu there instead. </p>

<p>You can also choose to have no image for advice markers for a 
particular aspect.</p>

<a href="markers.png">
<img src="markers_sm.png" width="350" height="340"
alt="Screenshot showing the Configure Advice Markers dialog"></a>
		
<p>Images can be selected from a list of samples, or from .gif or .png files
contained in the project.  If you want to provide your own they should
be 12 pixels wide and no more than 14 pixels high and ideally have
a transparent background.  If you think you
have created a generally useful icon feel free to submit it for inclusion
in AJDT.</p>

<img src="markers2.png" width="450" height="283"
alt="Screenshot showing custom advice markers">
		
		</li>
		<li>
		<a name="arv">Additional Crosscutting Comparison functionality</a>	
			<span class="dates">(posted 02-03-06)</span>

<p>
  The following new features are available in development builds
  1.4.0.20060228083332 or later, for Eclipse 3.2M5a. Click on the
  images for full-sized versions.
</p>

<p>
  A <b>Propagate Up</b> toggle button has been added to the Crosscutting
  Comparison view. The sources and targets of relationships shown in the view
  can be methods, types, and join points within methods, such as calls to
  other methods and catch blocks. Pressing the toggle button increases
  the level of granularity by replacing these sub-method elements with their
  enclosing method. This means that a comparison between two locations
  within the same method would normally show as a difference, but with the
  toggle selected, they would be considered the same.
</p>

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
<img src="arv1_sm.png" width="312" height="260"
alt="Screenshot showing the compare menu"></a>

<p>
  The Crosscutting Comparison view will then show the differences between
  the locations affected. One use of this would be when refactoring a
  pointcut from one which lists the join points to match individually, to
  one which attempts to match the same join points but with a more robust
  property-based pointcut.
</p>
<a href="arv2.png">
<img src="arv2_sm.png" width="450" height="119"
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
<img src="arv3_sm.png" width="450" height="119"
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
<img src="arv4_sm.png" width="450" height="119"
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

		</li>
		
		<li>
		  <a name="buildconfig">Integrated build configurations</a>	
			<span class="dates">(posted 20-02-06)</span>
		  <p>
		    The process of including and excluding files from the build
		    in AspectJ projects is now the same as with plain Java projects,
		    when using development build 1.4.0.20060219125111 or later and
		    Eclipse 3.2M5.
		    This is a significant change, but one which improves the integration
		    of AJDT with the rest of Eclipse and resolves a number of long
		    standing issues. More detail and background information is given below.
		  </p>
		  <h4>How does it work?</h4>
		  <ul>
		    <li>
		      Simply select one or more files or packages in the package
		      explorer, right-click and select entries such as <b>Include</b>
		      and <b>Exclude</b> from the <b>Build Path</b> context menu.
		    </li>
		    <li>
		      This is just the same as with Java projects, only it works with
		      .aj files too.
		    </li>
		    <li>
		      Support for storing a set of includes and excludes
		      in a file for later use is still available, although it
		      works a little differently now. The same ".ajproperties" files
		      are used, with the same syntax. Previously, one of these files
		      in a project was the "active" one. But now the active configuration
		      is defined by the currently included and excluded files
		      (which is stored in the project's .classpath file). 
		    </li>
		    <li>
		      To make use of the includes and excludes stored in
		      a .ajproperties file, right-click on it and select
		      <b>AspectJ Tools &gt; Apply Build Configuration.</b>
		    </li>
		    <li>
		      To store the current set of included and excluded
		      files in a .ajproperties file, select the project, right-click
		      and select <b>AspectJ Tools &gt; Save Build Configuration As...</b>
		    </li>
		    <li>
		      As .ajproperties files are no longer used to store the
		      current build path configuration, there is no need for a 
		      project to contain any such files. A "build.ajproperties" file
		      is no longer created automatically for new projects.
		    </li>
		  </ul>
		  <h4>Some background</h4>
		  <p>
		     The reason for AJDT having a different build path
		     mechanism was historical - it was implemented at a time
		     when JDT had no context menu entries for including and
		     excluding files and no support for stored configurations.
		     We could not bring the two closer together before now
		     because the JDT mechanism did not work for .aj files. We
		     have worked with the JDT team to add support for compilation
		     units with extensions other than .java in Eclipse 3.2M5
		     (see <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=89977">bug 89977</a>),
		     which has enabled this integration. However, JDT does not wish to
		     support stored configurations
		     (see <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=122611">bug 122611</a>), so
		     AJDT will continue to do this via .ajproperties files.
		  </p>
		  <p>
		    As well as being more intuitive to new users, the mechanism
		    is faster and more efficient. It also fixes a number of
		    limitations including
		    <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=98214">JUnit
		    looking for excluded tests</a> and
		    <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=104688">JUnit
		    runner fails for .aj files.</a>
		 
		  </p>
		</li>
		
		<li>
		   <a name="m5">Support for Eclipse 3.2M5</a>	
			<span class="dates">(posted 19-02-06)</span>
		<p>
		   To use AJDT with the latest Eclipse milestone release you need to install
		   development build 1.4.0.20060219125111 or later. Earlier builds will not work
		   with 3.2M5, and builds from this one onwards will not work with the previous
		   milestone, 3.2M4.
        </p>
		</li>
		
		<li>
			<a name="compiler20060201">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 01-02-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.3.1.20060131093325 for Eclipse 3.1
           <br>1.4.0.20060201042237 for Eclipse 3.2M4
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20060131132251.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-12-20&chfieldto=2006-02-01&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since AspectJ 1.5.0 final.</a>
        </p>        
		</li>
		
		<li>
		   <a name="translations">Translations Available</a>
           <span class="dates">(posted 10-01-06)</span>
        <p>
           Hungarian and Japanese translations have been contributed for AJDT 1.3 and are
           now available for download on the <a href="../downloads/index.php">downloads page</a>.
        </p>
	     <p>
	     <img src="xref_ja.png" width="311" height="278" alt="Screenshot showing the Cross References view with Japanese text">
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
