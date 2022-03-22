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

	    $nilai = [
	        ['name' => 'Agil', 'mtk' => 60, 'sjr' => 87, 'kim' => 37],
	        ['name' => 'Anggi', 'mtk' => 80, 'sjr' => 0 , 'kim' => 65],
	        ['name' => 'Gini', 'mtk' => 40, 'sjr' => 85, 'kim' => 79],
	        ['name' => 'Intan', 'mtk' => 89, 'sjr' => 49, 'kim' => 81],
	        ['name' => 'Upik', 'mtk' => 37, 'sjr' => 70, 'kim' => 86],
	        ['name' => 'Imam', 'mtk' => 54, 'sjr' => 93, 'kim' => 94],
	        ['name' => 'Sari', 'mtk' => 0, 'sjr' => 84, 'kim' => 0],
	        ['name' => 'Ahda', 'mtk' => 78, 'sjr' => 93, 'kim' => 67],
	        ['name' => 'Tara', 'mtk' => 39, 'sjr' => 95, 'kim' =>54],
	        ['name' => 'Aya', 'mtk' => 93, 'sjr' => 69, 'kim' => 46]
	    ];

	    foreach ($nilai as $n) {

	        echo "Nama Mahasiswa : ", $n['name'];
	        echo '<br>';
	        echo "Nilai Matematika : ", $n['mtk'];
	        echo '<br>';
	        if ($n['mtk']>=81 && $n['mtk']<=100) {
	            echo "Huruf Matematika : A";
	        } else if($n['mtk']>=75 && $n['mtk']<=80){
	            echo "Huruf Matematika : B";
	        } else if($n['mtk']>1 && $n['mtk']<=74){
	            echo "Huruf Matematika : C";
	        } else{
	            echo "Tidak Ada Nilai.";
	        }

	        echo '<br>';
	        echo "Nilai  Sejarah : ", $n['sjr'];
	        echo '<br>';

	        if ($n['sjr']>=88 && $n['sjr']<=100) {
	            echo "Huruf Sejarah : A";
	        } else if($n['sjr']>=74 && $n['sjr']<=87){
	            echo "Huruf Sejarah : B";
	        } else if($n['sjr']>1 && $n['sjr']<=73){
	            echo "Huruf Sejarah : C";
	        } else{
	            echo "Tidak Ada Nilai.";
	        }
	        echo '<br>';
	        echo "Nilai Kimia: ", $n['kim'];
	        echo '<br>';
	        if ($n['kim']>=85 && $n['kim']<=100) {
	            echo "Huruf Kimia : A";
	        } else if($n['kim']>=65 && $n['kim']<=84){
	            echo "Huruf Kimia : B";
	        } else if($n['kim']>1 && $n['kim']<=64){
	            echo "Huruf Kimia : C";
	        } else{
	            echo "Tidak Ada Nilai.";
	        }

	         echo '<br>';
	         echo '<br>';

	        
	    }

		?>
	</body>

</html>
