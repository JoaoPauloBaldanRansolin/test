<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagem com AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Upload de Imagem</h1>
    <form id="uploadForm" enctype="multipart/form-data">
        <tr>
            <td align='left' valign='top'>
                <!-- <table border='0' cellpadding='6' width='100%'>
                            <tbody>
                                <tr>
                                    <td> -->
                <!-- cria o formulario -->
                <div class="geral">
                    <table border="0" align=center width="100%" class='redonda'>
                        <tr class="moduleTitle">
                            <td class="moduleTitle" valign="middle" colspan=3> <img src='../0bmp/motorista.png' width='25' height='25' border='0' align='absmiddle'>
                                <mg src="../0layout/elastix/1x1.gif" align="absmiddle" border="0">Cadastro de pessoa
                            </td>
                            <td class="moduleTitle" valign="middle">
                                <div id='msgajax'></div>
                            </td>
                        </tr>
                        <!-- cria os campos hidden que serao ultilizados na gravacao dos dados do motorista -->


                        <tr>
                        <tr>
                            <td>Placa</td>
                            <td>
                                <div class='input-group'>
                                    <span class='input-group-btn'>
                                        <!-- mascara() esta no ../0funcoes/validaformulario.js -->
                                        <input class='redonda' type='text' id="placa" name='placa' size='19' maxlength="15" size="12" onkeypress="mascara(this,soNumeros)" onchange="buscaajax(this.value)" tabindex=1>
                                        <a class='btn btn-success btn-md ' href='#' role='button' id='Buscar' onclick='buscaajax()'><i class='fa fa-search'></i></a>
                                    </span>
                                </div>
                            </td>
                            <td>Pais</td>
                            <td>
                                <select class='redonda' id='pais' name='pais'>
                                    <option value="0">Selecione o país</option>
                                    <option value="1">Argentina</option>
                                    <option value="2">Chile</option>
                                    <option value="3">Paraguai</option>
                                    <option value="4">Uruguai</option>
                                    <option value="5">Outro</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Categoria</td>
                            <td><input class='redonda' type='text' id='categoria' size='25' maxlength='10' tabindex=11></td>

                            <td for="foto">foto</td>
                            <td><input type="file" id="foto" size='25' id="foto"></td>
                        </tr>

                        <tr>
                            <td>Marca</td>
                            <td><input class='redonda' type='text' id='marca' id='marca' size='25' maxlength='10' tabindex=11></td>

                            <td>Doc. Veiculo</td>
                            <td><input class='redonda' type='file' id='docveiculo' id='docveiculo' size='25' maxlength='10' onkeypress="mascara(this,mascaradata)" tabindex=11></td>
                        </tr>

                        <tr>
                            <td>Modelo</td>
                            <td><input class='redonda' type='text' id="modelo" id='modelo' size='25' maxlength='10' onkeypress="mascara(this,mascaradata)" tabindex=11></td>

                            <td for="cor">Cor</td>
                            <td><input type="text" id="cor" size='25' id="cor" required></td>
                        </tr>

                        <tr>
                            <td>Doc. proprietário</td>
                            <td><input class='redonda' type='text' id='docprop' id='docprop' size='25' maxlength='10' onkeypress="mascara(this,mascaradata)" tabindex=11></td>

                        </tr>

                        <tr>
                            <td for="nomeProp">Nome prop.</td>
                            <td><input type="text" id="nomeprop" size='25' id="nomeprop" required></td>

                            <td for="anoFabric">Ano fabr.</td>
                            <td><input type="date" id="anofabric" size='25' maxlength='15' id="anofabric" required></td>

                        </tr>
                        <tr class="moduleTitle">
                            <td class="moduleTitle" valign="middle"> Observacoes: </td>
                            <td><input type='text' id='obsficha' size='25' maxlength='15'></td>
                        </tr>
                        <hr>

                        <div id='avisos'></div>

                        <a class='btn btn-success btn-md ' href='#' role='button' id='salvar' onclick='salvar()'><i class='fa fa-search'> salvar </i></a>
                        <!-- cria a div que exibe avisos do formulario -->

                        <div id='respostaajax'></div>
        </tr>
        </table>
        </div>
        </td>
        </tr>

        <button type="submit">Enviar</button>
    </form>
    <div id="response"></div>

    <script>
        $(document).ready(function() {
            $('#uploadForm').on('submit', function(event) {
                event.preventDefault(); // Impede o envio normal do formulário

                var placa = document.getElementById('placa').value;
                var categoria = document.getElementById('categoria').value;
                var marca = document.getElementById('marca').value;
                var modelo = document.getElementById('modelo').value;
                var docprop = document.getElementById('docprop').value;
                var cor = document.getElementById('cor').value;
                var nomeprop = document.getElementById('nomeprop').value;
                var anofabric = document.getElementById('anofabric').value;
                var pais = document.getElementById('pais').value;

                var formData = new FormData(); // Cria um objeto FormData com os dados do formulário
                formData.append('placa',placa);
                formData.append('categoria',categoria);
                formData.append('marca',marca);
                formData.append('modelo',modelo);
                formData.append('docprop',docprop);
                formData.append('cor',cor);
                formData.append('nomeprop',nomeprop);
                formData.append('anofabric',anofabric);
                formData.append('pais',pais);

                var foto = document.getElementById('foto');
                var fotos = foto.files[0];
                formData.append('foto', fotos);

                var docveiculo = document.getElementById('docveiculo');
                var docs = docveiculo.files[0];
                formData.append('docveiculo', docs);
                $.ajax({
                    url: 'placa_sql2.php', // URL do script PHP que processará o upload
                    type: 'POST',
                    data: formData,
                    contentType: false, // Impede o jQuery de definir o cabeçalho Content-Type
                    processData: false, // Impede o jQuery de processar os dados
                    success: function(response) {
                        $('#response').html(response); // Exibe a resposta do servidor
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#response').html('Erro: ' + textStatus + ' - ' + errorThrown);
                    }
                });
            });
        });
    </script>
</body>

</html>