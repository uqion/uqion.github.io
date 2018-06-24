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

                <li>Welcome to My ContactBook!</li>
            </ul>
        </nav>
        <main>
             <br/> <br/> <br/>
             <form action="display.php">
    <input type="submit" value="View contacts" />
</form>
<br/>
<form action="searchContacts.php">
<input type="submit" value="Search contacts" />
</form>
<br/>
<form action="addContact.php">
<input type="submit" value="Add a contact" />
</form>
<br/>



                     <br/> <br/> <br/> <br/>
                </form>
            </div>
        </main>
        <footer>
           <p>My ContactBook &copy; | By Julia Chu  </p>

        </footer>
    </body>
</html>
