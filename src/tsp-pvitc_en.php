<html lang="en">

	<head>

		<?php
			include "imports/import.php";
		?>
		<title>TSP - Incomplete Ride and Collection Time</title>

	</head>

	<body onload="accordion()">

		<?php
			include "../src/imports/menu_en.php";
		?>

		<div class="content">
			
			<h2>The Quota Travelling Salesman Problem with Passengers, Incomplete Ride and Collection Time</h2>

			<p>The Quota Travelling Salesman Problem with Passengers, Incomplete Ride and Collection Time is a new version of the Quota
			Travelling Salesman Problem where the salesman can share travel costs with passengers of his vehicle while visiting some vertices to satisfy a preestablished profits quota. To improve the problem’s representativeness, constraints regarding vehicle capacity, cost and time edges, penalty for passengers eliverance out of their destinations, limits about expense and travel time of each passenger are considered. In this document, we	present the conception method and the structure of the instances.</p>

			<p>Let G(N, E) be a connected graph, where N is the set of vertices and E = {(i, j) | i, j ∈ N} is the set of edges. We denote by bi the quota associated with vertex i ∈ N and by gi the time required to collect the vertex’s quota. We denote by cij and by yij , respectively, the cost and the time required to travel by edge (i, j) ∈ E. Let L be the set of passengers. We denote by Li ⊆ L the subset of passengers who depart from i ∈ N. Let org(l) ∈ N be the city of which passenger l departs from and dst(l) ∈ N the city where passenger l should be delivered. The travelling salesman departs from s ∈ N, visits each city of a subset N0 ⊆ N only once and returns to s. The quota collected by the travelling salesman must be at least K. Respecting the vehicle capacity R, the driver takes some passengers who are at cites of vehicle’s route and chooses some city to deliver each of them, not necessarily their destination in fact. The ride’s costs are shared with all vehicle’s occupants. Each passenger l ∈ L imposes a limit tl about expense and a limit wl about his ride time. Let hlj be the penalty to deliver the passenger l ∈ L at city j ∈ N, where j 6= dst(l). That is, hlj is added to the final ride’s cost whenever passenger j is delivered to city j. If j = dst(l), thus hlj = 0. Thus, the objective of TSPQRID problem is to find a Hamiltonian cycle on subset N0 ⊆ N such that the cost of ridesharing plus the eventual penalties are minimized and collected quota constraint is satisfied.</p>

			<h3>Instances:</h3>

		<?php

			/// Reading every folder in the Main Path.
			$mainPath = "../data/instances/TSP - Passageiro, Viagem Incompleta e Tempo de Coleta/";
			$folders = array_slice(scandir($mainPath), 2);

			foreach ($folders as $folder) {

				echo "<button class=\"accordion\">" . $folder . "</button>";
				echo "<div class=\"panel\">";

					/// Reading every file present in each folder.
					$filePath = $mainPath . $folder ."/";
					$files = array_slice(scandir($filePath), 2);
					
					foreach ($files as $file){

						$fullPath = $filePath . $file;

						echo 
							"<div class=\"panel_options\">
								<a href=\"" . $fullPath . "\">" . $file . "</a>
								<a href=\"Controllers/download.php?file=../" . $fullPath . "\"id=\"download\"> Download</a>
							</div>";

					}

				echo "</div>";

			}

		?>

		</div>

		<?php
			include "../src/imports/footer_en.php";
		?>

	</body>

</html>