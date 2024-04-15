<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/script.js"></script>
        <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
        <title>Registrazione Utente</title>

        <style>

            input[type="text"],
            input[type="password"],
            input[type="email"] {
                width: 70%;
                padding: 10px;
                border: 1px solid var(--accent);
                border-radius: 3px;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: var(--primary);
                color: var(--background);
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

        </style>

    </head>

    <body>

        <?php

            $data = $_GET;

            try {

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $databasename = "concorso";

                $conn = new PDO("mysql:host=$servername; dbname=$databasename", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $stmt1 = $conn->prepare("SELECT * FROM users WHERE tmpcode=:tmp");

                $stmt1->bindParam(':tmp', $data["code"]);

                $stmt1->execute();
                        
                // set the resulting array to associative
                $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
                foreach($stmt1->fetchAll() as $k=>$v) {
                                                    
                    echo '<div class="container">
                    <h2>Registrazione Utente</h2>
  <form action="process.php" method="POST">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="'.$v["email"].'" required>
    </div>

    <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    </div>

    <div class="form-group">
    <label for="password2">Ripeti Password:</label>
    <input type="password" id="password2" name="password2" required>
    </div>

    <div class="form-group">
    <input type="submit" value="Registrati">
    </div>
  </form>
  </div>';

                }

            } catch(PDOException $e) {
                        
                echo "Connection failed: " . $e->getMessage();

            }

            $conn = null;

            /*echo var_dump($data);

            $str = $data["code"];

            echo $str;*/

        ?>
        
    </body>

</html>