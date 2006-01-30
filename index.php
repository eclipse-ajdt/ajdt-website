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

	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>
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
		resources. This will be accomplished by developing an integration
		layer between the AspectJ Development Environment Framework and
		Eclipse/JDT extension points.
		</p>

		  	</td>
          </tr>

        </table>
			 
		<div class="homeitem">
			<h3>New Features</h3>
			<ul>
			  <li>
      			<a href="newfeatures/#translations">Translations for AJDT 1.3 available</a>
				<span class="dates">posted 10-01-06</span>
			  </li>
			  			  
			  <li>
			    <a href="newfeatures/#ltw">Support for Load-Time Weaving
				</a>
				<span class="dates">posted 09-11-05</span>
			  </li>
			  
			  <li>
			    <a href="newfeatures/#accessibility">Accessibility review
				</a>
				<span class="dates">posted 31-10-05</span>
			  </li>

			  <li>
			    <a href="newfeatures/#i18n">Internationalization: Help Needed!</a>
				<span class="dates">posted 03-10-05</span>
			  </li>

			</ul>
		</div>
				
		<div class="homeitem">
		<h3>Releases and articles</h3>
			<ul>
			  <li>
      			<a href="downloads/">AJDT 1.2.1 and 1.3
				released!</a>
				See also <a href="whatsnew13/">New and Noteworthy for 1.2.1 and 1.3</a>
				<span class="dates">posted 20-12-05</span>
			  </li>
						  
			  <li>
			    <a href="http://www.ibm.com/developerworks/java/library/j-aopwork9/">
       			developerWorks article: New AJDT releases ease AOP development</a>
       			<span class="dates">posted 15-08-05</span>
			  </li>
			</ul>
		</div>
		
		<hr class="clearer" />
		
		<div class="homeitem3col">
			<h3>Upcoming Events</h3>
			<ul>
			  <li>EclipseCon 2006: The <a href="http://www.eclipsecon.org/2006/Sub.do?id=141">AspectJ tutorial</a>
			  and <a href="http://www.eclipsecon.org/2006/Sub.do?id=389">AJDT demo</a> have been accepted!
			  <span class="dates">posted 30-01-05</span>
			  </li>
			  
			  <li>EclipseCon 2006: Please vote for the following AspectJ/AJDT
			  related proposals still under consideration:<br>
			  <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=56">Integrating Load-Time Weaving into OSGi,</a><br>
			  <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=229">Implementing Aspect-Oriented RCP-Applications,</a><br>
			  <a href="http://canuck.gda.itesm.mx/eclipsezilla/show_bug.cgi?id=390">Extending JDT to support Java-like languages.</a><br>
			  <span class="dates">posted 30-01-05</span>
			  </li>
			  
			  <li>
 				<a href="http://aosd.net/conference">AOSD'06: Join us at the
 				fifth international conference on AOSD!
 				</a>
 				<span class="dates">posted 13-07-05</span>
 				
 				<a href="http://aosd.net/conference?ref_url=http://www.eclipse.org/ajdt/" target="_blank">
  				<img src="http://aosd.net/2006/publicity/AOSD06_Button.gif" 
    				border="0" alt="AOSD.06 March 20-24: Bonn, Germany" 
    				title="AOSD.06"/>
				</a>				
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
