<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Just a minute</title>

    </head>

    <body>

        <?php

            $data = $_POST; 

            //$ch = curl_init();

            // Initialize curl session
            // Set options

            //$code = "72";

            //$hashcode = password_hash($code, PASSWORD_DEFAULT);
            //$hashcode_len = strlen($hashcode);

            //$link = "http://localhost:8000/register.php?code=lol";  //"http://localhost:8000/register.php?code=".$hashcode."";

            //$lol = "http://127.0.0.1:5000/index?Cc=".$_POST["email"]."&sub=".'LOL'."&body=".$link."";

            /*curl_setopt($ch, CURLOPT_URL, $lol);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false); // Execute
            curl_setopt($ch, CURLOPT_POST, 1);
            $result = curl_exec($ch);// Close curl session
            curl_close($ch);// Output resultecho 
            echo $result;*/


            try {

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $databasename = "concorso";

                $conn = new PDO("mysql:host=$servername; dbname=$databasename", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";

                $username = $data["username"];
                $email = $data["email"];
                $password = $data["password"];
                $tmpcode = null; //str_replace("/", "x", $hashcode, $hashcode_len);

                //var_dump($data);

                //echo $name.' '.$surname.' '.$sex.' '.$bday.' '.$city.' '.$zipcode.' '.$class.' '.$course.' '.$email.' '.$password.' ';


                $stmt = $conn->prepare("UPDATE users SET username=:username, email=:email, password=:password, tmpcode=:tmpcode WHERE email=:email");

                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':tmpcode', $tmpcode);
                //$stmt->bindParam(':email', $email);

                if ($stmt->execute()) {
                    // Insertion successful
                } else {
                    // Handle the error
                    echo "Error: " . $stmt->errorInfo();
                }

            } catch(PDOException $e) {
                        
                echo "Connection failed: " . $e->getMessage();

            }

        ?>

        <script>window.location.replace("http://localhost:8000/slideshow/slideshow.php");</script>

    </body>

</html>