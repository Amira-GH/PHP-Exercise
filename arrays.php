<!DOCTYPE html>
<html>
<head>
<title>Arrays</title>
</head>
<body>
<?php
$Music = array(
  array("Oklahoma","The Music Man", "South Pacific"),
  array("Lawrence of Arabia","To Kill a Mockingbird","Casablanca"),
  array("The Maltese Falcon","Rear Window","North by Northwest"),
);
echo "MUSICALS" .'<br/>';
echo "----> 0 =" .$Music[0][0]. "<br>";
echo "----> 1 =" .$Music[0][1]. "<br>";
echo "----> 2 =" .$Music[0][2]. "<br>";
echo"DRAMAS" .'<br/>';
echo "----> 0 =" .$Music[1][0]. "<br>";
echo "----> 1 =" .$Music[1][1]. "<br>";
echo "----> 2 =" .$Music[1][2]. "<br>";
echo"MYSTERIES" .'<br/>';
echo "----> 0 =" .$Music[2][0]. "<br>";
echo "----> 1 =" .$Music[2][1]. "<br>";
echo "----> 2 =" .$Music[2][2]. "<br>";

?>
 
</body>
</html>
<!-- test -->