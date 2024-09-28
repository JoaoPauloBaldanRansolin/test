<?php
$con = new mysqli('localhost', 'root', '', 'cadastro_db');
$id = $_GET['id'];
$result = $con->query("SELECT * FROM placas WHERE id='$id'");
$placa = $result->fetch_assoc();
?>

<h2>Editar Placa</h2>
<form method="POST" action="processa_editar_placa.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $placa['id']; ?>">
    
    <label for="pais">País:</label>
    <select id="pais" name="pais" required>
        <option value="Brasil" <?php if ($placa['pais'] == 'Brasil') echo 'selected'; ?>>Brasil</option>
        <option value="Paraguai" <?php if ($placa['pais'] == 'Paraguai') echo 'selected'; ?>>Paraguai</option>
        <option value="Uruguai" <?php if ($placa['pais'] == 'Uruguai') echo 'selected'; ?>>Uruguai</option>
        <option value="Argentina" <?php if ($placa['pais'] == 'Argentina') echo 'selected'; ?>>Argentina</option>
    </select><br>

    <label for="placa">Placa:</label>
    <input type="text" id="placa" name="placa" value="<?php echo $placa['placa']; ?>" required><br>

    <label for="modelo">Modelo do Veículo:</label>
    <input type="text" id="modelo" name="modelo" value="<?php echo $placa['modelo']; ?>" required><br>

    <label for="crlv">Atualizar CRLV:</label>
    <input type="file" id="crlv" name="crlv"><br>

    <button type="submit">Salvar Alterações</button>
</form>
