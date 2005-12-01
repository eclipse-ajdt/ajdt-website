<?php 
// Sorts by newest first
function date_cmp($f1, $f2) {
   $f1stats=stat($f1);
   $f2stats=stat($f2);
   return $f2stats[9]-$f1stats[9];
}
// return entries in the directory that represent dev builds
function ListDevBuilds($dir){
   ini_set("max_execution_time",10);
   
   $str="";
   
   #$dir30="$dir/30/dev/update";
   $root=opendir($dir) or die("Check $dir !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
         $files[]="$dir/$file";
      }
   } 
   #$dir31="$dir/31/dev/update";
   #$root=opendir($dir31) or die("Check $dir31 !");
   #while (false!== ($file=readdir($root))) {
   #  if($file=="." || $file=="..") {continue;}
   #   if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
   #      $files[]="$dir31/$file";
   #   }
   #}

   usort($files, "date_cmp");
   @closedir($dir);
   #@closedir($dir31);
   foreach ($files as $file) {
         $str = $str . "<tr><td>\n";
         
         preg_match('/(\/technology\/.*\.zip)/',$file, $matches);
         $path = $matches[1];
		 preg_match('/ajdt\/(\\d\\d)\/dev/',$file, $matches);
		 $eclipse = $matches[1];
		 if ($eclipse == "30") {
		   $eclipsename = "3.0";
		 } else {
		   $eclipsename = "3.1";
		 }
         preg_match('/.*ajdt_(.*)_archive.zip/',$file, $matches);
		 $name = $matches[1] . " for Eclipse " . $eclipsename;
         #echo "path = $path <br>";
         #echo "name = $name <br>";
         $str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=$path\">$name</a>";
         $str = $str . "</td>\n<td width=\"30%\">";
         preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches);
         $datestr = $matches[1];
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
         $changesName = "changes-" . $datestr . ".html";
         $changesFile = $base . "/" . $changesName;
         $changesURL = "http://download.eclipse.org/technology/ajdt/" . $eclipse . "/dev/update/" . $changesName;
         #echo "changes file = $changesFile";
         if (file_exists($changesFile)) {            
             if (is_readable($changesFile)) {
   				$str = $str . "<td width=\"30%\"><a href=\"$changesURL\">$changesName</a>";
   				#echo substr(sprintf('%o', fileperms($changesFile)), -4);
   				$str = $str . "</td></tr>\n";
			 } else {
   			    $str = $str . "<td width=\"30%\"><i>pending...</i></td></tr>\n";
			 }
         } else {
             $str = $str . "<td width=\"30%\"><i>not available</i></td></tr>\n";
         }
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
	#
	
	# $builds31 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/31/dev/update');  
	# $builds30 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/30/dev/update');  
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">&nbsp;Downloads</font></b></td>
  </tr>

  <tr>

    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

<p>AJDT is packaged as the Eclipse AspectJ Development Tools Feature,
and is available via our live update site or as a zip file download.</p>

<p>If you are unsure how to add the update site to Eclipse - see the
<a href="#update_install">installation instructions</a> below. If you
use the zip file download instead, you need to extract this into your
eclipse installation directory (where the eclipse executable can be
found).<br><br></p>

</td>

</tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#999999"><b><font color="#FFFFFF" face="Arial,Helvetica">Release Builds</font></b></td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

<p>
<table class="tasklist" width="80%">
  <tr>
    <th width="25%">AJDT Version:</th><td>1.2 for Eclipse 3.0</td>
  </tr>
  <tr>
    <th>Release Date:</th><td>June 10, 2005</td>
  </tr>
  <tr>
    <th>Eclipse Version:</th><td>3.0.2</td>
  </tr>
  <tr>
    <th>Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th>Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2_for_eclipse_3.0.zip">ajdt_1.2_for_eclipse_3.0.zip</a></td>
  </tr>
  <tr>
    <th>More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew12/">New & Noteworthy</a></td>
  </tr>
</table>
</p>

<p>
<table class="tasklist" width="80%">
  <tr>
    <th width="25%">AJDT Version:</th><td>1.1.12 for Eclipse 3.0</td>
  </tr>
  <tr>
    <th>Release Date:</th><td>August 13, 2004</td>
  </tr>
  <tr>
    <th>Eclipse Version:</th><td>3.0.0</td>
  </tr>
  <tr>
    <th>Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/technology/ajdt/30/update</code></td>
  </tr>
  <tr>
    <th>Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.1.12_archive.zip">ajdt_1.1.12_archive.zip</a></td>
  </tr>
  <tr>
    <th>More info:</th><td><a href="http://www.eclipse.org/ajdt/whatsnew1112/">New & Noteworthy</a></td>
  </tr>
</table>
</p>

<p>
<table class="tasklist" width="80%">
  <tr>
    <th width="25%">AJDT Version:</th><td>1.1.4 for Eclipse 2.1</td>
  </tr>
  <tr>
    <th>Release Date:</th><td>September 22, 2003</td>
  </tr>
  <tr>
    <th>Eclipse Version:</th><td>2.1</td>
  </tr>
  <tr>
    <th>Update&nbsp;Site&nbsp;URL:</th>
    <td><code>http://download.eclipse.org/technology/ajdt/update</code></td>
  </tr>
  <tr>
    <th>Zip file:</th>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/update/ajdt_1.1.4_archive.zip">ajdt_1.1.4_archive.zip</a></td>
  </tr>

</table>
</p>

<p></p>

    </td>
  </tr>

<p></p>

    </td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#999999"><b><font color="#FFFFFF" face="Arial,Helvetica"><a name="dev"/>Development Builds</font></b></td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

<p>The latest development builds for different versions of Eclipse are
available via the following Eclipse Update Sites and zip files:</p>

<table class="tasklist" width="90%">
  <tr align="left">
    <th>Eclipse&nbsp;version</th>
    <th>Update Site URL</th>
  </tr>
  <tr>
    <td>Eclipse&nbsp;3.0</td>
    <td><code>http://download.eclipse.org/technology/ajdt/30/dev/update</code></td>
  </tr>

  <tr>
    <td>Eclipse&nbsp;3.1</td>
    <td><code>http://download.eclipse.org/technology/ajdt/31/dev/update</code></td>
  </tr>
</table>

<p>
<b>Eclipse 3.2 builds</b><br>
<table class="tasklist" width="90%">
  <tr align="left">
    <th>Build Name</th>
    <th>Build Date</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051117105200_archive.zip">1.3.0.20051117105200 for Eclipse 3.2M3</a></td>
    <td width="30%">Thu, 17 Nov 2005 -- 10:52 (+0000)</td>
    <td width="30%"><i>***Eclipse M<b>3</b> only***</i></td>
  </tr>
  
  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051108173500_archive.zip">1.3.0.20051108173500 for Eclipse 3.2M3</a></td>
    <td width="30%">Tue, 8 Nov 2005 -- 17:35 (+0000)</td>
    <td width="30%"><i>***Eclipse M<b>3</b> only***</i></td>
  </tr>

</table>
</p>

<p>
<b>Eclipse 3.1 builds</b><br>
<table class="tasklist" width="90%">
  <tr align="left">
    <th>Build Name</th>
    <th>Build Date</th>
    <th>Build Report</th>
  </tr>

</table>


</div>

</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
