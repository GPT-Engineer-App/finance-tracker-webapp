<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['nomeCompleto'] = $row['nomeCompleto'];
            header("Location: main.html");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found";
    }

    $conn->close();
}
?>