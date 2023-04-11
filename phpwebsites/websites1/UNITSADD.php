<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "pgms";
$conn=mysqli_connect($servername,$username,$password,$database);
$uno=$_POST['uno'];
$location=$_POST['location'];
$sql="INSERT INTO `unit` (`uno`, `location`) VALUES ('$uno','$location');";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error creating database due to".mysqli_error($conn);
}
else
{
    
       echo "DATA INSERTED connected successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $database ?></p>
</body>
</html>