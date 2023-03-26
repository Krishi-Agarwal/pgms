<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,th{
            text-align: center;
            border: 1px solid black;
        }
        td{
            text-align: center;
            border: 1px solid black;
        }
        table
        {
            border: 1px solid black;
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
            while ($row = mysqli_fetch_assoc($result)) {
                $unn=$row["UNO"];
                $sql1 = "SELECT count(`RNO`) as `trooms` FROM rooms where `UNO`=$unn";
                $sql2 = "SELECT sum(`TOTAL_BEDS`) as `SUM` FROM rooms where `UNO`=$unn";
                $sql3 = "SELECT sum(`BEDS_VACANT`) as `VACANT` FROM rooms where `UNO`=$unn";
                $result1 = mysqli_query($conn, $sql1);
                $result2 = mysqli_query($conn, $sql2);
                $result3 = mysqli_query($conn, $sql3);
                echo "<tr>";
                echo "<td>" . $row["UNO"] . "</td>";
                echo "<td>" . $row["LOCATION"] . "</td>";
                if($row1 = mysqli_fetch_assoc($result1))
                echo "<td>" . $row1["trooms"] . "</td>";
                else
                {echo "<td>" ."NOT FOUND". "</td>";

                }
                if($row2 = mysqli_fetch_assoc($result2))
                echo "<td>" . $row2["SUM"] . "</td>";
                else
                {echo "<td>" ."NOT FOUND". "</td>";

                }
                if($row3 = mysqli_fetch_assoc($result3))
                echo "<td>" . $row3["VACANT"] . "</td>";
                else
                {echo "<td>" ."NOT FOUND". "</td>";

                }

                echo "</tr>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
</table>
</body>
</html>