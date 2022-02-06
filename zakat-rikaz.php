<html>
	<head>
	
	<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
    
      <style>
   #backgrounded {
    top: -0%;
	background:#87b600;
	position: fixed;
	width: 100%;
  height: auto;
  bottom:0;
}
</style>
	  
		<title> Zakat Rikaz </title>
	</head>
	
<body>
  <div id="backgrounded">
<center>

<h1 align="center">  Zakat Rikaz  </h1>
<br> 
</center>
<div class="container">
  <form action="zakat-rikaz.php" method="post">
      <div class="form-group">
        <label for="jumlah">Jumlah Harta :</label>
        <div class="input-group">
          <span class="input-group-addon" id="jumlah_">Rp.  </span>
          <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="modal_">
        </div>
      </div>				
			<div class="hit form-group">
    <input type="submit" class="btn_ btn btn-info" value="Hitung">
  
  
<?php
error_reporting (0);
$jumlah = $_POST[jumlah];

$hasil = $jumlah * 20/100;

if (empty($jumlah)) {
  echo "<div class='alert alert-danger'>Jumlah harta yang ditemukan <b>tidak boleh kosong</b> !! </div>";
}else{
  echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b>Rp. " . $hasil . ",- </b></div>";
}


?>
  </div>	
	</form>

	
</div>
</body>
</head>
</html>