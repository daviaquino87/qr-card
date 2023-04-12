<!DOCTYPE html>
<html>
    <head>
        <link
            rel="icon"
            type="image/png"
            href="https://cdn-icons-png.flaticon.com/512/9692/9692469.png"
        />
        <title>Detalhes da pessoa</title>
        <link rel="stylesheet" href="styles.css" />
        <style>
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
            }

            .card {
                background-color: #f5f5f5;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }

            .card-body {
                padding: 20px;
            }

            h1 {
                font-size: 36px;
                margin-bottom: 20px;
            }

            h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            h3 {
                font-size: 18px;
                color: #999;
                margin-bottom: 20px;
            }

            p {
                font-size: 18px;
                margin-bottom: 20px;
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

            a:hover {
                background-color: #3071a9;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Detalhes da pessoa</h1>
            <div class="card">
                <div class="card-body">
                    <h2>{{ $person['name'] }}</h2>
                    <h3>{{ $person['email'] }}</h3>
                    <p>
                        <strong>Github:</strong> {{ $person['github'] }} <br />
                        <strong>LinkedIn:</strong> {{ $person['linkedin'] }}
                    </p>
                    <a href="/">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>
