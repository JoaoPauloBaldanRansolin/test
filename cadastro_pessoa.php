<?php
    if(isset($_FILES["cnh"]) && !empty($_FILES["cnh"])){
        move_uploaded_file($_FILES["cnh"]["tmp_name"], "./img/".$_FILES["cnh"]["tmp_name"]);
        die("Enviado!");
    }
?>
<h2>Cadastro de Pessoa</h2>
<form method="POST" action="processa_cadastro_pessoa.php" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" required><br>

    <label for="nacionalidade">Nacionalidade:</label>
    <select id="nacionalidade" name="nacionalidade" required>
        <option value="Brasil">Brasil</option>
        <option value="Paraguai">Paraguai</option>
        <option value="Uruguai">Uruguai</option>
        <option value="Argentina">Argentina</option>
    </select><br>

    <label for="cnh">CNH (Carteira de Motorista):</label>
    <input type="file" id="cnh" name="cnh" accept="image/*" class="form-control" required><br>

    <label for="crlv">CRLV (Certificado de Registro de Veículo):</label>
    <input type="file" id="crlv" name="crlv" accept="image/*" class="form-control" required><br>

    <label for="foto">Foto do Usuário:</label>
    <input type="file" id="foto" name="foto" accept="image/*" class="form-control" required><br>

    <button type="submit">Cadastrar</button>
</form>
