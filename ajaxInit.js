		//inicia a funcao uqe inicia o ajax 
		function ajaxInit(){

						//cria a variavel global xmlhttp que sera ultilziada para armazenar o resultado do ajax
						var xmlhttp; 
						
						//tenta criar o ajax
						try	{						
						
								//tenta criar a casse ajax em diversos navegadores (menos internet explorer)
								xmlhttp = new XMLHttpRequest(); 
						
						}
						
						//caso nao esteja em um navegador que suporte XMLHttpRequest( no caso do internet explorer)
						catch(ee){
						
								//tenta criar a classe ajax
								try{
										
										//tenta criar a classe ajax no internet explorer (mais antigos)
										xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
						
								}
								
								//caso nao tenha conseguido criar a classe ajax
								catch(e){
						
										try{
												//tenta cria a classe ajax no internet emplorer (mais recentes)
												xmlhttp = newActiveXObject("Microsoft.XMLHTTP");
								
										}
										
										//caso nao tenha conseguido cria a classe ajax
										catch(E){
							
												//retorna false
												xmlhttp = false;
										}
						
								}
						}

				//retorna  a variavel que armazena o ajax
				return xmlhttp;

		}