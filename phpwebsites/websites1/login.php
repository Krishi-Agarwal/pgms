<?php
$loggedas=$_POST['loggedas'];
$uname=$_POST['username'];
$pwd=$_POST['password'];
$conn=mysqli_connect("localhost:3307","root","","pgms");
$sql="insert into `login_stats` (`type`,`name`,`date`) values('$loggedas','$uname',now());";
$result=mysqli_query($conn,$sql);
if($loggedas=="OWNER")
{
    if($uname=="admin" && $pwd=="admin")
    {
        session_start();
        $_SESSION['name']="owner";
        $_SESSION['pnumber']="8250226290";
        $_SESSION['oid']="01";
        echo "<script>location.href='owner1.php'</script>";
    }   
}
else{
    echo $loggedas;
    echo $uname;
    echo $pwd;
    echo "not working";
}

// if(isset($_SESSION['uname'])){
//     echo "<h1>Welcome &nbsp".$_SESSION['uname']."&nbsp to christ university</h1>";
//     echo "<a href='course.php'>Course</a><br>";
//     echo "<br><a href='logout.php'><input type='button' name='logout' value='logout'></a>";
// }
// else 
// {
//     if($_POST['uname']==$uname && $_POST['pwd']==$pwd)
//     {
//         $_SESSION['uname']=$uname;
//         echo "<script>location.href='christ.php'</script>";
//     }
//     else{
//         echo "<script>alert('invalid username or password')</script>";
//         echo "<script>location.href='login.html'</script>";
//     }
// }
// ?>