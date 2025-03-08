<?php
		session_start();
		$id = $_GET['id'];
		$conn =	mysqli_connect("localhost", "root", "", "shop");
		$sql= "DELETE FROM danhmuc where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../danhmuc/quanlydm.php");
		
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
?>
</body>
</html>