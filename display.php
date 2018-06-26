
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
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "tiran_directory";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $database);
    //Create connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }


    $query = "CREATE VIEW display AS SELECT a.wid, a.pid,first_name , last_name , name, Position, email FROM works_at as a INNER JOIN contact as b on a.pid = b.pid INNER JOIN company as c on a.cid = c.cid ORDER BY last_name ASC";

    $result = $conn->query($query);

    $query1 = "SELECT * FROM display";
    $result1 = $conn->query($query1);

    if($result1->num_rows > 0){
        //output data of each row
        while($row = $result1->fetch_assoc()){
            //$query1 = mssql_query("SELECT COUNT(*) AS total FROM display WHERE $row["first_name"] = 1";
            //$row1 = mssql_fetch_assoc($query); // fetch it first

            //if($row['total'] > 1) {
            // do what you have to do
                //}
            // echo"<br><a href='YourProcessPage.php?path=" . $row['first_name'] . "'>" . $row['first_name'] . "</a><br>";
            echo"<br>".$row["last_name"].", ".$row["first_name"]."|   ".$row["Position"]."  |  ".$row["name"]."  |  ".$row["email"]."<br>";
            echo "<td><a href='delete.php?id=".$row['pid']."'>Delete</a></td> &nbsp;&nbsp;   <td><a href='edit.php?id=".$row['wid']."'>Edit</a></td>";
        //    echo "<div><a href='addContact.php?id=$row[name]\">Delete</a>"; echo"   </a>&nbsp;<a href='addContact.php'>           Edit</a>";"

                //<br>
        //    </div>";
        }
    }else{
        echo "0 results";
    }
$conn->close();
?>
 <br/> <br/>
</main>
        <footer>
            <p>My ContactBook &copy; | </p>

        </footer>
    </body>
</html>
