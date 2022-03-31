<?php 
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
                    <center>
                        <h3>Update Profile</h3>
                        <br>
                        <!-- memanggil data dari tbpost -->
                        <?php
                            include "koneksi.php";

                            $sqluser = "select * from tbpost";
                                $queryuser = mysqli_query($conn, $sqluser);
                                    if ($result = mysqli_fetch_array($queryuser)) {
                                            $id = $result['id'];
                                            $text = $result['text'];
                            ?>
                            <form method="post">
                                <div class="form">
                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                    <label for="text">Your Text</label><br>
                                    <textarea placeholder="What Are you thinking now?" maxlength="250" name="text" rows="5" cols="90" required style="font-size:16px;padding:10px; width:60%"><?= $text; ?></textarea>
                                    <br>
                                    <br><br>
                                    <button type="submit" id="cmd" name="cmd" class="btn btn-success btn-lg" value="edit">Save</button>
                                </div><?php } ?>
                            </form>
                            <!-- mengedit/update data yang ada di tbpost -->
                            <?php 

                             if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $id = $_POST['id'];
                                    $text = $_POST['text'];
                                    $sql = "update tbpost set text='$text' where id='$id'";
                                    $query = mysqli_query($conn, $sql)or die($sql);

                                ?><script>
                                    alert('Sukses Update Post');
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
