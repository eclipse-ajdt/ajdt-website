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
	$pageTitle 		= "AJDT: Information for developers";
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

	<h2>Contributing</h2>
	<ol>
	  			<li><a href="#q:contribute">How can I contribute to the AJDT project?</a> </li>
	  			<li><a href="#q:source">Where will I find the source for AJDT? </a> </li>
	  			<li><a href="#q:develop">How do I setup an AJDT development environment in Eclipse? </a> </li>
	  			<li><a href="#q:packaging">How can I package my sample code for contribution to the examples plug-in?</a> </li>
	</ol>
	
	<hr>
			
		<ol>
		<a name="q:contribute"></a>
			<li><em>How can I contribute to the AJDT project?</em>
		    <p>
			    Your contributions to the AJDT project are strongly welcomed! You can create a 
			    patch that fixes a bug or provides an enhancement and submit
				it to the AJDT developers either as an attachment to a bug in Bugzilla, or as an 
				attachment to a post to the newsgroup or developer mailing list.
			    You can also contribute sample code showing interesting uses of AspectJ, by adding 
			    entries to the example plug-in.
				All contributions must be made available under the 
				<a href="http://www.eclipse.org/legal/termsofuse.php">terms of the Eclipse website</a> see
				the Eclipse 
				<a href="http://www.eclipse.org/legal/legalfaq.php#contributions">contribution and participation FAQ</a>. Sorry, but for legal reasons
				we are unable to accept patches emailed directly to developers, and will
				 normally ask you to resubmit these either via Bugzilla or the mailing list.
				AJDT development is run as a meritocracy, developers who have a track 
				record of submitting good patches can become committers on the project.
		    </p>
		    </li>

		<a name="q:source"></a>
			<li><em>Where will I find the source for AJDT?</em>
			<p>
				AJDT source is held in the Eclipse CVS repository under /cvsroot/technology, see the <a
				href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.ajdt/"> root
				of the AJDT source tree online</a>.
				AJDT is organized in subdirectories under org.eclipse.ajdt. The main source
				tree is in the &#8220;AJDT_src&#8221; subdirectory.
				The source code for the Eclipse 3.2 version of AJDT is contained in
				the "ajdt1_4" branch, and the source code for the Eclipse 3.1 version is contained
				in the "ajdt1_3" branch. Here is a description of the various AJDT
				plug-ins:
			</p>

				<table>
				
				 <tr>
				  <td><strong>Plug-ins under &#8220;AJDT_src&#8221;</strong></td>
				  <td ><strong>Description</strong></td>
				 </tr>
				 
				 <tr>
				  <td>org.aspectj.ajde</td>
				  <td>The AspectJ compiler and related classes</td>
				 </tr>
				 
				 <tr>
				  <td>org.aspectj.runtime<o:p></td>				   
				  <td>The AspectJ runtime classes</td>				   
				 </tr>

				 <tr>
				  <td>org.aspectj.weaver<o:p></td>				   
				  <td>The AspectJ weaver</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.build</td>				   
				  <td>Automatic build plug-in &#8211; only used by the build process (AJDT 1.2 only)</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.core</td>				   
				  <td>Non-UI parts of AJDT</td>				   
				 </tr>
				 
				  <tr>
				  <td>org.eclipse.ajdt.core.tests</td>				   
				  <td>AJDT Core tests</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.examples</td>				   
				  <td>AspectJ examples plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.source</td>				   
				  <td>Source code for AJDT plug-ins - only populated by the build process</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.ui.tests</td>			   
				  <td>AJDT UI Tests</td>			   
				 </tr>
				 <tr>
				  <td>org.eclipse.ajdt.tests.performance</td>				   
				  <td>AJDT performance tests</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.ui</td>				   
				  <td>The AJDT UI plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.aspectj</td>				   
				  <td>The AspectJ feature</td>				   
				 </tr>
				 
				 <tr>
				  <td >org.eclipse.aspectj.feature</td>				   
				  <td>The &quot;feature&quot; plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.visualiser</td>				   
				  <td>The Visualiser plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.visualiser.tests</td>
				  <td>Visualiser tests</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.xref.core</td>				   
				  <td >The Cross References plug-in (non-UI)</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.xref.core.tests</td>				   
				  <td>Tests for the above</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.xref.ui</td>				   
				  <td>The Cross References UI plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.xref.ui.tests</td>				   
				  <td>Tests for the above</td>				   
				 </tr>
				 
				 <tr>
				  <td>UpdateSite</td>
				  <td>Plug-in used to build an update site</td>
				 </tr>
				</table>    
		    </p>
		    </li>
	
		<a name="q:develop"></a>
			<li><em>How do I setup an AJDT development environment in Eclipse?</em>
			    <p>There are several stages to this: building AJDT, running the
			    correctness tests, and creating an
			    Eclipse update site. The first two stages are probably sufficient
			    for most purposes.</p>
			
			    <h4>Building AJDT</h4>
			
				<p>Many of the plugins which implement AJDT contain aspects, and so are
				AspectJ projects themselves. This means that you first need to install
				a recent build of AJDT into your development environment from the
				update site or zip file.</p>
							
			    <p>Note also that in order to build AJDT from source you will probably
			    need to increase the memory available to Eclipse. This is
			    typically done by passing something like <code>"-vmargs -Xmx512m"</code> to
			    the Eclipse launcher.</p>
			
			    <p>Start with a clean workspace under Eclipse 3.2 or
			    Eclipse 3.1. Now open the CVS Repository Exploring 
			    perspective. Right-click on the CVS Repositories view, then click "New" > "Repository
			    Location". Host = dev.eclipse.org, Repository path =
			    /cvsroot/technology, Username = anonymous, password should be left
			    blank. Connection type = pserver. Click "Finish".
			    Use the CVS Repositories view to navigate to
			    HEAD/org.eclipse.ajdt/AJDT_src. </p>
			    
			    <p>If you are using Eclipse 3.2 you now need to switch to the
			    "ajdt1_4" branch in CVS. To discover the branch, you need to
			    right-click on org.eclipse.ajdt and select "Configure Branches
			    and Versions...", and in the dialog that opens navigate to
			    AJDT_src/org.aspect.ajde/.project. Various tags should appear in
			    the right hand side of the dialog. Press "Add Checked Tags", then
			    "OK". Back in the CVS Repositories view you should now be able to
			    navigate to Branches/ajdt1_4/org.eclipse.ajdt ajdt1_4/AJDT_src.
			    </p>
			    
			    <p>If you are using Eclipse 3.1 you need to switch
			    to the "ajdt1_3" branch instead.</p>
			    
			    <p>Select the following projects,
			    right-click and select "Check out" from the context menu:</p>
			 
			    <ul>
			      <li>org.aspectj.ajde,</li>
			      <li>org.aspectj.runtime,</li>
			      <li>org.aspectj.weaver,</li>
			      <li>org.eclipse.ajdt.core,</li>
			      <li>org.eclipse.ajdt.examples,</li>
			      <li>org.eclipse.ajdt.ui,</li>
			      <li>org.eclipse.contribution.visualiser,</li>
			      <li>org.eclipse.contribution.xref.core,</li>
			      <li>org.eclipse.contribution.xref.ui.</li>
			    </ul>
			
			    <p>Eclipse will build the projects as you import them, after
			    which should you be ready to run the plugins inside Eclipse:</p>
			
			   <ul>
			     <li>Switch to the Java Perspective if you're not already in
			     it...</li>
			
			     <li>From the run menu select "Run..."</li>
			
			     <li>Select "Eclipse Application" and click new</li>
			
			     <li>Give your launch configuration a name, and click "Run"</li>
			
			     <li>Subsequent runs can simpy use the launch configuration you
			     just created</li>
			   </ul>
			
			   <h4>Running the correctness tests</h4>
			
			   <p>The next step is to add the test projects. These can be used to
			   verify that everything is okay with your environment and
			   configuration, plus of course to verify the integrity of any
			   changes you might make. Switch back to the CVS perspective and
			   check-out the following projects:</p>
			
			   <ul>
			     <li>org.eclipse.ajdt.core.tests</li>
			     <li>org.eclipse.ajdt.ui.tests</li>
			     <li>org.eclipse.contribution.visualiser.tests</li>
			     <li>org.eclipse.contribution.xref.core.tests</li>
			     <li>org.eclipse.contribution.xref.ui.tests</li>
			   </ul>
			
			   <p>There are two steps to running all of the tests. The
			   first is to run the AJDT core specific tests found in
			   org.eclipse.ajdt.core.tests, and the second is to run
			   the remaining tests.</p>
			
			   <p>To run the AJDT core specific tests expand the
			   org.eclipse.ajdt.core.tests project, then the src folder, then the
			   org.eclipse.ajdt.core.tests package. Now select the AllCoreTests.java file,
			   right-click and select "Run As" &gt; "JUnit Plug-in Test". 
			   Progress and test results can be observed from the JUnit
			   Eclipse view.</p>
			   
			   <p>You can then run all of the remaining tests by expanding the
			   org.eclipse.ajdt.ui.tests project, then the src folder, then the
			   org.eclipse.ajdt.ui.tests package. Now select the AllUITests.java file,
			   right-click and select "Run As" &gt; "JUnit Plug-in Test". A new
			   runtime workbench should then be launched and the tests run inside
			   that. Progress and test results can be observed from the JUnit
			   Eclipse view.</p>
			
			   <p>Now you're ready to start enhancing the plugins by adding to or
			   extending the code in your projects - just use run (or debug) to
			   try out your changes. When you have a patch to submit to the
			   project, go to the "Team" item in the project context menu and
			   select "Create Patch...". Naturally the correctness tests should
			   also be run, and new tests written to accompany fixes or new
			   features.</p>
			
			   <h4>Running the ui visual tests</h4>
			
				<p>Along with the ui tests in the org.eclipse.ajdt.ui.tests project,
				there are visual ui tests in the org.eclipse.ajdt.ui.tests.visual package.
				A new runtime work bench will launch and the tests will run inside of that; 
				although be warned that you will not be able to do anything else while the tests
				are running (even switching to the other workbench) as the tests will fail.
                This is because keyboard events are generated in order to drive the user
                interface.</p>
			
			   <h4>Creating an update site</h4>
			
			   <p>Each of the AJDT plugin projects also contains an Ant build
			   file, "build.xml." The default target builds a packaged version of
			   the project in question. Check-out the "UpdateSite" project from
			   CVS, and use the build.xml file in that project to invoke a master
			   build that builds an entire update site structure in its "dist"
			   directory. To run the build.xml file inside Eclipse, you need to do
			   "Run As > Ant Build..." to bring up the run configuration dialog,
			   then go to the "JRE" tab and choose to run in a separate JRE.</p>
			
			   <p>Those plugins that use aspects in their implementation need
			   to be built using the AspectJ compiler. To do this the
			   "iajc" Ant task is used in each of the relevant build.xml files.
			   For this to run successfully, it needs to be able to locate
			   the org.aspectj.ajde and org.aspectj.weaver plugins from the
			   installed version of AJDT. Each build.xml file refers to the
			   specific version on AJDT installed on the build machine, so unless
			   you have exactly the same version installed, you need to uncomment
			   and override the "aspectj.plugin.home" and "aspectj.weaver.home"
			   properties in the build.xml file from the "UpdateSite" project.</p>
		    </li>
		
		<a name="q:packaging"></a>
			<li><em>How can I package my sample code for contribution to the examples plug-in?</em>
				<p>
				    The org.eclipse.ajdt.examples plugin contains various sample projects which 
				    are made available under
				    the Examples category of the New wizard, from where they can be imported into 
				    your workspace as AspectJ projects.
				    It is easy to add new samples to this plugin, as follows:
				    <ul>
				    	<li>Create a jar file containing your source code, and at least one build c
				    	onfiguration file. Place this
				    		in the archive folder of the examples plugin.
				    	<li>Add an entry to the plugin.xml file for your sample project, by copying 
				    	one of the existing entries.
				    	<li>Change the src attribute of the import element to refer to your jar 
				    	file, and change the title,
				    		description, pagetitle, and pagedescription property names as appropriate, and add
				    		corresponding entries to the plugin.properties file.
				    	<li>Change the build attribute to refer to your default build configuration 
				    	file. Your project may contain
				    	    more configurations but the one specified here will be the one used to 
				    	    initially build the project.
				    	<li>Optionally, you can specify an open attribute to the projectsetup element, 
				    	which refers to a file,
				    	    such as a README file, which is opened after the project has been imported 
				    	    to the workspace.   
				    </ul>
			    </p>
		    </li>
	</ol>

		<hr class="clearer" />
	</div>

	$rightcolumn

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
