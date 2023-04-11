<?php
echo "welcome to data base creation <br>";
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "pgms";
$conn=mysqli_connect($servername,$username,$password,$database);
//$mid=$_POST['mid'];
$name=$_POST['name'];
$uid=$_POST['uid'];
$phone_number=$_POST['phone_number'];
$salary=$_POST['salary'];
$doj=$_POST['doj'];
$type=$_POST['type'];
$username=$_POST['username'];
$pass=$_POST['password'];
if(strcmp($type,"manager")==0)
{
    $sqlcount="SELECT count(*) as `cc` from `manager`";
    $sqlmaxm="SELECT max(`mid`) as `mmid` from `manager`";
    $resultc=mysqli_query($conn,$sqlcount);
    $rowc=mysqli_fetch_assoc($resultc);
    $resultm=mysqli_query($conn,$sqlmaxm);
    $row=mysqli_fetch_assoc($resultm);
    if($rowc['cc']!=0)
    $mid=$row['mmid']+1;
    else
    $mid=1;
    $sql="INSERT INTO `manager` (`mid`, `name`, `phone_number`, `uid`,`salary`, `doj`,`username`,`password`) VALUES ('$mid', '$name','$phone_number','$uid','$salary','$doj','$username','$pass');";
}
else
{
    $sqlcount="SELECT count(*) as `cc` from `warden`";
    $sqlmaxm="SELECT max(`wid`) as `mwid` from `warden`";
    $resultc=mysqli_query($conn,$sqlcount);
    $rowc=mysqli_fetch_assoc($resultc);
    $resultm=mysqli_query($conn,$sqlmaxm);
    $row=mysqli_fetch_assoc($resultm);
    if($rowc['cc']!=0)
    $mid=$row['mwid']+1;
    else
    $mid=1;
    $sql="INSERT INTO `warden` (`wid`, `name`, `phone_number`, `uid`,`salary`, `doj`,`username`,`password`) VALUES ('$mid', '$name','$phone_number','$uid','$salary','$doj','$username','$pass');";
}
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error creating database due to".mysqli_error($conn);
}
else
{
    echo "<script>window.close()</script>";
    echo "DATA INSERTED connected successfully";
}
?>