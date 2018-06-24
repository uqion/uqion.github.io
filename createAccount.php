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
            <div class="account">
                <form class="accountContent" action="process.php" method= "post">
                    <br><br>
                    <label for="First name">First name (required)</label><br>
                    <input class="input" type="text" id="Username" name="First name" placeholder="First name.."><br>

                    <label for="Last name">Last name (required)</label><br>
                    <input class="input" type="password" id="Password" name="Last name" placeholder="Last name.."><br>

                    <label for="Email">Email (required)</label><br>
                    <input class="input" type="email" id="Email" name="Email" placeholder="Email address.."><br>

                    <form action="/action_page.php">
                        <div class="selection">
                                          <span>Company: </span>
                                          <select>
                                              <option value="Silent Companion">Silent Companion</option>
                                              <option value="Hidden Gem">Hidden Gem</option>
                                              <option value="Gatorade">Gatorade</option>
                                              <option value="Secret Agent">Secret Agent</option>
                                              <option value="Mac Daddy">Mac Daddy</option>
                                          </select>
                                      </div>
                                                              <div><a href="createAccount.php">Company not listed? Click here to add to directory</a></div>
                                      </form><br>
                                      <label for="Email">Position (required)</label><br>
                                      <input class="input" type="email" id="Email" name="Email" placeholder="Email address.."><br>

  <br><br>

</form>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </main>
        <footer>
           <p>My ContactBook &copy; | </p>
            
        </footer>
    </body>
</html>
