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
	
	$builds31 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/31/dev/update');
	$builds30 = ListDevBuilds('/home/local/data/httpd/download.eclipse.org/technology/ajdt/30/dev/update');

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<STYLE TYPE="text/css">
  .tasklist td { background-color: #EEEEEE; padding: .1em }
  .tasklist th { padding: .1em }
</STYLE>

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

	<div class="homeitem3col">
	<h3>Release builds</h3>
	<ul>
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
	</ul>
	</div>
	
	<div class="homeitem3col">
	<h3>Development builds</h3>
	<ul>
		<li>
			<a>Eclipse 3.2 builds</a>
			<br>Update Site URL:<br>
			<code><i>Not yet available</i></code>
			</p>
			<p>
			<table class="tasklist" width="100%">
  			<tr align="left">
    			<th>Build Name</th>
    			<th width="30%">Build Date</th>
    			<th width="30%">Notes</th>
  			</tr>

  			<tr>
    			<td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051117105200_archive.zip">1.3.0.20051117105200 for Eclipse 3.2M3</a></td>
    			<td>Thu, 17 Nov 2005 -- 10:52 (+0000)</td>
    			<td><i>***Eclipse M<b>3</b> only***</i></td>
  			</tr>
  
  			<tr>
    			<td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051108173500_archive.zip">1.3.0.20051108173500 for Eclipse 3.2M3</a></td>
    			<td width="30%">Tue, 8 Nov 2005 -- 17:35 (+0000)</td>
    			<td width="30%"><i>***Eclipse M<b>3</b> only***</i></td>
  			</tr>
  			</table>
			</p>
  		</li>
	
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
	</ul>
	</div>


	<div class="homeitem3col">
	<h3>Development builds with AspectJ milestone releases</h3>
	<ul>
		<li>
			<a>AspectJ 1.5.0 M5</a>
<table class="tasklist" width="100%">
  <tr align="left">
    <th>Build Name</th>
    <th width="50%">Build Date</th>
  </tr>

  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051117105200_archive.zip">1.3.0.20051117105200 for Eclipse 3.2M3</a></td>
    <td>Thu, 17 Nov 2005 -- 10:52 (+0000)</td>
  </tr>
  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/dev/update/old/ajdt_1.3.0.20051116143457_archive.zip">1.3.0.20051116143457 for Eclipse 3.1</a></td>
    <td>Wed, 16 Nov 2005 -- 14:34 (+0000)</td>
  </tr>
  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/dev/update/old/ajdt_1.2.1.20051116165827_archive.zip">1.2.1.20051116165827 for Eclipse 3.0</a></td>
    <td>Wed, 16 Nov 2005 -- 16:58 (+0000)</td>
  </tr>
</table>
		</li>
		
		<li>
			<a>AspectJ 1.5.0 M4</a>
<table class="tasklist" width="100%">
  <tr align="left">
    <th>Build Name</th>
    <th width="50%">Build Date</th>
  </tr>

  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/32/dev/update/ajdt_1.3.0.20051013194900_archive.zip">1.3.0.20051013194900 for Eclipse 3.2M2</a></td>
    <td>Thu, 13 Oct 2005 -- 19:49 (+0100)</td>
  </tr>
  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/31/dev/update/old/ajdt_1.3.0.20051011134207_archive.zip">1.3.0.20051011134207 for Eclipse 3.1</a></td>
    <td>Tue, 11 Oct 2005 -- 13:42 (+0100)</td>
  </tr>
  <tr>
    <td><a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/30/dev/update/old/ajdt_1.2.1.20051007170626_archive.zip">1.2.1.20051007170626 for Eclipse 3.0</a></td>
    <td>Fri, 7 Oct 2005 -- 17:06 (+0100)</td>
  </tr>
</table>
		</li>
	</ul>
	</div>
		
		<hr class="clearer" />
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Links</h6>
			<ul>
				<li><a href="http://eclipse.org/aspectj">AspectJ</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>User Resources</h6>
			<ul>
				<li>
					<a href="news://eclipse.org/eclipse.technology.ajdt">Newsgroup</a> (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.ajdt">web interface</a>)
				</li>
				<li>
					<a href="http://bugs.eclipse.org/bugs">Bugzilla</a>
				</li>
				<li>
					<a href="http://www.eclipse.org/ajdt/visualiser/">The Visualiser</a>
				</li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Developer Resources</h6>
			<ul>
				<li>
					<a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.ajdt">CVS Repository</a>
				</li>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/ajdt-dev">Mailing List</a>
				</li>
				<li>
					<a href="plans.html">Plans</a>
				</li>
				<li>
					<a href="ui.html">UI Design</a>
				</li>
				<li>
					<a href="tasks.html">Work tasks</a>
				</li>
				<li>
					<a href="contributors.html">Contributors</a>
				</li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
