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

                <form action="addContactProcess.php" method= "post">
                    <br><br>
                    <label for="first_name">First name (required)</label><br>
                    <input class="input" type="text" id="first_name" name="first_name" placeholder="e.g. Julia"><br>

                    <label for="last_name">Last name (required)</label><br>
                    <input class="input" type="text" id="last_name" name="last_name" placeholder="e.g. Chu"><br>

                    <label for="email">Email (required)</label><br>
                    <input class="input" type="email" id="email" name="email" placeholder="e.g. juliachu312@gmail.com"><br>



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
                      echo '<option value="'.$name.'"</option>';

    }


        echo "</select>";

    ?>
    <div><a href="addCompany.php">Company not listed? Click here to add to directory</a></div>


                                      <label for="position">Position (required)</label><br>
                                      <input class="input" type="text" id="position" name="position" placeholder="e.g. Product Manager"><br>

  <br>
<button type="submit">Add contact</button>
</form>



                <br><br>
            </div>
        </main>
        <footer>
           <p>My ContactBook &copy; | </p>

        </footer>
    </body>
</html>
