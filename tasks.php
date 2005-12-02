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
	#
		
	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<!-- Insert contents here -->

		<p>This page contains a list of AJDT feature development tasks pending or
		recently completed. Anyone is welcome to contribute to the project, either
		by picking one of these tasks and working on it, or by adding new
		features, enhancements and bug fixes not on this list. If you would
		like to see a new item on this list please let us know by
		raising an enhancement request in bugzilla. We use bugzilla to track
		all active & outstanding work items for AJDT, both bugs and features
		(recorded as enhancements in bugzilla). If you want to work on a task,
		please let one of the committers know (via the aspectj-dev list for
		example) so that we don’t duplicate effort. If you have a great idea
		for an AJDT feature or enhancement that’s not on the list, let us know
		and we’ll add it!</p>
		
	<div class="homeitem3col">
		<h3>Tasks</h3>
			<div align="center">
			<table border="1" cellpadding="2">
<tr>
<th>Description of task</th>
<th>Status</th>
<th>Owner</th>
<th>Release</th>
</tr>

<tr>
<td><h4>Launch support for Load Time Weaving</h4>
We now have AspectJ run configuration support. We need to determine
what to add to this to support load time weaving.
</td>
<td>Completed</td>
<td>Sian January</td>
<td>1.2.1</td>
</tr>

<tr>
<td><h4>Cross Reference View</h4>
New view which shows the crosscutting relationships of the current item
</td>
<td>Completed</td>
<td>Helen Hawkins</td>
<td>1.2.0</td>
</tr>

<tr>
<td><h4>Store project options</h4>
Store AspectJ project options in a visible file, which can then be checked
in. This would include injar and aspectpath settings etc. JDT has added an
mechanism for this in Eclipse 3.1.
</td>
<td>Completed</td>
<td>Matt Chapman</td>
<td>1.2.0</td>
</tr>

<tr>
<td><h4>Outline view</h4>
The outline view needs to use the structure from the eager parser, like the
package explorer.
</td>
<td>Completed</td>
<td>Matt Chapman</td>
<td>1.2.0</td>
</tr>

<tr>
<td><h4>Crosscutting Changes View</h4>
This view update would update after a build with details of any new
crosscutting relationships, as well as any relationships which no
longer exisit e.g. method XX was previously advised but isn't any
more. This could be useful when refactoring.
</td>
<td>Completed (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=90490">bug&nbsp;90490</a>)</td>
<td>Matt Chapman</td>
<td>1.2.1</td>
</tr>

<tr>
<td><h4>Symmetric advises / advised by markers</h4>
Add editor markers linking advice to the places being advised.
</td>
<td>Completed (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=78962">bug&nbsp;78962</a>)</td>
<td>Matt Chapman</td>
<td>1.2.0</td>
</tr>

<tr>
<td><h4>Incremental Compilation</h4>
Make incremental compilation the default mode. It is currently off by
default, with a preference page option to turn it on. When incremental
is enabled, do we still need the AspectJ build button? (It would be
nice to get rid of it if we can).
</td>
<td>Completed</td>
<td>Andy Clement</td>
<td>1.2.0</td>
</tr>

<tr>
<td><h4>AspectJ Search</h4>
Support searching for AspectJ constructs within the JDT search dialog.
</td>
<td>Not yet assigned (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=71073">bug&nbsp;71073</a>)</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Content Assist (Ctrl + space)</h4>
Content assist now works well in many cases. This is implemented by getting
JDT to provide completions for modified versions of the buffer. We're close
to the limits of this approach - for full aspect aware code assist, e.g.
completions on pointcut names and parameters following the beginning of an
advice statement, we need our own completion processor.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Tooltip descriptions (F2)</h4>
For AspectJ keywords show an expanded version of the AspectJ Quick
Reference summary for that construct. For AspectJ declarations, show the
javadoc (ajdoc) comment and signature for those declarations.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Parameter Hints (Ctrl + shift + space)</h4>
For pointcuts, shows the possible matching points – e.g. call([visibility]
return_type TypePattern.MethodNamePattern( ArgsPattern ).
To be investigated to see whether this would be useful or not.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Refactoring Support</h4>
There are two pieces to this: the first is to ensure that existing
refactorings in Eclipse work correctly in the presence of aspects; the
second is to add aspect-specific refactorings. There are several research
groups looking into these problems.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Complete debugging support</h4>
The remaining work in this area is to tidy up the stack, to avoid
exposing internal compiler generated names.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Pointcut Matcher</h4>
This view would allow you to enter a (static?) pointcut expression – either
by directly typing or by using the pointcut wizard and see the matches in
a search results list and also in a visualiser like view. Optionally may
support naming and saving of queries.
</td>
<td>In progress</td>
<td>Julie&nbsp;Waterhouse, Mik&nbsp;Kersten</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Pointcut Wizard</h4>
The pointcut wizard guides you step by step through the process of creating
a pointcut that does what you want. It encourages good style, teaches an AO
way of thinking about pointcuts, and has knowledge of common idioms.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Pointcut Reader</h4>
This is a sophisticated form of tooltip for a pointcut declaration
which “reads” the pointcut in plain English.
</td>
<td>Not yet assigned</td>
<td>Not yet assigned</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>Aspect Refactoring Verification</h4>
Compares a query (for example “call(void Canvas.updateHistory(..))” ) against
an aspect supplying advice (for example, “after() returning:
execution(* FigureElement+.set*(..)) { Canvas.updateHistory(); }” ) and
shows the places the query catches that the aspect doesn’t, and
vice-versa. Very useful support as part of the “Extract to Aspect” refactoring.
</td>
<td>In progress</td>
<td>Charles&nbsp;Zhang, Julie&nbsp;Waterhouse</td>
<td>Not yet planned</td>
</tr>

<tr>
<td><h4>AspectJ AST</h4>
Make the AspectJ structure model easily available to extenders
</td>
<td>Assigned (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=88861">bug&nbsp;88861</a>)</td>
<td>Andy Clement</td>
<td>Not yet planned</td>
</tr>
			</table>
			<br></a></div>
	</div>

		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
