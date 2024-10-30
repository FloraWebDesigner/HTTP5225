
<?php
include('resuables/connect.php');
include('includes/function.php');
if(isset($_POST['loginBtn'])){
    $query = 'SELECT * 
              FROM users
              WHERE email = "' . $_POST['email'] . '"
              AND password = "' . md5($_POST['password']) . '"
              LIMIT 1';

$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)){
$record=mysqli_fetch_assoc($result);
$_SESSION['id']=$record['id'];
$_SESSION['email']=$record['email'];
header('Location: index.php');
die();
}
else{
    set_message('No records found!', 'danger');
    header('Location: login.php');
    die();
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="display-3">Login</div>
                    <?php 
                    get_message();
                    ?>
                <form method="POST" action="login.php">
<!-- we put '/', the form will be submitted itself. -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="loginBtn" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
</div>
</body>
</html>