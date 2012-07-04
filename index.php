<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Front page for the AJDT project
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "AspectJ Development Tools (AJDT)";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Andrew Eisenberg, Matt Chapman";
	
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

		<table border="0" cellpadding="4">
          <tr>
          	<td valign="top"><img border=0 src="logo.gif" width="164" height="229" alt="AJDT screenshot"></td>
          	<td valign="top">&nbsp;</td>
            <td valign="top">

		<p>
		Some aspects of system implementation, such as logging, error
		handling, standards enforcement and feature variations are
		notoriously difficult to implement in a modular way. The result
		is that code is tangled across a system and leads to quality,
		productivity and maintenance problems. Aspect Oriented Software
		Development enables the clean modularization of these crosscutting
		concerns. The AspectJ Development Tools (AJDT) project provides
		Eclipse platform based tool support for AOSD with AspectJ. Our goal
		is to deliver a user experience that is consistent with the Java
		Development Tools (JDT) when working with AspectJ projects and
		resources.
		</p>

		  	</td>
          </tr>

        </table>


		<div class="homeitem3col">
			<h3>News and Releases</h3>
			<ul>
				 <li>
						<img src="images/new.gif" width="11" height="11">
						<a href="whatsnew220">AJDT 2.2.0</a>
						is now available.  This is the first release that targets Juno.  This release includes <a
						href="http://eclipse.org/aspectj/doc/released/README-170.html">AspectJ 1.7.0</a>.
						The release build is available from the <a href="downloads">downloads</a> page.
						<br><span class="dates">posted 07-05-12</span>
				 </li>
 				 <li>
						AJDT configurator for m2e v1.0 is now available at 
						<a href="http://dist.springsource.org/release/AJDT/configurator/">http://dist.springsource.org/release/AJDT/configurator/</a>.
						Add this update site to your Eclipse install manager to install the configurator.  This configurator will ensure that 
						Maven projects in Eclipse are properly configured with AspectJ and AJDT.
						<br><span class="dates">posted 09-30-11</span>
				 </li>
			  <!--
 				 <li>
						<a href="whatsnew213">AJDT 2.1.3</a>
						is now available.  This is the first release that targets Indigo.  This release includes <a
						href="http://eclipse.org/aspectj/doc/released/README-1612.html">AspectJ 1.6.12.M1</a>.
						The release build is available from the <a href="downloads">downloads</a> page.
						<br><span class="dates">posted 06-29-11</span>
				 </li>
 				 <li>
						AJDT 2.1.3 targeting Eclipe 3.7 (Indigo) 
						dev builds are now available.  See <a href="downloads#dev37">downloads</a> page for more detail.
						<br><span class="dates">posted 03-14-11</span>
				 </li>
 				 <li>
						<a href="whatsnew212">AJDT 2.1.2</a>
						is now available.  This release includes <a
						href="http://eclipse.org/aspectj/doc/released/README-1611.html">AspectJ 1.6.11</a>.
						The release build is available from the <a href="downloads">downloads</a> page.
						<br><span class="dates">posted 03-14-11</span>
				 </li>
 				 <li>
						AJDT 2.1.2 M2
						is now available.  This release includes <a
						href="http://eclipse.org/aspectj/doc/released/README-1611.html">AspectJ 1.6.11 M2</a>.
						The release build is available from the <a href="downloads#dev36">downloads</a> page.
						<br><span class="dates">posted 02-24-11</span>
				 </li>
 				 <li>
						<a href="whatsnew212M1">AJDT 2.1.2 M1</a>
						is now available.  This release includes <a
						href="http://eclipse.org/aspectj/doc/released/README-1611.html">AspectJ 1.6.11 M1</a>.
						The release build is available from the <a href="downloads#dev36">downloads</a> page.
						<br><span class="dates">posted 12-09-10</span>
				 </li>
 				 <li>
				 		<a href="whatsnew211">AJDT 2.1.1</a> is here!  
				 		The release build is available from the <a href="downloads">downloads</a> page.  This
				 		release includes better AspectJ-aware searching and refactoring.
				 		<br><span class="dates">posted 10-22-10</span>
				 </li>
 				 <li>
				 		<a href="whatsnew210">AJDT 2.1.0</a> is here!  
				 		The release build is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 07-05-10</span>
				 </li>
 				 <li>
				 		AJDT build server has moved.  Keep track of the latest AJDT builds on 
				 		the <a href="http://build.springframework.org/browse/AJDT">new server</a>.
				 		<br><span class="dates">posted 07-05-10</span>
				 </li>
 				 <li>
				 		AJDT 2.1.0 
				 		<a href="http://www.eclipse.org/ajdt/release_reviews/AJDT2.1.0ReleaseReview.pdf">release review slides</a> are now available.
				 		<br><span class="dates">posted 06-16-10</span>
				 </li>
 				 <li>
				 		AJDT 2.1.0M1 is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 05-04-10</span>
				 </li>
 				 <li>
				 		AJDT is now available for Eclipse 3.6.  See the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 03-21-10</span>
				 </li>
 				 <li>
				 		<a href="whatsnew202">AJDT 2.0.2</a> is here!  
				 		The release build is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 12-31-09</span>
				 </li>
 				 <li>
				 		<a href="whatsnew201">AJDT 2.0.1</a> is here!  
				 		The release build is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 10-01-09</span>
				 </li>
 				 <li>One of the most respected books on AspectJ, 
				    <em><a href="http://manning.com/laddad2/">AspectJ in Action, Second Edition</a></em> by Ramnivas Laddad
				    is now available.<br><span class="dates">posted 09-15-09</span>
				 </li>
				 <li>
				 		<a href="whatsnew200">AJDT 2.0.0</a> is here!  
				 		The release build is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 06-24-09</span>
				 </li>
				 <li>
				 		<a href="whatsnew200">AJDT 2.0.0</a> is coming!  
				 		The release candidate is available from the <a href="downloads">downloads</a> page.
				 		<br><span class="dates">posted 06-09-09</span>
				 </li>
			   <li>
			     The AJDT team is pleased to announce the release of AJDT 1.6.4.  This release includes <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&target_milestone=1.6.4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">50 bug fixes</a>.  It also includes AspectJ version 1.6.4.20090304172355 which has an additional <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.6.4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">48 bugs fixed</a> since 1.6.3.  This version of AspectJ is <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/dev/aspectj-1.6.4-20090304172355.jar">available for download</a> separately from AJDT.
					 See the <a href="downloads/">downloads page</a> for installation instructions.
			     <br><span class="dates">posted 03-20-09</span>
			   </li>
				 <li>
				 		Come check out our blogs for <a href="http://contraptionsforprogramming.blogspot.com/">AJDT</a> 
				 		and <a href="http://andrewclement.blogspot.com/">AspectJ</a>!
				 </li>
				 <li>
				 	  Pre-release of AJDT 1.7 (for Eclispe 3.5) is available.  This build is for people who require Eclipse 3.5
				 	  and AJDT.  See the <a href="downloads/">downloads page</a> for installation instructions.<span class="dates">posted 03-02-09</span>
				 </li>
			   <li>
			     AJDT 1.6.3 is released!  See the <a href="downloads/">downloads page</a> for installation instructions.
			     <br><span class="dates">posted 01-27-09</span>
			   </li>
			   <li>
			     AJDT is at <a href="http://www.eclipsecon.org/2009/" target="_blank">EclipseCon</a>! 
			     Come see our talk: <a href="http://www.eclipsecon.org/2009/sessions?id=648">Aspects Everywhere: 
			     Using Equinox Aspects to Provide Language Developers with Deep Eclipse Integration</a>
			     <br><a href="http://www.eclipsecon.org/2009/"><img border="0"
 								src="http://www.eclipsecon.org/2009/static/image/125x72.gif"
								 height="72" width="125" alt="EclipseCon 2009"/></a>  
			     <br><span class="dates">posted 01-27-09</span>
			   </li>
			   <li>
			     AJDT 1.6.2 is released!  See the <a href="downloads/">downloads page</a> for installation instructions.
			     <br><span class="dates">posted 01-05-09</span>
			   </li>
			   <li>
				Some exciting changes are in store for AJDT 1.6.2.  The theme of this release is <em>Aspects Everywhere</em>,
				where programmers using AJDT should be able to see the effects of their aspects wherever and whenever they apply.
				Some of the features you can expect to see are:
				<ul>
				  <li>ITD-aware content assist</li>
				  <li>ITD-aware type hierarchies</li>
				  <li>ITD-aware reconciling/eager parsing</li>
				  <li>Ablity to search for aspect elements using standard <em>Java search</em> and <em>Open Java type</em></li>
				</ul>
				How did we implement this? Well, we started eating our own dog food and are using AspectJ to provide deep integration 
				with Eclipse.  More specifically, we are using <a href="http://www.eclipse.org/equinox/incubator/aspects/index.php">Equinox Aspects</a>
				to provide a weaving mechanism for Eclipse plugins.  See the <a href="http://wiki.eclipse.org/JDT_weaving_implementation">wiki</a>
				for more information.<br>
				<br>For a preview, see the <a href="http://eclipse.org/ajdt/downloads#dev1.6">download page</a>. For more information, 
				see the <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving wiki page</a> page.
				<br><span class="dates">posted 02-12-08</span>
			   </li> 
			   <li>
			  	AJDT 1.6.1 is now available for Eclipse 3.4.  This includes the latest stable build of AspectJ 1.6.3.
			  	See the <a href="whatsnew161/index.html">New and Noteworthy</a> for more details on AJDT 1.6.1 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-162.html">AspectJ 1.6.2 Readme</a> for
			  	more details on what is in AspectJ1.6.3. AJDT 1.6.1 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 29-10-08</span>
			  </li>
			   <li>
			  	AJDT 1.6.0 is now available for Eclipse 3.4.  This includes the latest stable build of AspectJ 1.6.2.
			  	See the <a href="whatsnew16/index.html">New and Noteworthy</a> for more details on AJDT 1.6 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on what was in AspectJ1.6.1. AJDT 1.6 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 03-09-08</span>
			  </li>
			   <li>
			  	AJDT 1.5.3 is now available for Eclipse 3.3.  This includes AspectJ1.6.1.
			  	See the <a href="whatsnew153/index.html">New and Noteworthy</a> for more details on AJDT 1.5.3 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on AspectJ1.6.1. AJDT 1.5.3 is available via update site or as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 19-07-08</span>
			  </li>
 			  <li>
			  	AJDT 1.5.3 release candidate 1 is now available for Eclipse 3.3.  This includes AspectJ1.6.1.
			  	See the <a href="whatsnew153/index.html">New and Noteworthy</a> for more details on AJDT 1.5.3 and 
			  	the <a href="http://www.eclipse.org/aspectj/doc/released/README-161.html">AspectJ 1.6.1 Readme</a> for
			  	more details on AspectJ1.6.1. AJDT 1.5.3rc1 is available as a packaged zip of plugins,
			  	see the <a href="http://eclipse.org/ajdt/downloads">download page</a> for more information.
				<br><span class="dates">posted 15-07-08</span>
			  </li>
 			  <li>
			  	AJDT 1.5.2 is now available for Eclipse 3.3.  This includes AspectJ1.6.0 - there are
			  	more details about AspectJ1.6.0 in <a href="http://www.eclipse.org/aspectj/doc/released/README-160.html">this readme</a>. See the AJDT downloads page for the
			  	.zip download of 1.5.2 or use the release update site for Eclipse 3.3:
			  	http://download.eclipse.org/tools/ajdt/33/update .  The AJDT <b>dev</b> builds for Eclipse 3.3
			  	will now be AJDT 1.5.3 builds incorporating AspectJ 1.6.1 drivers.
				<br><span class="dates">posted 24-04-08</span>
			  </li>
 			  <li>
      			<a href="downloads/">AJDT 1.5.1 for Eclipse 3.3 released (includes AspectJ 1.5.4)</a>
				<br><span class="dates">posted 11-01-08</span>
			  </li>
			  <li>
      			<a href="downloads/">AJDT 1.5 for Eclipse 3.3 released as part of Europa!</a>
				See the <a href="whatsnew15/">New and Noteworthy</a>
				<br><span class="dates">posted 29-06-07</span>
			  </li>

			  <li>
			  	<a href="downloads/">AJDT 1.4.2 for Eclipse 3.2 released!</a>
				<br><span class="dates">posted 28-06-07</span>
			  </li>

			  <li>
      			<a href="downloads/#milestone">AJDT 1.5RC4 for Eclipse 3.3RC4 released!</a>
				<br><span class="dates">posted 20-06-07</span>
			  </li>
					  			
				<li>AJDT and AspectJ have been promoted to Eclipse Tools
				projects! Read more at
				<a href="http://www.infoq.com/news/aspectj-ajdt-eclipse-tools">InfoQ.</a>
				<br><span class="dates">posted 22-09-06</span><br>
				</li>
				-->
			</ul>
		</div>
				
		<hr class="clearer" />
					 
		<div class="homeitem">
			<h3>New Features</h3>
			<ul>
				<li>
					Support for Intertype Inner Types with <a href="whatsnew212/">AJDT 2.1.2</a>.
					<br><span class="dates">posted 03-14-11</span>
				</li>
				<li>
					Java search and rename refactoring now <a href="whatsnew211">recognizes</a>
					intertype declarations and declare declarations. 
					<br><span class="dates">posted 10-22-10</span>
				</li>
			  <li>
      			<a href="http://wiki.eclipse.org/JDT_weaving_features">JDT Weaving service 
      			provides tighter integration with Eclipse</a>
				<br><span class="dates">posted 01-27-09</span>
			  </li>
			  <li>
      			<a href="newfeatures/#attributes">AspectJ Build Path configuration</a>
				<br><span class="dates">posted 21-12-06</span>
			  </li>
			  <li>
			  	<a href="newfeatures/">See all New Features...</a>
			  </li>
			</ul>
		</div>
				
		<div class="homeitem">
		<h3>Articles and Books</h3>
			<ul>
			<li>
			    <a href="http://manning.com/laddad2/">AspectJ in Action, Second Edition</a><br>
					March 2009<br>
					by Ramnivas Laddad
			</li>
			  <li>
			    <a href="http://www.infoq.com/articles/aspectj-with-ajdt">
       			InfoQ article: Making AspectJ development easier with AJDT</a>
       			<br><span class="dates">posted 22-11-06</span>
			  </li>

			  <li>
			    <a href="http://www.eclipse.org/articles/Article-Introducing-AJDT/article.html">
       			Eclipse Corner article: Introducing AJDT: The AspectJ Development Tools</a>
       			<br><span class="dates">posted 18-10-06</span>
			  </li>
			  						  
			  <li>
			    <a href="http://www.ibm.com/developerworks/java/library/j-aopwork9/">
       			developerWorks article: New AJDT releases ease AOP development</a>
       			<br><span class="dates">posted 15-08-05</span>
			  </li>

			</ul>
		</div>
		
		<hr class="clearer" />

		
		<p>
			The AspectJ compiler is developed by the <a href="http://eclipse.org/aspectj">Eclipse AspectJ project</a>
			based on original research conducted at <a href="http://www.parc.xerox.com/research/projects/aspectj/default.html">PARC.</a>			
		</p>
	</div>

$rightcolumn

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
