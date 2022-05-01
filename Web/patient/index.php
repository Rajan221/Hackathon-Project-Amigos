<html>

<head>
    <title>Patient Management</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
    .form-control {
        border-radius: 0.75rem;
    }
    </style>


    <script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
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

    function checklen() {
        var pass1 = document.getElementById("password");
        if (pass1.value.length < 6) {
            alert("Password must be at least 6 characters long. Try again!");
            return false;
        }
    }
    </script>

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <a class="navbar-brand js-scroll-trigger" href="#"
                style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif; color:black;">
                <h4> PATIENT MANAGEMENT SYSTEM</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="index.php"
                            style="color: black;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6 style="margin-left:-250px;">HOME</h6>
                        </a>
                    </li>


                    <li class=" nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html"
                            style="color: black;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6 style="margin-left:-200px;">CONTACT</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="row">
            <div class="col-md-9 register-right"
                style="margin-top: 40px;border-radius:20px; background-color:dedede;left: 80px;top:-30px;">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist"
                    style="width: 75%; position:absolute; top:-30px; left:200px; border:2px solid black;">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab"
                            aria-controls="admin" aria-selected="false">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-right:5px;" id=" profile-tab" data-toggle="tab"
                            href="#pharmecist" role="tab" aria-controls="admin" aria-selected="false">Pharmacist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            style="margin-right:5px; margin-top:-1px; padding-top:2px; position:absolute; top:1px;left:500px; background:black; color:white;"
                            id=" profile-tab" data-toggle="tab" href="#hospital" role="tab" aria-controls="admin"
                            aria-selected="false">Hospital</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading" style="color:black;">Register as Patient</h3>
                        <form method="post" action="func2.php">
                            <div class="row register-form">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" name="fname"
                                            onkeydown="return alphaOnly(event);" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *"
                                            name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            id="password" name="password" onkeyup='check();' required />
                                    </div>

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Female">
                                                <span>Female </span>
                                            </label>
                                            <br>

                                        </div>
                                        <strong> <a href="index1.php" style="decoration:none; color:black;">Already have
                                                an
                                                account? Login
                                                Now</a></strong>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" name="lname"
                                            onkeydown="return alphaOnly(event);" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" minlength="10" maxlength="10" name="contact"
                                            class="form-control" placeholder="Contact *" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword"
                                            placeholder="Confirm Password *" name="cpassword" onkeyup='check();'
                                            required /><span id='message'></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword" placeholder=" DOB *"
                                            name="cpassword">
                                    </div>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Male" checked>
                                        <span>Citizenship </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Female">
                                        <span>Passport No. </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender"
                                            style="position:absolute;left:-10px; top:260px;" value="Female">
                                        <select class="form-control" id="123" required="required">

                                            <option value="" disabled selected>Others </option>


                                            <option value="1">Birth Certificate No. Hospital</option>
                                            <option value="2">LIscence No.</option>
                                        </select>

                                    </label>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword"
                                            placeholder="Nationality*" name="cpassword">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword"
                                            placeholder="Address*" name="cpassword">
                                    </div> <input type="submit" class="btnRegister" name="patsub1"
                                        onclick="return checklen();" value="Register" />
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Doctor</h3>
                        <form method="post" action="func1.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name *"
                                            name="username3" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            name="password3" required />
                                    </div>

                                    <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Admin</h3>
                        <form method="post" action="func3.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name *"
                                            name="username1" onkeydown="return alphaOnly(event);" required />
                                    </div>



                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            name="password2" required />
                                    </div>

                                    <input type="submit" class="btnRegister" name="adsub" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--------- pharmasist ---------->
                    <div class="tab-pane fade show" id="pharmecist" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Pharmacist</h3>
                        <form method="post" action="func4.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User name*"
                                            name="username1" onkeydown="return alphaOnly(event);" required />
                                    </div>



                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            name="password2" required />
                                    </div>

                                    <a href="index5.php" type="submit" class="btnRegister" name="adsub1" value="Sign Up"
                                        style="position:absolute; left:180px; top: 50px; text-decoration:none; color:white; text-align:center;"><strong>Login</strong></a>
                                    <a href="index3.php" type="submit" class="btnRegister" name="adsub1" value="Sign Up"
                                        style="position:absolute; left:-20px; top: 50px; text-decoration:none; color:white; text-align:center;"><strong>Sign
                                            Up</strong></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- hospital -->
                    <div class="tab-pane fade show" id="hospital" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Hospital</h3>
                        <form method="post" action="func4.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PAN No.*" name="username1">
                                    </div>



                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *"
                                            name="password2" required />
                                    </div>

                                    <a href="index6.php" type="submit" class="btnRegister" name="adsub1" value="Sign Up"
                                        style="position:absolute; left:190px; top: 50px; text-decoration:none; color:white; text-align:center;"><strong>Login</strong></a>
                                    <a href="index4.php" type="submit" class="btnRegister" name="adsub1" value="Sign Up"
                                        style="position:absolute; left:-20px; top: 50px; text-decoration:none; color:white; text-align:center;"><strong>Sign
                                            Up</strong></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
</script>

</html>