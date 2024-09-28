<?php session_start();

date_default_timezone_set('America/Recife');

	$dbestrangeiro = pg_connect("host='localhost' port=5432 dbname='estrangeiro' user='postgres' password='zxcv1596'")
		or die(" A conexao com o banco  <font color='#0000ff'> Nao </font> foi estabelecida por favor contacte o administrador do sistema DBA !");
	
	
	if ($_GET['sq']  == 'salvar') {
	
		$sql = "insert into tpessoa(id, nome, nomepai) values($_GET[id], '$_GET[nome]', '$_GET[nomepai]')";
		
		$res = pg_exec($dbestrangeiro,$sql);
		
		if ($res ) {
			echo "Salvo com sucesso ";
		}else{
			echo "erro $sql";
		}		
	}else if ($_GET['sq'] == 'buscar') {

		$sql = "select id, nome, nomepai from tpessoa where id = '$_GET[id]'";
		
		$res = pg_exec($dbestrangeiro,$sql);
		
		
		$a = '[';
		
		if ( pg_numrows($res) > 0 ){
	
			
			
			$arr = pg_fetch_array($res,0,PGSQL_ASSOC);
			
			foreach ($arr as $nomedocampo => $auxsqlvalordocampo) {
					    
				$a .= '["'.$nomedocampo.'","'.$auxsqlvalordocampo.'"],';
		
			}
			
			$a .= "['sql','update']]";
			
			
		}		
		
		
		
		if ($res ) {
			echo "$a";
		}else{
			echo "erro $sql";
		}		

	}		
	
?>