<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro - Dark Theme</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_landing.css">
</head>
<body>
<div class="landing-page">
        <h1>Bem-vindo ao Sistema de Cadastro</h1>
        <p>Cadastre-se e gerencie suas informações de forma eficiente.</p>
        <div class="buttons">
            <a href="cadastro_motorista.php" class="btn">Cadastrar Motorista</a>
            <a href="cadastro_placa.php" class="btn">Cadastrar Placa</a>
            <a href="motoristas_cadastrados.php" class="btn">Motoristas Cadastrados</a>
            <a href="placas_cadastradas.php" class="btn">Placas Cadastradas</a>
        </div>
    </div>
    <hr>

    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'landing';
        switch ($page) {
            case 'cadastro_pessoa':
                include('cadastro_pessoa.php');
                break;
            case 'cadastro_placa':
                include('cadastro_placa.php');
                break;
            case 'cadastrados':
                include('cadastrados.php');
                break;
            case 'config':
                include('config.php');
                break;
            case 'landing':
                echo '<h2>Bem-vindo ao Sistema de Cadastro</h2><p>Use o menu acima para navegar.</p>';
                break;
            default:
                echo '<p>Página não encontrada.</p>';
        }
    ?>

<script src="script.js"></script>
</body>
</html>
