<!DOCTYPE html>
<?php 
include('func.php');  
include('newfunc.php');
include('connect.php');



  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $gender = $_SESSION['gender'];
  $lname = $_SESSION['lname'];
  $contact = $_SESSION['contact'];



if(isset($_POST['app-submit']))
{
  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $gender = $_SESSION['gender'];
  $contact = $_SESSION['contact'];
  $doctor=$_POST['doctor'];
  $email=$_SESSION['email'];
  $docFees=$_POST['docFees'];

  $appdate=$_POST['appdate'];
  $apptime=$_POST['apptime'];
  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Kolkata');
  $cur_time = date("H:i:s");
  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);
	
  if(date("Y-m-d",$appdate1)>=$cur_date){
    if((date("Y-m-d",$appdate1)==$cur_date and date("H:i:s",$apptime1)>$cur_time) or date("Y-m-d",$appdate1)>$cur_date) {
      $check_query = mysqli_query($con,"select apptime from appointmenttb where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

        if(mysqli_num_rows($check_query)==0){
          $query=mysqli_query($con,"insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

          if($query)
          {
            echo "<script>alert('Your appointment successfully booked');</script>";
          }
          else{
            echo "<script>alert('Unable to process your request. Please try again!');</script>";
          }
      }
      else{
        echo "<script>alert('We are sorry to inform that the doctor is not available in this time or date. Please choose different time or date!');</script>";
      }
    }
    else{
      echo "<script>alert('Select a time or date in the future!');</script>";
    }
  }
  else{
      echo "<script>alert('Select a time or date in the future!');</script>";
  }
  
}

if(isset($_GET['cancel']))
  {
    $query=mysqli_query($con,"update appointmenttb set userStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
      echo "<script>alert('Your appointment successfully cancelled');</script>";
    }
  }





function get_specs(){
  include('connect.php');
  $query=mysqli_query($con,"select username,spec from doctb");
  $docarray = array();
    while($row =mysqli_fetch_assoc($query))
    {
        $docarray[] = $row;
    }
    return json_encode($docarray);
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
</style>

<body style="padding-top:50px;">

    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome
            &nbsp<?php echo $username ?>
        </h3>
        <div class="row">
            <div class="col-md-4" style="max-width:25%; margin-top: 3%">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list"
                        href="#list-dash9" role="tab" aria-controls="home">Dashboard</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"
                        href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
                    <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab"
                        data-toggle="list" aria-controls="home">Appointment History</a>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab"
                        data-toggle="list" aria-controls="home">Prescriptions</a>

                </div><br>
            </div>
            <div class="col-md-8" style="margin-top: 3%;">
                <div class="tab-content" id="nav-tabContent" style="width: 950px;">






                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4>Book Appointment</h4>
                                    </center><br>
                                    <form class="form-group" method="post" action="admin-panel.php">
                                        <div class="row">

                                            <!-- <?php

                        include('connect.php');
                        $query=mysqli_query($con,"select username,spec from doctb");
                        $docarray = array();
                          while($row =mysqli_fetch_assoc($query))
                          {
                              $docarray[] = $row;
                          }
                          echo json_encode($docarray);

                  ?> -->


                                            <div class="col-md-4">
                                                <label for="spec">Specialization:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="spec" class="form-control" id="spec">
                                                    <option value="" disabled selected>Select Specialization</option>
                                                    <?php 
                              display_specs();
                              ?>
                                                </select>
                                            </div>

                                            <br><br>

                                            <script>
                                            document.getElementById('spec').onchange = function foo() {
                                                let spec = this.value;
                                                console.log(spec)
                                                let docs = [...document.getElementById('doctor').options];

                                                docs.forEach((el, ind, arr) => {
                                                    arr[ind].setAttribute("style", "");
                                                    if (el.getAttribute("data-spec") != spec) {
                                                        arr[ind].setAttribute("style", "display: none");
                                                    }
                                                });
                                            };
                                            </script>

                                            <div class="col-md-4"><label for="doctor">Hospital:</label></div>
                                            <div class="col-md-8">
                                                <select name="doctor" class="form-control" id="doctor"
                                                    required="required">
                                                    <option value="" disabled selected>Select Hospital</option>


                                                    <option value="1">Bir Hospital</option>
                                                    <option value="2">Grande Hospital</option>
                                                    <option value="3">Green City Hospital</option>
                                                    <option value="4">Chirayu Hospital</option>
                                                    <option value="5">Civil Hospital</option>
                                                </select>








                                                </select>
                                            </div><br /><br />

                                            <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                                            <div class="col-md-8">
                                                <select name="doctor" class="form-control" id="doctor"
                                                    required="required">
                                                    <option value="" disabled selected>Select Doctor</option>

                                                    <?php display_docs(); ?>
                                                </select>
                                            </div><br /><br />

                                            <script>
                                            document.getElementById('doctor').onchange = function updateFees(e) {
                                                var selection = document.querySelector(`[value=${this.value}]`)
                                                    .getAttribute('data-value');
                                                document.getElementById('docFees').value = selection;
                                            };
                                            </script>
                                            <div class="col-md-4"><label for="consultancyfees">
                                                    Consultancy Fees
                                                </label></div>
                                            <div class="col-md-8">
                                                <!-- <div id="docFees">Select a doctor</div> -->
                                                <input class="form-control" type="text" name="docFees" id="docFees"
                                                    readonly="readonly" />
                                            </div><br><br>

                                            <div class="col-md-4"><label>Appointment Date</label></div>
                                            <div class="col-md-8"><input type="date" class="form-control datepicker"
                                                    name="appdate"></div><br><br>

                                            <div class="col-md-4"><label>Appointment Time</label></div>
                                            <div class="col-md-8">
                                                <!-- <input type="time" class="form-control" name="apptime"> -->
                                                <select name="apptime" class="form-control" id="apptime"
                                                    required="required">
                                                    <option value="" disabled selected>Select Time</option>
                                                    <option value="08:00:00">8:00 AM</option>
                                                    <option value="10:00:00">10:00 AM</option>
                                                    <option value="12:00:00">12:00 PM</option>
                                                    <option value="14:00:00">2:00 PM</option>
                                                    <option value="16:00:00">4:00 PM</option>
                                                    <option value="16:00:00">4:00 PM</option>
                                                </select>

                                            </div><br><br>

                                            <div class="col-md-4">
                                                <input type="submit" name="app-submit" value="Create new entry"
                                                    class="btn btn-dark" id="inputbtn">
                                            </div>
                                            <div class="col-md-8"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Fees</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                    include('connect.php');
                    global $con;

                    $query = "select ID,doctor,docFees,appdate,apptime,userStatus,doctorStatus from appointmenttb where fname ='$fname' and lname='$lname';";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
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
                      echo "Cancelled by You";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>

                                    <td>
                                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>


                                        <a href="admin-panel.php?ID=<?php echo $row['ID']?>&cancel=update"
                                            onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                            title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button
                                                class="btn btn-danger"
                                                style="position:absolute; right:-65px;">Cancel</button></a>
                                        <?php } else {

                                echo "Cancelled";
                                } ?>

                                    </td>
                                </tr>
                                <?php $cnt++; } ?>
                            </tbody>
                            <p style="position:absolute; top:65px; right:60px;">Bir Hospital</p>
                        </table>
                        <br>
                    </div>



                    <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">Doctor</th>
                                    <th scope="col">Appointment Date</th>
                                    <th scope="col">Appointment Time</th>
                                    <th scope="col">Diseases</th>
                                    <th scope="col">Tests</th>
                                    <th scope="col">Prescriptions</th>
                                    <th scope="col">Prescription Time</th>
                                    <th scope="col">Payment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                    include('connect.php');
                    global $con;

                    $query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    

                    while ($row = mysqli_fetch_array($result)){
                  ?>
                                <tr>
                                    <td><?php echo $row['doctor'];?></td>
                                    <td><?php echo $row['appdate'];?></td>
                                    <td><?php echo $row['apptime'];?></td>
                                    <td><?php echo $row['disease'];?></td>
                                    <td><?php echo $row['allergy'];?></td>
                                    <td><?php echo $row['prescription'];?></td>
                                    <td>6:00 A.M, 1:00PM & 6:00 PM</td>
                                    <td>
                                        <form method="get">


                                            <a href="index8.php"
                                                style="padding:10px ; text-decoration:none; border-radius:10px;  3px solid black; color:white; background-color:black;">
                                                Pay

                                            </a>
                                    </td>

                                    </form>


                                </tr>
                                <?php }
                    ?>
                            </tbody>
                            <i> Your ID is #65db9c. </i>

                        </table>

                        <br>
                    </div>




                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        ...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <form class="form-group" method="post" action="func.php">
                            <label>Doctors name: </label>
                            <input type="text" name="name" placeholder="Enter doctors name" class="form-control">
                            <br>
                            <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-dark">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
    </script>


</body>

</html>