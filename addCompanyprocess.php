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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="Icon.ico">
        <link rel="stylesheet" href="CSS.css">
        <title>PAS</title>
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

            $name=$_POST['name'];
            $inc_date=$_POST['inc_date'];

            mysqli_query($conn,"INSERT INTO company (name, inc_date)
            VALUES ('$name','$inc_date')");

            if(mysqli_affected_rows($conn) > 0){
                echo "<br><br><div>Company added. <a href='addCompany.php'>Add another company</a>
                    <br><br>>
                </div>";

            }else{
                echo "<br><br><div>This company is already in the directory.
                    <br><br>
                </div>";
            }
        ?>
        </main>
        <footer>
           <p>My ContactBook &copy; | </p>
            <a href="references.html">References</a>
        </footer>
    </body>
</html>
