<?php  																													
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
// Sorts by newest first
function date_cmp($f1, $f2) {
   $f1stats=stat($f1);
   $f2stats=stat($f2);
   return $f2stats[9]-$f1stats[9];
}
// return entries in the directory that represent dev builds
function ListDevBuilds($dir, $eclipsename) {
   ini_set("max_execution_time",10);
   
   if (!($root = @opendir($dir))) {
   	return "";
   }
   while (false!== ($file=readdir($root))) {
   	  if($file=="." || $file=="..") {continue;}
   	  
      if (preg_match('/.*ajdt-e[0-9][0-9]x-(.*).zip/',$file, $matches)) {
         $files[]="$dir/$file";
      }
   } 

   usort($files, "date_cmp");
   @closedir($dir);
   $str = "";
   foreach ($files as $file) {
         $str = $str . "<tr><td>";
         
         preg_match('/(\/tools\/.*\.zip)/',$file, $matches);
         $path = $matches[1];
         preg_match('/.*ajdt_(.*)_archive.zip/',$file, $matches);
         if ($matches[1] == "") {
         	preg_match('/.*ajdt-(.*).zip/',$file, $matches);
         }
		 		 $name = "$matches[1] for Eclipse $eclipsename";
         $str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=$path\">$name</a>";
         $str = $str . "</td></tr>\n";         
   }
   return $str;
}
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
	$pageTitle 		= "AJDT Downloads";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Andrew Eisenberg";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings

	#$rightcolumn = file_get_contents("../rightcolumn.html");
	
	# The longer path with 'local' in here was not finding up to date list of builds...
	$rootDir = $App->getDownloadBasePath();
	# This is what AspectJ does:
 	# $builds = ListDevBuilds("$rootDir/tools/aspectj/dev");

	$builds42 = ListDevBuilds("$rootDir/tools/ajdt/42/dev/update", "4.2");	
	$builds37 = ListDevBuilds("$rootDir/tools/ajdt/37/dev/update", "3.7");
	$builds36 = ListDevBuilds("$rootDir/tools/ajdt/36/dev/update", "3.6");
	$builds35 = ListDevBuilds("$rootDir/tools/ajdt/35/dev/update", "3.5");

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .05em }
  .tasklist th { padding: .05em }
</STYLE>

<div id="maincontent">
	<div id="midcolumn" style="width: 70%">
	<h1>Downloads</h1>

<p>Please make sure you pick a version of AJDT which matches the version
of Eclipse you are using.</p>

<div class="homeitem3col">
<a name="2.2"></a>
<h3>AJDT 2.2 release builds for Eclipse 4.2 and 3.7</h3>
<ul>
<li>
	AJDT 2.2.0 for Eclipse 4.2 and 3.7 <em>with JDT weaving</em><br>
	What is <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving</a>?
	<table class="tasklist" width="80%">
	  <tr>
	    <th align="left">2.2.0 Release Date:</th><td>July 5, 2012</td>
	  </tr>
	  <tr>
	    <th align="left">AspectJ Version in 2.2.0:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.0.jar">1.7.0</a></td>
	  </tr>
	  <tr>
	    <th align="left">Eclipse 4.2 Update Site URL:</th>
	    <td><strong><code>http://download.eclipse.org/tools/ajdt/42/update</code></strong></td>
	  </tr>
	  <tr>
	    <th align="left">Eclipse 3.7 Update Site URL:</th>
	    <td><strong><code>http://download.eclipse.org/tools/ajdt/37/update</code></strong></td>
	  </tr>
	  <tr>
	    <th align="left">AJDT for Eclipse 4.2 Zip file:</th>
	    <td><a href="http://download.eclipse.org/tools/ajdt/42/update/ajdt_2.2.0_for_eclipse_4.2.zip">ajdt_2.2.0_for_eclipse_4.2.zip</a></td>
	  </tr>	  
	  <tr>
	    <th align="left">AJDT for Eclipse 3.7 Zip file:</th>
	    <td><a href="http://download.eclipse.org/tools/ajdt/37/update/ajdt_2.2.0_for_eclipse_3.7.zip">ajdt_2.2.0_for_eclipse_3.7.zip</a></td>
	  </tr>	  
	</table>
	To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
	Do <em>not</em> unzip the update site into the dropins directory.
</li>
</ul>
</div>

<div class="homeitem3col">
<a name="dev42"></a>
<h3>Development builds for Eclipse 4.2</h3>
<ul>
	<li>
		AJDT 2.2.1 dev builds for Eclipse 4.2
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/42/dev/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">Zip file:</th>
		    <td><a href="#42zips">See below</a></td>
		  </tr>	  
		</table>
	To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
	Do <em>not</em> unzip the update site into the dropins directory.
	</li>
</ul>
</div>

<div class="homeitem3col">
<a name="dev37"></a>
<h3>Development builds for Eclipse 3.7</h3>
<ul>
	<li>
		AJDT 2.2.1 dev builds for Eclipse 3.7
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/37/dev/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">Zip file:</th>
		    <td><a href="#37zips">See below</a></td>
		  </tr>	  
		</table>
	To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
	Do <em>not</em> unzip the update site into the dropins directory.
	</li>
</ul>
</div>


	<div class="homeitem3col">
	<a name="2.1"></a>
	<h3>AJDT 2.1 release builds for Eclipse 3.7 and 3.6</h3>
	<ul>
	<li>
		AJDT 2.1.3 for Eclipse 3.7 and 3.6 <em>with JDT weaving</em><br>
		What is <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving</a>?
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">2.1.3 Release Date:</th><td>June 29, 2011</td>
		  </tr>
		  <tr>
		    <th align="left">AspectJ Version in 2.1.3:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.12.M1.jar">1.6.12.M1</a></td>
		  </tr>
		  <tr>
		    <th align="left">Eclipse 3.6 Update Site URL: (No longer under active development)</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/36/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">AJDT for Eclipse 3.7 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/37/update/ajdt_2.1.3_for_eclipse_3.7.zip">ajdt_2.1.3_for_eclipse_3.7.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">AJDT for Eclipse 3.6 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/36/update/ajdt_2.1.3_for_eclipse_3.6.zip">ajdt_2.1.3_for_eclipse_3.6.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">2.1.2 Release Date:</th><td>March 14, 2011</td>
		  </tr>
		  <tr>
		    <th align="left">AspectJ Version in 2.1.2:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.11.jar">1.6.11</a></td>
		  </tr>
		  <tr>
		    <th align="left">Eclipse 3.6 Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/36/update</code></strong></td>
		  </tr>
		</table>
		To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
		Do <em>not</em> unzip the update site into the dropins directory.
	</li>
	</ul>
	</div>
	

<div class="homeitem3col">
<a name="dev36"></a>
<h3>Development builds for Eclipse 3.6</h3>
<ul>
	<li>
		AJDT 2.1.3 dev builds for Eclipse 3.6
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/36/dev/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">Zip file:</th>
		    <td><a href="#36zips">See below</a></td>
		  </tr>	  
		</table>
	To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
	Do <em>not</em> unzip the update site into the dropins directory.
	</li>
</ul>
</div>

	<h3>AJDT 2.1 release builds for Eclipse 3.6 and 3.5</h3>
	<ul>
	<li>
		AJDT 2.1.1 for Eclipse 3.5 <em>with JDT weaving</em><br>
		What is <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving</a>?
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">2.1.1 Release Date:</th><td>October 22, 2010</td>
		  </tr>
		  <tr>
		    <th align="left">AspectJ Version in 2.1.1:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.10.jar">1.6.10</a></td>
		  </tr>
		  <tr>
		    <th align="left">Eclipse 3.5 Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/35/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">AJDT for Eclipse 3.5 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/35/update/ajdt_2.1.1_for_eclipse_3.5.zip">ajdt_2.1.1_for_eclipse_3.5.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew212/">New & Noteworthy</a></td>
		  </tr>
		</table>
		To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
		Do <em>not</em> unzip the update site into the dropins directory.
	</li>
	</ul>
	</div>
	<div class="homeitem3col">
	<a name="dev35"></a>
	<h3>Development builds for Eclipse 3.5</h3>
	<ul>
		<li>
			AJDT 2.1.1 dev builds for Eclipse 3.5 (no longer under active development)
			<table class="tasklist" width="80%">
			  <tr>
			    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
			    <td><strong><code>http://download.eclipse.org/tools/ajdt/35/dev/update</code></strong></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="#35zips">See below</a></td>
			  </tr>	  
			</table>
		To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
		Do <em>not</em> unzip the update site into the dropins directory.
		</li>
	</ul>
	</div>

	<div class="homeitem3col">
	<a name="2.0"></a>
	<h3>AJDT 2.0 release builds for Eclipse 3.5 and 3.4</h3>
	<ul>
	<li>
		AJDT 2.0.2 and 2.0.1 builds for Eclipse 3.5 and 3.4 <em>with JDT weaving</em><br>
		What is <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving</a>?
		<table class="tasklist" width="80%">
		  <tr>
		    <th align="left">Release Date:</th><td>January 5, 2010 (2.0.2)<br/>October 2, 2009 (2.0.1)</td>
		  </tr>
		  <tr>
		    <th align="left">AspectJ Version in 2.0.2:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.7.a.jar">1.6.7.a</a></td>
		  </tr>
		  <tr>
		    <th align="left">AspectJ Version in 2.0.1:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.6.jar">1.6.6.20090930185500</a></td>
		  </tr>
		  <tr>
		    <th align="left">Eclipse 3.4 Update Site URL:</th>
		    <td><strong><code>http://archive.eclipse.org/tools/ajdt/34/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">AJDT for Eclipse 3.5 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/35/update/ajdt_2.0.2_for_eclipse_3.5.zip">ajdt_2.0.2_for_eclipse_3.5.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">AJDT for Eclipse 3.4 Zip file:</th>
		    <td><a href="http://archive.eclipse.org/tools/ajdt/34/update/ajdt_2.0.1_for_eclipse_3.4.zip">ajdt_2.0.1_for_eclipse_3.4.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew202/">New & Noteworthy</a></td>
		  </tr>
		</table>
		For Eclipse 3.5, to install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
		For Eclipse 3.4, to install from a zip file,
		<a href="http://wiki.eclipse.org/JDT_weaving_features#Installation">see here</a>
	    for how to do this.
	</li>
	</ul>
	</div>
	
	<div class="homeitem3col">
	<a name="dev1.6"></a>
	<h3>Development builds for Eclipse 3.4</h3>
	<ul>
		<li>
			AJDT 2.0.1 dev builds for Eclipse 3.4<br>
			What is <a href="http://wiki.eclipse.org/JDT_weaving_features">JDT weaving</a>?<br>
			There is no schedule 2.0.2 release of AJDT for Eclipse 3.4.
			<table class="tasklist" width="80%">
			  <tr>
			    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
			    <td><strong><code>http://archive.eclipse.org/tools/ajdt/34/dev/update</code></strong></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/34/dev/update/ajdt_2.0.1.e34x-20091118-1600_archive.zip">ajdt_2.0.1.e34x-20091118-1600_archive.zip</a></td>
			  </tr>	  
			</table>
			We recommend using the update site to install AJDT.  However, it is still possible
			to install from a zip file.
			<a href="http://wiki.eclipse.org/JDT_weaving_features#Installation">See here</a>
		    for how to do this.
		</li>

<!-- Not recommended
		<li>
			AJDT 1.6.2 noweaving dev builds for Eclipse 3.4<br>
			<em>We recommend using the JDT Weaving builds (above) instead.</em>

			<table class="tasklist" width="80%">
			  <tr>
			    <th align="left">AspectJ Version:</th><td>1.6.3.20081212174800</td>
			  </tr>
			  <tr>
			    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
			    <td><code>http://archive.eclipse.org/tools/ajdt/34/dev/noweaving</code></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/34/dev/noweaving/ajdt_1.6.2.20081217200931_archive.zip">ajdt_1.6.2.20081217200931_archive.zip</a></td>
			  </tr>	  
			</table>
		</li>
		-->

		<li>
			<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
		</li>

    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.3 and older</h3>
	<ul>

		<li>
			<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
		</li>

    </ul>
    </div>

	<div class="homeitem3col">
	<a name="dev">
	<h3 class="tasklist">Development builds</h3>
	</a>

	Keep track of the latest AJDT builds on the <a href="https://build.springsource.org/browse/AJDT">AJDT build server</a>.

	<ul>
	
		<li>
			<a name="42zips"></a>Eclipse 4.2 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/42/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds42
			</table>
			</p>
		</li>
		
		<li>
			<a name="37zips"></a>Eclipse 3.7 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/37/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds37
			</table>
			</p>
		</li>

		<li>
			<a name="36zips"></a>Eclipse 3.6 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/36/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds36
			</table>
			</p>
		</li>

		<li>
			<a name="35zips"></a>Eclipse 3.5 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/35/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds35
			</table>
			</p>
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
