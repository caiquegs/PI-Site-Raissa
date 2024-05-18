<?php

if(isset($_POST['submit']))
{
	// print_r('Nome: ' . $_POST['nome']);
	// print_r('<br>');
	// print_r('Email: ' . $_POST['email']);
	// print_r('<br>');
	// print_r('Telefone: ' . $_POST['telefone']);
	// print_r('<br>');
	// print_r('Sexo: ' . $_POST['genero']);
	// print_r('<br>');
	// print_r('Data de Nascimento: ' . $_POST['data_nasc']);
	// print_r('<br>');
	// print_r('Cidade de residência: ' . $_POST['cidade_moradia']);
	// print_r('<br>');
	// print_r('Cidade que deseja agendamento: ' . $_POST['cidade_agendamento']);

	include_once('config.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$sexo = $_POST['genero'];
	$data_nasc = $_POST['data_nasc'];
	$cidade_residencia = $_POST['cidade_residencia'];
	$cidade_agendamento = $_POST['cidade_agendamento'];

	$result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,sexo,data_nasc,cidade_residencia,cidade_agendamento)
	VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade_residencia','$cidade_agendamento')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/logoraissa.jpg" type="Logo RL Beuaty">
		<title>RL Beauty</title>

		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="caixa">
				
				<nav>
					<ul>
						<br>
						<li><a href="index.html">Home</a></li>
						<li><a href="Procedimentos.html">Procedimentos</a></li>
						<li><a href="contato.php">Agendamento</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>
			<form>

				<div class="inputBox">
					<label for="nome" class="labelInput"> Nome completo</label>
					<input type="text" name="nome" id="nome" class="inputUser" required>
				</div>
				<br>

				<div class="inputBox">
					<label for="email" class="labelInput">Email</label>
					<input type="text" name="email" id="email" class="inputUser" required>
				</div>
				<br>

				<div class="inputBox">
					<label for="telefone" class="labelInput"> Telefone</label>
					<input type="tel" name="telefone" id="telefone" class="inputUser" required>
				</div>
				<br>
				<p><b>Sexo:</b></p>
				<input type="radio" id="feminino" name="genero" value="feminino" required>
				<label for="feminino"> Feminino </label>
				
				<input type="radio" id="masculino" name="genero" value="masculino" required>
				<label for="masculino"> Masculino </label>
			
				<input type="radio" id="outro" name="genero" value="outro" required>
				<label for="outro"> Outro </label>


				<label for="data_nasc"><b>Data de nascimento:</b></label>
				<input type="date" name="data_nasc" id="data_nasc" required>

				<br>
				<br>
				<br>
				<div class="inputBox">
					<label for="cidade_residencia" class="labelInput">Qual cidade você mora?</label>
					<input type="text" name="cidade_residencia" id="cidade_residencia" class="inputUser" required>
				</div>
				<br>
				<br>
				<div class="inputBox">
					<label for="cidade" class="labelInput"> Agendar em: São Roque ou Alumínio?</label>
					<input type="text" name="cidade_agendamento" id="cidade" class="inputUser" required>
				</div>
					<br>
				<div class="inputBox">
					<label for="mensagem" class="labelInput"> Descreva quais procedimentos gostaria de agendar.</label>
					<input type="text" name="mensagem" id="mensagem" class="inputUser" required>
				</div>
				<br>
				<br>
				<fieldset>
					<legend>Como prefere o nosso contato?</legend>
					<label for="radio-email"><input type="radio" name="contato" value="email" id="radio-email"> Email</label>
					<label for="radio-telefone"><input type="radio" name="contato" value="telefone" id="radio-telefone"> Telefone</label>
					<label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked> WhatsApp</label>
				</fieldset>

				<br>

				<fieldset>
					<legend>Qual horário prefere ser atendido?</legend>
					<label for="radio-manhã"><input type="radio" name="horário" value="manhã" id="radio-manhã"> Manhã</label>
					
					<label for="radio-tarde"><input type="radio" name="horário" value="tarde" id="radio-tarde"> Tarde</label>
					
					<label for="radio-noite"><input type="radio" name="horário" value="noite" id="radio-noite" checked> Noite</label>
				</fieldset>

				<label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>

				<input type="submit" value="Enviar formulário" class="enviar">
			</form>
			<br>
			<br>
			<br>
			<p>Acesse já minhas redes sociais e fique por dentro das novidades</p>
			<br>
			<a href="https://www.instagram.com/raissalorainebeauty/" class="social-icon instagram-icon"></a>
			<a href="https://www.facebook.com/rlesteticaemakeup" class="social-icon facebook-icon"></a>			
			<br>
			<br>
			<br>
			<p> Nosso Horario de Funcionamento: </p>
			<br>
			<table>
				<tr>
					<td>Dia</td>
					<td>Horário</td>
				</tr>
				<tr>
					<td>Terça - Sexta</td>
					<td>8h - 19h</td>
				</tr>
				<tr>
					<td>Sábado</td>
					<td>8h - 17h</td>
				</tr>
			</table>
		</main>

		<footer>
			
			<p class="copyright">&copy; © Copyright Raissa Loraine Beauty - 2024</p>
		</footer>
	</body>
</html>