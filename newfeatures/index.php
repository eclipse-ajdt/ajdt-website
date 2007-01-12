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
	<h3>New Features added during 1.5 development</h3>

	<ul>
	
		<li>
			<a name="ccmaps">Crosscutting Maps and View changes</a>
			    <span class="dates">(posted 12-01-07)</span>
			<p>
			    Several minor improvements have been added recently
			    (1.5.0.200701100718 for Eclipse 3.3M4) relating
			    to crosscutting maps and the crosscutting comparison view:
			</p>
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
		</li>

		<li>
			<a name="attributes">AspectJ Build Path configuration</a>	
				<span class="dates">(posted 21-12-06)</span>
			<p>
				AspectJ aspectpath and inpath entries were previously stored
				as Eclipse preferences in a ".settings" folder. Now, as of development
				build 1.5.0.200612211200 for Eclipse 3.3M4, these settings are instead stored
				in the ".classpath" file. They appear as regular classpath entries with
				the addition of a custom attribute which indicates if that entry is
				also on the aspectpath or inpath.
			</p>
			
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
			<img src="ajbuildpath.png" width="339" height="167" alt="Aspectpath and inpath entries">     
		</li>
	
		<li>
			<a name="xrefcopy">Select and copy from the Cross References view</a>	
				<span class="dates">(posted 29-11-06)</span>
			<p>
				As of development build 1.5.0.200611290802 for Eclipse 3.3M3 you can now copy
				the contents of the Cross References view to the clipboard as text. You can
				do this by selecting the entries required or by using the "Select All" action, and
				then using the standard "Copy" action -- either with the standard key bindings,
				the workbench Edit menu, or the new context menu as shown below.
			</p>
			<img src="xrefcopy.png" width="290" height="116" alt="Select and copy from the Cross References view">     
		</li>
	
	
	</ul>

	</div>


    <div class="homeitem3col">
	<h3>New Features added during 1.4.1 development</h3>
		<ul>

		<li>
			<a name="compiler20061020">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 20-10-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200610200812 for Eclipse 3.2
           <br>1.5.0.200610200946 for Eclipse 3.3M2
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200610201049.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-10-17&chfieldto=2006-10-20&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="compiler20061017">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 19-10-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200610180910 for Eclipse 3.2
           <br>1.5.0.200610180947 for Eclipse 3.3M2
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200610171505.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-10-09&chfieldto=2006-10-17&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="compiler20061009">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 10-10-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200610100440 for Eclipse 3.2
           <br>1.5.0.200610100535 for Eclipse 3.3M2
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200610091525.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-09-28&chfieldto=2006-10-09&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>

		<li>
			<a name="rename">Refactoring participant</a>	
			<span class="dates">(posted 29-09-06)</span>
		<p>
			When you rename a Java class, there is now an aspect
			rename participant that will search for and update
			references to that class from any aspects in the same
			project.
        </p>
        <img src="renameparticipant.png" width="442" height="261" alt="Rename type participant">      
        <p>
            This new functionality is included in development builds           
            1.4.1.200610010506 for Eclipse 3.2 and
            1.5.0.200609291129 for Eclipse 3.3M2.
        </p>        
  
		</li>

		<li>
			<a name="compiler20060927">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 28-09-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.2.3.20060927145336 for Eclipse 3.0
           <br>1.3.3.20060927115623 for Eclipse 3.1
           <br>1.4.1.200609271031 for Eclipse 3.2
           <br>1.5.0.200609270959 for Eclipse 3.3M2
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200609271036.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-09-21&chfieldto=2006-09-28&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>
		
		<li>
			<a name="33M2">Support for Eclipse 3.3M2</a>	
			<span class="dates">(posted 23-09-06)</span>
		<p>
			Development build 1.5.0.200609210841 supports Eclipse 3.3M2.
			(It also works on 3.3M1, but future development builds may not).
		</p>		
		</li>
		
		<li>
			<a name="compiler20060921">Updated AspectJ Compiler</a>	
			<span class="dates">(posted 21-09-06)</span>
		<p>
           The AspectJ build included in AJDT has been updated in the following 
           development builds:
           <br>1.4.1.200609210900 for Eclipse 3.2
           <br>1.5.0.200609210841 for Eclipse 3.3M1
        </p>
        <p>
           The version of the included AspectJ 5 build is 1.5.3.200609210822.
           See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-08-29&chfieldto=2006-09-21&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
           list of AspectJ bugs fixed in this build since the last compiler update.</a>
        </p>        
  
		</li>
		
		<li>
			<a name="binaryweaving">Improved Binary Weaving support</a>	
			<span class="dates">(posted 11-09-06)</span>
		<p>
			With AJDT 1.4, if you have a project containing some aspects, and you
			add the output folder to the aspect path of another
			project, the advised locations will show as being advised
			by a binary aspect and no navigation to the advice is
			possible. Also there are no "advises" relationships shown
			in the project containing the aspects, as the weaving
			is done in the other project. Now AJDT looks for these
			binary aspects in your workspace, and locates the
			corresponding source code. The appropriate relationships
			and markers can then be shown (for both the source and
			target of the advice) in the same way as for source
			weaving within a single project.
		</p>
		<img src="binaryweaving.gif" width="450" height="248" alt="Improve support for binary weaving">
		<p>
		  To try out this support, make sure you are using either
		  1.4.1.200609111054 for Eclipse 3.2 or
		  1.5.0.200609111120 for Eclipse 3.3M1, or any more recent
		  builds. It should work when either a class folder or
		  a JAR file is added to the aspect path, so long as
		  the containing project has a source folder containing the
		  code for the relevant aspects.
		</p>
		</li>

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

			
		<hr class="clearer" />
	</div>

$rightcolumn

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
