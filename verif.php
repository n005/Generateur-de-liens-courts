<html>
 <head>
  <title>ra</title>
 </head>
 <body>
  <?php
 $monUrl = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER["PHP_SELF"]);; 
 $url = $_POST['url'];
 $al = rand ();
 $filenames1 = "$al.html";
while (file_exists($filenames1)) {
	$al = rand ();
} 
$open = fopen($al.".html", "w+");
fwrite($open,"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=$url'>" );
fclose($open); 
print ("$url = $monUrl/$al.html")
 ?>
 </body>
</html>