<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="img/4 (3).png" type="image/gif" sizes="16x16">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/community.css">
    <style>
        .card{
            margin-bottom: 130px;
        }
        a{
            transition: 0.5s;
            text-decoration: none;
        }
        a:hover{
            transform: scale(1.04);
        }
    </style>

</head>

<?php
    include_once "header.php";
?>

<div class="container mt-md-5">
    <p class="text text-center display-4" style="color:#019267">
        Contact Us
    </p>
    <hr class="bg-danger border-2 border-top border-info">
    <p class="text text-center">
        Have any questions? We’d love to hear from you
    </p>
    <div class="container">
        <div class="row gap-3">
            <div class="col-md card text-center ">
                <p class="fw-bold text-center my-3" style="color:#019267">Customer Care</p>
                <p class="text-center" style="color:#019267">Our support team is ready<br> to give you fast response.</p>
                <center>
                    <button type="submit" class="btn btn w-25 rounded-pill" style="background-color: #019267;color:white" onclick="red()">
                    Submit Request
                    </button>
                </center>
                <a href="#" class="mt-5 text-center" style="color:#019267">
                    Frequently Asked Questions 
                </a>
            </div>
            <div class="col-md card">
                <p class="fw-bold text-center my-3" style="color:#000000">Sales & Marketing</p>
                <p class="text-center" style="color:#000000;">Our support team is ready<br> to give you fast response.</p>
                <center>
                    <button type="submit" class="btn w-25 rounded-pill" style="background-color: #000000;color:white" onclick="red()">Submit Request</button>
                </center>
                <a href="#" class="mt-5 text-center" style="color:#000000">
                    View Plans
                </a>
            </div>

        </div>
    </div>
</div>
    <div class="container">
        
    </div>
</div>
<?php
include_once "footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<script src="scripts/index.js"></script>
<script>
    function red(){
        window.location.href="getInTouch.php";  
    }
</script>

</body>

</html>