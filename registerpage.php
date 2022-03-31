
<!-- menjalankan php untuk melakukan register -->
<?php 
include 'koneksi.php';

	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cmd = $_POST['cmd'];



	if($cmd == 'Register'){
		$sql = "insert into tbuser(email,password) values('$email','$password')";
	 	$query = mysqli_query($conn,$sql) or die($sql);
		
 ?>
 <script type="text/javascript">
		alert('Sukses Melakukan Register');
		location.href = 'login.php';
	</script>
	<?php } 
	

?>