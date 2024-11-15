<!DOCTYPE html>

<html lang="el-GR">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Πρόταση Ελέγχου switch</title>
	  <meta name="description" content="Πρόταση Ελέγχου switch.">
	  <meta name="author" content="Εκδότης">

	  <meta property="og:title" content="Πρόταση Ελέγχου switch">
	  <meta property="og:type" content="Τύπος">
	  <meta property="og:url" content="https://www.">
	  <meta property="og:description" content="Πρόταση Ελέγχου switch.">
	  <meta property="og:image" content="image.png">

	  <link rel="icon" href="/favicon.ico">
	  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
	  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

	  <link rel="stylesheet" href="css/styles.css?v=1.0">

	</head>

	<body>
	  <!-- Περιεχόμενο... -->
		<?php
			if     ($page == "Αρχική")       echo "Επιλέξατε την Αρχική Σελίδα.";
			elseif ($page == "Πληροφορίες")  echo "Επιλέξατε Πληροφορίες.";
			elseif ($page == "Ανακοινώσεις") echo "Επιλέξατε Ανακοινώσεις.";
			elseif ($page == "Σύνδεση")      echo "Επιλέξατε Σύνδεση.";
			else                             echo "Άγνωστη επιλογή!";
		?>
	  <script src="js/scripts.js"></script>
	</body>
</html>