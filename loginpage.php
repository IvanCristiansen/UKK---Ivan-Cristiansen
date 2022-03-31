<!-- untuk mengecek data agar sesuai dengan yang ada di table  -->
<?php 
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tbuser WHERE email='$email' AND password='$password'";
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);


if($num == 1){
	$_SESSION['email'] = $email;
	header('location: home.php');
}else{
?>
	<script type="text/javascript">
		alert('maaf nama anda belum di register');
		location.href = 'login.php';
	</script>

<?php
}


 ?>