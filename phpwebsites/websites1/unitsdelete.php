<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            font-size: 25px;
            margin:auto;
            background-color:black;
            color:black;
            border: 2px solid white;
        }
    </style>
</head>
<body>
<table>
            <tr>
            <th>UNO</th>
            <th>LOCATION</th>
            <th>TOTAL ROOMS</th>
            <th>TOTAL BEDS</th>
            <th>BEDS VACANT</th>
            <th>SELECT TO DELETE</th>
            </tr>
              <?php
              // Connect to database
              $conn = mysqli_connect("localhost:3307", "root", "", "pgms");

              // Check connection
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }

              // Query database
              $sql = "SELECT `UNO`,`LOCATION` FROM unit";
              
              $result = mysqli_query($conn, $sql);
              
              // Loop through results and output data
              $dc=1;
                  while ($row = mysqli_fetch_assoc($result)) {
                      $unn=$row["UNO"];
                      $sql1 = "SELECT count(`RNO`) as `trooms` FROM rooms where `UNO`=$unn";
                      $sql2 = "SELECT sum(`TOTAL_BEDS`) as `SUM` FROM rooms where `UNO`=$unn";
                      $sql3 = "SELECT sum(`TOTAL_BEDS`)-sum(`BEDS_OCCUPIED`) as `VACANT` FROM rooms where `UNO`=$unn";
                      $result1 = mysqli_query($conn, $sql1);
                      $result2 = mysqli_query($conn, $sql2);
                      $result3 = mysqli_query($conn, $sql3);
                      echo "<tr>";
                      echo "<td>" . $row["UNO"] . "</td>";
                      echo "<td>" . $row["LOCATION"] . "</td>";
                      if($row1 = mysqli_fetch_assoc($result1))
                      echo "<td>" . $row1["trooms"] . "</td>";
                      else
                      echo "<td>" ."NOT FOUND". "</td>";
                      if($row2 = mysqli_fetch_assoc($result2))
                      echo "<td>" . $row2["SUM"] . "</td>";
                      else
                      echo "<td>" ."NOT FOUND". "</td>";
                      if($row3 = mysqli_fetch_assoc($result3))
                      echo "<td>" . $row3["VACANT"] . "</td>";
                      else
                      echo "<td>" ."NOT FOUND". "</td>";
                      echo "<td><input type='checkbox' id=$dc value='".$row['UNO']."'>delete</td>";
                      $dc++;
                      echo "</tr>";
                  }
              
              // Close connection
              //mysqli_close($conn);
              ?>

            
</table>
<button onclick="deleteSelected() " style="display:flex;margin:auto;width:86.8%;justify-content:center;font-size:20px;">Delete Selected</button>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>" style="display: none">
                  <input type="text" id="deleteuno" name="deleteuno">
                  <input type="submit" id="sb" value="submit" name="submit">
</form> 
<script>
    function deleteSelected()
    {
        let max=<?php echo $dc; ?>;
        for(let i=1;i<max;i++)
        {
            if(document.getElementById(i).checked)
            {
                console.log(i);
                document.getElementById("deleteuno").value=document.getElementById("deleteuno").value+i+",";
            }
        }
        document.getElementById("sb").click();
    }    
</script>
<?php
    if(isSet($_POST['submit']))
    {
        $deletelist=$_POST["deleteuno"];
        for($i=0;$i<strlen($deletelist);$i++)
        {
            $c=substr($deletelist, $i, 1);
            if (ctype_digit($c))
            {
                $sqld = "delete from `unit` where `uno`=$c;";
                mysqli_query($conn,$sqld);
            }
        }
    }
?>
</body>
</html>