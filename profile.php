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
                        $bio = $result['bio'];
                        $img = $result['img'];

                        var_dump($result);
?>

  <?php ?>
<!-- echo hanya string -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title></title>
</head>
<style>
</style>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT. XYZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item active">
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
        <a class="nav-link disabled" href="#">Welcome, <?= $nama ?></a>
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
<!-- end navbar -->


<!-- profile page -->
<div class="container" style="background: #d6cfba; margin-top: 20px; border-radius: 20px; padding: 10px;">
		<center>
		<h4><b>My Profile</b></h4>
			<div class="col-md-3">
                            <img src="<?= $img ?>" width="150px" height="150px;" class="profilePix"><br><br>
                            <p><a href="uploadPicture.php">[Upload Picture]</a></p>
                        </div>
                        
                            <h2 style="padding-bottom:10px;letter-spacing:1.5px;"><?php echo $_SESSION['email']?></h2>
                            <h5> Name : <?= $nama ?></h5>
                            <h5> Bio : <?= $bio ?></h5>
							<p><a href="editProfile.php">[Edit Profile]</a></p>
</div>
<?php } ?>
</center>


</body>
</html>