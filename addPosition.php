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
    $id = $_GET['id'];
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
<br><br>
<form action="addPositionProcess.php" method="post">
<input type="hidden" name="ID" value="<?=$id;?>">

<?php

$conn = new mysqli('localhost', 'root', 'root', 'tiran_directory') or die ('Cannot connect to db');

    $result = $conn->query("SELECT name FROM company");

    echo "<html>";
    echo "<body>";
    echo "<span>Company: </span>";
    echo "<select name = 'companyOption'>";
    while ($row = $result->fetch_assoc()) {

              unset($name);
                  $name = $row['name'];
                  echo "<option>" . $row{'name'} . "</option>";

}


    echo "</select>";

?><br>
Position: <input type="text" name="position"><td>
<input type="Submit"><br><br>
</form>
</main>
       <footer>
           <p>My ContactBook &copy; | </p>

       </footer>
   </body>
</html>
