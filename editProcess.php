<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="Icon.ico">
        <link rel="stylesheet" href="CSS.css">
        <title>PAS | Application</title>
    </head>
    <body>
       <center><img src="LOGO.png" alt="logo"></center>
        <nav>
            <ul>

                <li><a href="index.php">Back</a></li>
            </ul>
        </nav>
        <main>
<?php
    /*Set up*/
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "tiran_directory";
    // Create connections
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //clear procedure
    function clearConnection($mysql){
        while($mysql->more_results()){
        $mysql->next_result();
        $mysql->use_result();
        }
    }

    $wid = $_POST['ID'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email = $_POST['email'];
    $position=$_POST['position'];
    $company_name = $_POST['companyOption'];

    $result1 = mysqli_query($conn,"SELECT cid FROM company WHERE name = '$company_name'");
    $row1 = mysqli_fetch_row($result1);
    $cid= $row1[0];
    mysqli_query($conn,"UPDATE works_at SET position = '$position', cid = '$cid' WHERE wid = '$wid'");

    $result = mysqli_query($conn,"SELECT pid FROM works_at WHERE wid = '$wid'");
    $row = mysqli_fetch_row($result);
    $pid= $row[0];

    mysqli_query($conn,"UPDATE contact SET first_name = '$first_name', last_name = '$last_name', email = '$email' WHERE pid='$pid'");


        echo "<br><br><div>Updated contact.
            <br><br>
        </div>";




?>
<br/> <br/>
</main>
       <footer>
           <p>My ContactBook &copy; | </p>

       </footer>
   </body>
</html>
