<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Receiver Form</title>
  <link rel="icon" href="images/blood.ico">
  <link rel="stylesheet" href="css/styles1.css">
</head>

<body>
  <div class="loginbox" style="width: 520px; height: 650px;top: 55%;border-radius: 3%;">
    <img src="images/blood.ico" alt="" class="avatar" style="left: 175px;">
    <h1>Receiver Registration</h1>
    <form  action="search.php" method="post">
      <p>Receiver Name</p>
      <input type="text" name="name" placeholder="Enter Your Full Name">
      <p>Blood Group</p>
      <input type="text" name="bgroup" placeholder="A,B,AB or O">
      <p>Location</p>
      <input type="text" name="location" placeholder="Enter Your Location">
      <p>Pin Code</p>
      <input type="text" name="pin" placeholder="Enter Your Pin Code">
      <p>Username</p>
      <input type="text" name="uname" placeholder="Enter Your Username">
      <p>Password</p>
      <input type="password" name="pwd" placeholder="Enter Password">
      <input type="submit" name="" value="Search">
    </form>
  </div>
</body>

</html>
