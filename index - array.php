<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">

<title>Belajar Sekolah Ekspor</title>
</head>

	<body>
		<h1>Agil Anggini - 220013 - BACKEND </h1>
		<?php
		$biodata = [
		  'name' => 'Agil Anggini',
		  'email' => 'agilanggini00@gmail.com',
		  'phone' => '082149381657',
		  'prodi' => 'Sistem Informasi',
		  'fakultas' => 'Teknik',
		  'univ' => 'Universitas Mulawarman',
		  'hobi' => ['Baca Novel', 'Baca Manga','Baca Webtoon','Nonton Anime','Nonton Drakor'],
		  'sosmed' => ['facebook' => 'agil anggini', 'linkendln' => 'Agil Anggini','Instagram' =>'@agil.anggini19']
		];

		echo "Nama Lengkap	: ", $biodata['name'];
		echo "<br>"; 
		echo "Email			: ", $biodata['email'];
		echo "<br>";
		echo "Nomor Telepon	: ", $biodata['phone'];
		echo "<br>";
		echo "Prodi			: ", $biodata['prodi'];
		echo "<br>";
		echo "Fakultas		: ", $biodata['fakultas'];
		echo "<br>";
		echo "Universitas	: ", $biodata['univ'];
		echo "<h4> Hobi </h4>";
		echo $biodata['hobi'][0], ', ';
		echo $biodata['hobi'][1], ', ';
		echo $biodata['hobi'][2], ', ';
		echo $biodata['hobi'][3];
		echo "<h4> Sosial Media </h4>";
		echo "Facebook 		: ", $biodata['sosmed']['facebook'];
		echo "<br>";
		echo "Instagram		: ", $biodata['sosmed']['Instagram'];
		echo "<br>";
		echo "linkendln		: ", $biodata['sosmed']['linkendln'];

	?>
		
	</body>

</html>