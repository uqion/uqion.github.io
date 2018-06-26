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
    $id = $_GET['id'];
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

    mysqli_query($conn,"DELETE FROM works_at WHERE pid = $id");
    $sql = "DELETE FROM contact WHERE pid = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "Successfully deleted contact";

    exit;
} else {
    echo "Error deleting record";}
?>
<br/> <br/>
</main>
       <footer>
           <p>My ContactBook &copy; | </p>

       </footer>
   </body>
</html>
