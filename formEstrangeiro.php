<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Estrangeiro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="assets/js/img.js" defer></script>
</head>

<body>
    <header>
        <pre>
            (41) 2105 8200 (41) 9 9181 2054
            century@centurycadastro.com.br
        </pre>
    </header>
    <main>
        <section name="formEstrangeiro" id="formEstrangeiro">
            <article>
                <form action="foreignerVerification.php" method="post">
                    <fieldset>
                        <legend>Cadastro motorista estrangeiro</legend>

                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="idCpf">

                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="idNome">

                        <label for="pais">País</label>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <select class="fake-sel" name="pais" id="idPais">
                            <option value="Ar"><img src="./assets/img/AR.gif" alt="Ar">Argentina</option>
                            <option value="Br">Brasil</option>
                            <option value="Cl">Chile</option>
                            <option value="Py">Paraguay</option>
                            <option value="Uy">Uruguay</option>
                            <option value="Ot">Outros</option>
                        </select>

                        <label for=""></label>

                        <label for=""></label>
                        <span>Hello World!</span>
                    </fieldset>
                </form>
            </article>
        </section>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>