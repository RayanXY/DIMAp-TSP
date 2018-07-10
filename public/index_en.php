<html lang="en">

	<head>

		<script type="text/javascript" src="js/scripts.js"></script>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta http-equiv="Cache-Control" content="no-store">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Traveling Salesman</title>
		
	</head>

	<body>

		<div class="navbar" id="navbarID">
			<a href="index_en.php" class="active">TSP</a>
			<a href="#">DIMAp</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
			<a href="../src/tsp-upload-1.php" class="administrator">Administrator</a>
			<a href="#" class="icon" onclick="responsive()">&#9776;</a>
		</div>

		<div id="wrapper">

			<div class="content">

				<h2>Traveling Salesman Problem - TSP</h2>

				<p>Traveling Salesman Problem (TSP) é um problema que tenta determinar a menor rota para percorrer uma série de cidades (visitando uma única vez cada uma delas), retornando à cidade de origem. Ele é um problema de otimização NP-difícil inspirado na necessidade dos vendedores em realizar entregas em diversos locais (as cidades) percorrendo o menor caminho possível, reduzindo o tempo necessário para a viagem e os possíveis custos com transporte e combustível.</p>

				<p>Nos anos de 1800, problemas relacionados com o PCV começaram a ser desenvolvidos por dois matemáticos: o escocês William Rowan Hamilton e o britânico Thomas Penyngton Kerkman. A forma geral do PCV parece ter sido, pela primeira vez, estudada por matemáticos nos anos de 1930 em Harvard e Viena. O problema foi posteriormente estudado por Hassler Whitney e Merril Flood em Princeton. Exceptuando pequenas variações ortográficas, como traveling vs travelling ou salesman vs salesman's, o nome do problema ficou globalmente conhecido por volta do ano 1950.</p>

				<h3>Instances:</h3>

				<a href="../src/tsp-pq_en.php">
					<button class="button">The Quota Traveling Salesman Problem with Passanger</button>
				</a>
				<a href="../src/tsp-pvitc_en.php">
					<button class="button">The Quota Travelling Salesman Problem with Passengers, Incomplete Ride and Collection Time</button>
				</a>

			</div>

			<footer class="footer">
				<div class="footer-top">
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="index_en.php">TSP</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">DIMAp</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">About</a>
					</div>
					<div class="footer-top-item">
						<a class="footer-top-item-link" href="#">Contact</a>
					</div>
					<div class="footer-top-item">
						<?php
							$aux = basename($_SERVER['PHP_SELF']);
							$page_name = explode(".", $aux);
							$page_name_en = explode ("_", $page_name[0]);

							echo "<a class='footer-top-item-link' href='". $page_name_en[0] . ".php'>Português (BR)</a>";
							echo "<a style='cursor: not-allowed; opacity: 0.5;' class='footer-top-item-link' href='". $page_name[0] . ".php'>English</a>";
						?>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="footer-copyright">
						<p>&copy; 2018 DIMAp, UFRN. All Rights Reserved.</p>
					</div>
				</div>
			</footer>

		</div>	
		
	</body>

</html>