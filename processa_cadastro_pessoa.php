<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $nacionalidade = $_POST['nacionalidade'];

    // Verificar se o CPF já está cadastrado
    $con = new mysqli('localhost', 'root', '', 'cadastro_db');
    $result = $con->query("SELECT * FROM pessoas WHERE cpf='$cpf'");

    if ($result->num_rows > 0) {
        echo "<p style='color: red;'>Erro: O CPF $cpf já está cadastrado!</p>";
        exit();
    }

    // Upload de CNH
    if (!empty($_FILES['cnh']['name'])) {
        $cnh = 'upload/' . basename($_FILES['cnh']['name']);
        move_uploaded_file($_FILES['cnh']['tmp_name'], $cnh);
    }

    // Upload de CRLV
    if (!empty($_FILES['crlv']['name'])) {
        $crlv = 'upload/' . basename($_FILES['crlv']['name']);
        move_uploaded_file($_FILES['crlv']['tmp_name'], $crlv);
    }

    // Upload de Foto do Usuário
    if (!empty($_FILES['foto']['name'])) {
        $foto = 'upload/' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    }

    // Inserção dos dados no banco
    $query = "INSERT INTO pessoas (nome, cpf, data_nascimento, nacionalidade, cnh, crlv, foto)
              VALUES ('$nome', '$cpf', '$data_nascimento', '$nacionalidade', '$cnh', '$crlv', '$foto')";
    $con->query($query);

    echo "<p style='color: green;'>Cadastro realizado com sucesso!</p>";
}
?>
