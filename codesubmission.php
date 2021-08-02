<?php
$language=$_POST['qwe'];
$submittedcode=$_POST['ewq'];

if($language=='Java')  $exe='java';  
if  ($language=='Python') $exe='py';
$file1=fopen("sub.$exe",'w');
$texted= $submittedcode."\r\n";
fwrite($file1, $texted);
fclose($file1);
?>
 <html>
 <head>
 <title>Submitted</title>
 <style>
  body { margin-top: 15px; background-image: url(); 
background-position: center; background-size: cover; background-repeat: no-repeat; }
 h1 { color: black ; font-family: sans-serif; }
  button { background-color: gray ; color: white; } 
 </style>
 </head>
 <body> 
 <center>
 
 <h2>Your code has been submitted.</h2><br><br>
 <a href=login.html><button> Return to Login </button></a>
 </center>
 </body>
 </html>