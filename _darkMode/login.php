<?php
session_start();
$host = 'localhost';
$dbname = 'banco';
$port = '3306';
$usernames = 'root'; 
$passwords = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $pdo = new PDO( 
            "mysql:host=$host;port=$port;dbname=$dbname",
            $usernames,
            $passwords
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar se o usuário e senha estão corretos
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch();

        if ($user) {
            // Login bem-sucedido
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        } else {
            // Credenciais inválidas
            $error = "";
        }
    } catch (PDOException $e) {
        $error = 'Erro na conexão: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA CADASTRO</title>
</head>

<style>
    /* dfn */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #000;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
    position: relative;
}

/* Animação do Caminhão e Fundo */
.animated-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, #111, #333);
    z-index: 1; /* Colocar o fundo abaixo do container de login */
}

.road {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 150px;
    background-color: #222;
    border-top: 5px solid #fff;
    z-index: 2; /* Manter a estrada acima do fundo */
    box-shadow: 0 -5px 20px rgba(122, 122, 122, 0.479);
}

/* Linhas tracejadas da estrada */
.road::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 10px;
    background: repeating-linear-gradient(
        to right,
        #fff 0px,
        #fff 20px,
        transparent 20px,
        transparent 40px
    );
    z-index: 3; /* Linhas acima da estrada */
    animation: moveLines 2s linear infinite;
}

@keyframes moveLines {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-40px);
    }
}

/* Login Container */
.login-container {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(255, 255, 255, 0.1);
    width: 100%;
    max-width: 400px;
    z-index: 10; /* Colocar acima de tudo */
    backdrop-filter: blur(8px);
    border: 1px solid #ffffff;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #ffffff;
    font-weight: 300;
    letter-spacing: 1px;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
}

.input-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #fff;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background-color: #333;
    color: #fff;
    font-size: 16px;
    border: 1px solid #ffffff;
    transition: box-shadow 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    box-shadow: 0 0 10px #ffffff;
}

.password-container {
    position: relative;
}

.toggle-password {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #fff;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #aaaaaa;
    border: none;
    border-radius: 6px;
    color: #000;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

button:hover {
    background-color: #444444;
    transform: translateY(-2px);
}

/* Caminhão */
.truck-container {
    position: absolute;
    bottom: 80px;
    left: -200px;
    z-index: 5; /* Caminhão abaixo do container de login */
    animation: moveTruck 5s linear infinite;
}

.truck {
    position: relative;
    width: 180px;
    height: 70px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(206, 206, 206, 0.8);
}

.truck-body {
    position: absolute;
    width: 100%;
    height: 50px;
    background-color: #000000;
    display: flex;
    justify-content: space-between;
}

.truck-cabin {
    width: 50px;
    height: 30px;
    background-color: #858585;
    margin: 10px;
    border-radius: 4px;
}

.truck-cargo {
    width: 80px;
    height: 40px;
    background-color: #858585;
    margin: 5px;
    border-radius: 6px;
}

.truck-wheel {
    position: absolute;
    bottom: -10px;
    width: 30px;
    height: 30px;
    background-color: #000000;
    border-radius: 50%;
}

.front-wheel {
    left: 20px;
}

.back-wheel {
    right: 20px;
}

@keyframes moveTruck {
    0% {
        left: -200px;
    }
    100% {
        left: 100%;
    }
}

/* Ícone SVG de olho */
.eye {

    width: 24px;
    height: 24px;
    stroke: #ffffff;
    stroke-width: 2;

}
</style>

<body>
    <!-- Fundo animado e estilizado com caminhão -->
    <div class="animated-background">
        <div class="road"></div>
        <div class="truck-container">
            <div class="truck">
                <div class="truck-body">
                    <div class="truck-cabin"></div>
                    <div class="truck-cargo"></div>
                </div>
                <div class="truck-wheel front-wheel"></div>
                <div class="truck-wheel back-wheel"></div>
            </div>
        </div>
    </div>
       
    <!-- Login Container -->
    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" name="username" placeholder="Digite seu usuário" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <div class="password-container">
                    <input type="password" name="password" placeholder="Digite sua senha" required>
                    <span class="toggle-password" onclick="togglePassword()">

                    <?php if (!empty($error)): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>
            
                        <!-- Ícone SVG de olho -->
                        <svg id="eye-icon" class="eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("PASSWORD");
            const eyeIcon = document.getElementById("eye-icon");

            if (passwordField.type === "PASSWORD") {
                passwordField.type = "text";
                eyeIcon.innerHTML = `
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path>
                `;
            } else {
                passwordField.type = "PASSWORD";
                eyeIcon.innerHTML = `
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path>
                `;
            }
        }
    </script>
</body>
</html>
