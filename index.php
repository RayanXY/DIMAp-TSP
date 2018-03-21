<html>

	<head>

		<?php
			include "Controllers/import.php";
		?>

		<title>TSP</title>
		
	</head>

	<body>

		<?php
			include "Controllers/menu.php";
		?>

		<div class="content">

			<h2>Traveling Salesman Problem - TSP</h2>

			<p>O Problema do Caixeiro Viajante (PCV) ou Traveling Salesman Problem (TSP) é um problema que tenta determinar a menor rota para percorrer uma série de cidades (visitando uma única vez cada uma delas), retornando à cidade de origem. Ele é um problema de otimização NP-difícil inspirado na necessidade dos vendedores em realizar entregas em diversos locais (as cidades) percorrendo o menor caminho possível, reduzindo o tempo necessário para a viagem e os possíveis custos com transporte e combustível.</p>

			<p>Nos anos de 1800, problemas relacionados com o PCV começaram a ser desenvolvidos por dois matemáticos: o escocês William Rowan Hamilton e o britânico Thomas Penyngton Kerkman. A forma geral do PCV parece ter sido, pela primeira vez, estudada por matemáticos nos anos de 1930 em Harvard e Viena. O problema foi posteriormente estudado por Hassler Whitney e Merril Flood em Princeton. Exceptuando pequenas variações ortográficas, como traveling vs travelling ou salesman vs salesman's, o nome do problema ficou globalmente conhecido por volta do ano 1950</p>

			<h3>Tipos de instâncias:</h3>

			<a href="allan.php">
				<button class="button">O Problema do Caixeiro Viajante com Passageiro e Quota</button>
			</a>
			<a href="bruno.php">
				<button class="button">O Problema do Caixeiro Viajante com Passageiro, Viagem Incompleta e Tempo de Coleta</button>
			</a>

		</div>

	</body>

</html>