<?php
$conn = mysqli_connect("localhost:3307", "root", "", "pgms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owner1.css">
    <title>Welcome OWNER</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript">
        function revenue()
        {
            var s1=document.getElementById("s1").value;
            var s2=document.getElementById("s2").value;
            //console.log(s2);
            if(s2=="ALL")
            {
                <?php
                $sqlp="SELECT BASERENT*TOTAL_BEDS as total from ROOMS";
                $sqlg="SELECT BASERENT*(BEDS_OCCUPIED) as total from ROOMS";
                $rp=mysqli_query($conn,$sqlp);
                $rg=mysqli_query($conn,$sqlg);
                $sump=0;
                $sumg=0;
                while($row=mysqli_fetch_assoc($rp))
                {
                    $sump+=$row['total'];
                }
                while($row=mysqli_fetch_assoc($rg))
                {
                    $sumg+=$row['total'];
                }
                ?>
                console.log(<?php echo $sump; ?>);
                console.log(<?php echo $sumg; ?>);
                if(s1=="POSSIBLE")
                {
                    
                    document.getElementById("revenue").innerHTML=<?php echo $sump; ?>;
                }
                else
                document.getElementById("revenue").innerHTML=<?php echo $sumg; ?>;
            }
        
        }
    </script>
</head>
<body>
    <header>
        <h1 style="margin-top:5px;margin-bottom:0;">PG MANAGEMENT SYSTEM</h1>
        
    </header>
    <hr>
    <nav>
        <ul id="leftnav">
            
            <li><a href="units.php" target="_blank">UNITS</a></li>
            <li><a href="" target="_blank">ROOMS</a></li>
            <li><a href="gallery.html" target="_blank">GALLERY</a></li>
            <li><a href="addemployee.php" target="_blank">EMPLOYEES</a></li>
            <li><a href="" target="_blank">COMPLAINTS</a></li>
            
        </ul>
        <ul id="rightnav">
            <li><a href="login.html" target="_blank" >sign out</a></li>
        </ul>
    </nav>
        <div class="normaldetails">
            <div>
                <p>NO OF ROOMS</p>
                <hr>
                <b><?php
                $tr="SELECT count(*) as total from ROOMS";
                $resulttr=mysqli_query($conn,$tr);
                while($row=mysqli_fetch_assoc($resulttr))
                {
                    echo $row['total'];
                }?>
                </b>
            </div>
            <div>
                <p>NO OF UNITS</p>
                <hr>
                <b><?php
                $tu="SELECT count(*) as total from UNIT";
                $resulttu=mysqli_query($conn,$tu);
                while($rowu=mysqli_fetch_assoc($resulttu))
                {
                    echo $rowu['total'];
                }?></b>
            </div>
            <div>
                <p>NO OF BEDS</p>
                <hr>
                <b><?php
                $tu="SELECT sum(TOTAL_BEDS) as total from rooms";
                $resulttu=mysqli_query($conn,$tu);
                while($rowu=mysqli_fetch_assoc($resulttu))
                {
                    echo $rowu['total'];
                }?></b>
            </div>
            <div>
                <p>BEDS STATUS </p>
                <hr>
                <b>VACANT:<?php
                $tu="SELECT sum(TOTAL_BEDS-BEDS_OCCUPIED) as total from rooms";
                $resulttu=mysqli_query($conn,$tu);
                while($rowu=mysqli_fetch_assoc($resulttu))
                {
                    echo $rowu['total'];
                }?> OCCUPIED:<?php
                $tu="SELECT sum(BEDS_OCCUPIED) as total from rooms";
                $resulttu=mysqli_query($conn,$tu);
                while($rowu=mysqli_fetch_assoc($resulttu))
                {
                    echo $rowu['total'];
                }?></b>
            </div>
            <div>
                <p>NO OF COMPLAINTS</p>
                <hr>
                <b>ROOMS</b>
            </div>
        </div>
    </nav>
    <div id="tc">
    <table>
        <tr>
            <th>SELECT THE NEED</th>
            <th>UNITS</th>
            <th>REVENUE</th>
        </tr>
        <tr>
        <td><select id="s1" onselect="revenue()" onmouseover="revenue()">
                <option value="POSSIBLE">POSSIBLE REVENUE</option>
                <option value="TOTAL">TOTAL REVENUE</option>
            </select></td>
            <td><select id="s2" onselect="revenue()" onmouseover="revenue()">
                <!-- will be replaced by php options -->
                
                <option value="ALL">ALL</option>
                <option value="1">UNIT 1</option>
            </select></td>
            <td id="revenue">REVENUE</td>
        </tr>
    </table>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
</body>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>

</html>