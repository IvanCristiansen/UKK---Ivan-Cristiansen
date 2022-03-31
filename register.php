<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
</head>
<style>
    html{
        padding: 15px;
    }
</style>
<body> 
    <h1> Register Page</h1>
<!-- melakukan register menggunakan method post dan menembak method ke registerpage.php -->
    <form action="registerpage.php" method="POST">
        <input type="hidden" name="id">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Input Your Email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Input Your Password" required>
    </div>
        <button type="submit" class="btn btn-primary" id="cmd" name="cmd" value="Register">Register</button>
    </form>
        <br>
        <a href="login.php" type="login" class="btn btn-warning">LOGIN</button>

</body>
</html>