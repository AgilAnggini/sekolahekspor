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

			class Robot
			{
				private $WarnaKepala, $WarnaBadan, $WarnaKaki, $JlSenjata;
				public function __costruct ( $WarnaKepala, $WarnaBadan, $WarnaKaki, $JlSenjata )
				{
					$this -> WarnaKepala = $WarnaKepala;
					$this -> WarnaBadan = $WarnaBadan;
					$this -> WarnaKaki = $WarnaKaki;
					$this -> JlSenjata = $JlSenjata;

				}

				public function getWarnaBadan()
				{
					echo $this -> WarnaKepala . " " . $this -> WarnaBadan . " " . $this -> WarnaKaki . " " . $this -> JlSenjata;
				}

				public function changeWarnaBadan ($WarnaKepala, $WarnaBadan,$WarnaKaki, $JlSenjata)
				{
					$this -> WarnaKepala = $WarnaKepala;
					$this -> WarnaBadan = $WarnaBadan;
					$this -> WarnaKaki = $WarnaKaki;
					$this -> JlSenjata = $JlSenjata;
				}

			}

			$robot = new Robot("Merah", "Biru", "Kuning", 3);

			$robot->getWarnaBadan(); // Merah, Biru, Kuning, 3

			$robot->changeWarnaBadan("Merah", "Hijau", "Putih", 2);

			$robot->getWarnaBadan(); // Merah, Hijau, Putih, 2
								        
		?>


	</body>

</html>