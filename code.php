<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code</title>
    <style>
        *{
            margin: 0;
            padding: 0
        }
        h3{
            margin-left: 50px;
        }
        
        label { font-weight: bold }
        select{
            text-align: right;
        
        }
        body{
            /* background: linear-gradient(); */
            background-color: #b8c6db;
            background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
            background-size: contain;
            background-repeat: no-repeat;
          
        }
        .aws{
            margin-left: 70px;
            margin-top: 60px;
        
        }
         textarea{ margin-left:400px; }
         input { background-color: grey; color:white; }
         .text-container{
             display: inline-block;
    
         }
        nav{
            display: flex;
            justify-content: space-between;
        }
        nav ul{
            display: inline
        }
    
        nav ul li{
            display: inline;
            list-style: none;
            padding: 16px;
        }
        nav ul li a{
            text-decoration: none;
            font-size: 22px;
            color: black;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 5px;
            transition: 0.5s ease;
            padding: 8px 10px;
        }
        nav ul li a:hover{
            color: white;
            background: black;
        }
        #links{
            margin-top: 76px;
            margin-right: 50px;
        }
    </style>
</head>
<body> 
    <nav>
        <div>
            <h1 style="color: black; font-weight: 900; margin-left: 20px;">STATUS INFOTAINMENT <img src="office.jpeg" height="100" width="100"></h1>
        </div>
        <div id="links">
            <ul>
                
                <li><a href="index.html">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="login.html">LOG OUT</a></li>
            </ul>
        </div>

      
    </nav>
    <hr>
    <br>
    <h3>
    <?php
 $random=rand();
 $file1=fopen('JobApplicationNumber.txt','a');
 $ran=$random."\r\n";
 echo "Your Job Application Number is $ran";
 fwrite($file1,$ran );
 fclose($file1);
 
?>
    </h3>
   
    <form action="codesubmission.php" method="post">
        <div style="height: 75vh;">
    <div class="aws">
    <br>
    <label for="Language">Select a language:</label>
    <select lang="Language" name="qwe" required>
    <option value="Java">Java</option>
    <option value="Python">Python</option>
    </select>
    </div>
    <div class="text-container">
    <textarea name="ewq" rows="22" cols="70" placeholder="Write your code here" required></textarea>
    <a href="submit.html" style="text-decoration: none; color: black; font-size: 18px"><input type="submit" value="Submit"></a>
 
    </div>
    </div>
    </form>
   
</body>
</html>