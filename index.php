<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <title>Cadastro</title>
    <div class="css">
        <link rel="stylesheet" href="style.css?v=01092023">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='../0layout/css/styles.css'>
        <link href='inc/style.css' type=text/css rel=stylesheet>
        <link href='inc/style.css' type=text/css rel=stylesheet>
        <link rel='stylesheet' href='../0layout/elastix/styles.css'>
        <link rel='stylesheet' href='../0layout/elastix/help.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </div>
    <div class="scripts">
        <!-- carrega a funcao que inicia o ajax -->
        <script language='javascript' src='ajaxInit.js'></script>

        <!-- carrega a funcao que valida formularios -->
        <script language='javascript' src='../0funcoes/validaformulario.js?v2'></script>


        <!-- abre a tela de iniciorapido -->
        <link rel='stylesheet' href='../0funcoes/estilo.css'>

        <!-- telapara fazer upload de arquivos de mot e veiculo -->
        <script language='javascript' src='../0funcoes/telauploadmotoristaveiculo.js'></script>

        <!-- inclui funcoes para exibir cokie -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script charset='utf-8' id='injection_graph_func' src='../0layout/elastix/injection_graph_func.js'></script>
        <script src='../0layout/elastix/base.js'></script>
        <script src='../0layout/elastix/iframe.js'></script>
    </div>
	
    <style type='text/css'>
        #acerca_de {
            position: absolute;
            width: 440px;
            height: 200px;
            border: 1px solid #800000;

        }

        .div-ca {
            background-image: url("../0bmp/FUNDO.JPG");
            background-color: #cccccc;

        }
    </style>
	
</head>

<body leftmargin='0' topmargin='0' marginheight='0' marginwidth='0'>
    <header id='fullMenu'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tbody>
                <tr>
                    <td>
                        <table border='0' cellpadding='0' cellspacing='0' height='65' width='100%'>
                            <tbody>
                                <tr>
                                    <td class='menulogo' width='380'><a href='http://www.centurycadastro.com.br' target='_blank'><img src='../0layout/elastix/Century.png' border='0'></a></td>
                                    <td class='headlinkon' valign='bottom'
                                        </td>
                                    <td class='headlink' align='center' width='50%'>&nbsp;<img src='../0bmp/fone.jpg' width='20' height='20' border='0'> (41) 2105 8200 (41) 9 9181 2054 <br> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660503081213141f260503081213141f05070207151214094805090b480414">[email&#160;protected]</a> </td>
                                    <td class='menuaftertab' align='right' width='20%'>&nbsp;<a href='../0usuario'>Logout</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class='downshadow'>
                    <td><img src='../0layout/elastix/1x1.gif' height='5'></td>
                </tr>
            </tbody>
        </table>
    </header>
    <main class='div-ca'>
        <table cellpadding='0' cellspacing='0' height='100%' width='100%'>
            <tbody>
                <tr>
                    <td id='tdMenuIzq' align='left' bgcolor='#f6f6f6' valign='top' width='100'> <!--Sidebar-->
                        <table class='' align='left' cellpadding='0' cellspacing='0' width='90%'>
                            <tbody>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Cadastro </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='../0interrisco/formulariomotorista.php'><img src='../0bmp/motorista.png' width='30' height='30' border='0'><br>Pessoa</a><br> <a href='../0interrisco/formulariocarro.php'><img src='../0bmp/carro2.png' width='30' height='30' border='0'><br>Veiculo</a><br> <a href='../0interrisco/formulariocarro.php'><img src='../0bmp/reboque.png' width='30' height='30' border='0'><br>Reboque(s)</a><br> <a href='../0interrisco/formularioproprietario.php'><img src='../0bmp/libe_menu.png' width='30' height='30' border='0'><br>Proprietario</a><br> <a href='../0interrisco/formularioliberacao.php'><img src='../0bmp/libe.png' width='30' height='30' border='0'><br>Enviar</a><br><a href='../0interrisco/pesquisaboeconvencional.php'><img src='../0bmp/libe2.png' width='30' height='30' border='0'><br>Enviar Pesq Especial e Convencional</a><br> <a href='../0interrisco/registrospendentes.php'><img src='../0bmp/pclock.png' width='30' height='30' border='0'><br>Status</a><br><br><a href='#' onclick="window.open('../0ir/menu.php','', 'width=1200,height=700,location=no');"><img src='../0bmp/pefin.png' width='45' height='45' border='0'> </a><br> <a href='#' onclick="window.open('../0ir/menu.php','', 'width=1200,height=700,location=no')"><img src='../0bmp/lupacee.png' width='30' height='30' border='0'><br> Enviar Pesq Especial </a><br> <a href='#' onclick="window.open('../0interrisco/negativar.php','', 'width=1200,height=600,location=no')"><img src='../0bmp/neg.png' width='30' height='30' border='0'><br> Negativar </a><br>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Operacional </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='' onclick="window.open('../0ir/estatistica.php','', 'width=1200,height=600,location=no');"><img src='../0bmp/torta.png' width='30' height='30' border='0'><br>Painel</a> <br> <a href='' onclick="window.open('../0ir/painel.php','', 'width=1200,height=600,location=no');"><img src='../0bmp/t.png' width='30' height='30' border='0'><br>Painel Geral</a> <br> <a href='/-/tela.php'><img src='../0bmp/biometria.png' width='30' height='30' border='0'><br>Valida</a><br> <a href='../0interrisco/formulariopreliberacao.php'><img src='../0bmp/usuario.png' width='30' height='30' border='0'><br>Liberar</a> <br> <a href='' onclick="window.open('../0ocorrencia/criaocorrencia.php','', 'width=1200,height=600,location=no');"><img src='../0bmp/liberacao.png' width='30' height='30' border='0'><br>Aviso</a> <br> <a href='../0ir/ocorrencia.php'><img src='../0bmp/pos.png' width='30' height='30' border='0'><br>nova tela ocorrencia</a> <br> <a href='../0interrisco/relatorioavisos.php'><img src='../0bmp/liberacao.png' width='30' height='30' border='0'><br>Aviso (REL)</a> <br> <a href='../0importaficha/main.php'><img src='../0bmp/all_mail.png' width='30' height='30' border='0'><br>Importa Ficha</a> <a href='../0interrisco/importaopen.php'><img src='../0bmp/mail7.png' width='30' height='30' border='0'><br>Importa OpenTech</a> <a href='../0comercial/relatoriomes.php'><img src='../0bmp/headfone.png' width='30' height='30' border='0'><br>Contato Comercial</a> <a href='../0interrisco/uploadimportamotoristatela.php'><img src='../0bmp/ab.png' width='30' height='30' border='0'><br>Imp_Pessoa</a> <a href='../0interrisco/uploadimportaveiculotela.php'><img src='../0bmp/livroengre.png' width='30' height='30' border='0'><br>ImpVeiculo</a> <a href='../0interrisco/uploadimportapesquisatela.php'><img src='../0bmp/menu.png' width='30' height='30' border='0'><br>imp pesq</a> <a href='../0interrisco/uploadimportaRDOtela.php'><img src='../0bmp/manual.png' width='30' height='30' border='0'><br>imp RDO</a> <a href='../0fatura/bloqueioinadimplente.php'><img src='../0bmp/graph.png' width='30' height='30' border='0'> <br> Bloqueio</a><br> <a href='../0fatura/relatoriofaturaatrazada.php'><img src='../0bmp/livrozip.png' width='30' height='30' border='0'><br>Fatura Atrazada</a><br> <a href='../0usuario/cadastracontaprincipal.php'><img src='../0bmp/contaprincipal.png' width='30' height='30' border='0'> <br>Principal</a><br> <a href='../0usuario/cadastragrupo.php'><img src='../0bmp/tes.gif' width='30' height='30' border='0'><br> Grupo</a><br> <a href='../0interrisco/relatoriocadastradostotal.php'><img src='../0bmp/msg.png' width='30' height='30' border='0'><br> Relatorio dados completos cadastros </a><br>
                                <tr>
                                    <td class='menuiz_botonoff'> Config </td>
                                </tr>
                                <tr class='menuiz_botonon' align=center>
                                    <td class='menuiz_botonon'> <a href='../0fatura/relatoriocustos.php'><img src='../0bmp/usuario.png' width='30' height='30' border='0'> <br>Relatorio custos</a><br> <a href='../0fatura/relatoriocustosdasfiliais.php'><img src='../0bmp/usuario.png' width='30' height='30' border='0'><br> Relatorio custos das filiais</a><br>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Relatorio </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='../0interrisco/formulariovisualizaficha.php'><img src='../0bmp/printer.png' width='30' height='30' border='0'><br>Ficha</a><br> <a href='../0interrisco/relatoriomotoristasliberados.php'><img src='../0bmp/pcadastro.png' width='30' height='30' border='0'><br> Consultas </a> <a href='../0interrisco/relatoriopesquisados.php'><img src='../0bmp/94.png' width='30' height='30' border='0'><br>Pesquisas</a> <br> <a href='' onclick="window.open('../0interrisco/relatoriopesquisadosporcpfnome.php','', 'width=1200,height=600,location=no');"><img src='../0bmp/relatorio.png' width='30' height='30' border='0'><br>Procurar</a><br> <a href='../0interrisco/relatorioconsultados.php'><img src='../0bmp/info.png' width='30' height='30' border='0'><br>Consultados</a> <a href='../0interrisco/relagregado.php'><img src='../0bmp/exclamacao.png' width='30' height='30' border='0'><br> Agregados</a> <a href='../0interrisco/relatorioagregadovencidoenvioemail.php'><img src='../0bmp/mail8.png' width='30' height='30' border='0'><br> Email VCTO agregado </a><br>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Fatura </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='../0fatura/localizaboleto.php'><img src='../0bmp/manut.png' width='30' height='30' border='0'> <br>Localizar</a><br> <a href='../0fatura/uploadboletocaixatela.php'><img src='../0bmp/caixa.jpg' width='30' height='30' border='0'> <br>Retorno Caixa </a><br> <a href='../0fatura/baixaboletointer.php'><img src='../0bmp/inter.png' width='30' height='30' border='0'><br>Baixa Boleto</a> <br> <a href='../0fatura/bloqueioinadimplente.php'><img src='../0bmp/graph.png' width='30' height='30' border='0'> <br> Bloqueio</a><br> <a href='../0fatura/inadimplentes.php'><img src='../0bmp/formulario1.jpg' width='30' height='30' border='0'> <br>Inadimplentes</a><br> <a href='../0fatura/inadimplentesrelacao.php'><img src='../0bmp/mail7.png' width='30' height='30' border='0'> <br> Envia Email Inadimplentes</a> <br> <a href='../0fatura/relatoriocustos.php'><img src='../0bmp/chart2.png' width='30' height='30' border='0'> <br>Custos</a><br> <a href='../0fatura/relatoriocustosdasfiliais.php'><img src='../0bmp/chartok.png' width='30' height='30' border='0'> <br>Fatura mes</a><br> <a href='../0fatura/geramovimentomes.php'><img src='../0bmp/banco.png' width='30' height='30' border='0'> <br>Gera Boleto Mes</a><br> <a href='../0fatura/relatoriockinv.php'><img src='../0bmp/pasta.png' width='30' height='30' border='0'> <br>inv</a></br> <a href='../0fatura/geraboletoimpresso.php'><img src='../0bmp/printer.png' width='30' height='30' border='0'> <br> imprime boleto impressos</a></br> <a href='../0fatura/noxinserepacotetela.php'><img src='../0bmp/nox.png' width='30' height='30' border='0'> <br> NX pacote</a></br> <a href='../0usuario/replaceemailconta.php'><img src='../0bmp/consultoria.png' width='30' height='30' border='0'> <br> Replace email conta</a></br>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Config </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='../0usuario/trocasenha.php'><img src='../0bmp/chave.png' width='30' height='30' border='0'><br>Senha</a><br>
                                <tr>
                                    <td title='' class='menuiz_botonoff'> Admin </td>
                                </tr>
                                <tr>
                                    <td title='' class='menuiz_botonon' align=center> <a href='../0ir/menu.php'><img src='../0bmp/contarelatorio.png' width='30' height='30' border='0'> <br>Ver Contas</a><br> <a href='../0ir/menu.php'><img src='../0bmp/conta1.png' width='30' height='30' border='0'><br> Conta </a><br> <a href='../0ir/menu.php'><img src='../0bmp/capacete.png' width='30' height='30' border='0'><br> usuario</a><br> <a href='../0fatura/relatoriopesconfeitas.php'><img src='../0bmp/pie_chart.png' width='30' height='30' border='0'><br> Relatorio PesCon</a><br> <a href='../0fatura/relatoriofaturamento.php'><img src='../0bmp/chartmais.png' width='30' height='30' border='0'><br> Rel. Faturamento</a><br> <a href='../0interrisco/relatorioacessos.php'><img src='../0bmp/foto.png' width='30' height='30' border='0'><br>Auditoria de acessos</a><br> <a href='../0fatura/levantamentologinautenticacao.php'><img src='../0bmp/rad.png' width='30' height='30' border='0'><br> Levantamento Login Autenticacao'</a><br> <a href='../0usuario/parametrocadastro.php'><img src='../0bmp/pcadastro.png' width='30' height='30' border='0'><br> Parametros </a><br> <a href='../0usuario/logininativo.php'><img src='../0bmp/capacete.png' width='30' height='30' border='0'><br> Clique Operador</a><br> <a href='../0fatura/levantamentoconsultoria.php'><img src='../0bmp/libe.png' width='30' height='30' border='0'><br> Levantamento Consultoria</a><br> <a href='../0fatura/reajusteformulario.php'><img src='../0bmp/pie_chart.png' width='30' height='30' border='0'><br> Reajuste</a><br> <a href='../0contab/relatoriomes.php'><img src='../0bmp/interno.gif' width='30' height='30' border='0'><br> Contab</a><br> <a href='../0usuario/estatisticaproducaousuario.php'><img src='../0bmp/relatoriodecontas.png' width='30' height='30' border='0'><br> Estat User</a><br> <a href='../escavador/test/'><img src='../0bmp/baixaficha.png' width='30' height='30' border='0'><br> TJ Escavador</a><br>

                            </tbody>
                        </table>
                    </td>
                    <td align='left' valign='top'>
                        <!-- <table border='0' cellpadding='6' width='100%'>
                            <tbody>
                                <tr>
                                    <td> -->
                                        <!-- cria o formulario -->
                                        <div class="geral">

                                            <body onload="document.getElementById('cpfcnpj').focus();">
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
                                                        <td>ID</td>
                                                        <td>
                                                            <div class='input-group'>
                                                                <span class='input-group-btn'>
																    <!-- mascara() esta no ../0funcoes/validaformulario.js -->
                                                                    <input class='redonda' value='' type='text' id='id' maxlength="15" size="12" onkeypress="mascara(this,soNumeros)" onchange="buscaajax(this.value)" tabindex=1>
                                                                    <a class='btn btn-success btn-md ' href='#' role='button' id='Buscar' onclick='buscaajax()'><i class='fa fa-search'></i></a>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Pais</td>
                                                        <td>
                                                            <select class='redonda' id='pais'>
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
		                                            <tr>
                                                        <td>Nome </td>
                                                        <td><input class='redonda' type='text' id='nome' size='35' maxlength='60' tabindex=2></td>

                                                        <td for="cnh_estrangeira">Doc.</td>
                                                        <td><input type="file" id="cnh_estrangeira" name="cnh_estrangeira"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Dt. Nasc. </td>
                                                        <td><input class='redonda' type='text' id='datanascimento' size='11' maxlength='10' onkeypress="mascara(this,mascaradata)" tabindex=11></td>

                                                        <td for="foto_usuario">Foto</td>
                                                        <td><input type="file" id="foto_usuario" name="foto_usuario" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pai </td>
                                                        <td> <input type='text' class='redonda' id='nomepai' size='35' maxlength='60' tabindex=14></td>

                                                        <td>Mâe </td>
                                                        <td> <input type='text' class='redonda' id='nomemae' size='40' maxlength='60' tabindex=15></td>
                                                    </tr>

                                                    <tr>
                                                        

                                                        <td>Celular </td>
                                                        <td> <input class='redonda' type='text' id='celular' size='15' maxlength='15' onkeypress="mascara(this,soNumeros)" onchange="eliminamask('celular');" tabindex=26>
                                                        </td>
                                                    </tr>
                                                    <tr class="moduleTitle">
                                                        <td class="moduleTitle" valign="middle"> Observacoes: </td>
                                                        <td><input type='text' id='obsficha' size='100' maxlength='130'></td>
                                                    </tr>

                                                    <hr>

                                                    <div id='avisos'></div>
													
													<a class='btn btn-success btn-md ' href='#' role='button' id='salvar' onclick='salvar()'><i class='fa fa-search'> salvar </i></a>
                                                    <!-- cria a div que exibe avisos do formulario -->

                                                    <div id='respostaajax'></div>

                                            </body>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <div class='card-header'> Versão 1</div>
    </footer>
</body>

</html>

<script>
function buscaajax() {
	
	//define a varivel ajax como a conexao ajax  que foi feita 
	vajaxmot = ajaxInit();

	vajaxmot.open('get',"motorista_sql2.php?&sq=buscar"
		+"&id="+document.getElementById('id').value);
			

	//a cada vez que o estado mudar chama a funcao preencheoscampos
		vajaxmot.onreadystatechange = function (){
				
			// Exibe a mensagem "Aguarde..." enquanto carrega
			if(vajaxmot.readyState == 1) {
					document.getElementById('avisos').innerHTML = "<img src='../image/processando.gif' width='45' height='45'> Gravando...";

			}
					
			if (vajaxmot.readyState == 4 && vajaxmot.status == 200) { 

				
			  
				resposta = vajaxmot.responseText;
				
				

				arrayresp = window.eval(resposta);
	
				//document.getElementById('avisos').innerHTML = resposta;
	
				if (arrayresp != null){
				
					for (var p = 0; p < arrayresp.length; p++ ) {

						document.getElementById(arrayresp[p][0]).value = arrayresp[p][1];
					
					}	
				}	
			}	


		document.getElementById('msgajax').innerHTML = '';					
	}
					
	vajaxmot.send(null); 
	
}	
</script>

<script>

function salvar(){
	


	//define a varivel ajax como a conexao ajax  que foi feita 
	vajaxmot = ajaxInit();

	vajaxmot.open('get',"motorista_sql2.php?&sq=salvar"
        +"&cod="+document.getElementById('cod').value
		+"&id="+document.getElementById('id').value
		+"&nome="+document.getElementById('nome').value
		+"&datanascimento="+document.getElementById('datanascimento').value
		+"&nomepai="+document.getElementById('nomepai').value
		+"&nomemae="+document.getElementById('nomemae').value
		+"&celular="+document.getElementById('celular').value
		+"&pais="+document.getElementById('pais').value	);
			
	document.getElementById('avisos').innerHTML = "<img src='../image/processando.gif' width='45' height='45'> Gravando...";

	vajaxmot.onreadystatechange = function (){
				
		if (vajaxmot.readyState == 4 && vajaxmot.status == 200) { 
						
			resp = vajaxmot.responseText;

							
			if (resp == 'Dados salvos com sucesso !' ) {								
				window.close();
			
			}else{
				document.getElementById('avisos').innerHTML = resp;
			};
									
		}		
	}
					
	vajaxmot.send(null);  
	
	
}	

</script>