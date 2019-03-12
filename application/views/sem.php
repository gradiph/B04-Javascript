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
	<body>
		<!-- Header -->
		<div class="jumbotron jumbotron-fluid bg-primary">
			<h1 class="text-center text-light display-1">Javascript</h1>
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

					<!-- PR -->
					<body onload="startTime()">
						<div id="txt" class="nav-link disabled"></div>
						<a class="nav-link disabled" href="#">Keluar</a>
					</body>
				</div>
			</div>
		</nav>
		<br>
		<br>
	</div>	

	<!-- Tombol -->
	<header class="container">
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

		<!-- <div class="container">
			<div class="row">
				<div class="col-sm-4">
					<button onclick="myFunction_prompt()" type="button" class="btn btn-success col-12 col-md-11">Tombol Prompt</button>
				</div>
			</div>
		</div> -->

		<!-- <div class="container">
			<div class="row">
				<div class="col-sm-4">
					<button onclick="myFunction_confirm()" type="button" class="btn btn-warning col-12 col-md-11">Tombol Confirm</button>
				</div>
		</div> -->
			<br>
			<br>
			<br>
	</header>
		
	<!-- Tabel -->
	<main class="jumbotron jumbotron-fluid bg-secondary m-0">
			<div class="container">
				<h2 class="Tabel_stock text-center text-light" id="Tabel_stock">Tabel</h2>
				<section id="sec-form">
					<table class="table table-striped bg-secondary text-light">
						<thead class="bg-info text-light">
							<tr>
								<th class="text-center" scope="col">No</th>
								<th class="text-center" scope="col">Nama</th>
								<th class="text-center" scope="col">Jenis Kelamin</th>
								<th class="text-center" scope="col">Check</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="font-weight-bold text-center">1</td>
								<td class="text-center">Baruna</td>
								<td class="text-center">5</td>
								<td class="text-center"><input type="checkbox"  id="myCheck1" class="ceklis_console" value="Baruna" data-nama="B2" name="checkbox"></td>

									
							</tr>
							<tr>
								<td class="font-weight-bold text-center">2</td>
								<td class="text-center">Ines</td>
								<td class="text-center">3</td>
								<td class="text-center"><input type="checkbox" value="Ines" id="myCheck2" class="ceklis_console" data-nama="C4" name="checkbox"></td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
			<hr class="bg-secondary">
			<p id="text" style="display:none">Nama Saya : </p>

			<div id="show_nama">
				
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
					alert("Ini prompt");
				}
			</script>

			<!--Java Tombol Confirm-->
			<script>
				function myFunction_confirm() 
				{
					alert("Ini confirm");
				}
			</script>

			<script>
				//versi baruna, cara 1 pakai id
				// $("#myCheck1").click(function () {
				// 	//menulis sesuatu di console
				// 	if($("#myCheck1").prop("checked")) {
				// 		//true
				// 		console.log("Nama saya Baruna.");
				// 	}
				// 	else {
				// 		//false
				// 		console.log("");
				// 	}
				// });
				// $("#myCheck2").click(function () {
				// 	//menulis sesuatu di console
				// 	if($("#myCheck2").prop("checked")) {
				// 		//true
				// 		console.log("Nama saya Ines.");
				// 	}
				// 	else {
				// 		//false
				// 		console.log("");
				// 	}
				// });

				function ceklis_console () {
					//menulis sesuatu di console
					if($(this).prop("checked")) {
						//true
						confirm("Nama saya " + $(this).data("nama") + ".");
						console.log("Nama saya " + $(this).data("nama") + ".");
					}
					else {
						//false
						console.log("");
					}
				}

				//versi baruna, cara 2 pakai class
				$(".ceklis_console").click(ceklis_console);

			</script>

			<script>
					//versi sem
					// for (var i = 1; i <= 2; i++) {
					// 	$('#myCheck'+i+'').change(function()
					// 	{

					// 	if(this.checked == true)
					// 	{
							// var nama=$(this).val();
					// 		console.log('Nama Saya : '+nama);
					// 	}else{
					// 		console.log('');
					// 	}

					// 	});
					// }
					
				
			</script>

			<script>
				console.log("ini Nama");
				document.write("Ines");
			</script>

</body>
</html>