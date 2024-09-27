<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Motorista</title>
    <link rel="stylesheet" href="style_motorista.css">
</head>
<body>
    <h2>Cadastro de Motorista</h2>
    <form method="POST" action="processa_cadastro_pessoa.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" id="nacionalidade" name="nacionalidade" required>

        <label for="cnh_brasileira">CNH Brasileira:</label>
        <input type="file" id="cnh_brasileira" name="cnh_brasileira" required>

        <label for="cnh_estrangeira">CNH Estrangeira:</label>
        <input type="file" id="cnh_estrangeira" name="cnh_estrangeira">

        <label for="foto_usuario">Foto do Usuário:</label>
        <input type="file" id="foto_usuario" name="foto_usuario" required>

        <label for="anotacoes">Anotações:</label>
        <textarea id="anotacoes" name="anotacoes" rows="4"></textarea>

        <button type="submit">Cadastrar Motorista</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
