<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Recuperando dados do formulário</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$regiao = $_POST['regiao'];
$opiniao = $_POST['opiniao'];
$receberEmail = $_POST['receberEmail'];
$escondido = $_POST['escondido'];

$mensagem_erro = "";
$erro = 0;

if ($nome == "") {
	$erro = $erro +1;
	$mensagem_erro = $mensagem_erro."O campo [nome] é obrigatório.<br/>";
}
if ($email == "") {
	$erro = $erro +1;
	$mensagem_erro = $mensagem_erro."O campo [email] é obrigatório.<br/>";
}
if ($erro >=1) {
	print "<h3> Seu formulário contém o(s) seguinte(s) $erro erro(s)</h3>";

print $mensagem_erro;
print "<br/><input type='BUTTON' VALUE = 'Corrigir' ONCLICK='javascript: history.go(-1)'>";
}
else {
//strong = concatenação
print "Nome: <strong>$nome</strong><br/>";
print "E-mail: <strong>$email</strong><br/>";
print "Sexo: <strong>$sexo</strong><br/>";
print "Região: <strong>$regiao</strong><br/>";
print "Opinião<br/>";
print "<strong>$opiniao</strong><br/><br/>";
print "Receber E-mail: <strong>$receberEmail</strong><br/>";
print "Não visualizado pelo usuário: <strong>$escondido</strong><br/><br/>";
}
?>

</body>
</html>