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
      <div class="row">
<?php
    // try to connect with the below 4 parameters
    $connect=mysqli_connect(
      'localhost',
      'root',
      'root',
      'php_color'
    );
    // to see if able to connect
    if (!$connect) 
  {
    echo 'Error Code: ' . mysqli_connect_errno();
    echo 'Error Message: ' . mysqli_connect_error();
    exit;
  }

  // Create a query: column put ``
  $query = 'SELECT `Name`,`Hex` FROM colors';
  // Execute the query
  $results = mysqli_query($connect, $query);
  // If there is no result, display an error message
  if (!$results)
  {
    echo 'Error Message: ' . mysqli_error($connect);
    exit;
  }
  else{
    // check the number of rows
    echo '<p class="h1 text-center text-primary">The query found: ' . mysqli_num_rows($results);
  }
  echo '<div class="h2 text-center text-dark">Get Database Colors</div>';


  foreach($results as $result) {
    echo '<div class="container text-center" style="background-color:' . $result['Hex'] . '">' . $result['Name'] . '</div>';
  }

  

  
    ?>
</div>
</div>

</body>
</html>



