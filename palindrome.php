<!DOCTYPE html>
<html>
<head>
<title>Palindrome</title>
</head>
<body>

<?php
function check_Palindrome(){
    $name = $_GET['name'];
    $name = str_replace(' ', '', $name);
    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $name);
    $name = strtolower($name);
    $reverse = strrev($name);
    if ($name == $reverse){
        echo "<p>TRUE! it is palindrome :)</p>";
    }else{
        echo "<p>FALSE it is not palindrome :(</p>";
    }
}
check_Palindrome();
?>

















</body>
</html>