<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pais = $_POST['pais'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];

    // Verificar se a placa já está cadastrada
    $con = new mysqli('localhost', 'root', '', 'cadastro_db');
    $result = $con->query("SELECT * FROM placas WHERE placa='$placa'");

    if ($result->num_rows > 0) {
        echo "<p style='color: red;'>Erro: A placa $placa já está cadastrada!</p>";
        exit();
    }

    // Upload de CRLV
    if (!empty($_FILES['crlv']['name'])) {
        $crlv_path = 'upload/' . basename($_FILES['crlv']['name']);
        move_uploaded_file($_FILES['crlv']['tmp_name'], $crlv_path);
    }

    // Inserção dos dados no banco
    $query = "INSERT INTO placas (pais, placa, modelo, crlv)
              VALUES ('$pais', '$placa', '$modelo', '$crlv_path')";
    $con->query($query);

    echo "<p style='color: green;'>Cadastro da placa realizado com sucesso!</p>";
}
?>
