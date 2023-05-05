<!DOCTYPE html>
<?php
    session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Custom Page-Acme Arts</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body style = "background:lightgray;">
		<?php 
			include_once('navbar.php');
		?>
		<div class="container">
			<h1 class="page-header text-center">Select Appropriate Button to Make Changes in Subscriber Details</h1>
			<div class="row">
				<div class="col-sm-10">
					<a href="#addsubscriberModal" role="button" class="btn btn-lg btn-success" data-bs-toggle="modal" position="absolute"><span><i class="fa fa-plus"></i></span>   SUBSCRIBE</a>
				</div>
				<div class="col-sm-2">
					<a href="#removesubscriberModal" role="button" class="btn btn-lg btn-success" data-bs-toggle="modal"><span><i class="fa fa-minus"></i></span>   UNSUBSCRIBE</a>
				</div>
				<?php 
					if(isset($_SESSION['message'])){
						?>
						<div class="alert alert-info text-center" style="margin-top:20px;">
							<?php echo $_SESSION['message']; ?>
						</div>
						<?php
						unset($_SESSION['message']);
					}
				?>
				<?php
					include('addsubscribermodal.php');
					include('removesubscribermodal.php');
				?>
				</div>
			</div>
		</div>
		<script src = "js/bootstrap.bundle.min.js"></script>
		<script src = "sprinttwo.js"></script>
	</body>
</html>