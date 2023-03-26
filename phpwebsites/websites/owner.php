<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME OWNER</title>
    <link rel="icon" type="image/x-icon" href="pictures\favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="ownerreply.js"></script>
</head>
<!-- <header>
    <div class="intro">
        <img  src="..\pictures\logo1.jpeg" alt="logo">
        <h1>WELCOME TO PG MANAGEMENT SYSTEM</h1>
    </div>
</header> -->
<hr style="height: 3px ;background-color: white;">
<body>
    <nav>
        
        <ul id="leftnav">
            <li><i class="fa-solid fa-magnifying-glass"></i></li>
            <!-- <li><a href="" target="_blank">Profile </a></li> -->
            <li><a href="units.php" target="_blank">UNITS</a></li>
            <li><a href="" target="_blank">ROOMS</a></li>
            <li><a href="gallery.html" target="_blank">GALLERY</a></li>
            <li><a href="addemployee.html" target="_blank">EMPLOYEES</a></li>
            <li><a href="" target="_blank">COMPLAINTS</a></li>
            
        </ul>
        <ul id="rightnav">
            <li><a href="" target="_blank">sign out</a></li>
        </ul>
    </nav>
    <!-- <nav>
        <ul>
            <li><i class="fa-solid fa-magnifying-glass"></i></li>
            <li><a href="http://www.instagram.com" target="_blank">Profile </a></li>
            <li><a href="http://www.instagram.com" target="_blank">Attendance</a></li>
            <li><a href="gallery.html" target="_blank">Gallery</a></li>
            <li><a href="employee.html" target="_blank">Employee</a></li>
            <li><a href="http://www.instagram.com" target="_blank">Complaints </a></li>
            <li><a href="http://www.instagram.com" target="_blank">Unit </a></li>
        </ul>
    </nav> -->
    <div class="internal">
        
    
        <div class="leftinternal"> 
            
            <div id="ownerprofile">
                
                <!-- <a href="https://en.wikipedia.org/wiki/Narendra_Modi" target="_blank"><img src="pictures/ow1.png" alt="" weidth="200px" height="200px"></a> -->
                <img src="pictures/ow1.png" usemap="#image-map" alt="" width="200px" height="200px">
                <table>
                    <tr>
                        <th>NAME</th>
                        <td>PM NARENDRA MODI</td>
                    </tr>
                    <tr>
                        <th>PHONE NO</th>
                        <td>63258471582</td>
                    </tr>
                    <tr>
                        <th>OWNER ID</th>
                        <td>000001</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="rightinternal">
            <h3 id="description">FEEDBACK FOR THE MONTHS</h3>
            <div id="feedback">
            <?php
                $conn = mysqli_connect("localhost:3307", "root", "", "pgms");
                $sql  = "SELECT * from `feedback`";
                $result =mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                    $find=$row["SID"];
                    $sql = "SELECT `name` from `student` where `SID`=$find;";
                    $result1 =mysqli_query($conn,$sql);
                    if($row1 = mysqli_fetch_assoc($result1))
                    {echo "<h1>".$row1['name']."</h1><br><br>";
                    echo $row["COMMENT"]."<br>";}
                }
            ?>
    </div>
    <map name="image-map">
        <area target="_blank" alt="specs" title="PM" href="https://en.wikipedia.org/wiki/Narendra_Modi" coords="80,191,196,34" shape="rect">
    </map>
    <script>
        let myWindow;
        let i=0;
        function openWin() {
          myWindow = window.open("loadingpage.html","width=100%,height=100%");
          setInterval(closeWin, 3000);
        }
        
        function closeWin() {
          myWindow.close();
        }
        if(i++==0)
            openWin();
    </script>
    <script>
        document.getElementById("feedback").style.backgroundColor="rgb(210, 205, 210)";
        let outerfeedback = document.createElement("div");
        outerfeedback.style.backgroundColor="rgb(99, 78, 78)";
        outerfeedback.style.borderRadius="10px";
        var comments=document.createElement("div");
        comments.className = "feedback"+"1";
        
        var pp=document.createElement("img");
        pp.id="img1";
        pp.src="pictures/pp1.jpeg";
        pp.style.width="60px";
        pp.style.height="60px";
        pp.style.borderRadius="20px";
        comments.style.display="flex";
        var Name=document.createElement("h3");
        
        Name.innerHTML="NAME";
        Name.id="fn";
        comments.appendChild(pp);
        comments.appendChild(Name);
        comments.appendChild(document.createElement("br"));
        var innerfeedback=document.createElement("h4");
        innerfeedback.innerHTML ="THIS PG IS AWESOME";
        innerfeedback.style.marginLeft="2%";
        var ulist=document.getElementById("replytop");

        outerfeedback.appendChild(comments);
        outerfeedback.style.margin="20px";
        outerfeedback.appendChild(innerfeedback);
        //ulist.document.getElementById("replytop").display="visible";
        ulist.style.display="flex";
        //ulist.getElementsByTagName("ul").style.displaystyle="none";
        outerfeedback.appendChild(ulist);

        document.getElementById("feedback").appendChild(outerfeedback);
        

        // for(let i=0;i<5;i++)
        // {
        //     var comments=document.createElement("div");
        //     comments.className = "feedback"+i;
        //     var innerfeedback=document.createElement("h1");
        //     innerfeedback.innerHTML ="THIS IS WORKING";
        //     document.getElementById("feedback"+i).appendChild(innerfeedback);
        //     document.getElementsByClassName("feedback").appendChild(innerfeedback);
        // }

    
    </script>
</body>

</html>