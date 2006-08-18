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
   
   $root=opendir($dir) or die("Check $dir !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
         $files[]="$dir/$file";
      }
   } 

   usort($files, "date_cmp");
   @closedir($dir);
   foreach ($files as $file) {
         $str = $str . "<tr><td>\n";
         
         preg_match('/(\/technology\/.*\.zip)/',$file, $matches);
         $path = $matches[1];
		 preg_match('/ajdt\/(\\d\\d)\/dev/',$file, $matches);
		 $eclipse = $matches[1];
		 if ($eclipse == "30") {
		   $eclipsename = "3.0";
		 } else if ($eclipse == "31") {
		   $eclipsename = "3.1";
		 } else if ($eclipse == "32") {
		   $eclipsename = "3.2";
		 } else if ($eclipse == "33") {
		   $eclipsename = "3.3M1";
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
         $changesURL = "http://download.eclipse.org/technology/ajdt/" . $eclipse . "/dev/update/" . $changesName . ".html";
         #echo "changes file = $changesFile";
         if (file_exists($changesFile)) {            
             if (is_readable($changesFile)) {
   				$str = $str . "<td width=\"25%\"><a href=\"$changesURL\">$changesName</a>";
   				#echo substr(sprintf('%o', fileperms($changesFile)), -4);
   				$str = $str . "</td>";
			 } else {
   			    $str = $str . "<td width=\"25%\"><i>pending...</i></td>";
			 }
         } else {
             $str = $str . "<td width=\"25%\"><i>not available</i></td>";
         }
         
         # look for AspectJ version file
         $ajversionFile = $base . "/ajversion-" . $version . "." . $datestr . ".txt";
         $str = $str . "<td width=\"25%\">";
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

	$rightcolumn = file_get_contents("../rightcolumn.html");
	
	$builds33 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/33/dev/update');
	$builds32 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/32/dev/update');
	# $builds31 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/31/dev/update');
	# $builds30 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/30/dev/update');

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .05em }
  .tasklist th { padding: .05em }
  .tasklist code { font-size: 90% }
</STYLE>

<div id="maincontent">
	<div id="midcolumn">
	
	<h1>Downloads</h1>

<p>Please make sure you pick a version of AJDT which matches the version
of Eclipse you are using.</p>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.2</h3>
	<ul>

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
    <td><code>http://download.eclipse.org/technology/ajdt/32/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/update/ajdt_1.4_for_eclipse_3.2.zip">ajdt_1.4_for_eclipse_3.2.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew14/">New & Noteworthy</a></td>
  </tr>
</table>
		</li>
    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.1</h3>
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
    <td><code>http://download.eclipse.org/technology/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.3.2_for_eclipse_3.1.zip">ajdt_1.3.2_for_eclipse_3.1.zip</a></td>
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
    <td><code>http://download.eclipse.org/technology/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.3.1_for_eclipse_3.1.zip">ajdt_1.3.1_for_eclipse_3.1.zip</a></td>
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
    <td><code>http://download.eclipse.org/technology/ajdt/31/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.3_for_eclipse_3.1.zip">ajdt_1.3_for_eclipse_3.1.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew13/">New & Noteworthy</a></td>
  </tr>
  <tr>
    <th align="left">Translations:</th><td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.3_nls_fragment.zip">ajdt_1.3_nls_fragment.zip</a> (Hungarian and Japanese)</td>
  </tr>
</table>
		</li>

    </ul>
    </div>

	<div class="homeitem3col">
	<h3>Release builds for Eclipse 3.0</h3>
	<ul>

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
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.2_for_eclipse_3.0.zip">ajdt_1.2.2_for_eclipse_3.0.zip</a></td>
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
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.1_for_eclipse_3.0.zip">ajdt_1.2.1_for_eclipse_3.0.zip</a></td>
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
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2_for_eclipse_3.0.zip">ajdt_1.2_for_eclipse_3.0.zip</a></td>
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
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.1.12_archive.zip">ajdt_1.1.12_archive.zip</a></td>
  </tr>
  <tr>
    <th align="left">More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew1112/">New & Noteworthy</a></td>
  </tr>
</table>
		
		</li>

<!--
		<li>
			<a>AJDT 1.1.4 for Eclipse 2.1</a>
			
<table class="tasklist" width="80%">
  <tr>
    <th align="left">Release Date:</th><td>September 22, 2003</td>
  </tr>
  <tr>
    <th align="left">Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/technology/ajdt/update</code></td>
  </tr>
  <tr>
    <th align="left">Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/update/ajdt_1.1.4_archive.zip">ajdt_1.1.4_archive.zip</a></td>
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
			<code>http://download.eclipse.org/technology/ajdt/33/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Build Name</th>
    			<th width="25%">Build Date</th>
    			<th width="25%">Build Report</th>
    			<th width="25%">AspectJ Version</th>
  			</tr>

$builds33

			</table>
			</p>
		</li>
		
		
		<li>
			<a>Eclipse 3.2 builds</a>
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/technology/ajdt/32/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Build Name</th>
    			<th width="25%">Build Date</th>
    			<th width="25%">Build Report</th>
    			<th width="25%">AspectJ Version</th>
  			</tr>

$builds32

			</table>
			</p>
		</li>

<!--	
		<li>
			<a>Eclipse 3.1 builds</a>
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/technology/ajdt/31/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Build Name</th>
    			<th width="30%">Build Date</th>
    			<th width="30%">Build Report</th>
  			</tr>

$builds31

			</table>
			</p>
		</li>
-->

<!--		
		<li>
			<a>Eclipse 3.0 builds</a>
			<br>Update Site URL:<br>
			<code>http://download.eclipse.org/technology/ajdt/30/dev/update</code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Build Name</th>
    			<th width="30%">Build Date</th>
    			<th width="30%">Build Report</th>
  			</tr>

$builds30

			</table>
			</p>
		</li>
-->	
		
	</ul>
	</div>

<!--
	<div class="homeitem3col">
	<h3>Development builds with AspectJ milestone and release candidate builds</h3>
	<ul>
	</ul>
	</div>
		
-->		
		
		
		<hr class="clearer" />
	</div>

$rightcolumn

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
