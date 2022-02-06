<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  <title>Zakat Perdagangan</title>
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

<div class="container">
  <form action="zakat-perdagangan.php" method="post">
  <div class="row">
  <div class="col-md-6">
      <div class="form-group">
        <label for="modal">Modal :</label>
        <div class="input-group">
          <span class="input-group-addon" id="modal_">Rp. </span>
          <input size="10" type="number" class="" id="modal" name="modal" aria-describedby="modal_">
        </div>
      </div>
      <div class="form-group">
        <label for="untung">Keuntungan :</label>
        <div class="input-group">
          <span class="input-group-addon" id="untung_">Rp. </span>
          <input type="number" class="form-control" id="untung" name="untung" aria-describedby="untung_">
        </div>
      </div>
      <div class="form-group">
        <label for="piutang">Piutang :</label>
        <div class="input-group">
          <span class="input-group-addon" id="piutang_">Rp. </span>
        <input type="number" class="form-control" id="piutang" name="piutang" aria-describedby="piutang_">
        </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
        <label for="hutang">Hutang :</label>
        <div class="input-group">
          <span class="input-group-addon" id="hutang_">Rp. </span>
          <input type="number" class="form-control" id="hutang" name="hutang" aria-describedby="hutang_">
        </div>
      </div>
      <div class="form-group">
        <label for="kerugian">Kerugian :</label>
        <div class="input-group">
          <span class="input-group-addon" id="kerugian_">Rp. </span>
          <input type="number" class="form-control" id="kerugian" name="kerugian" aria-describedby="kerugian_">
        </div>
      </div>
      <div class="form-group">
        <label for="nisab">Harga emas saat ini :</label>
        <div class="input-group">
         <span class="input-group-addon">Rp. </span>
          <input  type="number" class="form-control" id="kerugian" name="nisab">
          <span class="input-group-addon">/gram</span>
        </div>
      </div>
  </div>
    <div class="hit form-group">
    <input type="submit" class="btn_ btn btn-info" value="Hitung">
    </div>

    <?php
  error_reporting(0);

  $modal = $_POST[modal];
  $untung = $_POST[untung];
  $piutang = $_POST[piutang];
  $hutang = $_POST[hutang];
  $kerugian = $_POST[kerugian];
  $nisab  = $_POST[nisab];

  $harta = ($modal + $untung + $piutang) - ($hutang + $kerugian);
  $nisab_ = 85 * $nisab;


 if(empty($modal) || empty($nisab)){  
      $ket = "<div class='alert alert-danger'>Modal dan Harga Emas <b>tidak boleh kosong</b> !! </div>";
}else{  

  if ($harta >= $nisab_) {

    $zakat = $harta * 2.5/100;
    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b></div>
    <br> *Zakat dibayarkan jika telah mencapai 1 tahun haul";
  }
  else{
    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
    <br> *Anda bayar zakat jika penghasilan sudah mencapai nisab Rp. " . $nisab_ . ",- atau setara dengan 85 Gram Emas";
  }

}
?>
<div class="inpt">
<div> <?php echo $ket; ?> </div>
</div>

  </div>
  </div>
</form>
</div>


</div>
</div>
</body>
</html>