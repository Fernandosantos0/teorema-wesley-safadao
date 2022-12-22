<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Prjeto calculadora de safadeza, Wesley Safadão"> 
        <meta name="keywords" content="wesley, safadão, safadeza, calculadora, desafio, safado, vagabundo">
        <title>Calculadora de Safadeza</title>
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-ico" href="img/favicon.ico" sizes="512x512">
		<!-- Google Fonts Icons -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <!-- css -->
		<link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
        <link rel="stylesheet" href="css/folhaEstilo.css">
		<link rel="stylesheet" href="css/responsividade.css">
		<!-- html5shiv.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        
		<div id="container">
			<header>
				<h1>Teorema Wesley Safadão</h1>
			</header>
			
			<main class="flex">
				<section id="conteudo">
					
					<?php
						$dia = $_POST['dia'];
						$mes = $_POST['mes'];
						$ano = $_POST['ano'];
						
						
						if($dia === '' and $mes === '' and $ano === '') {
							echo "<p class='atencao'>Você não preencheu os campos ou falta algum campo para ser preenchido. Por favor, volte a página e preencha todos os campos!";
						} else {
							//Função
							function somatorio($n) {
								$s = 0;
								for($c = 1; $c <= $n; $c++) {
									$s += $c;
								}
								
								return $s;
							}
							
							function WesleySafadao($d, $m, $a) {
								$safado = somatorio($m) + ($a / 100) * (50 - $d);
								$anjo = 100 - $safado;
								echo "<p>$anjo% ANJO, mas aquele $safado% é VAGABUNDO!</p>";
							}
							
							WesleySafadao($dia, $mes, $ano);
						}
					?>
					<div style="text-align: center;">
						<a href="index.html" class="btn-nav" target="_self" rel="prev" hreflang="pt-br">
							<span class="material-symbols-outlined">arrow_circle_left</span>
						</a>
					</div>
					
				</section> <!-- conteudo -->
				
				<section id="foto">
					<img src="img/img-wesley-safadao.png" alt="Foto do cantor brasileiro, Wesley Safadão" title="Cantor brasileiro, Wesley Safadão">
				</section> <!-- foto -->
			</main>
			
			<footer id="rodape">
				<p><em>&copy;Copyrigth - <a href="https://github.com/Fernandosantos0" target="_blank" rel="external" hreflang="en">Fernando Santos</a> <time><?php echo "(" . date("Y") . ")"?></time></em></p>
			</footer> <!-- rodape -->
		</div> <!-- container -->
		
    </body>
</html>