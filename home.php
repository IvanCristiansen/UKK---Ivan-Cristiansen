<?php 
session_start();
if (!$_SESSION['email']){
    header('location: login.php');
}
include "koneksi.php";

$sqluser = "select * from tbuser";
                    $queryuser = mysqli_query($conn, $sqluser);
                    if ($result = mysqli_fetch_array($queryuser)) {
                        $nama = $result['nama'];
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT. XYZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Post </a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="">Welcome, <?= $nama ?></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form>
    	<a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="margin:0 10px 0 10px;">LOG OUT</a>
    </form>
  </div>
</nav>
<?php } ?>
<!-- end navbar -->


<?php 
$sqluser = "select * from tbpost";
 $queryuser = mysqli_query($conn, $sqluser);
 $numuser = mysqli_num_rows($queryuser);

 for ($x = 1; $x <= $numuser; $x++) {
        $resultuser = mysqli_fetch_array($queryuser);

        $text = $resultuser['text'];
        $id = $resultuser['id'];
		
 ?>

<center>
	<div rows="5" cols="90" style="font-size:16px;padding:10px; width:60%;  margin: 10px;">
		<div style="margin: 20px; background: #f1f1f1; border-radius: 10px; padding: 20px;">
			Created By :<b> <?= $nama ?></b> <br>
			<p class="" href=""><?= $text ?></a></p>
			<b>Your Comment :</b> <br>


			<?php
                    $sqlkomen = "select * from tbkomentar where id='$id'";
                    $querykomen = mysqli_query($conn, $sqlkomen);
                    $numkomen = mysqli_num_rows($querykomen);               
                    while($result = mysqli_fetch_array($querykomen)) {

                    	$id = $result['id'];
                        $komentar = $result['komentar'];
                        $id_komentar = $result['id_komentar'];
                        
                    ?>
                    <p class="" href=""><?= $komentar ?> <a href="homepostdelete2.php?id_komentar=<?= $id_komentar ?>">Delete</a><a href="homepostupdate2.php?id_komentar=<?= $id_komentar ?>">&nbsp; edit</a></a></p>
                <?php
                    }
                ?>


		
			<form action="postpage.php" method="get">
			<a href="postcomment.php?id=<?= $id ?>" class="btn btn-primary">comment</a>
			<a href="postupdate.php?id=<?= $id ?>" class="btn btn-warning">Update</a>
			<a href="homepostdelete.php?id=<?= $id ?>" class="btn btn-danger">Delete</a>
			</form>
		</div>
	
	</div>
		 <?php } ?>
</center>




</body>
</html>