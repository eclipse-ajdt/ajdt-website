<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
// Sorts by newest first
function date_cmp($f1, $f2) {
   $f1stats=stat($f1);
   $f2stats=stat($f2);
   return $f2stats[9]-$f1stats[9];
}
// return entries in the directory that represent dev builds
function ListDevBuilds($dir){
   ini_set("max_execution_time",10);
   
   if (!($root = @opendir($dir))) {
   	return "";
   }
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
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
		 preg_match('/ajdt\/(\\d\\d)\/dev/',$file, $matches);
		 $eclipse = $matches[1];
		 if ($eclipse == "30") {
		   $eclipsename = "3.0";
		 } else if ($eclipse == "31") {
		   $eclipsename = "3.1";
		 } else if ($eclipse == "32") {
		   $eclipsename = "3.2.2";
		 } else if ($eclipse == "33") {
		   $eclipsename = "3.3RC3";
		 } else {
		   $eclipsename = "";
		 }
         preg_match('/.*ajdt_(.*)_archive.zip/',$file, $matches);
		 $name = $matches[1] . " for Eclipse " . $eclipsename;
         #echo "path = $path <br>";
         #echo "name = $name <br>";
         $str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=$path\">$name</a>";
         $str = $str . "</td>\n<td width=\"30%\">";
         preg_match('/.*ajdt_([0-9]*\.[0-9]*\.[0-9]*)\.(.*)_archive.zip/',$file, $matches);
         $version = $matches[1];
         $datestr = $matches[2];
         #echo "date string = " . $datestr . "<br>";
         $dashes = preg_replace('/([0-9][0-9][0-9][0-9])([0-9][0-9])([0-9][0-9]).*/','${1}-${2}-${3}', $datestr);
         $datetime = strtotime($dashes);
         $hours = substr($datestr,8,2);
         $mins = substr($datestr,10,2);         
         # can only determine local daylight savings, which is not necessarily
         # the same as the daylight savings where the build was done
         $daylightsavings = date("I");
         if ($eclipse == "30") {
           if ($daylightsavings == "1") {
             $tzstr = " (+0100)";
           } else {
             $tzstr = " (+0000)";
           }
         } else {
            if ($daylightsavings == "1") {
             $tzstr = " (-0400)";
           } else {
             $tzstr = " (-0500)";
           }       
         }
         #echo "hours = $hours   mins = $mins <br>";  
         $builddate = date("D, j M Y",$datetime) . " -- " . $hours . ":" . $mins . $tzstr;
         $str = $str . $builddate . "</td>";  
         
         $base = dirname($file);
         #echo "base = $base <br>";
         $changesName = "changes-" . $version . "." . $datestr;
         $changesFile = $base . "/" . $changesName . ".html";
         $changesURL = "http://download.eclipse.org/tools/ajdt/" . $eclipse . "/dev/update/" . $changesName . ".html";
         #echo "changes file = $changesFile";
         if (file_exists($changesFile)) {            
             if (is_readable($changesFile)) {
   				$str = $str . "<td><a href=\"$changesURL\">changes</a>";
   				#echo substr(sprintf('%o', fileperms($changesFile)), -4);
   				$str = $str . "</td>";
			 } else {
   			    $str = $str . "<td><i>pending...</i></td>";
			 }
         } else {
             $str = $str . "<td><i>not available</i></td>";
         }
         
         # look for AspectJ version file
         $ajversionFile = $base . "/ajversion-" . $version . "." . $datestr . ".txt";
         $str = $str . "<td>";
         if (file_exists($ajversionFile) && is_readable($ajversionFile)) {
            $ajv = file_get_contents($ajversionFile);
            $str = $str . $ajv;
         } else {
            $str = $str . "<i>unknown</i>";
         }
         $str = $str . "</td>";
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
	
	$builds33 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/tools/ajdt/33/dev/update');
	$builds32 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/tools/ajdt/32/dev/update');
	#$builds31 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/tools/ajdt/31/dev/update');
	#$builds30 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/tools/ajdt/30/dev/update');

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
	<h3>Release builds for Eclipse 3.2</h3>
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
			<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
		</li>
		
    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.1</h3>
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
    <td><code>http://download.eclipse.org/tools/ajdt/31/update</code></td>
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
			<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
		</li>

    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.0</h3>
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
			<a href="http://eclipse.org/ajdt/downloads/archive.php">Archived builds</a>
		</li>
		
	</ul>
	</div>


	<div class="homeitem3col">
	<a name="milestone">
	<h3 class="tasklist">Milestone builds for Eclipse 3.3</h3>
	</a>
	<ul>

		<li>
			<a>AJDT 1.5RC4 for Eclipse 3.3RC4</a>

<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>June 20, 2007</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.4.200705211336</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5RC4_for_eclipse_3.3RC4.zip">ajdt_1.5RC4_for_eclipse_3.3RC4.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>
	
			</li>
	
			<li>
			<a>AJDT 1.5RC1 for Eclipse 3.3RC1</a>
				
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>May 23, 2007</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.4.200705211336</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5RC1_for_eclipse_3.3RC1.zip">ajdt_1.5RC1_for_eclipse_3.3RC1.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.5M7 for Eclipse 3.3M7</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>May 14, 2007</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.4.200701151324</td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5M7_for_eclipse_3.3M7.zip">ajdt_1.5M7_for_eclipse_3.3M7.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>

		</li>

<!--		
		<li>
			<a>AJDT 1.5M6 for Eclipse 3.3M6</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>March 30, 2007</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.4.200701151324</td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5M6_for_eclipse_3.3M6.zip">ajdt_1.5M6_for_eclipse_3.3M6.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.5M5 for Eclipse 3.3M5</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>February 16, 2007</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.4.200701151324</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5M5_for_eclipse_3.3M5.zip">ajdt_1.5M5_for_eclipse_3.3M5.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>

		</li>

		<li>
			<a>AJDT 1.5M4 for Eclipse 3.3M4</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>December 22, 2006</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.3.200612081116</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5M4_for_eclipse_3.3M4.zip">ajdt_1.5M4_for_eclipse_3.3M4.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>See the <a href="http://www.eclipse.org/ajdt/newfeatures/">New Features</a> page</td>
  </tr>
</table>

		</li>
			
		<li>
			<a>AJDT 1.5M3 for Eclipse 3.3M3</a>
		
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>November 23, 2006</td>
  </tr>
    <tr>
    <th align="left">AspectJ Version:</th><td>1.5.3</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/tools/ajdt/33/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5M3_for_eclipse_3.3M3.zip">ajdt_1.5M3_for_eclipse_3.3M3.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td>This milestone release contains the same features as <a href="http://www.eclipse.org/ajdt/whatsnew141/">AJDT 1.4.1.</a></td>
  </tr>
</table>

		</li>
-->
		
	</ul>
	</div>

	
	<div class="homeitem3col">
	<a name="dev">
	<h3 class="tasklist">Development builds</h3>
	</a>

	<ul>
			<li>
			<a>Eclipse 3.3 builds</a>
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/tools/ajdt/33/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Zip&nbsp;file</th>
    			<th>Build&nbsp;Date</th>
    			<th>Build&nbsp;Report</th>
    			<th>AspectJ&nbsp;Version</th>
  			</tr>

$builds33

			</table>
			</p>
		</li>
				
		<li>
			<a>Eclipse 3.2 builds</a>
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
	
<!--
	
		<li>
			<a>Eclipse 3.1 builds</a>
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
			<a>Eclipse 3.0 builds</a>
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
		
	</ul>
	
	-->
	
	</div>
	
		
		<hr class="clearer" />
	</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
