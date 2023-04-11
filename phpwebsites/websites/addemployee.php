<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="addemployee.css"> -->
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
        nav button{
            color: white;
            background-color:transparent !important;
            font-weight:bold;
            /* border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black; */
            border: none;
            border-bottom: 2px solid white;
        }
        nav button:hover, a:hover{
            color: lightgreen;
            opacity:0.5;
        }
        tr{
            color:black;
            border: 1px solid white;
        }
        td,th{
            position: relative;
            width:100%;
            text-align:center;
            justify-content:center;
            color:black;
            border: 2px solid white;
            background-color:skyblue;
        }
        table
        {
            /* font-size: 30px; */
            margin:auto;
            background-color:black;
            color:black;
            border: 2px solid white;
        }
        nav button
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
        <button  name="UNIT STATUS" onclick="buttonclicked(0)"><span><i class="fa fa-thin fa-list" style="margin-right:5px;"></i> ADD EMPLOYEE</span></button><br>
        <button  name="ADD_UNIT" onclick="buttonclicked(1)"><span><i class="fa fa-duotone fa-plus" style="margin-right:5px;"></i> EMPLOYEE LIST</span></button><br>
        <button  name="DELETE_UNIT" onclick="buttonclicked(2)"><span><i class="fa fa-thin fa-trash" style="margin-right:5px;"></i> FIRE EMPLOYEES</span></button>
        
    </nav>
    <form id="0" action="addemployee1.php" target="blank"  method="post" >
        <table >
            
                <!-- <th>ID</th> -->
                <tr><th>NAME</th><td><input id="name" type="string" name="name"></td></tr>
                <tr> <th>PHONE NUMBER</th><td><input id="phone" type="string" name="phone_number"></td></tr>
                <tr><th>UNIT</th><td><input id="unit" type="number" name="uid"></td></tr>
                <tr><th>SALARY</th><td><input id="salary" type="amount" name="salary"></td></tr>
                <tr><th>DOJ</th><td><input id="doj" type="date" name="doj"></td></tr>
                <tr><th>USER NAME</th> <td><input id="uname" type="text" name="username"></td></tr>
                <tr><th>PASSWORD</th><td><input id="password" type="password" name="password"></td></tr>
                <tr><th>TYPE</th><td><select name="type" id="type">
                    <option value="manager">manager</option>
                    <option value="warden">warden</option>
                </select></td></tr>
                <tr ><td colspan="2"><input type="submit" value="ADD EMPLOYEE" style="width:100%"></td></tr>
        </table>
        
        <button type="button" value="CLEAR" onclick="clearfields()">CLEAR</button>

    </form>
    <div id="1">
        <?php
            echo "inside division 2";
            $conn=mysqli_connect("localhost:3307","root","","pgms");
            $sqlm="SELECT  `mid`,`name`,`phone_number` from `manager`;";
            $sqlw="SELECT `wid`,`name`,`phone_number` from `warden`;";
            $result1=mysqli_query($conn,$sqlm);
            $result2=mysqli_query($conn,$sqlw);
            echo "<table>";
            echo "<tr><th>MID</th><th>NAME</th><th>PHONE NUMBER</th></tr>";
            while($row = mysqli_fetch_assoc($result1))
            {
                echo "<tr>";
                echo "<td>".$row['mid']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['phone_number']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<table>";
            echo "<tr><th>WID</th><th>NAME</th><th>PHONE NUMBER</th></tr>";
            while($row = mysqli_fetch_assoc($result2))
            {
                echo "<tr>";
                echo "<td>".$row['wid']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['phone_number']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
            
    </div>
    <div id="2">
        <h1>fire employee</h1>
    </div>
    
</body>
<script>
    document.getElementById("1").style.display="none";
    document.getElementById("0").style.display="none";
    document.getElementById("2").style.display="none";
    function buttonclicked(a)
    {
        var b=(a+1)%3;
        var c=(a+2)%3;
        document.getElementById(a).style.display="block";
        document.getElementById(b).style.display="none";
        document.getElementById(c).style.display="none";
    }
</script>
<script>
    let arr=["mid","name","phone","unit","salary"];
    function clearfields() 
    {
        console.log("ENTERED FOR CLEARING");
        for(let i=0; i<arr.length; i++)
        document.getElementById(arr[i]).value="";
    }
</script>
</html>