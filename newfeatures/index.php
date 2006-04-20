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

	<div class="homeitem3col">
	<h3>New Features since AJDT 1.3 release</h3>
		<ul>
		
		<li>
		   <a name="m6">Support for Eclipse 3.2RC1</a>	
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
		
	<div class="homeitem3col">
	<h3>New Features prior to AJDT 1.3 release</h3>
		<ul>
		<li>
		   <a name="compilerRC1">AspectJ 5 RC1</a>
           <span class="dates">(posted 14-12-05)</span>

        <p>
           AJDT now includes AspectJ 5 RC1 as of the following development builds:
           <br>1.3.0.20051214100409 for Eclipse 3.1
           <br>1.2.1.20051214160017 for Eclipse 3.0
        </p>
        <p>
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&bug_status=RESOLVED&chfieldfrom=2005-11-17&chfieldto=2005-12-14">
           complete list of resolved issues since M5.</a>
        </p>
			</li>
		<li>
			<a name="compiler20051206">Updated AspectJ Compiler</a>	
		<p>
           The AspectJ build included in AJDT has been updated in the following development builds:
           <br>1.2.1.20051206134030 for Eclipse 3.0
           <br>1.3.0.20051206071819 for Eclipse 3.1
        </p>
        <p>
           The timestamp of the included AspectJ 5 build is 20051206103951.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2005-11-30&chfieldto=2005-12-06&chfield=bug_status&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=&field0-1-0=noop&type0-1-0=noop&value0-1-0=&field0-1-1=noop&type0-1-1=noop&value0-1-1=&field1-0-0=noop&type1-0-0=noop&value1-0-0=">
           list of AspectJ bugs fixed in this build since last weeks update.</a>
        </p>        
		</li>
		
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
       <p><a href="ltwscreenshot.png">
       <img src="ltwscreenshot450.png" width="450" height="392" alt="Screenshot showing the load-time weaving launch configuration"></a></p>
			
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
        
        
        <p>The goal of this new functionality is to answer the "What's changed?" question in relation
        to the aspect-oriented structure of your application. Say you make a release of your project
        and then you do some refactoring such as renaming some methods, adding new methods, optimizing
        pointcuts etc. The advice in your project may now be matching in different places (or in
        additional, or fewer places) but in anything other than very small projects it would be hard to
        spot this purely from the editor markers, Cross References view, and Visualiser view offered by
        AJDT. These views show you the current state of the crosscutting but not how it has changed --
        this is where the Crosscutting Comparison view comes in.</p>
        <p><a href="comparison.png">
        <img src="comparison450.png" width="450" height="131" alt="screenshot showing the Crosscutting Comparison view"></a></p>
		
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
           The <b>New Aspect wizard</b> now more closely matches the appearance and
           functionality of the current version of the New Class wizard.
           In addition to supporting the modifiers and extra instantiation options
           applicable to aspects, code completion is available for package names,
           and when extending an abstract aspect, stubs can be created for any
           inherited abstract pointcuts.
              <br><a href="NewAspect.png">
              <img src="NewAspect450.png" width="450" height="568" alt="screenshot showing the New Aspect wizard"></a>
           </p>
           <p>The comments generated and formatting
           used for new aspects matches the Eclipse settings for new
           classes - for example on Eclipse 3.1 the default is not to
           generate comments.
              <br><img src="generatedAspect.png" width="450" height="218" alt="screenshot showing a generated aspect">
           </p>
 
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
		     <b>Cross References View</b> (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=95724">95724</a>)
		     <br>
		     A new 'Filters...' button has been added to the Cross References view menu which can be
		     accessed via the drop down toggle button on the toolbar or by pressing the key
		     combination Ctrl + F10.
			 <br><img src="xRefViewMenu.PNG" width="450" height="181" alt="Screenshot showing the Cross References view menu">
		     </p>
		     <p>
		     This presents a dialog containing the various types of relationship which can be excluded
		     from the view.
		     <br><img src="xRefFilterDialog.PNG" width="301" height="135" alt="Screenshot showing the Cross References filter dialog">
		     </p>
		    
		     <p>
             Checking relationships in the dialog and clicking OK will see any relationships of this
             type filtered from the view.
		     <br><img src="xRefViewFiltered.PNG" width="450" height="131" alt="Screenshot showing the filtered Cross References view">
		     </p>
		     <p>
		     <b>Cross References In-place View</b> (Ctrl+Alt+X)
             	     <br>
		     The same functionality is available in the quick form of the Cross References view
		     which appears over the editor. The filters applied to each view are independent of each
		     another.
		     <br><img src="xRefInplaceViewMenu.PNG" width="450" height="157" alt="Screenshot showing the Cross References in-place view menu">
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

		     <p>
		     <b>Control-click hyperlink navigation for pointcuts</b>
		     (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108341">108341</a>)
             <br>You can also hold down the control key and mouse over the use of named
             pointcuts, which now appear as hyperlinks, so that you can click to
             navigate to the pointcut definition. Note that the implementation of this
             hyperlink feature uses Eclipse 3.1 API and so is not available on AJDT 1.2.1 for Eclipse 3.0.
		     <br><img src="hyperlink.png" width="450" height="93" alt="Screenshot showing a control-click hyperlink"> 
		     </p>

		     <p>
		     <b>Source hover for pointcuts</b>
		     (enhancement <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108730">108730</a>)
		     <br>As an alternative of navigating to a pointcut's definition, you can also
		     hover over the use of the pointcut, and the source code for it will
		     appear as a tooltip.
		     <br><img src="sourcehover.png" width="450" height="127" alt="Screenshot showing a pointcut source hover">
		     </p>
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
