<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">

<title>Belajar Sekolah Ekspor</title>
</head>

		<?php
			$tujuan = $_GET["tujuan"];
			$jumlah = $_GET["jumlah"];
			
		
			//tujuan
				if ($tujuan == "Jakarta") {
				    $harga =100000;
				} else if ($tujuan == "Tangerang") {
				    $harga =110000;
				} else if ($tujuan == "Tasikmalaya") {
				    $harga =60000;
				} else if ($tujuan == "Garut") {
				    $harga =70000;
				}


			$total = ($jumlah*$harga);
			if(isset($_GET ["diskon"])){
			$diskon = $_GET["diskon"];
			}

			//total keseluruhan
				if ($jumlah >= 3) {
					$diskon = (($total*10)/100);
				} else if ($jumlah >= 5) {
					$diskon = (($total*15)/100);
				} else if ($jumlah >= 10) {
					$diskon = (($total*20)/100);
				} else {
					$diskon = 0;
				}

			$seluruh = ($total)-($diskon);

			echo "<table>
			<tr>
			<td>
			Tujuan Tiket : “{$tujuan}”<br>
			Harga Tiket : “{$harga}”<br>
			Jumlah Tiket : “{$jumlah}”<br>
			Total Biaya: “{$seluruh}”<br>
			</td>
			</tr>
			</table> ";

		?>


	</body>

</html>
