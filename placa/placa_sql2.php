<?php session_start();

date_default_timezone_set('America/Recife');

$host = 'localhost'; // ou o IP do seu banco
$dbname = 'estrangeiro'; // Nome do seu banco de dados
$user = 'postgres'; // Seu usuário do banco de dados
$pass = 'zxcv1596'; // Sua senha do banco de dados
$pdo = new PDO("pgsql:host=$host;dbname=$dbname;", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
			$uploadDir = 'fotos/'; // Diretório onde as imagens serão salvas
			$uploadFile = $uploadDir . basename($_FILES['foto']['name']);

			$uploadDirv = 'docveiculos/'; // Diretório onde as imagens serão salvas
			$uploadFilev = $uploadDirv . basename($_FILES['docveiculo']['name']);
			// Verifica se o diretório existe, caso contrário, cria
			if (!is_dir($uploadDir)) {
				mkdir($uploadDir, 0755, true);
			}
			if (!is_dir($uploadDirv)) {
				mkdir($uploadDirv, 0755, true);
			}
			// Move o arquivo enviado para o diretório de uploads
			if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile) && move_uploaded_file($_FILES['docveiculo']['tmp_name'], $uploadFilev))  {

				// move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile);
				$placa = $_POST['placa'];
				$anofabric = $_POST['anofabric'];
				$modelo = $_POST['modelo'];
				$marca = $_POST['marca'];
				$cor = $_POST['cor'];
				$categoria = $_POST['categoria'];
				$docprop = $_POST['docprop'];
				$nomeprop = $_POST['nomeprop'];
				$pais = $_POST['pais'];

				$sql = "INSERT INTO tplaca (placa, anofabric, modelo, marca, cor, categoria, docprop, nomeprop, pais, foto, docveiculo)
        VALUES (:placa, :anofabric, :modelo, :marca, :cor,:categoria, :docprop, :nomeprop, :pais, :foto, :docveiculo)";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(':placa', $placa);
				$stmt->bindParam(':anofabric', $anofabric);
				$stmt->bindParam(':modelo', $modelo);
				$stmt->bindParam(':marca', $marca);
				$stmt->bindParam(':cor', $cor);
				$stmt->bindParam(':categoria', $categoria);
				$stmt->bindParam(':docprop', $docprop);
				$stmt->bindParam(':nomeprop', $nomeprop);
				$stmt->bindParam(':pais', $pais);
				$stmt->bindParam(':foto', $uploadFile); 
				$stmt->bindParam(':docveiculo', $uploadFilev);

				$stmt->execute();
				echo "Salvo com sucesso";
				echo "Upload realizado com sucesso: " . htmlspecialchars(basename($_FILES['foto']['name']));
			} else {
				echo "Erro ao mover o arquivo para o diretório de uploads.";
			}
		} else {
			echo "Erro no upload: " . $_FILES['foto']['error'];
		}
	
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

	$dbestrangeiro = pg_connect("host='localhost' port=5432 dbname='estrangeiro' user='postgres' password='zxcv1596'")
		or die(" A conexao com o banco  <font color='#0000ff'> Nao </font> foi estabelecida por favor contacte o administrador do sistema DBA !");
	
	
	$sql = "
			select *
			from tplaca 
			where placa = '$_GET[placa]'";

	$res = pg_exec($dbestrangeiro, $sql);


	$a = '[';

	if (pg_numrows($res) > 0) {



		$arr = pg_fetch_array($res, 0, PGSQL_ASSOC);

		foreach ($arr as $nomedocampo => $auxsqlvalordocampo) {

			$a .= '["' . $nomedocampo . '","' . $auxsqlvalordocampo . '"],';
		}

		$a .= "['sql','update']]";
	}


	if ($res) {
		echo "$a";
	} else {
		echo "erro $sql";
	}
}
