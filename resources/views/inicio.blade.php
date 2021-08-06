<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <style>
        .container {
        width: 500px;
        clear: both;
        }

        .container input {
        width: 100%;
        clear: both;
        }

        input[type=text] {
            border: 2px solid #000000;
            border-radius: 5px;  
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form action="/cadastrar-cliente" method="POST">
        <!-- 'nome', 'cpf', 'telefone', 'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado']; -->
            <!-- toda vez que for enviar uma informacao deve usar o token de seguranca no laravel -->
            @csrf
            <label>Nome do cliente:</label>
            <input type="text" name='nome'>
            <br><br>
            <label>CPF:</label>
            <input type="text" name='cpf'>
            <br><br>
            <label>Telefone:</label>
            <input type="text" name='telefone'>
            <br><br>
            <label>Rua:</label>
            <input type="text" name='rua'>
            <br><br>
            <label>Numero:</label>
            <input type="text" name='numero'>
            <br><br>
            <label>Complemento:</label>
            <input type="text" name='complemento'>
            <br><br>
            <label>Bairro:</label>
            <input type="text" name='bairro'>
            <br><br>
            <label>Cep:</label>
            <input type="text" name='cep'>
            <br><br>
            <label>Cidade:</label>
            <input type="text" name='cidade'>
            <br><br>
            <label>Estado:</label>
            <input type="text" name='estado'>
            <br><br>
            <button>Salvar Cliente</button>
        </form>
    </div>

</body>
</html>