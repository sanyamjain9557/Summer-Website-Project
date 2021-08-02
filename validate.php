<?php
$email=$_GET['t1'];
$psw=$_GET['t2'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))  //end of file indicator feof 
  {
  $s=fgets($file);  // The fgets() function in PHP is an inbuilt function which is used to return a line from an open file. 
  $str_arr = array_pad(explode('::', $s),3,null);
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
		echo "<a href=code.php>LOGIN</a>";
		$flag=1;
	  	break;
	}//end if 
  }//end while
if ($flag==0)
	echo "Please register before login <a href=index.html>Signup</a>";
	
fclose($file);
?>
<html>
<body bgcolor ="white">
</body>
</html>

