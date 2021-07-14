<html>
    <head>
        <title>Donors List-BBMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/blood.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
            
        
            
        <style>
            body  {
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
            <th>Name</th>
            <th>Blood Group</th>
            <th>Phone</th>
            </tr>

            <?php 
                include_once("config.php"); 
                $flag=0;
                session_start(); //always start a session in the beginning 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') 
                { 
                    

                    $sql ="SELECT * FROM users WHERE username = ? && password=?";
                    $stmt = mysqli_prepare($conn ,$sql);
                    mysqli_stmt_bind_param($stmt, "ss", $_POST['uname'],$_POST['pwd']);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 0)
                    {
                    //fetching result would go here, but will be covered later
                            echo "Invalid Username or Password!";
                    }
                    else
                    {
                            $name=$_POST['name'];
                            $username=$_POST['uname'];
                            $password=$_POST['pwd'];
                            $bloodgroup=$_POST['bgroup'];
                            $location=$_POST['location'];
                            $pincode=$_POST['pin'];
                            $sql= "INSERT INTO `request`(`name`, `username`, `password`, `bloodgroup`, `location`, `pincode`) VALUES ('$name','$username','$password','$bloodgroup','$location','$pincode')";    //Fetching all the records with input credentials
                            $result =mysqli_query($conn, $sql);
                            $sql ="SELECT * FROM donors WHERE location='$location' || pincode='$pincode'";
                            $result1=mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result1)) {
                                if($row["bloodgroup"]==$bloodgroup)
                                {
                                    $flag=1;
                                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["bloodgroup"] . "</td><td>"
                .               $row["mobileno"]. "</td></tr>";
                                }
                            }
                            echo "</table>";

                            if($flag==0)
                            echo "<strong><br>No Matching Entry";

                    }
                    mysqli_stmt_close($stmt);
                }
                    
            ?>
        </table>
    </body>   
</html>