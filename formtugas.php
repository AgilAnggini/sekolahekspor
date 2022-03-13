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

    <form action="ouputtugas.php" method="GET" name="input">
        <div>
            <label>TUJUAN PEMBERANGKATAN</label> <br>
			  <select name="tujuan" id="tujuan" name="tujuan">
			    <option value="Jakarta">Jakarta</option>
			    <option value="Tasikmalaya">Tasikmalaya</option>
			    <option value="Garut">Garut</option>
			    <option value="Tangerang">Tangerang</option>
			  </select>
        </div>
        <br>
         <div>
            <label>JUMLAH TIKET</label> <br>
            <input name="jumlah" type="number" id="jumlah" name="jumlah" min="1" max="100">
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>

	</body>

</html>
