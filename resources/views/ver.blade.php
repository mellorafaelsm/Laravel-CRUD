<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de cliente</title>
    <style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
    background-color: #000000;
    color: #ffffff;
    text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    }
    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }


    .myButton {
        box-shadow:inset 0px 1px 0px 0px #fff6af;
        background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
        background-color:#ffec64;
        border-radius:6px;
        border:1px solid #ffaa22;
        display:inline-block;
        cursor:pointer;
        color:#333333;
        font-family:Arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #ffee66;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
        background-color:#ffab23;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }   
    </style>
</head>
<body>
    <h1>Lista de clientes</h1>
    <a href="/cadastrar-cliente" class="myButton">Cadastrar</a>
    <table class="styled-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $clientes)
        <tr>
            <td>{{ $clientes->id}}</td>
            <td>{{ $clientes->nome}}</td>
            <td>{{ $clientes->cpf}}</td>
            <td>{{ $clientes->telefone}}</td>
            <td>{{ $clientes->rua}}</td>
            <td>{{ $clientes->numero}}</td>
            <td>{{ $clientes->complemento}}</td>
            <td>{{ $clientes->bairro}}</td>
            <td>{{ $clientes->cep}}</td>
            <td>{{ $clientes->cidade}}</td>
            <td>{{ $clientes->estado}}</td>

            <td><a href="/editar-cliente/{{ $clientes->id}}" class="myButton">Editar</a></td>
            <td><a href="/excluir-cliente/{{ $clientes->id}}" class="myButton">Deletar</a></td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>