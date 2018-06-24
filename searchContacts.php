
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

$conn->close();
?>
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

                <form action="searchprocess1.php" method= "post">
                    <br><br>
                    <label for="name">Search by company...</label><br>
                    <input class="input" type="text" id="name" name="name" placeholder="e.g. Clear View Systems"><br>
                    <button type="submit">Search</button>
                    </form>


                <form action="searchprocess2.php"  method= "post">
                        <br><br>
                    <label for="last_name">Search by surname...</label><br>
                    <input class="input" type="text" id="last_name" name="last_name" placeholder="e.g. Chu"><br>
                    <button type="submit">Search</button>
                                    </form>
                                </div>
                            </main>
                            <footer>
                               <p>My ContactBook &copy; | </p>

                            </footer>
                        </body>
                    </html>
