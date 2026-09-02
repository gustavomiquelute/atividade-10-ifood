<?php
include 'infra/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>

    <main>
        <h1>IFood</h1>


        <div>
            <h2>Cadastro</h2>


            <label>Cadastrar como:</label>
            <br>
            <label>
                <input type="radio" id="botao_cliente" name="tipo_usuario_seletor" value="cliente"
                    onchange="verificaropcao()"> cliente
            </label>
            <br>
            <label>
                <input type="radio" id="botao_restaurante" name="tipo_usuario_seletor" value="restaurante"
                    onchange="verificaropcao()"> restaurante
            </label>

            <form action="public/salvar.php" method="POST" id="formulario_cliente" class="form">
                <input type="hidden" name="tipo_usuario" value="cliente">

                <h3>Informações cliente:</h3>
                <label>Nome:</label>
                <input type="text" name="nome_cliente" required>
                <br>
                <label>Email:</label>
                <input type="email" name="email_cliente" required>
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone_cliente" required>
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco_cliente" required>
                <br><br>
                <button type="submit">Cadastrar Cliente</button>
            </form>

            <form action="public/salvar.php" method="POST" id="formulario_restaurante" class="form">
                <input type="hidden" name="tipo_usuario" value="restaurante">

                <h3>Informações restaurante:</h3>
                <label>Nome:</label>
                <input type="text" name="nome_restaurante" required>
                <br>
                <label>Categoria:</label>
                <input type="text" name="categoria" required>
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco_restaurante" required>
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone_restaurante" required>
                <br><br>
                <button type="submit">Cadastrar Restaurante</button>
            </form>

        </div>
    </main>

    <script src="script/index.js"></script>

</body>

</html>