<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            rel="icon"
            type="image/png"
            href="https://cdn-icons-png.flaticon.com/512/9692/9692469.png"
        />
        <title>Document</title>
        <style>
            .not-found-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                font-family: Arial, sans-serif;
                text-align: center;
            }

            .not-found-container h1 {
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            .not-found-container p {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            a {
                display: inline-block;
                padding: 10px 20px;
                background-color: #428bca;
                color: #fff;
                border-radius: 5px;
                text-decoration: none;
                font-size: 18px;
            }

            button:hover {
                background-color: #0052a3;
            }
        </style>
    </head>
    <body>
        <div class="not-found-container">
            <h1>Usuário não encontrado</h1>
            <p>
                Desculpe, mas não foi possível encontrar o usuário que você está
                procurando.
            </p>
            <a href="/">Voltar</a>
        </div>
    </body>
</html>
