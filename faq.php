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
	
	<h1>Frequently Asked Questions</h1>

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
	  			<li><a href="#q:ajfiles">What are the limitations of the AspectJ Editor?</a> </li>
	  			<li><a href="#q:aspectsinjava">What happens if I write my aspects in .java files?</a> </li>
	  			<li><a href="#q:ant">How do I use Ant to build my AspectJ projects in AJDT?</a> </li>	 
	  			<li><a href="#q:upgrade">Can I upgrade my AspectJ version?</a> </li>
			</ol>
		</li>

		<li> Extending
		  <ol>
		    <li><a href="#q:extend">How can I build tools which extend AJDT?</a> </li>
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
			 <a href="http://www.eclipse.org/ajdt/contributors.php">current contributors</a> 
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
			     <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT&version=unspecified&priority=P3&bug_severity=enhancement&bug_status=NEW&assigned_to=&cc=&bug_file_loc=&short_desc=&comment=&maketemplate=Remember+values+as+bookmarkable+template&form_name=enter_bug">AJDT enhancement request</a>
			     on Bugzilla.
 		    </p>
		    </li>
		
	</ol>

	<h2>Using AJDT</h2>
		<ol>
		<a name="q:version"></a>
			<li><em>What version of AJDT do I need?</em>
		    <p>
		    The recommended version of AJDT depends on the version of Eclipse that you are using.  Eclipse 3.4 requires AJDT 1.6, 
		    Eclipse 3.3 requires AJDT 1.5, and Eclipse 3.2 requires AJDT 1.4 (etc.).  Typically, the latest development version is
		    just as stable as our official releases (we never release anything unless anything unless it passes all tests).  You can find
		    the latest development release as well as all of the official AJDT release from the 
		    <a href="eclipse.org/ajdt/downloads">AJDT downloads page</a>. 
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
		      select <strong>Window &gt; Preferences &gt; AspectJ &gt; Compiler</strong> (Windows/Linux),
		      or <strong>Eclipse &gt; Preferences &gt; AspectJ &gt; Compiler</strong> (Mac).
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
				select <strong>Window &gt; Preferences &gt; General &gt; File Associations</strong> (Windows/Linux),
		      or <strong>Eclipse &gt; Preferences &gt; General &gt; File Associations</strong> (Mac).
				Select <em>.java</em> in the right-hand window, then use the section below to change the 
				default editor.
			</p>
		    </li>	

		<a name="q:ajfiles"></a>
			<li><em>What are the limitations of the AspectJ Editor?</em>
			<p>
			Although similar, using the AspectJ editor is not exactly the same as using a Java editor.
			Besides an AspectJ editor providing AspectJ-related capabilities, there is some functionality that it does not 
			provide, but the Java editor does.  For example, override/implement gutter markers are not shown.
		    </p>
		    <p>
			If there is some functionality that is missing from AspectJ editors that is present in Java editors, please 
			mention it on the mailing list or raise a bug for it.
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
		     need some other plug-ins on the classpath.  A simple example written for Eclipse 3.2.1 is shown below.  
		     Note that paths and version numbers will be different on different machines and different Eclipse versions.
		     Using Ant independently from Eclipse will be slightly different - see the 
		     <a href="http://www.eclipse.org/aspectj/doc/released/devguide/antTasks-iajc.html">AspectJ development guide</a> for more details
		     and for more information about the iajc Ant task.
		    </p>
		    
		    <p><code>
			&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br><br>
			&lt;project name="My Project" default="build" basedir="."&gt;<br><br>				
							
			&lt;target name="init"&gt;<br>
		&nbsp;&nbsp;&lt;path id="ajde.classpath"&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.resources_3.2.1.R32x_v20060914.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.runtime.compatibility_3.1.100.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.runtime_3.2.0.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.osgi_3.2.1.R32x_v20060919.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.equinox.common_3.2.0.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.jobs_3.2.0.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.equinox.registry_3.2.1.R32x_v20060814.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.equinox.preferences_3.2.1.R32x_v20060717.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.contenttype_3.2.0.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.runtime.compatibility.auth_3.2.0.v20060601.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.update.configurator_3.2.1.v20092006.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.ant.core_3.1.100.v20060531.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.variables_3.1.100.v20060605.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.expressions_3.2.1.r321_v20060721.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.filesystem_1.0.0.v20060603.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.text_3.2.0.v20060605-1400.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.eclipse.core.commands_3.2.0.I20060605-1400.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.aspectj.ajde_1.5.3.200610201049/ajde.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.aspectj.weaver_1.5.3.200610201049/aspectjweaver.jar"/&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;pathelement path="../../plugins/org.aspectj.runtime_1.5.3.200610201049/aspectjrt.jar"/&gt;<br>
		&nbsp;&nbsp;&lt;/path&gt;<br>
		&nbsp;&nbsp;&lt;taskdef resource="org/aspectj/tools/ant/taskdefs/aspectjTaskdefs.properties"&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;classpath refid="ajde.classpath" /&gt;<br>
		&nbsp;&nbsp;&lt;/taskdef&gt;<br>
	&lt;/target&gt;<br><br>
	
	&lt;target name="build" depends="init"&gt;<br>
		&nbsp;&nbsp;&lt;delete dir="${basedir}/bin"/&gt;<br>
		&nbsp;&nbsp;&lt;mkdir dir="${basedir}/bin"/&gt;<br>
		&nbsp;&nbsp;&lt;path id="user.classpath"&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;!-- add additional classpath entries here --&gt;<br>
		&nbsp;&nbsp;&lt;/path&gt;<br>
		&nbsp;&nbsp;&lt;!-- read additional ajc options from a file if required --&gt;<br>
		&nbsp;&nbsp;&lt;property name="ajcArgFile" value=""/&gt;<br>
		&nbsp;&nbsp;&lt;!-- fork the compiler --&gt;<br>
		&nbsp;&nbsp;&lt;iajc destDir="${basedir}/bin" failonerror="true" argfiles="${ajcArgFile}"<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;verbose="true" fork="true" maxmem="512m"&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;forkclasspath refid="ajde.classpath" /&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;forkclasspath refid="user.classpath" /&gt;<br>
		&nbsp;&nbsp;	&nbsp;&nbsp;&lt;src path="src/"/&gt;<br>
		&nbsp;&nbsp;&lt;/iajc&gt;<br>
		&lt;/target&gt;<br><br>				
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
		
		
	<h2>Extending</h2>
	<ol>
		<a name="q:extend"></a>
			<li><em>How can I build tools which extend AJDT?</em>
		    <p>
		       See this Eclipsepedia page: <a href="http://wiki.eclipse.org/index.php/Developer%27s_guide_to_building_tools_on_top_of_AJDT_and_AspectJ">Developer's guide to building tools on top of AJDT and AspectJ.</a>
		    </p>
		    </li>
		
	</ol>
	
	<h2>Contributing</h2>
	<ol>
		<a name="q:contribute"></a>
			<li><em>How can I contribute to the AJDT project?</em>
		    <p>
		       See the <a href="developers.php">Developer FAQ</a>
		    </p>
		    </li>

		<a name="q:source"></a>
			<li><em>Where will I find the source for AJDT?</em>
			<p>
		       See the <a href="developers.php">Developer FAQ</a>
			</p>
			</li>
				
		<a name="q:develop"></a>
			<li><em>How do I setup an AJDT development environment in Eclipse?</em>
			<p>
		       See the <a href="developers.php">Developer FAQ</a>
			</p>
		    </li>
		
		<a name="q:packaging"></a>
			<li><em>How can I package my sample code for contribution to the examples plug-in?</em>
				<p>
		           See the <a href="developers.php">Developer FAQ</a>
			    </p>
		    </li>
	</ol>

	<h2>Plans</h2>
		<ol>
		
		<a name="q:future"></a>
			<li><em>Where do I find out about future releases of AJDT?</em>
		    <p>
		       See the <a href="http://www.eclipse.org/projects/project-plan.php?projectid=tools.ajdt">plans</a> page for information about future releases.
			</p>
		    </li>		
		
		<a name="q:next"></a>
			<li><em>What new AJDT features are being worked on at the moment?</em>
		    <p>
				Look for <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AJDT&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">open AJDT bugs</a> in bugzilla or ask a question to the mailing list.  We are a friendly bunch and are 
				happy to answer your questions.
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
