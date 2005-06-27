<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AspectJ Development Tools: Downloads</title>
<link rel="stylesheet" href="http://www.eclipse.org/default_style.css" type="text/css">
<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .1em }
  .tasklist th { color: white; background-color: #0080C0; padding: .1em }
</STYLE>

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
   
   $dir30="$dir/30/dev/update";
   $root=opendir($dir30) or die("Check $dir30 !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
         $files[]="$dir30/$file";
      }
   } 
   $dir31="$dir/31/dev/update";
   $root=opendir($dir31) or die("Check $dir31 !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
      if (preg_match('/.*ajdt_[0-9]*\.[0-9]*\.[0-9]*\.(.*)_archive.zip/',$file, $matches)) {
         $files[]="$dir31/$file";
      }
   }

   usort($files, "date_cmp");
   @closedir($dir30);
   @closedir($dir31);
   foreach ($files as $file) {
         echo "<tr><td>\n";
         
         preg_match('/(\/technology\/.*\.zip)/',$file, $matches);
         $path = $matches[1];
		 preg_match('/ajdt\/(\\d\\d)\/dev/',$file, $matches);
		 $eclipse = $matches[1];
		 if ($eclipse == "30") {
		   $eclipsename = "3.0";
		 } else {
		   $eclipsename = "3.1RC2/RC3/RC4";
		 }
         preg_match('/.*ajdt_(.*)_archive.zip/',$file, $matches);
		 $name = $matches[1] . " for Eclipse " . $eclipsename;
         #echo "path = $path <br>";
         #echo "name = $name <br>";
         echo "<a href=\"http://www.eclipse.org/downloads/download.php?file=$path\">$name</a>";
         echo "</td>\n<td>";
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
         if ($daylightsavings == "1") {
           $tzstr = " (+0100)";
         } else {
           $tzstr = " (+0000)";
         }
         #echo "hours = $hours   mins = $mins <br>";  
         $builddate = date("D, j M Y",$datetime) . " -- " . $hours . ":" . $mins . $tzstr;
         echo $builddate . "</td></tr>";      
   }
}
?>

</head>
<body bgcolor="#FFFFFF">
<!--999999-->
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr> 
    <td ALIGN=LEFT width="60%" valign="top"><font class=indextop>ajdt download</font><br>
<font class=indexsub>aspectJ development tools subproject</font>
</td>
    <td WIDTH="40%"><img
  width=120 height=86 src="http://www.eclipse.org/images/Idea.jpg" align=center></td>
  </tr>
</table>

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

<!--  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="999999"><b><font color="#FFFFFF" face="Arial,Helvetica">Milestone Builds</font></b></td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

<p>Note that there are two builds of 1.2.0M3 and 1.2.0M2, one for Eclipse 3.0, and one for Eclipse 3.1. Please be sure to use the right one.</p>

<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0RC2 for Eclipse 3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">June 3, 2005</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.0RC2_archive.zip">ajdt_1.2.0RC2_archive.zip</a></td>
  </tr>

</table>

<p></p>

<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0RC1 for Eclipse 3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">May 17, 2005</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.0RC1_archive.zip">ajdt_1.2.0RC1_archive.zip</a></td>
  </tr>

</table>


<p></p>

<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0M3 for Eclipse 3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">April 13, 2005</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.0.2</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.0M3_archive.zip">ajdt_1.2.0M3_archive.zip</a></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0""><b><font color="#FFFFFF">More info:</font></b></td><td><a href="http://www.eclipse.org/ajdt/whatsnew120M3/">New & Noteworthy</a></td><td><a href="http://www.eclipse.org/ajdt/releasenotes120M3.html">Release Notes</a></td>
  </tr>

</table>


<p></p>


<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0M3 for Eclipse 3.1M6</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">April 13, 2005</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.1M6 only</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Update Site URL:</font></b></td>
    <td colspan="2"><code>http://download.eclipse.org/technology/ajdt/31/update</code></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.2.0M3_archive.zip">ajdt_1.2.0M3_archive.zip</a></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0""><b><font color="#FFFFFF">More info:</font></b></td><td><a href="http://www.eclipse.org/ajdt/whatsnew120M3/">New & Noteworthy</a></td><td><a href="http://www.eclipse.org/ajdt/releasenotes120M3.html">Release Notes</a></td>
  </tr>
</table>


<p></p>


<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0M2 for Eclipse 3.0.1</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">December 14, 2004</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.0.1</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.0M2_archive.zip">ajdt_1.2.0M2_archive.zip</a></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0""><b><font color="#FFFFFF">More info:</font></b></td><td><a href="http://www.eclipse.org/ajdt/whatsnew120M2/">New & Noteworthy</a></td><td><a href="http://www.eclipse.org/ajdt/releasenotes120M2.html">Release Notes</a></td>
  </tr>

</table>


<p></p>


<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0M2 for Eclipse 3.1M3</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">December 14, 2004</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.1M3 (M3 only, no other 3.1 milestone build will work, earlier or later)</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/update/ajdt_1.2.0M2_archive.zip">ajdt_1.2.0M2_archive.zip</a></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0""><b><font color="#FFFFFF">More info:</font></b></td><td><a href="http://www.eclipse.org/ajdt/whatsnew120M2/">New & Noteworthy</a></td><td><a href="http://www.eclipse.org/ajdt/releasenotes120M2.html">Release Notes</a></td>
  </tr>
</table>


<p></p>


<table border="1" cellpadding="3" cellspacing="0" width="90%">
  <tr>
    <td BGCOLOR="#0080C0"" width="25%"><b><font color="#FFFFFF">AJDT Version:</font></b></td><td colspan="2">1.2.0M1 for Eclipse 3.0.1</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Release Date:</font></b></td><td colspan="2">October 13, 2004</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Eclipse Version:</font></b></td><td colspan="2">3.0.1</td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0"><b><font color="#FFFFFF">Zip file:</font></b></td>
    <td colspan="2"><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/update/ajdt_1.2.0M1_archive.zip">ajdt_1.2.0M1_archive.zip</a></td>
  </tr>
  <tr>
    <td BGCOLOR="#0080C0""><b><font color="#FFFFFF">More info:</font></b></td><td><a href="http://www.eclipse.org/ajdt/whatsnew120M1/">New & Noteworthy</a></td><td><a href="http://www.eclipse.org/ajdt/releasenotes120M1.html">Release Notes</a></td>
  </tr>
</table>-->

<p></p>

    </td>
  </tr>

  <tr>
    <a name="dev"/>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#999999"><b><font color="#FFFFFF" face="Arial,Helvetica">Development Builds</font></b></td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#FFFFFF">

<p>The latest development builds for different versions of Eclipse are
available via the following Eclipse Update Sites and zip files:</p>

<table class="tasklist" width="80%">
  <tr align="left">
    <th>Eclipse&nbsp;version</th>
    <th>Update Site URL</th>
  </tr>
  <tr>
    <td>Eclipse&nbsp;3.0</td>
    <td><code>http://download.eclipse.org/technology/ajdt/30/dev/update</code></td>
  </tr>

  <tr>
    <td>Eclipse&nbsp;3.1RC4</td>
    <td><code>http://download.eclipse.org/technology/ajdt/31/dev/update</code></td>
  </tr>
</table>

<p>
<table width="80%">
  <tr align="left">
    <th>Build Name</th>
    <th>Build Date</th>
  </tr>
   
<?php
  ListDevBuilds('/home/data/httpd/download.eclipse.org/technology/ajdt');  
?>

</table>

</p>

<p>Note that only builds which pass the automated test suite are
published, but they might still be unstable or incomplete in other
ways. If you find a problem, please still raise a bug, but first make
sure you are using a recent development build, in case the problem has
already been fixed. Please also include the full build id, as shown by
going to Help > About and then clicking on the AJ icon.</p>

<p>If you use the update site, you can easily update to the latest
version (you can even turn on automatic checking for updates). But
note that previous versions are disabled but not uninstalled. To clean
out any old versions, go to "Manage configuration", and then press the
toggle to show disabled features, then use the "Uninstall" option as
required.</p>

<p></p>

    </td>
  </tr>

  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">
<a name="update_install"/>
&nbsp;Installation - From Live Update Site</font></b></td>
  </tr>

  <tr>
    <td>

      <p>To define an update site in Eclipse 3.0 onwards:</p>
      <ul>

        <li>Start Eclipse, and from the Help menu choose "Software
        Updates" -> "Find and Install... "</li>

        <li>In the "Install/Update " view that opens, select "Search
        for new features to install" and click "Next".</li>

        <li>In the Install dialog that appears, press the "New Remote
        Site..." button.</li>

        <li>In the "New Update Site" dialog that appears, enter a
        name, "AJDT Update Site". and the appropriate URL from the 
        above list. Click Finish</li>

        <li>Expand the AJDT Update Site node that appears, and select
        "AspectJ". Press "Next"</li>

        <li>You should now see a window showing features available
        from the update site. Select "Eclipse AspectJ Development
        Tools" and press "Next".</li>

        <li>On the next page, read and accept the standard license
        agreement. Press "Next" again.</li>

        <li>On the final page, click "Finish" then step through the
        installation popups that appear to complete installation.</li>
      </ul>

      <p>To define an update site in Eclipse 2.1:</p>
      <ul>
        <li>Start Eclipse, and from the Help menu choose "Software
        Updates" -> "Update Manager"</li>

        <li>In the "Feature Updates" view that opens, select "New ->
        Site Bookmark..." form the context menu of the "Sites to
        Visit" node.</li>

        <li>In the dialog that appears enter a name, "AJDT Update
        Site", and the appropriate URL from the above list. Click
        Finish</li>

        <li>Expand the AJDT Update Site node that appears, and click
        on "Eclipse AspectJ Development Tools" node under
        "AspectJ"</li>

        <li>In the preview pane, click either "Install" for a new
        installation, or "Update Now" if updating.</li>

        <li>Step through the installation dialog that appears to
        complete installation.</li>
      </ul>

      <p>If you are behind a proxy server, use the install/update
      preferences page (under Help-> Preferences) to configure your
      proxy settings.</p>

      <p>The welcome page can be opened at any time from the "Help ->
      Welcome..." menu option.</p>

    </td>
  </tr>


</table>

</body>
</html>
