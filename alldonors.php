<html>
    <head>
  <title>Blood Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    
   
    
    <style>
body  {
  background-image: url("main.jpg");
  background-color: #cccccc;
}
.center-align
{
  position: absolute;
  margin: auto;
  top:400;
  right:0;
  left:0;
  bottom:0;
  width:1000px;
  border-radius:3px;
  

}
table {
border-collapse: collapse;
width: 100%;
color: #E9253E;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #E9253E;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2};
</style>
    
    <body>

   <form method="POST" action="adminpanel.php">
   <div class="form-group">
            <label class="control-label col-sm-2" for="submit"></label>
            <div class="col-sm-5">          
            <button type="submit" class="btn btn-primary" >Back to Admin Panel</button>
            </div>
          </div> 
          </form>
      </div><br>
<div class=" text-center">
  <h2>All Donors</h2> 
</div>
    
    
    

  
     
  
  </div>
</div>
</ul>
<div class="center-align">
<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Blood Group</th>
<th>Location</th>
<th>Email</th>
</tr>
<?php 
include_once("config.php"); 
echo "Connected Successfully";
session_start();
$sql = "SELECT * FROM donors";
$result = mysqli_query($conn, $sql)

    while ($row = mysqli_fetch_assoc($result)) {
       
            //$flag=1;
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"] . "</td><td>"
. $row["bloodgroup"]."</td><td>". $row["location"]."</td><td>". $row["email"]."</td><td>";
?>
<html>
  <body>
  <form class="form-horizontal" action="deletedonor.php" method="post">
  <button type="submit" name="user" class="btn btn-primary"   style="float:right;margin:5px;" value="<?php echo $row["username"]?> ">Delete</button>
    </form>
  
  </body>
</html>
<?php


}

?> 
</table>	
</div>
	
</body>
    
    
</html>