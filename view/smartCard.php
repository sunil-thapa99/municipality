<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findData('id', $_GET['id'])->fetch();
	$img = new Query($pdo, 'image');
	$image = $img->findData('id', $person['image_id'])->fetch();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Nepal Municipality</title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link href="../assets/css/smart.css" rel="stylesheet" type="text/css" media="print,screen">
	</head>
	<body>
		<div id="background">
			<div id="Layer0"><img src="../assets/img/smart-card/Layer0.png"></div>
			<div id="Layer0_0"><img src="../assets/img/smart-card/Layer0_0.png"></div>
			<div id="Issuedbyborder"><img src="../assets/img/smart-card/Issuedbyborder.png"></div>
			<div id="signatureborder"><img src="../assets/img/smart-card/signatureborder.png"></div>
			<div id="nepalgovernment"><img src="../assets/img/smart-card/nepalgovernment.png"></div>
			<div id="watermark"><img src="../assets/img/smart-card/watermark.png"></div>
			<div id="Flag"><img src="../assets/img/smart-card/Flag.png"></div>
			<div id="map"><img src="../assets/img/smart-card/map.png"></div>
			<div id="signature"><img src="../assets/img/smart-card/signature.png"></div>
			<div id="signature_0"><img src="../assets/img/smart-card/signature_0.png"></div>
			<div id="Picture">
				<img src="../<?php echo $image['image'] ?>" width="200px" height="150px">
			</div>
			<div id="Smartidentitycard"><img src="../assets/img/smart-card/Smartidentitycard.png"></div>
			<div id="CardNo010600045334">
				<p>Card Number: <?php echo $person['id'] ?></p>
			</div>
			<div id="IssuedBy"><img src="../assets/img/smart-card/IssuedBy.png"></div>
			<div id="SignatureofHolder"><img src="../assets/img/smart-card/SignatureofHolder.png"></div>
			<div id="Governmentofnepal"><img src="../assets/img/smart-card/Governmentofnepal.png"></div>
			<div id="NameRAMBAHADURSHARMA">
				<?php 
					if (isset($person['mname'])) {
						echo '<p>Name: '. $person['fname'] . ' ' .$person['mname'].' '.$person['lname'].'</p>';
					}
					else{
						echo '<p>Name: '. $person['fname'] . ' '.$person['lname'].'</p>';
					}
				?>
			</div>
			<div id="DOB09061990">
				<p>D.O.B.: <?php echo $person['dobBS'] ?></p>
			</div>
			<div id="FHNameHariSharma">
				<p>Father Name: <?php echo $person['fatherName'] ?></p>
			</div>
			<div id="CitizenshipNo2803065">
				<p>Citizenship Number: <?php echo $person['citizenship'] ?></p>
			</div>
			<div id="PhoneNo9812345678">
				<p>Phone Number: <?php echo $person['phNumber'] ?></p>
			</div>
			<div id="PassportNo2803065986">
				<p>Email: <?php echo $person['email'] ?></p>
			</div>
			<div id="AddressBaneshowr06">
				<p>Address: <?php echo $person['townVillage'].', <br> <span id="location"> '.$person['municipality'].' - '.$person['ward'] .', '.$person['district']?></span></p>
			</div>
		</div>
		<button class="btn btn-success btn-lg center-block" onclick="printDiv('background')"> Print </button>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
		</script>
 </body>
 </html>