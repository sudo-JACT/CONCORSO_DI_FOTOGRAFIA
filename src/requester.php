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

            $ch = curl_init();

            // Initialize curl session
            // Set options

            $code = "54";

            $hashcode = password_hash($code, PASSWORD_DEFAULT);

            $link = "http://localhost:8000/register.php?code=".$hashcode."";

            $lol = "http://127.0.0.1:5000/index?Cc=".$_POST["email"]."&sub=".'LOL'."&body=".$link."";

            curl_setopt($ch, CURLOPT_URL, $lol);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false); // Execute
            curl_setopt($ch, CURLOPT_POST, 1);
            $result = curl_exec($ch);// Close curl session
            curl_close($ch);// Output resultecho 
            echo $result;

        ?>

        <script>window.location.replace("http://localhost:8000/");</script>

    </body>

</html>