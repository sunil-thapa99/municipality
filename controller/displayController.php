<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	
	if (isset($_POST['next'])) {
		unset($_POST['next']);
		// $img = new Query($pdo, 'image');
		// $lastidImage = $pdo->lastInsertId();
		$stmt = $pdo->prepare('SELECT MAX(id) as id FROM image');
		$stmt->execute(); 
		while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$lastidImage = $result['id'];
		}
		header('location:../info.php?id='.$lastidImage.'');
	}

	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		$obj = new Query($pdo, 'person');
		$stmt = $obj->save($_POST);
		$lastid = $pdo->lastInsertId();
		header('location:../view/displayView.php?id='.$lastid.'');
	}
?>