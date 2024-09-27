<?php
$con = new mysqli('localhost', 'root', '', 'cadastro_db');
$id = $_GET['id'];
$result = $con->query("SELECT * FROM pessoas WHERE id='$id'");
$pessoa = $result->fetch_assoc();
?>

<h2>Editar Cadastro</h2>
<form method="POST" action="processa_editar.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pessoa['id']; ?>">
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?php echo $pessoa['nome']; ?>" required><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" value="<?php echo $pessoa['cpf']; ?>" required><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $pessoa['data_nascimento']; ?>" required><br>

    <label for="nacionalidade">Nacionalidade:</label>
    <select id="nacionalidade" name="nacionalidade" required>
        <option value="Brasil" <?php if ($pessoa['nacionalidade'] == 'Brasil') echo 'selected'; ?>>Brasil</option>
        <option value="Paraguai" <?php if ($pessoa['nacionalidade'] == 'Paraguai') echo 'selected'; ?>>Paraguai</option>
        <option value="Uruguai" <?php if ($pessoa['nacionalidade'] == 'Uruguai') echo 'selected'; ?>>Uruguai</option>
        <option value="Argentina" <?php if ($pessoa['nacionalidade'] == 'Argentina') echo 'selected'; ?>>Argentina</option>
    </select><br>

    <label for="foto">Atualizar Foto do Usuário:</label>
    <input type="file" id="foto" name="foto"><br>

    <button type="submit">Salvar Alterações</button>
</form>
