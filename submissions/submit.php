<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

echo '<p>Hello World</p>'; 
$myFile = "/home/data/users/aeisenberg/public_html/testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file. for real");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
?> 
 </body>
</html>