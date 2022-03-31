<?php 
session_start();
include 'koneksi.php';

$email = $_SESSION['email'];
if($email == ''){
 ?>
 <script type="text/javascript">
		alert('You are not allowed to access this site, do not be a scammer!');
		location.href = 'login.php';
	</script>
	<?php } 

 ?>