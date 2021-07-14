<html>
    <head>
  <title>Camps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="icon" href="images/blood.ico">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
    
   
    
<style>
body  {
  background-image: url("main.jpg");
  background-color: #cccccc;
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
<table>
<tr>
<th>Camp Id</th>
<th>Camp Location</th>
<th>Start Date</th>
<th>End Date</th>
</tr>
<?php 
include_once("config.php"); 
$sql = "SELECT * FROM `camps` ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["camp_id"]. "</td><td>" . $row["camp_loc"] . "</td><td>"
.       $row["camp_date_start"]."</td><td>" . $row["camp_date_end"]. "</td></tr>";
}


?> 
</table>	
</body>
    
    
</html>