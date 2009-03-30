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
	
	<h1>Information for developers</h1>
	
	<p>AJDT is changing rapidly and so some of this document may be out of date.  If you find anything that is out of date or you have any problems following these instructions, please send a note to the <a href="https://dev.eclipse.org/mailman/listinfo/ajdt-dev">AJDT mailing list</a>.  We are a friendly bunch and want to encourage new developers to contribute to AJDT.</p>
	
<p>There are many ways to contribute to AJDT even if you are not developing code: answering questions (or asking them) on the mailing list, raising bugs and feature requests, submitting documentation and sample programs, and generally being a constructive member of the community.  These are all ways you can help AJDT and AspectJ grow.  Of course, we also appreciate code contributions.

	

	<h2>Contributing</h2>
	<ol>
	  			<li><a href="#q:contribute">How can I contribute to the AJDT project?</a> </li>
	  			<li><a href="#q:source">Where will I find the source for AJDT? </a> </li>
	  			<li><a href="#q:versions">What do the version numbers mean?</a> </li>
					<li><a href="#q:cvs">How can I connect the AJDT CVS repository? </a> </li>
					<li><a href="#q:cvsbranch">I am looking for the AJDT branch 1.X in the CVS repository, but I can&rsquo;t find it.  
					What gives? </a> </li>
					<li><a href="#q:develop">How do I setup an AJDT development environment in Eclipse? </a> </li>
	  			<li><a href="#q:packaging">How can I package my sample code for contribution to the examples plug-in?</a> </li>
	  			<li><a href="#q:extend">How can I build tools which extend AJDT?</a> </li>
	  			
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
				AJDT source is held in the Eclipse CVS repository under /cvsroot/tools, see the <a
				href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.ajdt/AJDT_src/?root=Tools_Project"> root
				of the AJDT source tree online</a>.
				AJDT is organized in subdirectories under org.eclipse.ajdt. The main source
				tree is in the &#8220;AJDT_src&#8221; subdirectory.  Currently, the HEAD of this directory contains source code
				for AJDT 1.6 (for Eclipse 3.4), although this will change to AJDT 1.7 as Eclipse 3.5 moves closer to its final release.  The source code for AJDT 1.7 is in the ajdt1_7 branch.
			</p><p>
				Similarly, the source code for the Eclipse 3.3 version of AJDT is contained in the ajdt1_5 branch, 
				the source code for the Eclipse 3.2 version of AJDT is contained in
				the "ajdt1_4" branch, and the source code for the Eclipse 3.1 version is contained
				in the "ajdt1_3" branch. Here is a description of the various AJDT
				plug-ins and features.  Some CVS folders are skipped because they are no longer relevant to the current AJDT implementation.
			</p>

				<table>
				
				 <tr>
				  <td><strong>Relevant packages under &#8220;AJDT_src&#8221;</strong></td>
				  <td ><strong>Description</strong></td>
				 </tr>
				 
				 <tr>
				   <td colspan="2">Plugins</td>
				 </tr>
				 <tr>
				  <td>org.aspectj.ajde</td>
				  <td>The AspectJ compiler and related classes</td>
				 </tr>
				 
				 <tr>
				  <td>org.aspectj.runtime<o:p></td>				   
				  <td>The AspectJ runtime classes packaged in a jar file</td>				   
				 </tr>

				 <tr>
				  <td>org.aspectj.weaver<o:p></td>				   
				  <td>The AspectJ weaver packaged in a jar file</td>				   
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
				  <td>org.eclipse.ajdt.mylyn.ui</td>				   
				  <td>AJDT-Mylyn connector</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.mylyn.ui</td>				   
				  <td>AJDT-Mylyn connector tests</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.pde.build</td>				   
				  <td>Headless build plugin.  This is used by the headless build process to build AJDT.</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.source</td>				   
				  <td>Source code for AJDT plug-ins - only populated by the build process.  Includes visualizer source code</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.ui.tests</td>			   
				  <td>AJDT UI Tests</td>			   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.ajdt.ui</td>				   
				  <td>The AJDT UI plug-in</td>				   
				 </tr>
				 
				 <tr>
				  <td >org.eclipse.aspectj</td>				   
				  <td>The <em>branding</em> plug-in</td>				   
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
				  <td>org.eclipse.contribution.weaving.jdt</td>
				  <td>JDT Weaving plugin.  This plugin contains zips of the Equinox Aspects project that is unzip and added to the update site during the build process.  AJDT 1.6+</td>
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.weaving.source</td>
				  <td>JDT Weaving plugin source code.  AJDT 1.6+</td>
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
				  <td>org.eclipse.contribution.xref.source</td>				   
				  <td >The Cross References source code.  AJDT 1.6+</td>				   
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
				   <td colspan="2">Features</td>
				 </tr>

				 <tr>
				  <td>org.eclipse.ajdt-feature</td>				   
				  <td>The AJDT feature</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.weaving-feature</td>				   
				  <td>Eclipse Weaving service feature (includes JDT Weaving).  AJDT 1.6+</td>				   
				 </tr>
				 
				 <tr>
				  <td>org.eclipse.contribution.xref-feature</td>				   
				  <td>The Cross References feature</td>				   
				 </tr>
				 
				 <tr>
				  <td >org.eclipse.aspectj.feature-tests</td>				   
				  <td>The test feature/td>				   
				 </tr>
				 
				 <tr>
				   <td colspan="2">Other</td>
				 </tr>

				 <tr>
				  <td>UpdateSite</td>
				  <td>Non-Java project used to build an update site</td>
				 </tr>
				</table>    
		    </p>
		    </li>
	
	    <br><br>
			
		<a name="q:versions"></a>
			
			<li><em>What do the version numbers mean?</em>
			  <p>Each Eclipse point release has a corresponding AJDT point release.  Eclipse 3.1 
				requires AJDT 1.3, Eclipse 3.2 requires AJDT 1.4, Eclipse 3.3 requires AJDT 1.5, 
				Eclipse 3.4 requires AJDT 1.6, and Eclipse 3.5 requires AJDT 1.7.  Future releases 
				are expected to follow the same numbering system.</p>
				<p>In the CVS repository, each point release of AJDT has its own branch.  To do development on a 
				particular version, you must check out the appropriate branch.  See <a href="#q:cvs">How can 
				I connect the AJDT CVS repository? </a> 
				and <a href="#q:cvsbranch">I am looking for the AJDT branch 1.X in the CVS repository, but 
				I can't find it.  What gives? </a> for more details/p>
		    </li>
	
	    <br><br>
		<a name="q:cvs"></a>
			<li><em>How can I connect the AJDT CVS repository and download?</em>
			  <p>Use the following credentials to connect to the repository anonymously:<br/>
								
				<table>
				<tr><td>connection type:</td><td>pserver</td></tr>
				<tr><td>user:</td><td>anonymous</td></tr>
				<tr><td>password:</td><td><em>&lt;blank&gt;</em></td></tr>
				<tr><td>host:</td><td>dev.eclipse.org</td></tr>
				<tr><td>path:</td><td>/cvsroot/tools</td></tr>
				</table>
			
			  If you are connecting to the repository from Eclipse, do the following:
				<ol>
				<li>Start with a clean workspace under Eclipse 3.3, 3.4, or 3.5
				<li>Open the CVS Repository Exploring perspective. 
				<li>Right-click on the CVS Repositories view.
				<li>Click &ldquo;New&rdquo; &gt; &ldquo;Repository
			    Location&rdquo;. 
				<li>Fill in the blanks using the above credentials. 
				<li>Click &ldquo;Finish&rdquo;.
			  <li>Use the CVS Repositories view to navigate to
			    HEAD/org.eclipse.ajdt/AJDT_src. 
				</ol>
		    </li>
  	    </p>
	
	    <br><br>

		<a name="q:cvsbranch"></a>
			<li><em>I am looking for the AJDT branch 1.X in the CVS repository, but I can't find it.  
					What gives? </em>
	
				<p>Each point version of AJDT has its own branch in the CVS repository.  It may not be 
				initially visible if you are browsing the repository through Eclsipe.</p>
				
				<p>To discover a branch, do the following:
				<ol>
				<li>Right-click on the <code>org.eclipse.ajdt</code></li>
				<li>Select &ldquo;Configure Branches and Versions...&rdquo;
				<li>In the dialog that opens navigate to
			    AJDT_src/org.aspect.ajde/.project</li>
				<li>Various tags should appear in
			    the right hand side of the dialog</li>
				<li>Press &ldquo;Add Checked Tags&rdquo;, then
			    &ldquo;OK&rdquo;</li>
				<li>Back in the CVS Repositories view you should now be able to
			    navigate to <code>Branches/ajdt1_6/org.eclipse.ajdt ajdt1_6/AJDT_src</code></li>
				</ol>
				</p>
			</li>	
		<a name="q:develop"></a>
			<li><em>How do I setup an AJDT development environment in Eclipse?</em>
			
			    <p>There are three stages to this: building AJDT, running the
			    correctness tests, and creating an
			    Eclipse update site. The first two stages are sufficient
			    for most purposes.</p>
			
			    <h4>Building AJDT</h4>
			
				<p>Many of the plugins which implement AJDT contain aspects, and so are
				AspectJ projects themselves. This means that you first need to install
				a <em>recent</em> build of AJDT into your development environment from the
				update site or zip file.</p>
							
			    <p>Note also that in order to build AJDT from source you will probably
			    need to increase the memory available to Eclipse. This is
			    typically done by passing something like &ldquo;<code>-vmargs -Xmx512m</code>&rdquo; to
			    the Eclipse launcher.</p>
			
			    <p>See <a href="#q:cvs">How can I connect the AJDT CVS repository?</a> for 
					instructions on how to download the projects from CVS.</p>
			    
			    <p>If you are using Eclipse 3.5 you now need to switch to the
			    &ldquo;ajdt1_7&rdquo; branch in CVS.  See <a href="#q:cvsbranch">
					I am looking for the AJDT branch 1.X in the CVS repository, but I can&rsquo;t find it.  
  			  What gives? </a> for information on how to
					discover this branch.</p>
					
				<p>Eclipse 3.4 uses HEAD.</p>
			    
			    <p>If you are using Eclipse 3.3 you need to switch
			    to the &ldquo;ajdt1_5&rdquo; branch instead.</p>
			    
			    <p>If you are using Eclipse 3.2 you need to switch
			    to the &ldquo;ajdt1_4&rdquo; branch instead. Note that 
					AJDT 1.4 is only <em>lightly</em> supported now (i.e., 
					there is no ongoing development and only major bugs will 
					be fixed).</p>
			    
			    <p>Select the following projects,
			    right-click and select &ldquo;Check out&rdquo; from the context menu:</p>
			 
			    <ul>
			      <li>org.aspectj.ajde,</li>
			      <li>org.aspectj.runtime,</li>
			      <li>org.aspectj.weaver,</li>
			      <li>org.eclipse.ajdt.core,</li>
			      <li>org.eclipse.ajdt.examples,</li>
			      <li>org.eclipse.ajdt.ui,</li>
			      <li>org.eclipse.contribution.visualiser,</li>
			      <li>org.eclipse.contribution.xref.core,</li>
			      <li>org.eclipse.contribution.xref.ui,</li>
			      <li>org.eclipse.contribution.weaving.jdt.</li>
			    </ul>
			
			    <p>Eclipse will build the projects as you import them, after
			    which should you be ready to run the plugins inside Eclipse:</p>
			
			   <ul>
			     <li>Switch to the Java Perspective if you are not already in
			     it...</li>
			
			     <li>From the run menu select &ldquo;Run...&rdquo;</li>
			
				 <li>For Eclipse 3.4, choose <em>AJDT 1.6 Weaving</em></li>

				 <li>For Eclipse 3.5, choose <em>AJDT 1.7 Weaving</em></li>
			
			     <li>Click &ldquo;Run&rdquo;.  The reason for using predefined launchers is that in order to enable 
				 JDT Weaving, a custom config.ini is required.</li>

				<li>If weaving is not enabled at startup or if there are any other problems with the runtime workspace, 
				open up the custom config.ini (org.eclipse.contribution.weaving.jdt/config.ini) and make sure the entries
				align with your version of Eclipse.  You may need to edit the version number on the <em>osgi.bundles</em>
				line.</li>
				
				<li>If you continue to have problems, please send a message to the mailing list.</em>
			
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
			     <li>org.eclipse.ajdt.ui.visual.tests</li>			     
			     <li>org.eclipse.contribution.visualiser.tests</li>
			     <li>org.eclipse.contribution.xref.core.tests</li>
			     <li>org.eclipse.contribution.xref.ui.tests</li>
			     <li>org.eclipse.contribution.weaving.tests</li>
			   </ul>
			
			   <p>Note that since many of these tests will only pass if JDT Weaving to be enabled, special launch 
			 	configurations are provided:</p>
			
			   <ul>
				<li>All Weaving Tests---runs the JDT Weaving tests</li>
				<li>AllUITests_MaxPermSize---runs the AJDT UI tests</li>
				<li>AllCoreTests No UI---runs the core tests</li>
				<li>Some UI Tests---runs a sub-set of the UI tests as specified in the java file SomeUITests.java.  Edit this file to run any sub-set of the UI tests.</li>
				<li>Some Random Test case---allows you to run any single test case of AJDT.  Edit this launch configuration to specify a project and a test case inside of it.  Useful if you are checking only a single test, but don't want to generate a new, custom launch config for it.</li>
				
			  </ul>
			
			  <p>If you have any problems with the launch configurations, please send a note to the mailing list.</p>
				
				
			  <h4>Trouble Shooting</h4>
			  <p>
				If you are having problems starting your runtime workspace or running the tests, specifically, if Eclipse is in an infinite restart loop (see (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=235006">Bug 235006</a>), then try the following:
				
				<ol>
					<li>Edit org.eclipse.contribution.weaving.jdt/config.ini and comment the line: osgi.framework.extensions=org.eclipse.equinox.weaving.hook</li>
					<li>Run Eclipse (this will run Eclipse with JDT Weaving disabled).  Some tests will fail and some functionality will not work, but it is possible to test some things in this mode.</li>
					<li>Shut down Eclipse</li>
					<li>Uncomment the line from config.ini</li>
					<li>Restart Eclipse</li>
				</ol>
			  </p>
			
			   <p>Now you&srquo;re ready to start enhancing the plugins by adding to or
			   extending the code in your projects - just use run (or debug) to
			   try out your changes. When you have a patch to submit to the
			   project, go to the &ldquo;Team&lrquo; item in the project context menu and
			   select &ldquo;Create Patch...&rdquo;. Naturally the correctness tests should
			   also be run, and new tests written to accompany fixes or new
			   features.</p>
			
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
				    	<li>Create a jar file containing your source code, and at least one build 
						configuration file. Place this
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
		    
		    <br><br>
		<a name="q:extend"></a>
			<li><em>How can I build tools which extend AJDT?</em>
		    <p>
		       See this Eclipsepedia page: <a href="http://wiki.eclipse.org/index.php/Developer%27s_guide_to_building_tools_on_top_of_AJDT_and_AspectJ">Developer&rsquo;s guide to building tools on top of AJDT and AspectJ.</a>
		    </p>
		    </li>
		
	</ol>
	
	</ol>

		<hr class="clearer" />
	</div>

	$rightcolumn

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
