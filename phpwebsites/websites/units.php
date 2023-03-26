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
    <title>Document</title>
    <style>
        tr{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
        table
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1 id="minval" style="display:none"><?php echo $minval ?></h1>
    <nav>
        <button type="button" name="UNIT STATUS" onclick="buttonclicked(0)">UNIT STATUS</button>
        <button type="button" name="ADD_UNIT" onclick="buttonclicked(1)">ADD UNIT</button>
        <button type="button" name="DELETE_UNIT" onclick="buttonclicked(2)">DELETE UNIT</button>
    </nav>
    <div id="f0" style="display:none;">
        <iframe id="if1" src="unitsstatus.php" style="width: 100%; height: 500px; border: none;"></iframe>
    </div>
    <form id="f1" style="display: none;" action="UNITSADD.php" target="_blank" method="post">
        <table >
            <tr>
                <th>UNIT NO</th>
                <th>LOCATION</th>
            </tr>
            <tr>
                <td><input id="uno" type="number" name="uno"></td>
                <td><input id="location" type="string" name="location"></td>
            </tr>
            
        </table>
        <input type="submit" value="submit">
    </form>
    <div id="f2" style="display:none;">
        <iframe id="if3" src="unitsdelete.php" style="width: 100%; height: 500px; border: none;"></iframe>
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