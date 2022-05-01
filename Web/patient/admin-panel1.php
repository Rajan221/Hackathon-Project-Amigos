<!DOCTYPE html>
<?php 
include('connect.php');

include('newfunc.php');
if(isset($_POST['docsub']))
{
  $doctorname=$_POST['doctorname'];
  $doctor=$_POST['doctor'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $spec=$_POST['special'];
  $docFees=$_POST['docFees'];
  $query="insert into doctb(doctorname,username,password,email,spec,docFees)values('$doctorname','$doctor','$dpassword','$demail','$spec','$docFees')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor added successfully!');</script>";
  }
}


if(isset($_POST['docsub1']))
{
  $demail=$_POST['demail'];
  $query="delete from doctb where email='$demail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <a class="navbar-brand" href="#"> Patient Management
            System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <script>
        var check = function() {
            if (document.getElementById('dpassword').value ==
                document.getElementById('cdpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Password fields doesnot match';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };
        </script>

        <style>
        .bg-primary {
            background: #F0F2F0;

        }

        .col-md-4 {
            max-width: 20% !important;
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

        #cpass {
            display: -webkit-box;
        }

        #list-app {
            font-size: 15px;
        }

        .btn-primary {
            background-color: #000000;
            border-color: #000000;
        }
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font-size:20px; color:white;position:absolute;top:7px;left:1070px;"
                        href="logout1.php"> Logout</a>
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
    background-image: url('images/abc.png');
}
</style>

<body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME
            ADMINISTRATOR </h3>
        <div class="row">
            <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list"
                        href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
                    <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list" role="tab"
                        aria-controls="home" data-toggle="list">View Doctors</a>
                    <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab"
                        data-toggle="list" aria-controls="home">View Patients</a>
                    <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab"
                        data-toggle="list" aria-controls="home">Appointment Details</a>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab"
                        data-toggle="list" aria-controls="home">Prescription List</a>
                    <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"
                        role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
                    <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"
                        role="tab" data-toggle="list" aria-controls="home">Delete Doctor</a>
                    <a class="list-group-item list-group-item-action" href="#list-settings2" id="list-ddoc-list"
                        role="tab" data-toggle="list" aria-controls="home">Manage Hospital</a>


                </div><br>
            </div>
            <div class="col-md-8" style="margin-top: 3%;">
                <div class="tab-content" id="nav-tabContent" style="width: 980px;">







                    <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">


                        <div class="col-md-8">
                            <form class="form-group" action="doctorsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="doctor_contact"
                                            placeholder="Enter Email ID" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="doctor_search_submit"
                                            class="btn btn-dark" value="Search"></div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Specialization</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    include('connect.php');
                    global $con;
                    $query = "select * from doctb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctorname = $row['doctorname'];
                      $spec = $row['spec'];
                      $email = $row['email'];
                      $username = $row['username'];
                      $password = $row['password'];
                      $docFees = $row['docFees'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$doctorname</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$username</td>
                        <td>$$docFees</td>
                      </tr>";
                   $cnt++; }

                  ?>
                            </tbody>
                        </table>
                        <br>
                    </div>


                    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

                        <div class="col-md-8">
                            <form class="form-group" action="patientsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="patient_contact"
                                            placeholder="Enter Contact" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="patient_search_submit"
                                            class="btn btn-dark" value="Search"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Patient ID</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    include('connect.php');
                    global $con;
                    $query = "select * from patreg";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['pid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$fname $lname</td>
                        <td>#6db59c</td>
                        <td>Bir Hospital</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                      </tr>";
                  $cnt++;  }

                  ?>
                            </tbody>
                        </table>
                        <br>
                    </div>


                    <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

                        <div class="col-md-12">

                            <div class="row">



                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Doctor</th>
                                            <th scope="col">Fullname</th>
                                            <th scope="col">Appointment Date</th>
                                            <th scope="col">Appointment Time</th>
                                            <th scope="col">Disease</th>
                                            <th scope="col">Allergy</th>
                                            <th scope="col">Prescription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                    include('connect.php');
                    global $con;
                    $query = "select * from prestb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctor = $row['doctor'];
                      $pid = $row['pid'];
                      $ID = $row['ID'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $disease = $row['disease'];
                      $allergy = $row['allergy'];
                      $pres = $row['prescription'];

                      
                      echo "<tr>
                      <td>$cnt</td>
                        <td>$doctor</td>
                        <td>$fname $lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                   $cnt++; }

                  ?>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

                        <div class="col-md-8">
                            <form class="form-group" action="appsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="app_contact"
                                            placeholder="Enter Contact" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="app_search_submit"
                                            class="btn btn-dark" value="Search"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Fees</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                    include('connect.php');
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['doctor'];?></td>
                                    <td><?php echo 'Rs.'.$row['docFees'];?></td>
                                    <td><?php echo $row['appdate'];?></td>
                                    <td><?php echo $row['apptime'];?></td>
                                    <td>
                                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>
                                </tr>
                                <?php $cnt++; } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>

                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        ...</div>

                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <form class="form-group" method="post" action="admin-panel1.php">
                            <div class="row">
                                <div class="col-md-4"><label>Doctor Name:</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="doctorname"
                                        onkeydown="return alphaOnly(event);" required></div><br><br>
                                <div class="col-md-4"><label>Username:</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="doctor"
                                        onkeydown="return alphaOnly(event);" required></div><br><br>
                                <div class="col-md-4"><label>Specialization:</label></div>
                                <div class="col-md-8">
                                    <select name="special" class="form-control" id="special" required="required">
                                        <option value="head" name="spec" disabled selected>Select Specialization
                                        </option>
                                        <option value="General" name="spec">General</option>
                                        <option value="Gynecologist" name="spec">Gynecologist</option>
                                        <option value="Oncologist">Oncologist</option>
                                        <option value="Cardiologist" name="spec">Cardiologist</option>
                                        <option value="Gastroenterologist">Gastroenterologist</option>
                                        <option value="Neurologist" name="spec">Neurologist</option>
                                        <option value="Pediatrician" name="spec">Pediatrician</option>
                                    </select>
                                </div><br><br>
                                <div class="col-md-4"><label>Email ID:</label></div>
                                <div class="col-md-8"><input type="email" class="form-control" name="demail" required>
                                </div><br><br>
                                <div class="col-md-4"><label>Password:</label></div>
                                <div class="col-md-8"><input type="password" class="form-control" onkeyup='check();'
                                        name="dpassword" id="dpassword" required></div><br><br>
                                <div class="col-md-4"><label>Confirm Password:</label></div>
                                <div class="col-md-8" id='cpass'><input type="password" class="form-control"
                                        onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span
                                        id='message'></span> </div><br><br>


                                <div class="col-md-4"><label>Consultancy Fees:</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="docFees" required>
                                </div><br><br>
                            </div>
                            <input type="submit" name="docsub" value="Add Doctor" class="btn btn-dark">
                        </form>
                    </div>

                    <div class="tab-pane fade" id="list-settings1" role="tabpanel"
                        aria-labelledby="list-settings1-list">
                        <form class="form-group" method="post" action="admin-panel1.php">
                            <div class="row">

                                <div class="col-md-4"><label>Email ID:</label></div>
                                <div class="col-md-8"><input type="email" class="form-control" name="demail" required>
                                </div><br><br>

                            </div>
                            <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-dark"
                                onclick="confirm('do you really want to delete?')">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-settings2" role="tabpanel"
                        aria-labelledby="list-settings2-list">
                        <form class="form-group" method="post" action="admin-panel1.php">
                            <div class="row">

                                <div class="col-md-12"><label>Hospital List</label>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col-md-4">#</th>
                                                <th scope="col">Hospital Name</th>
                                                <th scope="col">Address</th>
                                                <th scope="col-7">Contact No.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Bir Hospital</td>
                                                <td>Kanti Path, Kathmandu 44600</td>
                                                <td>01-4221119</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Civil Hospital </td>
                                                <td> Minbhawan Marg, Kathmandu 44600</td>
                                                <td> 01-4107000</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Bir Hospital</td>
                                                <td>Kanti Path, Kathmandu 44600</td>
                                                <td>01-4221119</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Civil Hospital </td>
                                                <td> Minbhawan Marg, Kathmandu 44600</td>
                                                <td> 01-4107000</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Bir Hospital</td>
                                                <td>Kanti Path, Kathmandu 44600</td>
                                                <td>01-4221119</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Civil Hospital </td>
                                                <td> Minbhawan Marg, Kathmandu 44600</td>
                                                <td> 01-4107000</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Bir Hospital</td>
                                                <td>Kanti Path, Kathmandu 44600</td>
                                                <td>01-4221119</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Civil Hospital </td>
                                                <td> Minbhawan Marg, Kathmandu 44600</td>
                                                <td> 01-4107000</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div><br><br>

                    </div>

                </div>



                <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...
                </div>

                <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

                    <div class="col-md-8">
                        <form class="form-group" action="messearch.php" method="post">
                            <div class="row">
                                <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact"
                                        class="form-control"></div>
                                <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-dark"
                                        value="Search"></div>
                            </div>
                        </form>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                    include('connect.php');
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['contact'];?></td>
                                <td><?php echo $row['message'];?></td>
                            </tr>
                            <?php $cnt++; } ?>
                        </tbody>
                    </table>
                    <br>
                </div>



            </div>
        </div>
    </div>
    </div>
    <style>
    p,
    a {
        decoration: none;
        color: black;
    }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
</body>

</html>