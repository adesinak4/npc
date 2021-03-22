<?php
include '../connect.php';
session_start();

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $lga = mysqli_real_escape_string($conn, $_POST['lga']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
    else {
  $result = mysqli_query($conn, $user_check_query);
  /*$user = mysqli_fetch_assoc($result);*/
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
      // Finally, register citizen if there are no errors in the form
  if ($count == 0) {
  	$query = "INSERT INTO citizens (name, gender, address, phone, ward_id) 
  			  VALUES('$name', '$gender', '$address', '$phone', '$ward_id')";
      $wards = "INSERT INTO wards (name, lga_id) 
  			  VALUES('$name', '$lga_id')";
      $lgas = "INSERT INTO wards (name, state_id) 
  			  VALUES('$name', '$state_id')";
      $states = "INSERT INTO wards (name) 
  			  VALUES('$name')";
      
  	mysqli_query($conn, $query);
      mysqli_query($conn, $wards);
      mysqli_query($conn, $lgas);
      mysqli_query($conn, $states);
      header("refresh:2; user/index.php");
  }

    }

}

?>