<!-- untuk delete komentar -->
<?php 
include 'koneksi.php';

	$id_komentar = $_GET['id_komentar'];
		$sql = "delete from tbkomentar where id_komentar='$id_komentar'";
    	$query = mysqli_query($conn, $sql)or die($sql);
		
 ?>
 <script type="text/javascript">
		alert('delete comment Successfull!');
		location.href = 'home.php';
	</script>
	<?php 	?>