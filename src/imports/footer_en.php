<footer class="footer">
	<div class="footer-top">
		<div class="footer-top-item">
			<a class="footer-top-item-link" href="../public/index_en.php">TSP</a>
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
		<?php
				$aux = basename($_SERVER['PHP_SELF']);
				$page_name = explode(".", $aux);
				$page_name_en = explode ("_", $page_name[0]);

				echo "<a class='footer-top-item-link' href='". $page_name_en[0] . ".php'>Português (BR)</a>";
				echo "<a style='cursor: not-allowed; opacity: 0.5;' class='footer-top-item-link' href='". $page_name[0] . ".php'>English</a>";

			?>
	</div>
	<div class="footer-bottom">
		<div class="footer-copyright">
			<p>&copy; 2018 DIMAp, UFRN. All Rights Reserved.</p>
		</div>
	</div>
</footer>