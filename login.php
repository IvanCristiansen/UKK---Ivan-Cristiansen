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
<h1>Log In Page</h1>
<!-- form login  -->
    <form action="loginpage.php" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Input Your Email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Input Your Password" required>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <br>
        <a href="register.php" type="Register" class="btn btn-warning">Register</button>

</body>
</html>