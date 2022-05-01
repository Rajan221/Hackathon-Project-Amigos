<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">




</head>
<style type="text/css">
#inputbtn:hover {
    cursor: pointer;
}

body {
    background: url('images/abc.png');
    background-size: 100%;
}

.card {
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
}

#army {
    float: left;
    margin-top: 4px;
    ;
}
</style>

<body>



    <nav class=" navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <a class="navbar-brand js-scroll-trigger" href="index.php"
                style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;">
                <h4 style="color:black;">PATIENT MANAGEMENT SYSTEM</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link js-scroll-trigger" href="index.php"
                            style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6 style="color:black;">HOME</h6>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 120px;">
                        <a class="nav-link js-scroll-trigger" href="contact.html"
                            style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6 style="color:black;">CONTACT</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
        <div class="row">



            <div class="col-md-7" style="padding-left: 180px; ">


            </div>



        </div>

        <div class="col-md-4" style="margin-top: 5%;right: 8%; position:absolute; left:400px;">
            <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="card-body">
                    <center>
                        <br>
                        <h3 style="margin-top: 10%; color:black;">Hospital Signup</h3><br>
                        <form>
                            <div class="form-group">
                                <label id="army" for="exampleFormControlInput1">Hospital Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Hospital Name">
                                <form>

                                    <div class="form-group">
                                        <label id="army" for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Email Address">
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label id="army" for="exampleFormControlInput1">Contact No</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Contact No.">
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label id="army" for="exampleFormControlInput1">PAN No.</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="PAN No.">
                                            </div>
                                            <form>
                                                <div class="form-group">
                                                    <label id="army" for="exampleFormControlInput1">Password</label>
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="Password">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="padding-left: 160px;margin-top: 10%">
                                                        <center><input type="submit"
                                                                style="background-color:black; margin-bottom:0px;"
                                                                id="inputbtn" name="patsub" value="Sign Up"
                                                                class="btn btn-dark"></center>
                                                    </div>

                                                </div>
                            </div>
                    </center>
                </div>
            </div>
        </div>


    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
</body>

</html>