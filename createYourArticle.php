<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/4 (3).png" type="image/gif" sizes="16x16">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/community.css">
</head>
<!-- body -->
<?php
include_once "header.php";
?>

<div class="container px-5 py-2 w-100" style="background-color: #eee; border-radius:15px;">
    <h1 class="h1 mb-5" style="color:#533e85;">Create your article</h1>
    <form action="" method="" style="">
            <p class="">
                Title
            </p>
            <input type="text"  name="title" id="" class="px-3 py-2" style=" width:60%;background: #e4c6c7;
            display: inline-flex;
            border-radius: 10px;
            
            "><br><br>
            
            <p class="">
                Description 
            </p>
            
            <input type="text" name="email" id="" class="px-3 py-2 lg mb-4" style="width:97% ;background: #e4c6c7;display: inline-flex;border-radius: 10px;">
           
            <p class="">
                Content 
            </p>
           <textarea class="form-control" name="" id="" rows="10" style=" width:97%;background: #e4c6c7;display: inline-flex;border-radius: 10px;resize:none;border-color:black;
            "></textarea>
           
            <center><button class="btn rounded-pill text-center mt-3" style="background-color: #75649c; color:white">Submit</button><br>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="scripts/index.js"></script>
</body>
</html>