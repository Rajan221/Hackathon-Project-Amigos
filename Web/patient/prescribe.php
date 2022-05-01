<!DOCTYPE html>
<?php
include('func1.php');
$pid='';
$ID='';
$appdate='';
$apptime='';
$fname = '';
$lname= '';
$doctor = $_SESSION['dname'];
if(isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
$pid = $_GET['pid'];
  $ID = $_GET['ID'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $appdate = $_GET['appdate'];
  $apptime = $_GET['apptime'];
}




if(isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])){
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $disease = $_POST['disease'];
  $allergy = $_POST['allergy'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pid = $_POST['pid'];
  $ID = $_POST['ID'];
  $prescription = $_POST['prescription'];
  
  $query=mysqli_query($con,"insert into prestb(doctor,pid,ID,fname,lname,appdate,apptime,disease,allergy,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$allergy','$prescription')");
    if($query)
    {
      echo "<script>alert('Prescribed successfully!');</script>";
    }
    else{
      echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
  
}

?>

<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"> Patient Management
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
            background-color: #000000;
            border-color: #000000;
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
            <ul class="navbar-nav mr-auto" style="color:white;position:absolute; left:980px;">
                <li class="nav-item">
                    <a class="nav-link" style="color:white; font-size:17px; " href="logout1.php"> Logout</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white; font-size:17px; " href="doctor-panel.php">Back</a>
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
</style>

<body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome
            &nbsp<?php echo $doctor ?>
        </h3>

        <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
            <form class="form-group" name="prescribeform" method="post" action="prescribe.php">

                <div class="row">
                    <div class="container">
                        <div class="form-group">
                            <label>Disease:</label>
                            <textarea id="disease" class="form-control" rows="5" name="disease" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Tests:</label>
                            <textarea id="allergy" class="form-control" rows="5" name="allergy" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Prescription:</label>
                            <textarea id="prescription" class="form-control" rows="5" name="prescription"
                                required></textarea>
                        </div>



                    </div><br>
                    <input type="hidden" name="fname" value="<?php echo $fname ?>" />
                    <input type="hidden" name="lname" value="<?php echo $lname ?>" />
                    <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
                    <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
                    <input type="hidden" name="pid" value="<?php echo $pid ?>" />
                    <input type="hidden" name="ID" value="<?php echo $ID ?>" />
                    <br><br>
                    <input type="submit" name="prescribe" value="Prescribe" class="btn btn-dark"
                        style="margin-left: 40pc;">
                </div>
        </div>

        </form>
        <br>

    </div>
    </div>