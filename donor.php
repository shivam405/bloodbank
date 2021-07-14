<?php
require_once 'config.php';
$username = $password = "";
$username_err = $password_err = "";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      
        // Check if username is empty
    if(empty(trim($_POST["username"]))){
      $username_err = "Username cannot be blank";
      }
      else{
          $sql = "SELECT * FROM users WHERE username = ?";
          $stmt = mysqli_prepare($conn, $sql);
          if($stmt)
          {
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set the value of param username
              $param_username = trim($_POST['username']);

              // Try to execute this statement
              if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
                  if(mysqli_stmt_num_rows($stmt) == 1)
                  {
                      $username_err = "This username is already taken"; 
                  }
                  else{
                      $username = trim($_POST['username']);
                  }
              }
              else{
                  echo "Something went wrong";
              }
          }
          mysqli_stmt_close($stmt);
      }

      

        // Check for password
        if(empty(trim($_POST['password']))){
          $password_err = "Password cannot be blank";
        }
        elseif(strlen(trim($_POST['password'])) < 5){
          $password_err = "Password cannot be less than 5 characters";
        }
        else{
          $password = trim($_POST['password']);
        }

        if(empty($username_err) && empty($password_err) )
        {

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];
        $location =$_POST['location'];
        $pin =$_POST['pincode'];
        $sql = "INSERT INTO `donors` (`name`, `gender`, `age`, `bloodgroup`, `email`, `mobileno`, `location`, `pincode`, `username`, `password`) VALUES ('$name', '$gender', '$age', '$bgroup', '$email', '$phone', '$location', '$pin', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
        
        if($result)
        {
          $sql1 ="INSERT INTO users(username,email,password) VALUES ('$username', '$email', '$password')";
          $result1 = mysqli_query($conn, $sql1);
          $sql2 = "UPDATE bloodbank SET donorcount=donorcount+1 WHERE location='$loc'";
          $result2 = mysqli_query($conn,$sql2);
          header("location: login.php");
        }
        else{
            echo "Something Went wrong".mysqli_error($conn);
        }

        }
        mysqli_close($conn);
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Donor Form</title>
  <link rel="icon" href="images/blood.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles1.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</head>

<body>
<?php
    if($username_err){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $username_err.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
        if($password_err){
          echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> '. $password_err.'
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div> ';
          }
  ?>
  <div class="loginbox" style="width: 520px; height: 1000px;top: 55%;border-radius: 0%;">
    <img src="images/blood.ico" alt="" class="avatar" style="left: 175px;top: -50px;">
    <h1>Donar Registration</h1>
    <form action="" method="post">
      <p>Donar Name</p>
      <input type="text" name="name" placeholder="Enter Your Full Name">
      <p>Gender</p>
      <input type="text" name="gender" placeholder="Male,Female or Other">
      <p>Age</p>
      <input type="text" name="age" placeholder="Enter Your Age">
      <p>Blood Group</p>
      <input type="text" name="bgroup" placeholder="A,B,AB or O">
      <p>Email id</p>
      <input type="email" name="email" placeholder="Enter Your Email id">
      <p>Mobile no.</p>
      <input type="text" name="phone" placeholder="Enter Your Mobile no.">
      <p>Location</p>
      <input type="text" name="location" placeholder="Enter Your Location">
      <p>Pin Code</p>
      <input type="text" name="pincode" placeholder="Enter Your Pin Code">
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Your Username">
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="submit" name="" value="Register">
    </form>
  </div>
</body>

</html>