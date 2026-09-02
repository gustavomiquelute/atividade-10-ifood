<?php
include '../infra/conexao.php';

$sql = "SELECT nome, categoria, endereco, telefone FROM restaurante";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes Cadastrados</title>
</head>
<body>

<main>
    <h1>Restaurantes Cadastrados</h1>

    <p><a href="../index.php">Voltar para o Cadastro</a></p>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha["nome"] . "</td>";
                    echo "<td>" . $linha["categoria"] . "</td>";
                    echo "<td>" . $linha["endereco"] . "</td>";
                    echo "<td>" . $linha["telefone"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum restaurante cadastrado ainda.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</main>

</body>
</html>

<?php
$conexao->close();
?>
