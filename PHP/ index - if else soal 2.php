<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">

<title>Belajar Sekolah Ekspor</title>
</head>

	<body>
		<h1>Agil Anggini - 220013 </h1>

		<?php
			$kondisi ="bagus";

			echo 'perbandingan if else soal 2 <br>';
			echo "Kondisi: {$kondisi} <br>";

			if ($kondisi =="bagus") {
			  echo "Mesin bagus dan Body Bagus";
			} elseif ($kondisi == "menengah") {
			  echo "Memsin Bagus || Body Bagus";
			} else {
			  echo "Mesin dan body jelek";
			}

			echo "<br>";
			echo "<br>";

			$kondisi ="menengah";

			echo 'perbandingan if else soal 2 <br>';
			echo "Kondisi: {$kondisi} <br>";

			if ($kondisi =="bagus") {
			  echo "Mesin bagus dan Body Bagus";
			} elseif ($kondisi == "menengah") {
			  echo "Mesin Bagus || Body Bagus";
			} else {
			  echo "Mesin dan body jelek";
			}

			echo "<br>";
			echo "<br>";

			$kondisi ="jelek";

			echo 'perbandingan if else soal 2 <br>';
			echo "Kondisi: {$kondisi} <br>";

			if ($kondisi =="bagus") {
			  echo "Mesin bagus dan Body Bagus";
			} elseif ($kondisi == "menengah") {
			  echo "Memsin Bagus || Body Bagus";
			} else {
			  echo "Mesin dan body jelek";
			}

			echo "<br>";
			echo "<br>";
		?>
	</body>

</html>
