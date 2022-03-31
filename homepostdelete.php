<!-- untuk delete post -->
<?php 
include 'koneksi.php';

	$id = $_GET['id'];

		$sql = "delete from tbpost where id='$id'";
		$sql2 = "delete from tbkomentar where id='$id'";
    	$query = mysqli_query($conn, $sql)or die($sql);
		$query2 = mysqli_query($conn, $sql2)or die($sql2);
 ?>
 <script type="text/javascript">
		alert('delete Data Successfull!');
		location.href = 'home.php';
	</script>
	<?php 	?>