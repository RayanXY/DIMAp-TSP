<html>

	<head>

		<?php
			include "Controllers/import.php";
		?>
		<title>Allan</title>

	</head>

	<body onload="accordion()">

		<?php
			include "Controllers/menu.php";
		?>

		<div class="content">
			
			<h2>O Problema do Caixeiro Viajante com Passageiro e Quota</h2>

			<p>O conjunto de instâncias são divididas em 3 grupos, que possuem simétricas e assimétricas com os seguintes tamanhos: 10, 20, 30, 40, 50 e 100, geradas a partir de um gerador de instâncias desenvolvido com as respectivas características gerais: peso das arestas e bônus dos vértices do grafo definido aleatoriamente, utilizando uma distribuição uniforme a partir do intervalo: 100 a 250 e 0 a 250 respectivamente; capacidade de passageiros no carro: 3, 4 e 5; quantidade de passageiros por vértice: de zero a uma ou duas vezes a capacidade do carro.</p>

			<p>As características especificas das instâncias dos grupos 2 e 3: 10%, 15% ou 20% da quantidade de vértices, definidos aleatoriamente, são considerados como vértices de bloqueio que possuem o bônus e os pesos das arestas que incidem definido aleatoriamente e utilizando uma distribuição uniforme a partir do intervalo: 300 a 500 para o bônus e 400 a 700 no grupo 2 e 250 a 400 no grupo 3 para o peso das arestas.</p>

			<p>A nomeação das instâncias foi realizada utilizando a seguinte estrutura: x-tam-quantP-capacidade-grupo onde x = simétrica - s ou assimétrica - a; tam = quantidade de vértices no grafo; quantP = quantidade de passageiros; capacidade = capacidade de passageiros no carro e grupo = grupo da instância.</p>

			<h3>Conteúdo das instâncias:</h3>
			<ul>
				<li>A primeira linha é composta pelo tamanho do grafo, quantidade de passageiros e capacidade do carro respectivamente;</li>
				<li>Na sequência, possui o peso das arestas do grafo;</li>
				<li>Após, os passageiros, apresentados um por linha compostas por origem, destino e dinheiro máximo a pagar respectivamente;</li>
				<li>Logo após, o valor da quota mínima;</li>
				<li>E finalizando, os bônus dos vértices, apresentados um por linha compostas pelo número do vértice e valor do bônus respectivamente;</li>
			</ul>

			<h3>Instâncias:</h3>

		<?php

			/// Reading every folder in the Main Path.
			$mainPath = "_Instances/Allan/";
			$folders = array_slice(scandir($mainPath), 2);

			foreach ($folders as $folder) {

				echo "<button class=\"accordion\">" . $folder . "</button>";
				echo "<div class=\"panel\">";

					/// Reading every files present in each folder.
					$filePath = $mainPath . $folder ."/";
					$files = array_slice(scandir($filePath), 2);
					
					foreach ($files as $file){
						echo "<a href =\"" . $filePath . $file . "\">" . $file . "</a></br>"; 
					}

				echo "</div>";

			}

		?>

		</div>

	</body>

</html>