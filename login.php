<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/4 (3).png" type="image/gif" sizes="16x16">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/community.css">
<style>
    input[type="text"] {
            background: #e4c6c7;
            width: 50%;
            display: inline-flex;
            border-radius: 10px;
        }
        
        input[type="email"] {
            
        }
        textarea{
            background: #e4c6c7;
            border-radius: 10px;
        }
        p{
            color: #533e85;
        }
        
</style>
</head>

<?php
include_once "header.php";
?>

    <div class="container px-5 py-1 w-25" style="background-color: #eee; border-radius:15px;">
        <p class="display-6 text-center pt-2" >
            Log in
        </p>
        <form action="" method="" style="">
            <p class="">
                Username
            </p>
            <input type="text"  name="name" id="" class="px-3 py-1" style=" width:97%" style="background: #e4c6c7;
            width: 50%;
            display: inline-flex;
            border-radius: 10px;
            "><br><br>
            
            <p class="">
                Password 
            </p>
            
            <input type="email" name="email" id="" class="px-3 py-1 lg mb-5" style="width:97% ;background: #e4c6c7;display: inline-flex;border-radius: 10px;">
           <center><button class="btn rounded-pill text-center" style="background-color: #75649c; color:white">Log in</button><br>
           <a class="text-center my-2" href="#" style="font-size:13px">Fogot your password ?</a> 
</center>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
