<!DOCTYPE html>

<html lang="el-GR">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Παύση Επανάληψης - Εντολή Break</title>
	  <meta name="description" content="Παύση Επανάληψης - Εντολή Break.">
	  <meta name="author" content="Εκδότης">

	  <meta property="og:title" content="Παύση Επανάληψης - Εντολή Break">
	  <meta property="og:type" content="Τύπος">
	  <meta property="og:url" content="https://www.">
	  <meta property="og:description" content="Παύση Επανάληψης - Εντολή Break.">
	  <meta property="og:image" content="image.png">

	  <link rel="icon" href="/favicon.ico">
	  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
	  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

	  <link rel="stylesheet" href="css/styles.css?v=1.0">

	</head>

	<body>
	  <!-- Περιεχόμενο... -->
		<?php
			$counter = -5;
			
			while (++$counter <= 10) { 
				if ($counter == 0){
					break;
				} else {
					$temp = 4000 / $counter;
					echo "4000 / $counter = $temp<br>";
				}
			}
		?>
	  <script src="js/scripts.js"></script>
	</body>
</html>