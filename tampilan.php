<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cek Perulangan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">
				<center><h1>Program Perulangan</h1></center>
				 <form role="form" class="center" method="post" action="perulanganmethod.php" enctype="multipart/form-data">
              <div class="box-body">
				 <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan Angka</label>
                  <input class="form-control" id="exampleInputEmail1" name="angka" type="number" >
                </div>
				
				<center>
                <button class="btn bg-orange btn-flat margin"><i class="fa fa-fw  fa-recycle"></i>Cek Hasil</button>
                </center>
              </div>
              <!-- /.box-body -->

            </form>
			</div>
		</div>
	</div>
</body>
</html>