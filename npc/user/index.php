<?php require_once '../connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">National Population Commission</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="register.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="PHONE" name="phone">
                        </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ADDRESS" name="address">
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                            <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            <select onchange="toggleLGA(this);" name="state" id="state" class="form-control col-6">
                                  <option value="" selected="selected">- STATE -</option>
                                  <option value="Abia">Abia</option>
                                  <option value="Adamawa">Adamawa</option>
                                  <option value="AkwaIbom">AkwaIbom</option>
                                  <option value="Anambra">Anambra</option>
                                  <option value="Bauchi">Bauchi</option>
                                  <option value="Bayelsa">Bayelsa</option>
                                  <option value="Benue">Benue</option>
                                  <option value="Borno">Borno</option>
                                  <option value="Cross River">Cross River</option>
                                  <option value="Delta">Delta</option>
                                  <option value="Ebonyi">Ebonyi</option>
                                  <option value="Edo">Edo</option>
                                  <option value="Ekiti">Ekiti</option>
                                  <option value="Enugu">Enugu</option>
                                  <option value="FCT">FCT</option>
                                  <option value="Gombe">Gombe</option>
                                  <option value="Imo">Imo</option>
                                  <option value="Jigawa">Jigawa</option>
                                  <option value="Kaduna">Kaduna</option>
                                  <option value="Kano">Kano</option>
                                  <option value="Katsina">Katsina</option>
                                  <option value="Kebbi">Kebbi</option>
                                  <option value="Kogi">Kogi</option>
                                  <option value="Kwara">Kwara</option>
                                  <option value="Lagos">Lagos</option>
                                  <option value="Nasarawa">Nasarawa</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Ogun">Ogun</option>
                                  <option value="Ondo">Ondo</option>
                                  <option value="Osun">Osun</option>
                                  <option value="Oyo">Oyo</option>
                                  <option value="Plateau">Plateau</option>
                                  <option value="Rivers">Rivers</option>
                                  <option value="Sokoto">Sokoto</option>
                                  <option value="Taraba">Taraba</option>
                                  <option value="Yobe">Yobe</option>
                                  <option value="Zamfara">Zamafara</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        </div>
                            <div class="col-6">
                            <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="lga" id="lga" class="form-control select-lga" required></select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    
    <script src="js/lga.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
