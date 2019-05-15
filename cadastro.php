<?php
$login = $_POST['login'];
$senha = md5$_POST['senha'];

//Criando conexão com o banco de dados

//Criando a variável

$connect = mysql_connect('localhost', 'root', '123');
$db = mysql_select_db("db_php5", $connect);

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select, $connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

//Criando as validações para os campos

if ($login =="" || $login == null) {
	echo <script language = 'javascript' type='text/javascript'>alert('O login deve ser preenchido.'); window.location.href='cadastro.html';</script>
} else{
	if ($logarray == $login) {
		echo <script language = 'javascript' type='text/javascript'>alert('Login já existente.'); window.location.href='cadastro.html';</script>
		die();
	} else {
		$query = "INSERT INTO usuarios (login, senha) VALUES ($login, $senha)";

		$insert = mysql_query($query, $connect);

		if ($insert) {
			echo <script language = 'javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!'); window.location.href='cadastro.html';</script>
		} else {
			echo <script language = 'javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário.'); window.location.href='cadastro.html';</script>
		}
	}
}
?>