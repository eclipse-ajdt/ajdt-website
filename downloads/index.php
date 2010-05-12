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
   	  
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
         $files[]="$dir/$file";
      } else if (preg_match('/.*ajdt-[0-9]*\.[0-9]*\.[0-9]*-(.*).zip/',$file, $matches)) {
         // for 3.5+
         $files[]="$dir/$file";
      }
   } 

   usort($files, "date_cmp");
   @closedir($dir);
   $str = "";
   foreach ($files as $file) {
         $str = $str . "<tr><td>\n";
         
         preg_match('/(\/tools\/.*\.zip)/',$file, $matches);
         $path = $matches[1];
         preg_match('/.*ajdt_(.*)_archive.zip/',$file, $matches);
         if ($matches[1] == "") {
         	preg_match('/.*ajdt-(.*).zip/',$file, $matches);
         }
		 		 $name = $matches[1] . " for Eclipse " . $eclipsename;
         $str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=$path\">$name</a>";
         $str = $str . "</td>\n";         
         $str = $str . "</tr>\n";
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
	$pageAuthor		= "Matt Chapman";
	
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
	
#	$builds36 = ListDevBuilds("$rootDir/tools/ajdt/36/dev/update", "3.6");
##	$builds35 = ListDevBuilds("$rootDir/tools/ajdt/35/dev/update", "3.5");
#	$builds34 = ListDevBuilds("$rootDir/tools/ajdt/34/dev/update", "3.4");
#	$builds34noweaving = ListDevBuilds("$rootDir/tools/ajdt/34/dev/noweaving", "3.4 (no weaving)");
#	$builds33 = ListDevBuilds("$rootDir/tools/ajdt/33/dev/update", "3.3");

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

<p>Note also that the Update Sites are now under /tools instead
of /technology, since AJDT become a Tools project.</p>


	<div class="homeitem3col">
	<a name="2.0"></a>
	<h3>AJDT 2.0 release builds for Eclipse 3.5 and 3.4</h3>
	<ul>
	<li>
		AJDT 2.0.2 and 2.0.1 builds for Eclipse 3.5 and 3.4<em>with JDT weaving</em><br>
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
		    <th align="left">Eclipse 3.5 Update Site URL:</th>
		    <td<strong><code>http://download.eclipse.org/tools/ajdt/35/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">Eclipse 3.4 Update Site URL:</th>
		    <td><strong><code>http://download.eclipse.org/tools/ajdt/34/update</code></strong></td>
		  </tr>
		  <tr>
		    <th align="left">AJDT for Eclipse 3.5 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/35/update/ajdt_2.0.2_for_eclipse_3.5.zip">ajdt_2.0.2_for_eclipse_3.5.zip</a></td>
		  </tr>	  
		  <tr>
		    <th align="left">AJDT for Eclipse 3.4 Zip file:</th>
		    <td><a href="http://download.eclipse.org/tools/ajdt/34/update/ajdt_2.0.1_for_eclipse_3.4.zip">ajdt_2.0.1_for_eclipse_3.4.zip</a></td>
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
	<a name="dev35"></a>
	<h3>Development builds for Eclipse 3.5</h3>
	<ul>
		<li>
			AJDT 2.1.0 dev builds for Eclipse 3.5
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
		</li>
	</ul>
	</div>

	<div class="homeitem3col">
	<a name="dev36"></a>
	<h3>Development builds for Eclipse 3.6</h3>
	<ul>
		<li>
			AJDT 2.1.0 dev builds for Eclipse 3.6
			<table class="tasklist" width="80%">
			  <tr>
			    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
			    <td><strong><code>http://download.eclipse.org/tools/ajdt/36/dev/update</code></strong></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="#36zips">See below</a></td>
			  </tr>	  
			</table>
		To install from a zip file, download the zip and point your p2 installer to that file.  Then proceed as if it were a normal update site.
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
			    <td><strong><code>http://download.eclipse.org/tools/ajdt/34/dev/update</code></strong></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="#34zips">See below</a></td>
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
			    <td><code>http://download.eclipse.org/tools/ajdt/34/dev/noweaving</code></td>
			  </tr>
			  <tr>
			    <th align="left">Zip file:</th>
			    <td><a href="#34zipsnoweaving">See below</a></td>
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
			    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
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
			    <td><code>http://download.eclipse.org/tools/ajdt/33/dev/update</code></td>
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
    <td><code>http://download.eclipse.org/tools/ajdt/32/update</code></td>
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
	<h3>Release builds for Eclipse 3.1 and older</h3>
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

	<ul>
	
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

		<li>
			<a name="34zips"></a>Eclipse 3.4 builds (<a href="http://wiki.eclipse.org/JDT_weaving_features#Installation">JDT weaving</a>)
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/34/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds34
			</table>
			</p>
		</li>
	
		<li>
			<a name="34zips"></a>Eclipse 3.4 builds (no weaving)
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/34/dev/noweaving</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>
$builds34noweaving
			</table>
			</p>
		</li>
		
		<li>
			<a name="33zips"></a>Eclipse 3.3 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/33/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
  			</tr>

$builds33

			</table>
			</p>
		</li>

<!--
				
		<li>
			Eclipse 3.2 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/32/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
    			<th>Build&nbsp;Date</th>
    			<th>Build&nbsp;Report</th>
    			<th>AspectJ&nbsp;Version</th>
  			</tr>

$builds32

			</table>
			</p>
		</li>
	
	
		<li>
			Eclipse 3.1 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/31/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
    			<th>Build&nbsp;Date</th>
    			<th>Build&nbsp;Report</th>
    			<th>AspectJ&nbsp;Version</th>
  			</tr>

$builds31

			</table>
			</p>
		</li>
		
		<li>
			Eclipse 3.0 builds
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/30/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
    			<th>Build&nbsp;Date</th>
    			<th>Build&nbsp;Report</th>
    			<th>AspectJ&nbsp;Version</th>
  			</tr>

$builds30

			</table>
			</p>
		</li>
	-->
		
	</ul>
	
	
	</div>
	
		
		<hr class="clearer" />
	</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
