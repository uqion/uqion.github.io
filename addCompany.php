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

                <form  action="addCompanyprocess.php" method= "post">
                    <label for="name">Company name</label><br>
                    <input class="input" type="text" id="name" name="name" placeholder="e.g. Clear View Systems Ltd."><br>

                    <label for="inc_date">Incorporation date </label><br>
                    <input class="input" type="text" id="inc_date" name="inc_date" placeholder="(yyyy/mm/dd)"><br>


                    <button type="submit">Add company</button>
                </form>
            </div>
        </main>
        <footer>
           <p>My ContactBook &copy; | </p>

        </footer>
    </body>
</html>
