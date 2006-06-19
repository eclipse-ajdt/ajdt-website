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
	$pageTitle 		= "AJDT Demos";
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

<p>This page contains four AJDT demonstrations:
<div class="midlist">
<ul>
 <li>A very simple <a href="#HELLOWORLD-DEMO">HelloWorld</a> demo.</li>
 <li>A tour of the <a href="#VISUALISER-DEMO">Visualiser.</a></li>
 <li>A demo of the <a href="#COMPARISON-DEMO">Crosscutting Comparison view.</a></li>
 <li>A demo of <a href="#LTW-DEMO">Load-time Weaving</a> in AJDT.</li>
 <li>An introductory demonstration showing the use of AspectJ to <a href="#OBSERVER-DEMO">refactor a 
     crosscutting concern in an existing project</a>.</li>
 <li>A demonstration of <a href="#WSIF-DEMO">using aspect libraries</a> to create customized versions of
     a common component.
 </li>
</ul>
</div>
</p>

	<div class="homeitem3col">
	<h3><a name="HELLOWORLD-DEMO">Demonstration: HelloWorld</a></h3>
		
	<p>This small demo (about 3MB) gives you a first look at
	AJDT. Click on the image below to go to the demo. It has been
	updated to show AJDT 1.4 on Eclipse 3.2.</p>

<p align=center>
<a href="HelloWorldAspectJ.html"><img src="HelloWorldAspectJ.png" width="450" height="338" border="0"></a>
</p>

</div>    
<div class="homeitem3col">
	    <h3><a name="VISUALISER-DEMO">Demonstration: The Visualiser</a></h3>
  
<p>This small demo (just over 1MB) shows you how to use the Visualiser with your AspectJ projects.
It shows the latest look and feel from AJDT 1.2.0M1. Click on the image below to go to the demo.</p>

<p align=center>
<a href="VisualiserDemo.html"><img src="VisualiserDemo.png" width="450" height="321" border="0"></a>
</p>


</div>    
<div class="homeitem3col">
    <h3><a name="COMPARISON-DEMO">Demonstration: The Crosscutting Comparison view</a></h3>
  

  <p>This demo (about 2MB) shows how to use the Crosscutting Comparison view from AJDT 1.2.1 and 1.3.
This feature is designed to help you detect and keep track of changes to the crosscutting structure
of your project. Click on the image below to start the demo.</p>

<p align=center>
<a href="comparison.html"><img src="ComparisonDemo.png" width="450" height="336" border="0"></a>
</p>
    
</div>    
<div class="homeitem3col">
    <h3><a name="LTW-DEMO">Demonstration: Load-time Weaving</a></h3>
  
<p>This demo (about 1MB) shows how do load-time weaving in AJDT 1.2.1 and 1.3.
 Click on the image below to start the demo.</p>

<p align=center>
<a href="LTWDemo.html"><img src="LTWDemo.png" width="450" height="353" border="0"></a>
</p>
    

</div>    
<div class="homeitem3col">  
    <h3><a name="OBSERVER-DEMO">Demonstration: Developing with AspectJ and AJDT</a></h3>
   
    
       <p>This demonstration shows the use of AspectJ and AJDT to
       refactor a crosscutting concern (view notification) in a simple
       insurance application. The demo is about 18MB in size (split
       into four parts), and includes an audio commentary.</p>

       <p align="center">
       <a href="ajdt-ins1.html">
       <img src="ins-demo.png" width="450" height="323" border="0" align="center"/>
       </a>
       </p>

<ul><li>
       In <a href="ajdt-ins1.html">part 1</a>, we introduce the insurance 
       application and show you how to
       convert an existing Java project in the Eclipse workspace to an 
       AspectJ project. We also demonstrate how to create a new aspect using
       the New Aspect Wizard.
</li><li>

          
       In <a href="ajdt-ins2.html">part 2</a>, we show how to use the 
       <code>declare warning</code> 
       construct to find all the places in the Insurance application
       concerned with view notification.
</li><li>

       In <a href="ajdt-ins3.html">part 3</a>, the implementation of view 
       notification is modularized
       in the aspect, and we show you how to use the AspectJ Development 
       Tools (AJDT) to navigate around the structure of the program.
</li><li>

       In <a href="ajdt-ins4.html">part 4</a>, we complete the 
       implementation by ensuring that the
       test suite still passes, and leave behind a guard so that the 
       modular implementation of view notification we just put in place 
       cannot be accidently comprised by subsequent program maintenance.
</li></ul>       

</div>    
<div class="homeitem3col">  
      <h3><a name="WSIF-DEMO">Demonstration: Using an Aspect Library</a></h3>

      <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

       <p>This demonstration shows the use of AspectJ and AJDT with
       aspects from an aspect library to add WebSphere common services to
       an open source component - WSIF. The demo is about 21MB in size (split
       into four parts), and includes an audio commentary.</p>

       <p align="center">
       <a href="wsif1.html">
       <img src="wsif-demo.png" width="450" height="324" border="0" align="center"/>
       </a>
       </p>

<ul><li>

       In <a href="wsif1.html">part 1</a>, we introduce the Web Services 
       Invocation Framework (WSIF) and
       the scenario that we are trying to address with AspectJ - the creation
       of a small "product-line" with WebSphere and non-WebSphere versions of
       WSIF created from the same source code base.
</li><li>
       In <a href="wsif2.html">part 2</a>, we show the aspect library 
       project and how the WSIF
       project is configured to use it. Then we add a first-failure data
       capture handling facility to WSIF and visualize the results.
</li><li>

       In <a href="wsif3.html">part 3</a>, we add a monitoring and 
       statistics gathering capability to WSIF.
</li><li>
        In <a href="wsif4.html">part 4</a>, we add a tracing facility, and 
	show how easy it is to
        change and evolve an aspect-based tracing policy. 

</li></ul>
</div>

		<hr class="clearer" />
	</div>

	$rightcolumn

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
