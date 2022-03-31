<!-- codingan untuk melakukan update data  -->
<!-- memanggil id, comment, dan cmd (sebagai button), kemudian post komentar untuk edit data -->
<?php 
include 'koneksi.php';

    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $cmd = $_POST['cmd'];

    



    if($cmd == 'post-komentar'){
        $sql = "update tbpost set comment='$comment' where id='$id'";
        $query = mysqli_query($conn,$sql) or die($sql);
        
 ?>
 <script type="text/javascript">
        alert('Post Data Successfull!');
        location.href = 'home.php';
    </script>
    <?php } 
    

?>