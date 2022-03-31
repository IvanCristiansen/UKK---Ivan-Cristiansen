<?php 
// agar secure
session_start();
if (!$_SESSION['email']){
    header('location: login.php');


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Profile</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-push-3 cusContainer" style="padding:0px;">
                    <div style="float:right; margin-top:30px; margin-right:10px;">
                         <a href="logout.php">[Logout]</a></div>
                </div>

                <br>
                <a href='home.php' style="font-size:18px; margin-left:30px;"><span class="glyphicon glyphicon-chevron-left"></span>Back</a>


                <div id="recentTw" class="mainContainer2" style="height:auto;">
                    <br>
                    <center>
                        <!-- untuk memanggil table pos dan menampilkan text dari user yang telah post  -->
                        <?php
                            include "koneksi.php";
                            $id = $_GET['id']; 
                            $sqluser = "select * from tbpost where id='$id'";
                                $queryuser = mysqli_query($conn, $sqluser);
                                    if ($result = mysqli_fetch_array($queryuser)) {
                                            
                                            $text = $result['text'];
                            ?>
                            <form method="post">
                                <div class="form">
                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                    Content <br>
                                    <textarea placeholder="What Are you thinking now?" maxlength="250" name="text" rows="5" cols="90" required style="font-size:16px;padding:10px; width:60%" disabled><?= $text; ?></textarea>
                                    <br><?php } ?>
                                    <br><br>
                                </div>
                            </form>
                        <!-- untuk memberikan komentar dari post tersebut -->
                            Give a Comment <br>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <textarea placeholder="Give a Comment for This content?" maxlength="250" name="komentar" rows="5" cols="90" required style="font-size:16px;padding:10px; width:80%" ></textarea>
                            <br>
                                <input type="submit" name="cmd" class="btn btn-primary" value="post-Komentar">
                            </form>
                            <!-- fungsi php untuk melakukan insert dari database secara langsung menggunakan request method post -->
                                <?php 

                             if($_SERVER['REQUEST_METHOD'] == 'POST') {



                                    $komentar = $_POST['komentar'];
                                    $id = $_GET['id']; 
                                    $sql = "insert into tbkomentar (id,komentar) values('$id','$komentar')";
                                    $query = mysqli_query($conn, $sql)or die($sql);

                                ?><script>
                                    alert('Sukses Memberikan Komentar');
                                    location.href = 'Home.php';
                                </script>
                            <?php } ?>


                    </center>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
