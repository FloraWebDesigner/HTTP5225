<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
<?php
    echo "<h2>Get Users</h2>";
function getUsers() {
  $url = "https://jsonplaceholder.typicode.com/users";
  $data = file_get_contents($url);
  return json_decode($data, true);
}
// Get the list of users
$arr = getUsers();
for ($x = 0; $x < count($arr); $x++) {
    echo 
    '<div class="card" style="width: 18rem;"><div class="card-body"> 
    <h5 class="card-title">' . $arr[$x]["name"] . '</h5>
    <h5 class="card-title">' . $arr[$x]["username"] . '</h5>
    <h5 class="card-title">' . $arr[$x]["email"] . '</h5>
    <p class="card-text">' . $arr[$x]["address"]["street"] . '</p>
    <p class="card-text">' . $arr[$x]["address"]["suite"] . '</p>
    <p class="card-text">' . $arr[$x]["address"]["city"] . '</p>
    <p class="card-text">' . $arr[$x]["address"]["zipcode"] . '</p>
    <p class="card-text">' . $arr[$x]["address"]["geo"]["lat"] . '</p>
    <p class="card-text">' . $arr[$x]["phone"] . '</p>
    <a href="https://' . $arr[$x]["website"] . '"' . 'class="btn btn-primary">Website</a></div></div>';
};
    ?>
</div>
</div>

</body>
</html>



