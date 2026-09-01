<?php

include '../infra/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$tipo_usuario = $_POST['tipo_usuario'];

if ($tipo_usuario == "cliente") {
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $telefone = $_POST['telefone_cliente'];
    $endereco = $_POST['endereco_cliente'];

    $sql = "INSERT INTO usuario (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro de cliente realizado com sucesso";
    } else {
        echo "Erro ao cadastrar cliente: " . $conexao->error;
    }
}

if ($tipo_usuario == "restaurante") {
    $nome = $_POST['nome_restaurante'];
    $categoria = $_POST['categoria'];
    $endereco = $_POST['endereco_restaurante'];
    $telefone = $_POST['telefone_restaurante'];

    $sql = "INSERT INTO restaurante (nome, categoria, endereco, telefone) VALUES ('$nome', '$categoria', '$endereco', '$telefone')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro de restaurante realizado com sucesso";
    } else {
        echo "Erro ao cadastrar restaurante: " . $conexao->error;
    }


}

}
$conexao->close();
