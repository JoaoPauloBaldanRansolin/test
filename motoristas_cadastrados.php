<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoristas Cadastrados</title>
    <link rel="stylesheet" href="style_motoristas_cadastrados.css">
</head>

<body>
    <h2>Motoristas Cadastrados</h2>
    <div class="cadastrados">
        <!-- Exibir lista de motoristas cadastrados -->
        <div class="item-cadastrado">
            <div class="foto">
                <img src="uploads/motoristas/foto_exemplo.jpg" alt="Foto do Motorista">
            </div>
            <div class="info">
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
            </div>
        </div>
        <!-- Repetir o bloco acima para cada motorista cadastrado -->
    </div>
    <script src="script.js"></script>
</body>

</html>

if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $novo_nome = uniqid() . "." . $extensao;
    $diretorio = "uploads/"; // Diretório onde as imagens serão salvas
    $caminho_completo = $diretorio . $novo_nome;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_completo);

    // Inserindo no banco de dados
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, imagem) VALUES (:nome, :imagem)");
    $stmt->bindParam(':nome', $_POST['nome']);
    $stmt->bindParam(':imagem', $caminho_completo);
    $stmt->execute();
}