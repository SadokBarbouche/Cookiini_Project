<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/4 (3).png" type="image/gif" sizes="16x16">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get In Touch</title>
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

    <div class="container px-5 py-5" style="background-color: #eee; border-radius:15px;">
        <p class="display-3">
            <u>Get in To</u>uch
        </p>
        <form action="" method="" style="">
            <p class="mx-1">
                Full Name
            </p>
            <input type="text"  name="name" id="" class="px-3 py-1" style=" width:97%" style="background: #e4c6c7;
            width: 50%;
            display: inline-flex;
            border-radius: 10px;
            ">
            
            <p class="">
                Email address
            </p>
            
            <input type="email" name="email" id="" class="px-3 py-1" style="width:97% ;background: #e4c6c7;
            
            display: inline-flex;
            border-radius: 10px;
            " class="lg" placeholder="name@example.com">
            <br>
            <p class="mx-1">
                Message
            </p>
            <textarea type="" name="message" id="" class="mb-2 px-3 py-1" style="resize: none; width:97%" rows="7"></textarea>
            <center><button class="btn rounded-pill text-center" style="background-color: #75649c; color:white">Submit</button></center>

    </div>
    <?php
        include_once "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
