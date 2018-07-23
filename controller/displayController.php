<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	if (isset($_POST['submit'])) {
echo '<pre>';
print_r($_FILES);
die();
		define('UPLOAD_DIR', '../assets/img/');
		$img = $_FILES['image'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = UPLOAD_DIR . uniqid() . '.png';
		$success = file_put_contents($file, $data);
		print $success ? $file : 'Unable to save the file.';


		unset($_POST['submit']);
		// $tmp_loc = $img['tmp_name'];
		// $
		// Add record and image to the database
		// $obj = new Query($pdo, 'person');

		// 	$imgTmpFile = $_FILES['image']['tmp_name'];
		// 	if ($imgTmpFile != '') {
		// 		$fileName = $_POST['citizenship']. '.jpg';
		// 		move_uploaded_file($imgTmpFile, '../assests/img/' . $fileName);
		// 	}
		// // Store image counter to keep track of image
		// $stmt = $obj->save($_POST);
		// echo '<script type="text/javascript">alert("Record added")</script>';
	}
	// header('location:../view/displayView.php');
?>