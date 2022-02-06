<html>
	<head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
		<title> Zakat Investasi </title>

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
  </head>
	
<body>
  <div id="backgrounded">
<center>
	<h3 align="center">  Zakat Investasi  </h3> 

</center>

<div class="container">
  <form action="zakat-investasi.php" method="post">
         <label for="jenis">Jenis penghasilan :</label>
        <div class="selectContainer">
            <select class="form-control" name="jenis">
                <option value="">Pilih jenis penghasilan</option>
                <option value="bersih">Penghasilan bersih</option>
                <option value="kotor">Penghasilan kotor</option>
            </select>
        </div>

      <div class="form-group">
        <label for="penghasilan">Jumlah penghasilan :</label>
        <div class="input-group">
          <span class="input-group-addon" id="penghasilan">Rp.  </span>
          <input type="number" class="form-control" id="penghasilan" name="penghasilan" aria-describedby="penghasilan">
          <span class="input-group-addon" id="penghasilan">/tahun</span>
        </div>
      </div>

				
		<div class="hit form-group">
			<input type="submit" class="btn_ btn btn-info" value="Hitung">
		</div>
</div>		
	
<?php
error_reporting (0);
$jenis = $_POST[jenis];
$penghasilan = $_POST[penghasilan];

if(empty($jenis)){  
      $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis penghasilan</b> !! </div>";
  }
  elseif (empty($penghasilan)) {
      $ket = "<div class='alert alert-danger'>Jumlah penghasilan <b>tidak boleh kosong</b> !! </div>";
  }
  else{ 
      if ($jenis == "bersih") {
            $zakat = $penghasilan * 5/100;
            $ket =  "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> Rp. $zakat ,- </b> ";
            }
      else{
            $zakat = $penghasilan * 10/100;
            $ket =  "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> Rp. $zakat ,- </b> ";
      }
  }
?>

<div class="container">
<div> <?php echo $ket;?> </div>
</div>


</form>
</div>

</div>
</body>
</head>
</html>