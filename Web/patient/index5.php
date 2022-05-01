<!DOCTYPE html>
<?php 
include('func.php');  
include('newfunc.php');
include('connect.php');
?>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" style="" href="#">Patient Management
            System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
        .bg-primary {

            background: #F0F2F0;


        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background: #000000;

            border-color: #c3c3c3;
        }

        .text-primary {
            color: #000000 !important;
        }

        .btn-primary {
            background-color: #000000;
            border-color: #000000;
        }
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color:white; position:absolute; left:1090px; font-size:20px; top:5px;"
                        href="logout.php">
                        Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<style type="text/css">
button:hover {
    cursor: pointer;
}

#inputbtn:hover {
    cursor: pointer;
}


body {
    width: 100%;
    text-align: center;
}

img {
    border: 0;
}

#main {
    margin: 15px auto;
    background: white;
    overflow: auto;
    width: 100%;
}

#header {
    background: white;
    margin-bottom: 15px;
}

#mainbody {
    background: white;
    width: 100%;
    display: none;
}

#footer {
    background: white;
}

#v {
    width: 320px;
    height: 240px;
}

#qr-canvas {
    display: none;
}

#qrfile {
    width: 320px;
    height: 240px;
}

#mp1 {
    text-align: center;
    font-size: 35px;
}

#imghelp {
    position: relative;
    left: 0px;
    top: -160px;
    z-index: 100;
    font: 18px arial, sans-serif;
    background: #f0f0f0;
    margin-left: 35px;
    margin-right: 35px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 20px;
}

.selector {
    margin: 0;
    padding: 0;
    cursor: pointer;
    margin-bottom: -5px;
}

#outdiv {
    width: 320px;
    height: 240px;
    border: solid;
    border-width: 3px 3px 3px 3px;
}

#result {
    border: solid;
    border-width: 1px 1px 1px 1px;
    padding: 20px;
    width: 20%;
    height: 20%;
    cursor: pointer;
    background-color: black;
    color: white;
    border-radius: 20px;
}

ul {
    margin-bottom: 0;
    margin-right: 40px;
}

li {
    display: inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}

li a {
    text-decoration: none;
    color: black;
}

#footer a {
    color: black;
}

.tsel {
    padding: 0;
}
</style>







<body>


    <title>Web QR</title>


    <script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
    <script type="text/javascript" src="https://webqr.com/webqr.js"></script>


    <div id="main" style="position:relative; top:100px; left:10px;">
        <div id="header">
            <div style="position:relative;top:20px;left:0px;">
                <g:plusone size="medium"></g:plusone>
            </div>
            <p id="mp1">
                QR Code scanner
            </p>
            <a href="index7.php"
                style="position:absolute; top:5.10em; left:3em; font-size:70px; text-decoration:none; ">ㅤㅤㅤㅤㅤㅤㅤㅤ</a>
        </div>
        <div id="mainbody">
            <table class="tsel" border="0" width="100%">
                <tr>
                    <td valign="top" align="center" width="50%">
                        <table class="tsel" border="0">
                            <tr>
                                <td><img class="selector" id="webcamimg" src="https://webqr.com/vid.png"
                                        onclick="setwebcam()" align="left" /></td>
                                <td><img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()"
                                        align="right" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div id="outdiv">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <div id="result"></div>
                    </td>
                </tr>
            </table>
        </div>&nbsp;

    </div>
    <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">
    load();
    </script>











    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
    </script>



</body>

</html>