<!-- untuk delete post -->
<?php 
include 'koneksi.php';

	$id = $_POST['id'];
    $nama = $_POST['nama'];
	$bio = $_POST['bio'];
	$sql = "update tbpost set text='$text' where id='$id'";
	$query = mysqli_query($conn, $sql)or die($sql);
		
 ?>
 <script type="text/javascript">
		alert('delete Data Successfull!');
		location.href = 'home.php';
	</script>
	<?php 	?>