<!DOCTYPE html>
<html>
<head>
	<title>Criando um  formulário com PHP</title>
</head>
<body>
	<form method="post" action="lab7_6r">
		Nome: 
		<input type="text" name="nome"><br/>
		E-mail:
		<input type="text" name="email">
		Sexo:
		<input type="radio" name="sexo" value="M"><br/>
		<input type="radio" name="sexo" value="F"><br/>
		Em qual região você está:
		<select name="regiao">
			<option value="sul">Sul</option>
			<option value="norte">Norte</option>
			<option value="oeste">Oeste</option>
			<option value="leste">Leste</option>
			<option value="centro">Centro</option>
		</select>

	</form>
</body>
</html>