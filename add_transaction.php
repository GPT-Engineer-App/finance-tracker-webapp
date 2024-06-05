<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $conta_id = $_POST['conta_id'];
    $categoria_nome = $_POST['categoria_nome'];

    $sql = "INSERT INTO transacao (descricao, valor, data, tipo, conta_id, categoria_nome) VALUES ('$descricao', '$valor', '$data', '$tipo', '$conta_id', '$categoria_nome')";

    if ($conn->query($sql) === TRUE) {
        echo "New transaction added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>