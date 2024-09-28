<h2>Lista de Cadastrados</h2>
<?php
$con = new mysqli('localhost', 'root', '', 'cadastro_db');
$result = $con->query("SELECT * FROM pessoas");
while ($row = $result->fetch_assoc()) {
    echo "<div class='cadastro-item'>";
    echo "<img src='" . $row['foto'] . "' alt='Foto de " . $row['nome'] . "' class='foto-usuario'>";
    echo "<p>Nome: " . $row['nome'] . "</p>";
    echo "<p>CPF: " . $row['cpf'] . "</p>";
    echo "<p>Nacionalidade: " . $row['nacionalidade'] . "</p>";
    echo "<a href='editar.php?id=" . $row['id'] . "' class='btn-editar'>Editar</a>";
    echo "</div>";
}
?>
<script src="script.js"></script>
