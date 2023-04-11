<?php
$conn=mysqli_connect("localhost:3307","root","","pgms");
$result=mysqli_query($conn, "SELECT max(UNO) as maxuno from unit");
$row = mysqli_fetch_assoc($result);
$minval=$row['maxuno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
        nav{
            
            box-sizing: border-box;
            background-color: rgb(55, 28, 49);
            height: 100vh;
            
            
            width:20%;

        }
        h1{
                    text-align: center;
                    font-size: 40px;
                    background: linear-gradient(90deg, #d919c3, #fff, #151111);
                    background-repeat: alternate repeat;
                    background-size: 80%;
                    animation: animate 3s infinite;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: rgba(255, 255, 255, 0.267);
        }
        @keyframes animate {
        0% {
        background-position: -100%;
        }
        
        100% {
            background-position: 800%;
        }
}
        button{
            color: white;
            background-color:transparent !important;
            font-weight:bold;
            /* border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black; */
            border: none;
            border-bottom: 2px solid white;
        }
        button:hover, a:hover{
            color: lightgreen;
            opacity:0.5;
        }
        tr{
            color:black;
            border: 1px solid white;
        }
        td,th{
            text-align:center;
            justify-content:center;
            color:black;
            border: 2px solid white;
            background-color:skyblue;
        }
        table
        {
            font-size: 30px;
            margin:auto;
            background-color:black;
            color:black;
            border: 2px solid white;
        }
        button
        {
            margin-top: 8px;
            display:flex;
            /* border: 1px solid white; */
            width:90%;
            float:left;
            height:30px;
            justify-content:center;
            
    
            
        }
        span{
            font-size:15px;
            justify-content: left;
            display: flex;
            margin-top: 10px;
        }
        button:click{
            background-color: grey;
        }
    </style>
</head>

<body>
<header>
        <h1>PG MANAGEMENT SYSTEM</h1>
        <hr>
    </header>
    <div style="display:flex;">
    <h1 id="minval" style="display:none;"><?php echo $minval ?></h1>
    
    <nav style="width=20%;border-right: 2px solid white;">
        <button><span><a style="color:white;text-decoration:none;" href="owner1.php"><i class="fa fa-light fa-house" style="margin-right:5px;"></i> HOME PAGE</a></span></button>
        <button  name="UNIT STATUS" onclick="buttonclicked(0)"><span><i class="fa fa-thin fa-list" style="margin-right:5px;"></i> UNIT STATUS</span></button><br>
        <button  name="ADD_UNIT" onclick="buttonclicked(1)"><span><i class="fa fa-duotone fa-plus" style="margin-right:5px;"></i> ADD UNIT</span></button><br>
        <button  name="DELETE_UNIT" onclick="buttonclicked(2)"><span><i class="fa fa-thin fa-trash" style="margin-right:5px;"></i> DELETE UNIT</span></button>
        
    </nav>
    <div class="rigthdiv" style="width:80%">
    <div id="f0" style="display:none;">
        <iframe id="if1" src="unitsstatus.php" style="width: 100%;height:100vh;border:none;"></iframe>
    </div>
    <form id="f1" style="display: none;" action="UNITSADD.php" target="_blank" method="post">
        <table >
            <tr>
                <th>UNIT NO</th>
                <th>LOCATION</th>
            </tr>
            <tr>
                <td ><input id="uno" type="number" name="uno" style="height:100%;"></td>
                <td ><input id="location" type="string" name="location" style="height:100%;"></td>
            </tr>
            
        </table>
        <input type="submit" value="submit">
    </form>
    <div id="f2" style="display:none;">
        <iframe id="if3" src="unitsdelete.php" style="width: 100%; height: 500px; border: none;"></iframe>
    </div>
    </div>
    </div>
</body>
<script>
    var uno=document.getElementById("uno");
    uno.min = <?php echo $minval ?>+1;
    function buttonclicked(a)
    {
        console.log(a);
        let t=a;
        document.getElementById("f"+a).style.display="block";
        let y=(a+1)%3;
        let z=(a+2)%3;

        document.getElementById("f"+y).style.display="none";
        document.getElementById("f"+z).style.display="none";
        

        document.getElementById("if1").src="unitsstatus.php";
        document.getElementById("if3").src="unitsdelete.php";
    }
</script>
</html>