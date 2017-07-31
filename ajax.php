<?php 
include(dbConnect.php);

if ($_GET['type'] == 'country') {
	$result = mysqli_query("SELECT product_name FROM products WHERE product_name LIKE '".strtoupper($_GET['name_startsWith'])."%'");

	$data = array();
	while ($row = mysqli_fetch_array($result)) {
		array_push($data, $row['name']);
	}
	echo json_encode($data);
}

?>