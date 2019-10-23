<?php


$conn = new mysqli('localhost', 'root', '', 'medi_claim');
if (mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                exit;
            }



?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<!-- CUSTOM CSS -->
	<style type="text/css"></style>


</head>
<body>


	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">MSK Insurance</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Analytics</a></li>
	      <li><a href="#">Pending Claims</a></li>
	      <li><a href="#">Log Out</a></li>
	    </ul>
	  </div>
	</nav>


<div class="container">

	<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Documents Uploaded</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">203</span>
											<span class="title">Claims Settled</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">2765</span>
											<span class="title">Documents Left to Verify</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">35%</span>
											<span class="title">Claims Settled</span>
										</p>
									</div>
								</div>
							</div>
						</div>

		<div class="container">
							<!-- RECENT CLAIMS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Claims</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Claim No.</th>
												<th>Name</th>
												<th>Amount</th>
												<th>Date &amp; Time</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$sql = "SELECT * FROM recent_claims";
												$result = $conn->query($sql);

												
												//$row = $result->fetch_assoc();
												//$js = 'console.log($result)';
												//echo $js;

												while($row = $result->fetch_assoc()) {
													echo '<tr>
													<td><a href="#">'.$row["claim_no"].'</a></td>
													<td>'.$row["name"].'</td>
													<td>'.$row["amount"].'</td>
													<td>'.$row["date"].'</td>
													<td><span class="label label-success">'.$row["status"].'</span></td>
												</tr>';
													
												}
												




											?>
											<tr>
												<td><a href="#">763648</a></td>
												<td>Saurabh</td>
												<td>Rs. 100000</td>
												<td>Oct 21, 2018</td>
												<td><span class="label label-success">COMPLETED</span></td>
											</tr>
											<!--<tr>
												<td><a href="#">763649</a></td>
												<td>Mridul</td>
												<td>Rs. 62000</td>
												<td>Nov 2, 2018</td>
												<td><span class="label label-warning">PENDING</span></td>
											</tr>
											<tr>
												<td><a href="#">763650</a></td>
												<td>Kewal</td>
												<td>Rs. 30400</td>
												<td>Jan 18, 2018</td>
												<td><span class="label label-danger">REJECTED</span></td>
											</tr>
											<tr>
												<td><a href="#">763651</a></td>
												<td>John</td>
												<td>Rs.186000</td>
												<td>Oct 17, 2019</td>
												<td><span class="label label-success">COMPLETED</span></td>
											</tr>
											<tr>
												<td><a href="#">763652</a></td>
												<td>Smith</td>
												<td>Rs. 36200</td>
												<td>Feb 16, 2019</td>
												<td><span class="label label-success">COMPLETED</span></td>
											</tr>-->
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Claims</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					


</body>
</html>