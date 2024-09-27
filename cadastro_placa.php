<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Placas</title>
    <link rel="stylesheet" href="style_placa.css">

</head>
<body>
    <h2>Cadastro de Placas</h2>
    <form method="POST" action="processa_cadastro_placa.php" enctype="multipart/form-data">
        <label for="pais">País:</label>
        <select id="pais" name="pais" required>
            <option value="Brasil">Brasil</option>
            <option value="Paraguai">Paraguai</option>
            <option value="Uruguai">Uruguai</option>
            <option value="Argentina">Argentina</option>
        </select>

        <label for="placa">Placa do Veículo:</label>
        <input type="text" id="placa" name="placa" required>

        <label for="modelo">Modelo do Veículo:</label>
        <input type="text" id="modelo" name="modelo" required>

        <label for="crlv">CRLV (Certificado de Registro de Veículo):</label>
        <input type="file" id="crlv" name="crlv" required>

        <label for="foto_veiculo">Foto do Veículo:</label>
        <input type="file" id="foto_veiculo" name="foto_veiculo" required>

        <button type="submit">Cadastrar Placa</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
