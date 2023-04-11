<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="icon"
            type="image/png"
            href="https://cdn-icons-png.flaticon.com/512/9692/9692469.png"
        />
        <title>QrCard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #333;
                color: #fff;
                padding: 20px;
            }

            header h1 {
                margin: 0;
            }

            main {
                max-width: 800px;
                margin: 20px auto;
                padding: 30px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                border-radius: 5px;
            }

            section {
                margin-top: 30px;
                margin-bottom: 40px;
            }

            section h2 {
                margin-top: 0;
                margin-bottom: 40px;
            }

            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                margin-bottom: 20px;
            }

            table th,
            table td {
                border: 1px solid #ddd;
                text-align: left;
                padding: 8px;
            }

            table th {
                background-color: #f2f2f2;
                color: #333;
            }

            footer {
                background-color: #333;
                color: #fff;
                padding: 20px;
                text-align: center;
                margin-top: 40px;
            }

            footer p {
                margin: 0;
            }
        </style>
    </head>
    <body>
        <main>
            <header>
                <h1>QrCard generator</h1>
            </header>
            <section>
                <h2>Sobre o Projeto</h2>
                <p>
                    QRCard é um serviço online em Laravel que permite aos
                    usuários criar seu cartão de visita digital de forma fácil e
                    rápida.
                </p>
            </section>

            <section>
                <h2>Documentação da API</h2>
                <p>Aqui estão os endpoints disponíveis na API:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Endpoint</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>POST /api/people</code></td>
                            <td>
                                Salva uma pessoa e gera um QrCode com seus
                                dados.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Parâmetro</th>
                                            <th>Tipo</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>nome</code></td>
                                            <td><code>string</code></td>
                                            <td>
                                                Obrigatório. Nome do usuário.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>email</code></td>
                                            <td><code>string</code></td>
                                            <td>
                                                Obrigatório. Email do usuário.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>linkedin</code></td>
                                            <td><code>string</code></td>
                                            <td>
                                                Obrigatório. Perfil do usuário
                                                no LinkedIn.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>github</code></td>
                                            <td><code>string</code></td>
                                            <td>
                                                Obrigatório. Perfil do usuário
                                                no GitHub.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><code>GET /api/people/${idBySearch}</code></td>
                            <td>
                                Retorna os dados de uma pessoa a partir de seu
                                ID.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Parâmetro</th>
                                            <th>Tipo</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>id</code></td>
                                            <td><code>string</code></td>
                                            <td>
                                                Obrigatório. ID da pessoa a ser
                                                buscada.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section>
                <h2>Referência</h2>
                <ul>
                    <li><a href="https://goqr.me/api/">QrCode Api</a></li>
                    <li>
                        <a href="https://laravel.com/docs/8.x">Laravel docs</a>
                    </li>
                </ul>
            </section>

            <footer>
                <p>© 2023 -qrcard</p>
            </footer>
        </main>
    </body>
</html>
