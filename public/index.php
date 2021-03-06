<html lang="pt-br">

	<head>

		<script type="text/javascript" src="js/scripts.js"></script>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta http-equiv="Cache-Control" content="no-store">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Caixero VIajante</title>
		
	</head>

	<body>

		<div class="navbar" id="navbarID">
			<a href="index.php" class="active">PCV</a>
			<a href="#">DIMAp</a>
			<a href="#">Sobre</a>
			<a href="#">Contato</a>
			<a href="../src/tsp-upload-1.php" class="administrator">Administrator</a>
			<a href="#" class="icon" onclick="responsive()">&#9776;</a>
		</div>

		<div id="wrapper">

			<div class="content">

				<h2>O Problema do Caixeiro Viajante - PCV</h2>

				<p>O Problema do Caixeiro Viajante (PCV) ou Traveling Salesman Problem (TSP) é um problema que tenta determinar a menor rota para percorrer uma série de cidades (visitando uma única vez cada uma delas), retornando à cidade de origem. Ele é um problema de otimização NP-difícil inspirado na necessidade dos vendedores em realizar entregas em diversos locais (as cidades) percorrendo o menor caminho possível, reduzindo o tempo necessário para a viagem e os possíveis custos com transporte e combustível.</p>

				<p>Nos anos de 1800, problemas relacionados com o PCV começaram a ser desenvolvidos por dois matemáticos: o escocês William Rowan Hamilton e o britânico Thomas Penyngton Kerkman. A forma geral do PCV parece ter sido, pela primeira vez, estudada por matemáticos nos anos de 1930 em Harvard e Viena. O problema foi posteriormente estudado por Hassler Whitney e Merril Flood em Princeton. Exceptuando pequenas variações ortográficas, como traveling vs travelling ou salesman vs salesman's, o nome do problema ficou globalmente conhecido por volta do ano 1950.</p>

				<h3>Tipos de instâncias:</h3>

				<a href="../src/tsp-pq.php">
					<button class="button">O Problema do Caixeiro Viajante com Passageiro e Quota</button>
				</a>
				<a href="../src/tsp-pvitc.php">
					<button class="button">O Problema do Caixeiro Viajante com Passageiro, Viagem Incompleta e Tempo de Coleta</button>
				</a>

			</div>

			<footer class="footer">
				<div class="footer-top">
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="index.php">PCV</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">DIMAp</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">Sobre</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">Contato</a>
					</div>
					<div class="footer-top-item">
						<?php
							$aux = basename($_SERVER['PHP_SELF']);
							$page_name = explode(".", $aux);
							$page_name_en = explode ("_", $page_name[0]);

							echo "<a style='cursor: not-allowed; opacity: 0.5;' class='footer-top-item-link' href='". $page_name[0] . "'>Português (BR)</a>";
							echo "<a class='footer-top-item-link' href='". $page_name_en[0] . "_en.php'>English</a>";
						
						?>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="footer-copyright">
						<p>&copy; 2018 DIMAp, UFRN. Todos os direitos reservados.</p>
					</div>
				</div>
			</footer>

		</div>	
		
	</body>

</html>