<?php
$conn = mysqli_connect('localhost', 'root', 'ambuli') or die('Failed to connect to the server'.mysqli_error());
if ($conn) {
	echo'connection success';
	# code...
}
$db = mysqli_select_db($conn, 'OLDISH') or die('Failed to connect to the DB'.mysqli_error($db));

$email = $_POST['email'];
$password = $_POST['pwd2'];

if(isset($_POST['checkbox']) || isset($_POST['submit']))
{
	if(!empty($_POST['email']) || !empty($_POST['pwd1']) || !empty($_POST['pwd2'])){

		$email = stripslashes($email);
		$password = stripslashes($password);

		$link = "INSERT INTO users(email, password) VALUES ('$email','$password')";

		if(mysqli_query($conn, $link)){
			echo "Succesfully registered";			
		}
		else
			echo "Failed to Register you". mysqli_error();

	}

}

mysqli_close($conn);
?>