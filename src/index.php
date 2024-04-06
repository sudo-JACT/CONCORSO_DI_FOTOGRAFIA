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

        <style>

            * {
                margin:0;
                padding:0;
                font-family: 'Arvo';
            }

            

            .main{
                height:100vh;
                width:100%;  
                display:flex;
                align-items:center;
                justify-content:center;
                text-align:center;
            }
            h1{
                text-align:center;
                text-transform: uppercase;
                color: var(--text); 
                font-size: 4rem;
            }

            .roller{
                height: 4.125rem;
                line-height: 4rem;
                position: relative;
                overflow: hidden; 
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                
                color: var(--primary);
            }


            #spare-time{
                font-size: 1rem;
                font-style: italic;
                letter-spacing: 1rem;
                margin-top: 0;
                color: var(--accent);
                
            }

            .roller #rolltext {
                position: absolute;
                top: 0;
                animation: slide 5s infinite;  
            }

            @keyframes slide {
                0%{
                    top:0;
                }
                25%{
                    top: -4rem;    
                }
                50%{
                    top: -8rem;
                }
                72.5%{
                    top: -12.25rem;
                }
            }

            @media screen and (max-width: 600px){
                h1{
                    text-align:center;
                    text-transform: uppercase;
                    color: var(--text); 
                    font-size: 2.125rem;
                }
                
                .roller{
                    height: 2.6rem; 
                    line-height: 2.125rem;  
                }
                
                #spare-time {
                    font-size: 1rem;
                    letter-spacing: 0.1rem;
                }
                
                .roller #rolltext {  
                    animation: slide-mob 5s infinite;  
                }
                
                @keyframes slide-mob {
                    0%{
                        top:0;
                    }
                    25%{
                        top: -2.125rem;    
                    }
                    50%{
                        top: -4.25rem;
                    }
                    72.5%{
                        top: -6.375rem;
                    }
                }
            }

        </style>

    </head>

    <body>

    <!--TODO:
    modificare database "account user e  aggiungere privileggi guria admin, utente, concorrente in foto invece di nomefotografo mettere id utente"-->
    
        <div class="main">

            <h1>Registro eletronico: <div class="roller">
                <span id="rolltext">comodo<br/>
                semplice<br/>
                Funzionale<br/>
                <span id="spare-time">niente più tempo perso</span><br/>
                </div>  
            </h1>
    
        </div>

    </body>

</html>