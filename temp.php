<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    h1{
        text-align:center; 
        line-height:20vh;
        color:#DC143C;
    }
    
    .main-div{
      width:100%;
      height:80 vh;
       display:flex; 
      justify-content:space-around;
      align-items:center;
    }
    
    .left-side img{ 
        max-width: 400px;
        height:auto;
    }
    .right-side{
        width: 400px;
        height: 300px;
        background-color:#F0E68C;
        border-radius: 15px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        text-align:center;
    }
    .inputuser{

         height:40px;
         width: 250px;
         padding:7px;
         outline:none;
         border-radius: 2px solid black;
         border-radius:5px;
         margin-bottom:10px;
    }
    .selection{
        width:100%;
        margin:20px 0; 
    }
    .btn{
        padding:10px 16px;
        border-radius:5px;
        outline:none;
        background-color:#DC143C;
        font-size:1.2rem;
        color:white;
    }
    p{
        margin:20px 0 0 0;
    }

    </style>
</head>
<body background-color="#B0E0E6">
<header>
<h1>TEMPRATURE CONVERSION</h1>

<div class="main-div">
    <div class="left-side">
    <img src="temp.jpg">;
    </div>
    <div class="right-side">
    <form method="POST">
    <input type ="text" name="num" placeholder="enter the number  to convert" class="inputuser" required>
    <div class="selection">
    <lable>Fahrenheit
    </lable>
    <input type="radio" name="units" value="far">
    <lable>Celsius
    </lable>
    <input type="radio" name="units" value="cel">
    </div>
    <input type="submit" name="submit"value="CONVERT NOW" class="btn">
    </form>
    <div >
    <p>
    <?php
    // cel to far and viceversa..
     if(isset($_POST["submit"]))
    {
          $num=$_POST["num"];
         $temp=$_POST["units"];
         if($temp=="cel"){
             $result=$num*9/5+32;
             echo "The conversion value <br>".$num ."  Celsius = ".$result."Fahrenheit";
          }
         else{
             $result=($num-32)*5/9;
             echo "The conversion value <br>".$num." Fahrenheit = ".$result."Celsius";
         }
    }
    ?>
    </p>
    </div>
    </div>
    </div>
    </header>
    <br>
    <br>
</body>
</html>
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
