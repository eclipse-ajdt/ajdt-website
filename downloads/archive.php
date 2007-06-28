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
	$pageTitle 		= "AJDT Archived Downloads";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Matt Chapman";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .05em }
  .tasklist th { padding: .05em }
</STYLE>

<div id="maincontent">
	<div id="midcolumn" style="width: 70%">
	
	<h1>Archived Downloads</h1>

<p>This page contains old releases of AJDT. See the
<a href="http://eclipse.org/ajdt/downloads/">AJDT Download page</a>
for current releases.</p>

	<div class="homeitem3col">
	<h3>Archived Release builds for Eclipse 3.2</h3>
	<ul>

		<li>
			<a>AJDT 1.4.1 for Eclipse 3.2.1 (NOT 3.2.2)</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>November 23, 2006</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.3</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/32/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/32/update/ajdt_1.4.1_for_eclipse_3.2.zip">ajdt_1.4.1_for_eclipse_3.2.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew141/">New & Noteworthy</a></td>
  </tr>
  <tr>
    <th align="left">Update:</th>
    <td>This release requires Eclipse 3.2.1. It does not work fully with the recent Eclipse 3.2.2 release.</td>
  </tr>
</table>
		</li>

		<li>
			<a>AJDT 1.4 for Eclipse 3.2</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>June 30, 2006</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.2</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/32/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/32/update/ajdt_1.4_for_eclipse_3.2.zip">ajdt_1.4_for_eclipse_3.2.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew14/">New & Noteworthy</a></td>
  </tr>
</table>
		</li>
	
	
    </ul>
    </div>



	<div class="homeitem3col">
	<h3>Archived Release builds for Eclipse 3.1</h3>
	<ul>

		<li>
			<a>AJDT 1.3.2 for Eclipse 3.1</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>August 4, 2006</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.2</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/31/update/ajdt_1.3.2_for_eclipse_3.1.zip">ajdt_1.3.2_for_eclipse_3.1.zip</a></td>
  </tr>
</table>
		</li>
		
		<li>
			<a>AJDT 1.3.1 for Eclipse 3.1</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>April 10, 2006</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.1a</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/31/update/ajdt_1.3.1_for_eclipse_3.1.zip">ajdt_1.3.1_for_eclipse_3.1.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew131/">Release notes</a></td>
  </tr>
</table>
		</li>

		<li>
			<a>AJDT 1.3 for Eclipse 3.1</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>December 20, 2005</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.0</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/31/update/ajdt_1.3_for_eclipse_3.1.zip">ajdt_1.3_for_eclipse_3.1.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew13/">New & Noteworthy</a></td>
  </tr>
  <tr>
    <th align="left">Translations:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/31/update/ajdt_1.3_nls_fragment.zip">ajdt_1.3_nls_fragment.zip</a> (Hungarian and Japanese)</td>
  </tr>
</table>
		</li>

    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Archived Release builds for Eclipse 3.0</h3>
	<ul>

		<li>
			<a>AJDT 1.2.3 for Eclipse 3.0</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>November 23, 2006</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.3</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/30/update/ajdt_1.2.3_for_eclipse_3.0.zip">ajdt_1.2.3_for_eclipse_3.0.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>The only change since 1.2.2 is an update to the latest AspectJ release.</td>
  </tr>
</table>

		</li>


		<li>
			<a>AJDT 1.2.2 for Eclipse 3.0</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>May 2, 2006</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.1a</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/30/update/ajdt_1.2.2_for_eclipse_3.0.zip">ajdt_1.2.2_for_eclipse_3.0.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>The only changes since 1.2.1 relate to upgrading the AspectJ version.</td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.2.1 for Eclipse 3.0</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>December 20, 2005</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.0</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/30/update/ajdt_1.2.1_for_eclipse_3.0.zip">ajdt_1.2.1_for_eclipse_3.0.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew13/">New & Noteworthy</a></td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.2 for Eclipse 3.0</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>June 10, 2005</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/30/update/ajdt_1.2_for_eclipse_3.0.zip">ajdt_1.2_for_eclipse_3.0.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew12/">New & Noteworthy</a></td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.1.12 for Eclipse 3.0</a>
			
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>August 13, 2004</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/30/update/ajdt_1.1.12_archive.zip">ajdt_1.1.12_archive.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew1112/">New & Noteworthy</a></td>
  </tr>
</table>
		
		</li>
	</ul>
	</div>

	<div class="homeitem3col">
	<h3>Archived Release builds for Eclipse 2.1</h3>
	<ul>

		<li>
			<a>AJDT 1.1.4 for Eclipse 2.1</a>
			
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>September 22, 2003</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/update/ajdt_1.1.4_archive.zip">ajdt_1.1.4_archive.zip</a></td>
  </tr>
</table>

		</li>
		
	</ul>
	</div>
		
		<hr class="clearer" />
	</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
