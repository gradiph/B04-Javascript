<!DOCTYPE html>
<html>
	<head>
		<title>Belajar Javascript</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css") ?>">
	</head>
	<body onload="startTime()">
		
		<!-- Header -->
		<header>
			<div class="py-5 bg-primary">
				<h1 class="text-center text-light display-1">Belajar Javascript</h1>
			</div>
			
			<!-- Navbar-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand" href="#">Belajar Javascript</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="#Alert_Prompt_dan_Confirm">Alert, Prompt, dan Confirm</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tabel
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#Tabel_stock">Tabel Stock</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#Tabel_karyawan">Tabel Karyawan</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav">
							<span class="navbar-text" id="txt">
							</span>
							<a class="nav-link disabled" href="#">Keluar</a>
						</ul>
					</div>
				</div>
			</nav>
			<br>
			<br>
		</div>
	</div>
</header>

<!-- Tombol -->
<main>
	<div class="container">
		<div class="col text-center">
			<h1 class="Alert_Prompt_dan_Confirm_id" id="Alert_Prompt_dan_Confirm">Alert, Prompt, dan Confirm</h1>
		</div>
		
		<br>
		
		<div class="row">
			<div class="col-md-4">
				<button onclick="myFunction_alert()" type="button" class="btn btn-danger col-12 col-md-11">Tombol Alert</button>
			</div>
			<div class="col-md-4">
				<button onclick="myFunction_prompt()" type="button" class="btn btn-success col-12 col-md-11">Tombol Prompt</button>
			</div>
			<div class="col-md-4">
				<button onclick="myFunction_confirm()" type="button" class="btn btn-warning col-12 col-md-11">Tombol Confirm</button>
			</div>
		</div>
		<br>
		<br>
		<br>
	</div>
	
	<!-- Tabel -->
	<div class="jumbotron jumbotron-fluid bg-secondary m-0">
		<div class="container">
			<h2 class="Tabel_stock text-center text-light" id="Tabel_stock">Tabel Stock</h2>
			<section id="sec-form">
				<table class="table table-striped bg-secondary text-light">
					<thead class="bg-info text-light">
						<tr>
							<th class="text-center" scope="col">#</th>
							<th class="text-center" scope="col">Nama</th>
							<th class="text-center" scope="col">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="font-weight-bold text-center">1</td>
							<td class="text-center">Flashdisk</td>
							<td class="text-center">5</td>
							
						</tr>
						<tr>
							<td class="font-weight-bold text-center">2</td>
							<td class="text-center">Usb Hub</td>
							
							<td class="text-center">3</td>
						</tr>
						<tr>
							<td class="font-weight-bold text-center">3</td>
							<td class="text-center">VGA Adapter</td>
							<td class="text-center">2</td>
						</tr>
						<tr>
							<td class="font-weight-bold text-center">4</td>
							<td class="text-center">Mouse USB</td>
							<td class="text-center">11</td>
						</tr>
					</tbody>
					<tfoot>
					<tr>
						<th colspan="2" class="text-right">Total</th>
						<th class="text-center">21</th>
					</tr>
					</tfoot>
				</table>
			</section>
		</div>
		<hr class="bg-secondary">
		
		<!-- Tabel Karyawan -->
		<div class="container fluid">
			<h2 class="Tabel_karyawan text-center text-light" id="Tabel_karyawan">Tabel Karyawan</h2>
			<section id="sec-form">
				<div class="table-responsive">
					<table class="table table-striped bg-secondary text-light">
						<thead class="bg-info text-light">
							<tr>
								<th class="text-center" scope="col">#</th>
								<th class="text-center" scope="col">Nama</th>
								<th class="text-center" scope="col">Tempat, Tanggal Lahir</th>
								<th class="text-center" scope="col">Alamat</th>
								<th class="text-center" scope="col">Telephon</th>
								<th class="text-center" scope="col">Agama</th>
								<th class="text-center" scope="col">Jabatan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="font-weight-bold text-center">1</td>
								<td class="text-center">Andi</td>
								<td class="text-center">Bandung, 10 November 1994</td>
								<td class="text-center">Jalan Sekeloa Selatan No. 103 Bandung</td>
								<td class="text-center">0813 9551 2123</td>
								<td class="text-center">Islam</td>
								<td class="text-center">SPG</td>
							</tr>
							<tr>
								<td class="font-weight-bold text-center">2</td>
								<td class="text-center">Brian</td>
								<td class="text-center">Manado, 7 September 1985</td>
								<td class="text-center">Jalan Ir.H. Djuanda No. 211 Bandung</td>
								<td class="text-center">0856 7123 890</td>
								<td class="text-center">Kristen</td>
								<td class="text-center">Supervisor</td>
							</tr>
							<tr>
								<td class="font-weight-bold text-center">3</td>
								<td class="text-center">Sitohang</td>
								<td class="text-center">Medan, 29 Maret 1966</td>
								<td class="text-center">Jalan Sederhana No. 13 Bandung</td>
								<td class="text-center">(022) 2092554</td>
								<td class="text-center">Islam</td>
								<td class="text-center">Direksi</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
</main>

<!-- Ini Footer -->
<div class="row">
<div class="col-md-12">
	<footer class="bg-dark text-light py-3">
		<div class="container">
			<div class="py-2">
				Baruna, 21 Desember 2018 &copy; Baruna IT
			</div>
		</div>
	</footer>
</div>
</div>



<!-- Javascript -->
<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
<!-- Jquery -->
<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
<!-- Javascript Waktu -->
<script>
		function startTime() {
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		document.getElementById('txt').innerHTML =
		h + ":" + m + ":" + s;
		var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		return i;
		}
</script>

<!-- Javascript Tombol Alert-->
<script>
	function myFunction_alert()
	{
		alert("Ini alert");
	}
</script>

<!--Java Tombol Prompt-->
<script>
	function myFunction_prompt()
	{
		var jawaban = prompt("Ini prompt");
		if (jawaban != null && jawaban != "") {
			alert(jawaban);
		}
	}
</script>

<!--Java Tombol Confirm-->
<script>
	function myFunction_confirm()
	{
		var jawaban = confirm("Ini confirm?");
		alert(jawaban);
	}
</script>
</body>
</html>