<!doctype html>

<html>
	<head>
		<title>Exercicio Ead03</title>
		<meta charset = 'utf-8'>
		<link rel = 'stylesheet' type = 'text/css' href = 'estilo.css'>
		
		<?php
			$nomeAluno 		= $_POST['nomeAluno'];
			$nomeDisciplina = $_POST['nomeDisciplina'];
			$nomeCurso 		= $_POST['nomeCurso'];
			$linkLog 		= $_POST['linkLog'];
			$ntVa1 			= $_POST['ntVa1'];
			$ntVa2 			= $_POST['ntVa2'];
			$ntVa3 			= $_POST['ntVa3'];
			$ntTrab 			= $_POST['ntTrab'];
			$nomeProf 			= $_POST['nomeProf'];
			$nomeCoord 			= $_POST['nomeCoord'];
			
			$notas = array(15, 25, 35, 25);
			
		?>
		
	</head>
	
	<body>
	<h1 id = 'titulo'>Declaração</h1>
		<p> Declaramos para os devidos fins que <?= $nomeAluno; ?> !!!concluiu satisfatoriamentes as atividades
		da disciplina <?= $nomeDisciplina; ?> do curso <?= $nomeCurso?> .
		
		<p>Segue o desempenho de <?= $nomeAluno; ?></p>
		</p>		
		
		<table id = 'tabela'>
			<tr>
				<th>Critério</th> <th>Valor Total</th> <th> Nota Do Aluno</th><th> Desempenho</th>
			</tr>
			
			<tr>
				<td>Prova 1</td> <td><?= $notas[0];?></td> <td> <?=$ntVa1;?></td><td>2</td>
			</tr>
			
			<tr>
				<td>Prova 2</td> <td><?= $notas[1];?></td> <td> <?=$ntVa2;?></td><td>3</td>
			</tr>
	
	
			<tr>
				<td>Prova 3</td> <td><?= $notas[2];?></td> <td> <?=$ntVa3;?></td><td>4</td>
			</tr>
			<tr>
				<td>Prova 3</td> <td><?= $notas[3];?></td> <td> <?=$ntTrab;?></td><td>5</td>
			</tr>
	
		</table>
	</body>
</html>