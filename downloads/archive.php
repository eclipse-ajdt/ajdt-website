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
		<a name="1.5"></a>
		<h3>Release builds for Eclipse 3.3</h3>
		<ul>
			<li>
				AJDT 1.5.3 for Eclipse 3.3
				<table class="tasklist" width="80%">
				  <tr>
				    <th align="left">Release Date:</th><td>July 19th, 2008</td>
				  </tr>
				  <tr>
				    <th align="left">AJDT Version:</th><td>1.5.3.200807141310</td>
				  </tr>
				  <tr>
				    <th align="left">AspectJ Version:</th><td>1.6.1.20080703120000 (1.6.1 final)</td>
				  </tr>
				  <tr>
				    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
				    <td><code>http://archive.eclipse.org/tools/ajdt/33/update</code></td>
				  </tr>
				  <tr>
				    <th align="left">Zip file:</th>
				    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5.3_for_eclipse_3.3.zip">ajdt_1.5.3_for_eclipse_3.3.zip</a></td>
				  </tr>
				    <tr>
				    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew153/">New & Noteworthy</a></td>
				  </tr>
				</table>
			</li>

			<li>
				AJDT 1.5.2 for Eclipse 3.3

				<table class="tasklist" width="80%">
				  <tr>
				    <th align="left">Release Date:</th><td>April 24, 2008</td>
				  </tr>
				  <tr>
				    <th align="left">AspectJ Version:</th><td>1.6.0.20080423100000 (1.6.0)</td>
				  </tr>
				  <tr>
				    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
				    <td><code>.................................</code></td>
				  </tr>
				  <tr>
				    <th align="left">Zip file:</th>
				    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5.2_for_eclipse_3.3.zip">ajdt_1.5.2_for_eclipse_3.3.zip</a></td>
				  </tr>
				    <tr>
				    <th align="left">More info:</th><td><!--a href="http://www.eclipse.org/ajdt/whatsnew15/">New & Noteworthy</a--></td>
				  </tr>
				</table>
			</li>
	    </ul>
	    </div>

		<div class="homeitem3col">
		<a href="dev1.5"></a>
		<h3>Development builds for Eclipse 3.3</h3>
		<ul>
			<li>
				AJDT dev builds for Eclipse 3.3

				<table class="tasklist" width="80%">
				  <tr>
				    <th align="left">AspectJ Version:</th><td>Includes recent AspectJ dev builds</td>
				  </tr>
				  <tr>
				    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
				    <td><code>http://archive.eclipse.org/tools/ajdt/33/dev/update</code></td>
				  </tr>
				  <tr>
				    <th align="left">Zip file:</th>
				    <td>see <a href="#33zips">1.5.4 zips</a> below</td>
				  </tr>	  
				</table>
			</li>
	    </ul>
	    </div>



		<div class="homeitem3col">
		<h3>Release builds for Eclipse 3.2</h3>
		<ul>

			<li>
				AJDT 1.4.2 for Eclipse 3.2.2

	<table class="tasklist" width="80%">
	  <tr>
	    <th align="left">Release Date:</th><td>June 28, 2006</td>
	  </tr>
	  <tr>
	    <th align="left">AspectJ Version:</th><td>1.5.4.200705211336</td>
	  </tr>
	  <tr>
	    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
	    <td><code>http://archive.eclipse.org/tools/ajdt/32/update</code></td>
	  </tr>
	  <tr>
	    <th align="left">Zip file:</th>
	    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/32/update/ajdt_1.4.2_for_eclipse_3.2.zip">ajdt_1.4.2_for_eclipse_3.2.zip</a></td>
	  </tr>

	</table>
			</li>

			<li>
				<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
			</li>

	    </ul>
	    </div>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/32/update</code></td>
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
			<a>AJDT 1.3.3 for Eclipse 3.1</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>November 23, 2006</td>
  </tr>
  <tr>
    <th align="left">AspectJ Version:</th><td>1.5.3</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://archive.eclipse.org/tools/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/31/update/ajdt_1.3.3_for_eclipse_3.1.zip">ajdt_1.3.3_for_eclipse_3.1.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>The only change since 1.3.2 is an update to the latest AspectJ release.</td>
  </tr>
</table>
		</li>


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
    <td><code>http://archive.eclipse.org/tools/ajdt/31/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/31/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/31/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/30/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/30/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/30/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/30/update</code></td>
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
    <td><code>http://archive.eclipse.org/tools/ajdt/30/update</code></td>
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
			<a>AJDT 1.1.3 for Eclipse 2.1</a>
			
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>August 25, 2003</td>
  </tr>
  <tr>
    <th align="left">Archived Update site:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/oldreleases/ajdt-1.1.3-update.tgz">ajdt-1.1.3-update.tgz</a></td>
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
