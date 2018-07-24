<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nepal Municipality</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<img src="assets/img/img.jpg" style="float: left;">
				<img src="assets/img/nepal.gif" style="float: right;">
			</nav>
			<div class="section">
				<form class="form" method="POST" action="controller/displayController.php"  enctype="multipart/form-data">
					<div class="row">	
						<div class="file-upload col-lg-6 col-md-6 col-sm-6 col-xs-12">
						  	<div class="image-upload-wrap">
							    <div id="camera"></div><br>
							    <div class="drag-text">
							      <h3>please click on "start" Button for photo</h3>
							    </div>
						  	</div>
							<div class="text-center">
								<a class="center-block" type="button" id="snap" onclick="start()" style="cursor: pointer;">Start & Capture</a>
							</div>
						</div>	
						<div id="image" class="center-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
							
						</div>
					</div>
					<input type="submit" name="next" class="btn btn-primary center-block" value="Next">
				</form>
			</div>
		<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>