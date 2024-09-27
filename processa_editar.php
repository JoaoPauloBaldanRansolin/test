<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $nacionalidade = $_POST['nacionalidade'];

    $con = new mysqli('localhost', 'root', '', 'cadastro_db');

    // Atualizar Foto
    if (!empty($_FILES['foto']['name'])) {
        $foto_path = 'upload/' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto_path);
        $query = "UPDATE pessoas SET foto='$foto_path' WHERE id='$id'";
        $con->query($query);
    }

    // Atualizar outros dados
    $query = "UPDATE pessoas SET nome='$nome', cpf='$cpf', data_nascimento='$data_nascimento', nacionalidade='$nacionalidade' WHERE id='$id'";
    $con->query($query);

    echo "<p style='color: green;'>Cadastro atualizado com sucesso!</p>";
}
?>
