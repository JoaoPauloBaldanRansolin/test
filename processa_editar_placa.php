<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $pais = $_POST['pais'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];

    $con = new mysqli('localhost', 'root', '', 'cadastro_db');

    // Atualizar CRLV se fornecido
    if (!empty($_FILES['crlv']['name'])) {
        $crlv_path = 'upload/' . basename($_FILES['crlv']['name']);
        move_uploaded_file($_FILES['crlv']['tmp_name'], $crlv_path);
        $query = "UPDATE placas SET crlv='$crlv_path' WHERE id='$id'";
        $con->query($query);
    }

    // Atualizar outros dados
    $query = "UPDATE placas SET pais='$pais', placa='$placa', modelo='$modelo' WHERE id='$id'";
    $con->query($query);

    echo "<p style='color: green;'>Placa atualizada com sucesso!</p>";
}
?>
