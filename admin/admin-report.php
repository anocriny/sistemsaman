<?php
require( "../php/config.php" );
// include "../php/check_access_admin.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA	-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Sistem Saman</title>

	<!-- css -->
	<link href="../css/base.min.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->	

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body class="avoid-fout">	

			<?php include('../template/loading.php'); ?>
<?php include('../template/header.php'); ?>
<?php include('../template/menu.php'); ?>
<?php include('../template/profile-admin.php'); ?>

			<div class="content">
	<div class="content-heading">
					<div class="container">
						<h1 class="heading">Laporan Statistik</h1>
					</div>
				</div>
				<div class="container-inner searchbox">
					<div class="container">
						<div class="tile-wrap">
							<div class="tile">
								<form method="get" action="statistic.php"> 
								<!-- <div class="pull-left tile-side">
									<div class="avatar avatar-blue avatar-sm">
										<span class="icon icon-search"></span>
									</div>
								</div> -->
								<div class="tile-action tile-action-show">
									<ul class="nav nav-list pull-right">
										<li>
											<div class="form-group-btn">
												<button class="btn btn-blue waves-button waves-light waves-effect" type="submit"	>Janaan Laporan</button>
											</div>
										</li>
									</ul>
								</div>
								<div class="tile-inner">

									<select class="form-control" id="input-select" name="month" onchange="" size="1">
								    <option value="1">Januari</option>
								    <option value="2">Februari</option>
								    <option value="3">Mac</option>
								    <option value="4">April</option>
								    <option value="5">Mei</option>
								    <option value="6">Jun</option>
								    <option value="7">Julai</option>
								    <option value="8">Ogos</option>
								    <option value="9">September</option>
								    <option value="10">Oktober</option>
								    <option value="11">November</option>
								    <option value="12">Disember</option>
								</select>
								<input type="hidden" name="type" value="month">
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

				<!-- <div class="container-inner searchbox">
					<div class="container">
						<div class="tile-wrap">
							<div class="tile">
								<form method="get" action="statistic.php"> 
							
								<div class="tile-action tile-action-show">
									<ul class="nav nav-list pull-right">
										<li>
											<div class="form-group-btn">
												<button class="btn btn-blue waves-button waves-light waves-effect" type="submit">Generate Report</button>
											</div>
										</li>	
									</ul>
								</div>
								<div class="tile-inner">

									<select class="form-control" id="input-select" name="month" onchange="" size="1">
								    <option value="1">January</option>
								    <option value="2">February</option>
								    <option value="3">March</option>
								    <option value="4">April</option>
								    <option value="5">May</option>
								    <option value="6">June</option>
								    <option value="7">July</option>
								    <option value="8">August</option>
								    <option value="9">September</option>
								    <option value="10">October</option>
								    <option value="11">November</option>
								    <option value="12">December</option>
								</select>
								<input type="hidden" name="type" value="place">
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> -->
			</div>

			
			
			<!-- FOOTER -->
			<?php include "../template/footer.php"; ?>

			<script src="../js/jquery.min.js"></script>
			<script src="../js/base.min.js" type="text/javascript"></script>
		</body>
		</html>