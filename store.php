<?php
$name=$_GET['t1'];
$pass=$_GET['t2'];
$email=$_GET['t3'];

$file = fopen("details.txt", 'a');
$text = $name."::".$pass."::".$email."::"."\r\n";
fwrite($file, $text); //The fwrite() writes to an open file
fclose($file);
echo "Your data submitted successfully<br>";
echo "<a href=login.html>Click Here to login</a>";
?>