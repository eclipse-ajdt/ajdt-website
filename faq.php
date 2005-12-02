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
	$pageTitle 		= "AJDT: Frequently Asked Questions";
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

		<ol>
		<li> Overview
			<ol>
	  			<li><a href="#q:whatisajdt">What is AJDT?</a> </li>
	  			<li><a href="#q:whodevelops">Who develops AJDT?</a> </li>
	  			<li><a href="#q:aspectj">How does AJDT relate to the AspectJ project?</a> </li>
			</ol>
		</li>
		
		<li> Community
			<ol>
	  			<li><a href="#q:mailinglists">Is there an AJDT mailing list?</a> </li>
	  			<li><a href="#q:newsgroups">Are there any newsgroups for AJDT users?</a> </li>
	  			<li><a href="#q:bugs">What do I do if I think I've found a bug in AJDT?</a> </li>
	  			<li><a href="#q:features">How can I request a new feature in AJDT?</a> </li>
			</ol>
		</li>

		<li> Using AJDT
			<ol>
				<li><a href="#q:version">What version of AJDT do I need?</a> </li>
	  			<li><a href="#q:keywords">Why aren't AspectJ keywords highlighted in the editor?</a> </li>
	  			<li><a href="#q:debug">How can I debug AspectJ programs in Eclipse?</a> </li>
	  			<li><a href="#q:breakpoints">Why don't breakpoints in around advice work?</a> </li>
	  			<li><a href="#q:visualiser">How does the Visualiser work?</a> </li>
	  			<li><a href="#q:errors">Why do I sometimes see errors in the editor but not in the problems view?</a> </li>
	  			<li><a href="#q:ajfiles">What problems are there for types in .aj files?</a> </li>
	  			<li><a href="#q:aspectsinjava">What happens if I write my aspects in .java files?</a> </li>
	  			<li><a href="#q:ant">How do I use Ant to build my AspectJ projects in AJDT?</a> </li>	 
	  			<li><a href="#q:upgrade">Can I upgrade my AspectJ version?</a> </li>
			</ol>
		</li>

		<li> Contributing
			<ol>
	  			<li><a href="#q:contribute">How can I contribute to the AJDT project?</a> </li>
	  			<li><a href="#q:source">Where will I find the source for AJDT? </a> </li>
	  			<li><a href="#q:develop">How do I setup an AJDT development environment in Eclipse? </a> </li>
	  			<li><a href="#q:packaging">How can I package my sample code for contribution to the examples plug-in?</a> </li>
			</ol>
		</li>

		<li> Plans
			<ol>	  			
			    <li><a href="#q:future">Where do I find out about future releases of AJDT?</a> </li>
	  			<li><a href="#q:next">What new AJDT features are being worked on at the moment?</a> </li>
	 		</ol>
	 	</li>
	</ol>
	
	<hr>
	
	<h2>Overview</h2>
		<ol>
		
		<a name="q:whatisajdt"></a>
			<li><em>What is AJDT?</em>
		    <p>
		      The <a href="http://www.eclipse.org/ajdt">AspectJ Development Tools project (AJDT)</a>
		      is a set of plug-ins for Eclipse that provide support for aspect-oriented software development 
		      using <a href="http://www.eclipse.org/aspectj">AspectJ</a> within the Eclipse IDE.
		    </p>
		    </li>
	
		<a name="q:whodevelops"></a>
			<li><em>Who develops AJDT?</em>
			<p>
		      AJDT is an open-source project hosted on eclipse.org, 
			 <a href="http://www.eclipse.org/ajdt/contributors.html">current contributors</a> 
		      are listed on the website. Anyone can get involved, see
		      <a href="#q:contribute">How can I contribute to the AJDT project?</a>
		    </p>
		    </li>
	
		<a name="q:aspectj"></a>		
			<li><em>How does AJDT relate to the AspectJ project?</em>
			<p>
		      AJDT provides Eclipse IDE integration for AspectJ, and includes the AJDE 
		      (AspectJ Development Environment) libraries from the AspectJ project as part of its
		      packaging. Development of the AspectJ compiler and AJDE takes place under the 
		      <a href="http://www.eclipse.org/aspectj">AspectJ project</a>. 
		    </p>
		    </li>
		</ol>
	
	<h2>Community</h2>
	<ol>
		<a name="q:mailinglists"></a>
			<li><em>Is there an AJDT mailing list?</em>
			<p>
			     AJDT has a developers mailing list, <a href="mailto:ajdt-dev@dev.eclipse.org">ajdt-dev@dev.eclipse.org</a>, 
			     with 
			     <a href="http://dev.eclipse.org/mailman/listinfo/ajdt-dev">archives and subscription information</a> 
			     available online. Questions regarding the use of AspectJ the language are best 
			     directed to the 
			     <a href="http://www.eclipse.org/aspectj/resources.php">AspectJ users mailing list</a>.
		    </p>
		    </li>		
		
		<a name="q:newsgroups"></a>
			<li><em>Are there any newsgroups for AJDT users?</em>
			<p>
				AJDT is supported through the 
			     <a href="news://eclipse.org/eclipse.technology.ajdt">eclipse.technology.ajdt</a> 
			     newsgroup. A 
			     <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt">web interface</a> 
			     is also available.
		    </p>
		    </li>
		
		<a name="q:bugs"></a>
			<li><em>What do I do if I think I've found a bug in AJDT?</em>
			<p>
			     First check the 
			     <a href="http://bugs.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&field0-0-0=product&type0-0-0=substring&value0-0-0=AJDT&field0-0-1=component&type0-0-1=substring&value0-0-1=AJDT&field0-0-2=short_desc&type0-0-2=substring&value0-0-2=AJDT&field0-0-3=status_whiteboard&type0-0-3=substring&value0-0-3=AJDT">
			     bug database</a> to see if you've hit a known problem. If it appears to be a 
			     genuinely new bug, please submit a 
			     <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT">bug report on AJDT using bugzilla</a>
			     following the 
			     <a href="http://bugs.eclipse.org/bugs/bugwritinghelp.html">bug reporting guidelines</a>.
			      
			    </p>
			    <p>
			     Extra useful information to include in an AJDT bug report:
			     <ul>
			       <li>Information from the AJDT Event Trace view. This view displays a lot of diagnositc
			           information about the execution of the plug-in, for example, it will show
			           you the exact classpaths being used for compilation, the time spent in the
			           compiler. To open the AJDT Event Trace go to <b>Window &gt Show view
			           &gt Other... &gt AspectJ &gt AJDT Event Trace</b>.</li>
			     </ul> 
		    </p>
		    </li>
		
		<a name="q:features"></a>
			<li><em>How can I request a new feature in AJDT?</em>
			<p>
				Informal requests can be posted to the <a href="news://eclipse.org/eclipse.technology.ajdt">newsgroup</a> 
			     or <a href="mailto:ajdt-dev@dev.eclipse.org">mailing list.</a> Formal requests can 
			     be made by raising an 
			     <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT&version=unspecified&rep_platform=PC&op_sys=Windows+2000&priority=P3&bug_severity=enhancement&bug_status=NEW&assigned_to=&cc=&bug_file_loc=&short_desc=&comment=&maketemplate=Remember+values+as+bookmarkable+template&form_name=enter_bug">AJDT enhancement request</a>
			     on Bugzilla.
 		    </p>
		    </li>
		
	</ol>

	<h2>Using AJDT</h2>
		<ol>
		<a name="q:version"></a>
			<li><em>What version of AJDT do I need?</em>
		    <p>
		     
		    </p>
		    </li>
		    
		<a name="q:keywords"></a>
			<li><em>Why aren't AspectJ keywords highlighted in the editor?</em>
		    <p>
		      The most common cause of this problem is having AspectJ constructs 
		      in Java files (files with the .java extension) and using the JDT's 
		      Java Editor. Aspects and AspectJ constructs should be contained in .aj 
		      files which are opened with the AspectJ Editor, an extension to the 
		      Java Editor.
		    </p>
		    </li>
	
		<a name="q:debug"></a>
			<li><em>How can I debug AspectJ programs in Eclipse?</em>
			<p>
		      AspectJ programs can be run in the debugger in the same way as Java 
		      programs. The tools enable the user to step into, through and out of 
		      advice. The AspectJ development tools also provide the facility to set 
		      breakpoints in aspects.
		    </p>
		    </li>
	
		<a name="q:breakpoints"></a>
			<li><em>Why don't breakpoints in around advice work?</em>
			<p>
		      Around advice is inlined by the weaver by default, which
		      means that breakpoints set in the declaring aspect are
		      not detected.  To disable inlining
		      select <strong>Window &gt; Preferences &gt; AspectJ &gt; Compiler</strong>.
		      Select the <strong>Advanced</strong> tab, then check <strong>No inline</strong>
		      and click <strong>OK</strong> to apply.
		    </p>
		    </li>
	
		<a name="q:visualiser"></a>
			<li><em>How does the Visualiser work?</em>
			<p>
		      The Visualiser is an extensible Eclipse plug-in that can be used to 
		      visualize anything that lends itself to a 'bars and stripes' style 
		      representation. In AJDT the Visualiser is used to show how aspects 
			  affect a project.  See the <a href="http://www.eclipse.org/ajdt/visualiser">
			  Visualiser web page</a> for more information.
		    </p>
		    </li>
	
		<a name="q:errors"></a>
			<li><em>Why do I sometimes see errors in the editor but not in the problems view?</em>
			<p>
				By default the AspectJ editor is used for files with the .aj extension and the Java editor
				 for files with the .java extension. Some experienced AspectJ users may wish to use AspectJ 
				 function in .java files such as referring to ITD methods or fields, using inner aspects, 
				 implementing interfaces defined in aspects or calling methods on aspects. In this case you 
				 will see errors in the Java editor (although there will not be errors in the problems view). 
				 You may wish to either convert the file extension to .aj or use the AspectJ editor.
		    </p>
			<p> To open a
				.java file with the AspectJ editor right click, then select <strong>Open With 
				&gt; AspectJ/Java Editor</strong>.  To use the AspectJ editor for all .java files
				select <strong>Window &gt; Preferences &gt; Workbench &gt; File Associations</strong>.
				Select <em>.java</em> in the right-hand window, then use the section below to change the 
				default editor.
			</p>
		    </li>	

		<a name="q:ajfiles"></a>
			<li><em>What problems are there for types in .aj files?</em>
			<p>
				There are several known issues for types contained in .aj files.
		
				<ul>
				<li>They are not found when using code assist (Ctrl+Space).</li>
				<li>They are not found when using add import (Ctrl+Shift+M).</li>
				<li>They are not found when using organize imports (Ctrl+Shift+O).</li>
				<li>There are no quick fixes available (Ctrl+1).</li>
				<li>They are not included in Java searches.</li>
				<li>They are not included in Call Hierarchy lists.</li>		
				<li>It is not possible to run JUnit tests written in .aj files.</li>		
				</ul>
		    </p>
		    </li>
	
		<a name="q:aspectsinjava"></a>
			<li><em>What happens if I write my aspects in .java files?</em>
			<p>
				AJDT does not support aspects written in .java files. Although
				the compiler will compile them correctly, you will find some
				loss of functionality in AJDT if you do use .java files for your aspects: 
				
				<ul>
					<li>The Outline and Package Explorer views will not show aspects or their contents.</li>
					<li>The Cross References view will not show any information for an aspect in a .java file, although it will
					show information for any classes advised by that aspect.</li>		
				</ul>
		    </p>
		    </li>	
		    
		<a name="q:ant"></a>
			<li><em>How do I use Ant to build my AspectJ projects in AJDT? </em>
			<p>
		     To use Ant to build an AspectJ project you need to use the iajc Ant task instead of the javac task.
		     The definition of this is found in ajde.jar in the org.aspectj.ajde plug-in.  In addition you will
		     need some other plug-ins on the classpath.  A simple example written on Eclipse 3.0.2 is shown below.  
		     Note that paths and version numbers will be different on different machines and different Eclipse versions.
		     Using Ant outside of AJDT will be slightly different - see the 
		     <a href="http://www.eclipse.org/aspectj/doc/released/devguide/antTasks-iajc.html">AspectJ development guide</a> for more details
		     and for more information about the iajc Ant task.
		    </p>
		    
		    <p><code>
			&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br><br>
			&lt;project name="Spacewar Example" default="spacewar" basedir="."&gt;<br><br>				
				
			&nbsp;&nbsp; &lt;target name="init" depends="init.variables,init.taskdefs" /&gt; <br><br>
					
			&nbsp;&nbsp; &lt;target name="init.variables" description="init variables"&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;property name="plugins.dir" location="${basedir}/../../plugins" /&gt; <br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;property name="aspectjrt.jar" location="${plugins.dir}/org.aspectj.runtime_1.5.0.20050517150219/aspectjrt.jar" /&gt; <br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;property name="ajde.jar" location="${plugins.dir}/org.aspectj.ajde_1.5.0.20050517150219/ajde.jar" /&gt; <br>				
			&nbsp;&nbsp; &lt;/target&gt;<br><br>				
					
			&nbsp;&nbsp; &lt;target name="init.taskdefs" depends="init.variables" unless="taskdefs.init"&gt;<br>				 
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;taskdef resource="org/aspectj/tools/ant/taskdefs/aspectjTaskdefs.properties"&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;classpath&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${ajde.jar}" /&gt; <br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/classpath&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;/taskdef&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;property name="taskdefs.init" value="true" /&gt; <br>
			&nbsp;&nbsp; &lt;/target&gt;<br><br>
					
			&nbsp;&nbsp; &lt;target name="spacewar" depends="init" description="build spacewar example"&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &lt;iajc destDir="${basedir}/bin" classpath="${aspectjrt.jar}" fork="true"&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;forkclasspath&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${plugins.dir}/org.eclipse.core.boot_3.0.0/boot.jar"/&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${plugins.dir}/org.eclipse.core.resources_3.0.2/resources.jar"/&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${plugins.dir}/org.eclipse.core.runtime_3.0.2/runtime.jar"/&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${plugins.dir}/org.eclipse.core.runtime.compatibility_3.0.2/compatibility.jar"/&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${plugins.dir}/org.apache.ant_1.6.2/lib/ant.jar"/&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="${ajde.jar}" /&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/forkclasspath&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;srcdir&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;pathelement path="src/" /&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/srcdir&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;	&lt;/iajc&gt;<br>
			&nbsp;&nbsp; &lt;/target&gt;<br><br>
					
			&lt;/project&gt;		<br><br>    
			</code></p>
		    </li>	
		    
		<a name="q:upgrade"></a>
			<li><em>Can I upgrade my AspectJ version?</em>
			<p>
		      Upgrading the AspectJ version in an install of AJDT is not generally recommended because it is likely that
		      different releases will not be compatible with each other. However we do plan to
		      provide some scripts in the near future that will upgrade your AspectJ to a higher compatible version if available.
		    </p>
		    </li>	
	</ol>	
		
	<h2>Contributing</h2>
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
				<a href="http://www.eclipse.org/legal/termsofuse.html">terms of the Eclipse website</a> see
				the Eclipse 
				<a href="http://www.eclipse.org/legal/legalfaq.html#contributions">contribution and participation FAQ</a>. Sorry, but for legal reasons
				we are unable to accept patches emailed directly to developers, and will
				 normally ask you to resubmit these either via Bugzilla or the mailing list.
				AJDT development is run as a meritocracy, developers who have a track 
				record of submitting good patches can become committers on the project.
		    </p>
		    </li>

		<a name="q:source"></a>
			<li><em>Where will I find the source for AJDT?</em>
			<p>
				AJDT source is held in the Eclipse CVS repository under /home/technology, see the <a
				href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.ajdt/"> root
				of the AJDT source tree online</a>.
				AJDT is organized in subdirectories under org.eclipse.ajdt. The main source
				tree is in the &#8220;AJDT_src&#8221; subdirectory.
				The source code for the Eclipse 3.1 version of AJDT is contained in
				CVS HEAD, and the source code for the Eclipse 3.0 version is contained
				in the "ajdt1_2" branch. Here is a description of the various AJDT
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
				  <td>Automatic build plug-in &#8211; only used by the build process</td>				   
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
			    correctness tests, running the performance tests, and creating an
			    Eclipse update site. The first two stages are probably sufficient
			    for most purposes.
			    Note that an additional step is required for Eclipse 3.0, as
			    the source code is contained in a CVS branch.</p>
			
			    <h4>Building AJDT</h4>
			
				<p>Many of the plugins which implement AJDT contain aspects, and so are
				AspectJ projects themselves. This means that you first need to install
				a recent build of AJDT into your development environment from the
				update site or zip file.</p>
							
			    <p>Note also that in order to build AJDT from source you will probably
			    need to increase the memory available to Eclipse. This is
			    typically done by passing something like <code>"-vmargs -Xmx512m"</code> to
			    the Eclipse launcher.</p>
			
			    <p>Start with a clean workspace under Eclipse 3.0 or
			    Eclipse 3.1. Now open the CVS Repository Exploring 
			    perspective. Right-click on the CVS Repositories view, then click "New" > "Repository
			    Location". Host = dev.eclipse.org, Repository path =
			    /home/technology, Username = anonymous, password should be left
			    blank. Connection type = pserver. Click "Finish".
			    Use the CVS Repositories view to navigate to
			    HEAD/org.eclipse.ajdt/AJDT_src. </p>
			    
			    <p>If you are using Eclipse 3.0 you now need to switch to the
			    "ajdt1_2" branch in CVS. To discover the branch, you need to
			    right-click on org.eclipse.ajdt and select "Configure Branches
			    and Versions...", and in the dialog that opens navigate to
			    AJDT_src/org.aspect.ajde/.project. Various tags should appear in
			    the right hand side of the dialog. Press "Add Checked Tags", then
			    "OK". Back in the CVS Repositories view you should now be able to
			    navigate to Branches/ajdt1_2/org.eclipse.ajdt ajdt1_2/AJDT_src.
			    </p>
			    
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
			
			     <li>Select "Run-time workbench" (this is called "Eclipse
			     Application" on Eclipse 3.1) and click new</li>
			
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
			   right-click and select "Run As" &gt; "JUnit Plug-in Test". A new
			   runtime workbench should then be launched and the tests run inside
			   that. Progress and test results can be observed from the JUnit
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
			
			   <h4>Running the performance tests</h4>
			
			   <p>Work is underway on a new plugin,
			   org.eclipse.ajdt.tests.performance, to monitor the performance of
			   every build of AJDT. This plugin has dependencies on a number of
			   Eclipse test projects, which are not shipped in the base Eclipse
			   SDK. These instructions will be updated later when the plugin is
			   fully up and running.
			
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

	<h2>Plans</h2>
		<ol>
		
		<a name="q:future"></a>
			<li><em>Where do I find out about future releases of AJDT?</em>
		    <p>
		       See the <a href="http://www.eclipse.org/ajdt/plans.html">plans</a> page for information about future releases.
			</p>
		    </li>		
		
		<a name="q:next"></a>
			<li><em>What new AJDT features are being worked on at the moment?</em>
		    <p>
				See the <a href="http://www.eclipse.org/ajdt/tasks.html">task list</a> on our project home page.
		    </p>
		    </li>

		<hr class="clearer" />
	</div>

	$rightcolumn

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>