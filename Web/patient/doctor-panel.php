<!DOCTYPE html>
<?php 
include('func1.php');
include('connect.php');
$doctor = $_SESSION['dname'];
if(isset($_GET['cancel']))
  {
    $query=mysqli_query($con,"update appointmenttb set doctorStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
      echo "<script>alert('Your appointment successfully cancelled');</script>";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"></i> Patient Management
            System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
        .btn-outline-light:hover {
            color: #25bef7;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }
        </style>

        <style>
        .bg-primary {
            background: #000000;

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
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout1.php"
                        style="position:absolute; color:white; top:6px; margin-left:800px; font-size:20px;"> Logout</a>
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
</style>

<body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%; padding-bottom: 20px;font-family:'IBM Plex Sans', sans-serif;"> Welcome
            &nbsp<?php echo $_SESSION['dname'] ?> </h3>
        <div class="row">
            <div class="col-md-4" style="max-width:18%;margin-top: 3%;">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" href="#list-dash" role="tab"
                        aria-controls="home" data-toggle="list">Dashboard</a>
                    <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab"
                        data-toggle="list" aria-controls="home">Appointments</a>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab"
                        data-toggle="list" aria-controls="home"> Prescription List</a>

                </div><br>
            </div>
            <div class="col-md-8" style="margin-top: 3%;">
                <div class="tab-content" id="nav-tabContent" style="width: 950px;">
                    <div class="tab-pane fade show active" id="list-dash" role="tabpanel"
                        aria-labelledby="list-dash-list">


                    </div>


                    <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-home-list">

                        <table class="table table-hover">
                            <thead>
                                <tr>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Patient-id</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Prescribe</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                   include('connect.php');
                    global $con;
                    $dname = $_SESSION['dname'];
                    $query = "select pid,ID,fname,lname,gender,email,contact,appdate,apptime,userStatus,doctorStatus from appointmenttb where doctor='$dname';";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                    <td>#65db9c</td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['contact'];?></td>
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
                      echo "Cancelled by You";
                    }
                        ?></td>

                                    <td>
                                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>


                                        <a href="doctor-panel.php?ID=<?php echo $row['ID']?>&cancel=update"
                                            onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                            title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button
                                                class="btn btn-danger">Cancel</button></a>
                                        <?php } else {

                                echo "Cancelled";
                                } ?>

                                    </td>

                                    <td>

                                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>

                                        <a href="prescribe.php?pid=<?php echo $row['pid']?>&ID=<?php echo $row['ID']?>&fname=<?php echo $row['fname']?>&lname=<?php echo $row['lname']?>&appdate=<?php echo $row['appdate']?>&apptime=<?php echo $row['apptime']?>"
                                            tooltip-placement="top" tooltip="Remove" title="prescribe">
                                            <button class="btn btn-dark">Prescribe</button></a>
                                        <?php } else {

                            echo "-";
                            } ?>

                                    </td>


                                </tr></a>
                                <?php $cnt++; } ?>
                                <br>
                            </tbody>
                        </table>
                        <br>
                    </div>



                    <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Appointment Date</th>
                                    <th scope="col">Appointment Time</th>
                                    <th scope="col">Disease</th>
                                    <th scope="col">Tests</th>
                                    <th scope="col">Prescribe</th>
                                    <th scope="col">Medication Time</th>
                                    <th scope="col">Qr Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                   include('connect.php');
                    global $con;

                    $query = "select pid,fname,lname,ID,appdate,apptime,disease,allergy,prescription from prestb where doctor='$doctor';";
                    
                    $result = mysqli_query($con,$query );
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                    <td><?php echo $row['appdate'];?></td>
                                    <td><?php echo $row['apptime'];?></td>
                                    <td><?php echo $row['disease'];?></td>
                                    <td><?php echo $row['allergy'];?></td>
                                    <td><?php echo $row['prescription'];?></td>
                                    <td>6:00 AM, 1:00 PM & 6:00PM</td>
                                    <td> <button type="submit" class="btn btn-dark"
                                            onclick="generateqr()">Generate</button></td>


                                </tr>
                                <?php $cnt++; }
                    ?>
                            </tbody>
                        </table>
                        <div id="qrcodegen" style="text-align:center;">

                        </div>

                    </div>

                    <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Consultancy Fees</th>
                                    <th scope="col">Appointment Date</th>
                                    <th scope="col">Appointment Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                   include('connect.php');
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                                <tr>
                                    <td><?php echo $row['fname'];?></td>
                                    <td><?php echo $row['lname'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['doctor'];?></td>
                                    <td><?php echo $row['docFees'];?></td>
                                    <td><?php echo $row['appdate'];?></td>
                                    <td><?php echo $row['apptime'];?></td>
                                </tr>
                                <?php } ?>
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
                                <div class="col-md-8"><input type="text" class="form-control" name="doctor" required>
                                </div><br><br>
                                <div class="col-md-4"><label>Password:</label></div>
                                <div class="col-md-8"><input type="password" class="form-control" name="dpassword"
                                        required></div><br><br>
                                <div class="col-md-4"><label>Email ID:</label></div>
                                <div class="col-md-8"><input type="email" class="form-control" name="demail" required>
                                </div><br><br>
                                <div class="col-md-4"><label>Consultancy Fees:</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="docFees" required>
                                </div><br><br>
                            </div>
                            <input type="submit" name="docsub" value="Add Doctor" class="btn btn-dark">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>


    <script>
    function generateqr() {
        var url =
            "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Patient:Kishan Magar %0aDisease:Diarrhoea %0aTests:No test %0aPrescribtion:Bismuth Subsalicylate";
        console.log(url);
        var ifr = `<iframe src = "${url}" height ="200" width= "200"></iframe>`;
        document.getElementById('qrcodegen').innerHTML = ifr;
    }
    </script>
</body>

</html>