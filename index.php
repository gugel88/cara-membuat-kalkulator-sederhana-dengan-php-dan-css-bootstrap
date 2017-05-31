<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Kalkulator Sederhana dengan PHP &amp; CSS Bootstrap</title>
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$NilaiA = $_POST['NilaiA'];
		$NilaiB = $_POST['NilaiB'];
		$operasi = $_POST['operasi_perhitungan'];
		switch ($operasi) {
			case 'penjumlahan':
				$hasil = $NilaiA+$NilaiB;
			break;
			case 'pengurangan':
				$hasil = $NilaiA-$NilaiB;
			break;
			case 'perkalian':
				$hasil = $NilaiA*$NilaiB;
			break;
			case 'pembagian':
				$hasil = $NilaiA/$NilaiB;
			break;			
		}
	}
	?>
	<section class="container">
			<section class="login-form">
				<form method="post" action="" role="login">
					<img src="assets/images/logo.png" class="img-responsive" alt="" />

					<input type="text" name="NilaiA" placeholder="Input Nilai A" required class="form-control input-lg" onkeypress="return validasi_number_gugel88(event)"/>
					<input type="text" name="NilaiB" placeholder="Input Nilai B" required class="form-control input-lg" onkeypress="return validasi_number_gugel88(event)"/>
				    <select class="form-control input-lg" name="operasi_perhitungan">
				      <option>-- Pilih --</option>
				      <option value="penjumlahan">+</option>
				      <option value="pengurangan">-</option>
				      <option value="perkalian">x</option>
				      <option value="pembagian">:</option>
				    </select>
					<button type="submit" name="hitung" class="btn btn-lg btn-danger btn-block">Hitung</button>
					<?php if(isset($_POST['hitung'])){ ?>
						<input type="text" value="<?php echo $hasil; ?>" class="form-control input-lg">
					<?php }else{ ?>
						<input type="text" placeholder="Hasil" class="form-control input-lg" disabled>
					<?php } ?>

				</form>
				<div class="form-links">
					<a href="http://www.gugel88.com/" target="_blank" title="GUGEL88.COM"> Copyright &copy; 2017 - GUGEL88.COM</a>
				</div>
			</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
    function validasi_number_gugel88(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
</script>
</body>
</html>