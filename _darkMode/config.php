<h2>Configurações</h2>
<p>Aqui você pode editar os dados cadastrados.</p>
<form method="POST" action="update.php">
    <label for="id">ID do Registro:</label>
    <input type="text" id="id" name="id" required><br>

    <label for="campo">Campo a Editar:</label>
    <select id="campo" name="campo" required>
        <option value="nome">Nome</option>
        <option value="data_nascimento">Data de Nascimento</option>
        <option value="nacionalidade">Nacionalidade</option>
        <option value="identificacao">Identificação</option>
    </select><br>

    <label for="novo_valor">Novo Valor:</label>
    <input type="text" id="novo_valor" name="novo_valor" required><br>

    <button type="submit">Atualizar</button>
</form>
