<!-- memasukkan data kedalam tbtag dan tbpost -->

<?php 
include 'koneksi.php';

	$id = $_POST['id'];
	$text = $_POST['text'];
	$cmd = $_POST['cmd'];
	$teks = explode("#", $text); //memisahkan  tag # dan teks
    $pure_text = $teks[0]; //mengambil teks tanpa # (yang diatas)
    array_shift($teks); //menghapus tag # yang ditambahkan user
    $tags_str = implode(",", $teks); //menjadikan tag tanpa # menjadi string
	// foreach ($teks as $index) {
	// $sqltag = "insert into tbtag(tag)values('$index')";
	// echo '$sqltag';
            // $querytag = mysqli_query($conn, $sqltag) or die($sqltag);



	if($cmd == 'Post-Now'){
		$sql = "insert into tbpost(text) values('$text')";
	 	$query = mysqli_query($conn,$sql) or die($sql);
	 	$result = mysqli_fetch_array($query);
	 	echo $result;
		
 ?>
 <!-- <script type="text/javascript">
		alert('Post Data Successfull!');
		location.href = 'home.php';
	</script> -->
	<?php } 
	

?>

