<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/4 (3).png" type="image/gif" sizes="16x16">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        a{
            display:block;
        }
        table {
            border-spacing: 20px 30px;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .containerImg:hover .image {
            opacity: 0.3;
        }

        .containerImg:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: transparent;

        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }


        /* ..containerImg {
            position: relative;
            width: 50%;
        } */

        select {
            border-color: transparent;
        }

        p,
        a {
            color: #533e85;
        }

        a {
            text-decoration: none;
        }

        input[type="text"] {
            background: #faf0f0;
            width: 50%;
            display: inline-flex;
        }

        .card {
            background-color: #faf0f0;
        }

        .card-img-top {
            transition: 0.5s;
        }



        .sidemenuClicked {
            visibility: hidden;
        }
    </style>

</head>

<?php
include_once "header.php";
?>
<div class="container">
    <div class="row mt-5">

        <svg id="hidebtn" onclick="collapseMenu()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-collapse" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z" />
        </svg>
        <div id="sidemenu" class="col-md-2 sm-3 text-center mx-3 my-sm-3 py-5" style="background-color: #eee; border-radius:15px">
            <p class="text-start"><b>Categories</b></p>
            <a href="" class="text-center">
                Categories
            </a>
            <a href="" class="text-center">
                Categories
            </a>
            <a href="" class="text-center">
                Categories
            </a>

            <a href="" class="text-center">
                Categories
            </a>
            <a href="" class="text-center">
                Categories
            </a>
            <a href="" class="text-center">
                Categories
            </a>
            <p href="" class="text-start"><b>Price</b></p>
            <input type="range">
            <div class="row g-2">

                <div class="col-sm">
                    <center>
                        <input type="text" class="form-control" aria-label="low" style="border-radius: 10px;">
                    </center>
                </div>
                <div class="col-sm">
                    <center>
                        <input type="text" class="form-control" aria-label="high" style="border-radius: 10px;">
                    </center>
                </div>


            </div>
            <p class="text-start"><b>Cooking time</b></p>
            <center>
                <input type="range">
                <div class="row g-2">
                    <div class="col-sm">
                        <input type="text" class="form-control" aria-label="lowtime" style="border-radius: 10px;">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" aria-label="hightime" style="border-radius: 10px;">
                    </div>
                </div>
            </center>
        </div>
        <div class="col-md mx-3 my-3" style="background-color: #eee; border-radius:15px">
            <div class="row justify-content-end">
                <select class="form-select form-select-lg mb-3 text-end mx-2 my-2" aria-label=".form-select-lg example" style="width:25vh;">
                    <option selected>Sort by:</option>
                    <option value="1">Lowest Price</option>
                    <option value="2">Most Rated</option>
                    <option value="3">Three</option>
                </select>
                <div class="row">
                    <?php
                    for ($i = 0; $i < 6; $i++)
                        include 'foodCard.php';
                    ?>

                </div>
            </div>

        </div>

    </div>


    <?php
    include_once "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
    <script>
        function collapseMenu() {
            var x = document.getElementById("sidemenu");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    </body>

</html>