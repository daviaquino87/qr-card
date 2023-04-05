# QRCard

QRCard é um serviço online em Laravel que permite aos usuários criar e personalizar seu cartão de visita digital de forma fácil e rápida.

## Documentação da API

#### Salvar pessoa e gera QrCode

```http
  POST /api/people
```

| Parâmetro  | Tipo     | Descrição                            |
| :--------- | :------- | :----------------------------------- |
| `nome`     | `string` | **Obrigatório**. Nome do usuario     |
| `email`    | `string` | **Obrigatório**. Email do usuario    |
| `linkedin` | `string` | **Obrigatório**. Linkedin do usuario |
| `github`   | `string` | **Obrigatório**. Github do usuario   |

#### Retorna os dados de uma pessoa

```http
  GET /api/people/${idBySearch}
```

| Parâmetro | Tipo     | Descrição                                     |
| :-------- | :------- | :-------------------------------------------- |
| `id`      | `string` | **Obrigatório**. O ID da pessoa a ser buscada |

## Referência

-   [QrCode Api](https://goqr.me/api/)
-   [Laravel docs](https://laravel.com/docs/8.x)
