<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link
            rel="icon"
            type="image/png"
            href="https://cdn-icons-png.flaticon.com/512/9692/9692469.png"
        />
        <title>Gerar QR Code</title>
        <style>
            form {
                max-width: 500px;
                margin: 0 auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            label {
                font-weight: 500;
                color: #333;
                font-size: 16px;
                margin-bottom: 10px;
                display: block;
                text-align: left;
            }

            input[type="text"],
            input[type="email"] {
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 5px;
                border: 1px solid #ccc;
                width: 100%;
                max-width: 350px;
                font-size: 16px;
                color: #333;
                background-color: #f7f7f7;
                transition: all 0.3s ease;
                text-align: center;
            }

            input[type="text"]:focus,
            input[type="email"]:focus {
                outline: none;
                box-shadow: 0 0 0 2px #2196f3;
                border-color: #2196f3;
            }

            button[type="submit"] {
                padding: 12px 24px;
                background-color: #2196f3;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 18px;
                width: 100%;
                max-width: 350px;
                display: block;
                margin: 0 auto;
            }

            button[type="submit"]:hover {
                background-color: #0c7cd5;
            }

            h1 {
                text-align: center;
                margin-top: 40px;
                color: #333;
                font-size: 28px;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <h1>Gerar QR Code</h1>
        <form method="POST" action="/api/people">
            @csrf
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required />
            </div>
            <div>
                <label for="github">GitHub:</label>
                <input type="text" name="github" required />
            </div>
            <div>
                <label for="linkedin">LinkedIn:</label>
                <input type="text" name="linkedin" required />
            </div>
            <button type="submit">Gerar QR Code</button>
        </form>
    </body>
</html>
