<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/script.js"></script>
        <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
        <title>Concorso Di Fotografia</title>

    </head>

    <body>

    <!--TODO:
    modificare database "account user e  aggiungere privileggi giuria admin, utente, concorrente in foto invece di nomefotografo mettere id utente"-->

        <div class="container">

            
            <form action="./requester.php" method="post">

                <div class="form-group">
                    <label for="email">EMAIL</label>
                    
                    <input type="email" id="email" name="email" placeholder="exp@domain.com" required>

                </div>

                <div class="form-group">
                    <input type="submit" value="Registrati">
                </div>

            </form>

        </div>


    </body>

</html>