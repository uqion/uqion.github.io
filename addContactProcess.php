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

            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];

            $email = $_POST['email'];
            $position=$_POST['position'];
            $name = $_POST['companyOption'];

            if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['position'])){


            mysqli_query($conn,"INSERT INTO contact (first_name, last_name, email)
            VALUES ('$first_name','$last_name','$email')");
            $pid = mysqli_insert_id($conn);
            $result = mysqli_query($conn,"SELECT cid FROM company WHERE name = '$name'");
            $row = mysqli_fetch_row($result);
            $cid= $row[0];
            mysqli_query($conn,"INSERT INTO works_at (pid,cid,position)VALUES ('$pid', '$cid','$position')");

            if(mysqli_affected_rows($conn) > 0){
                echo "<br><br><div>Contact added. <a href='addContact.php'>Add another contact</a>
                    <br><br>
                </div>";

            }else{
                echo "<br><br><div>This contact is already in the directory.
                    <br><br><br><br>
                </div>";
            }
        }else{
                    Print '<script>alert("One or more of required fields empty!");</script>';
                    echo "<br><br><div><a href='addContact.php'>Try again.</a>
                        <br><br>
                    </div>";
        }
        ?>
        </main>
        <footer>
           <p>My ContactBook &copy; | </p>

        </footer>
    </body>
</html>
