<?php
include('includes/function.php');
secure();
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
      <div class="row">
        <div class="col">
      <?php require('resuables/nav.php') ?>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="display-2">School</h1>
</div>
</div>
<div class="row">
<?php
   require('resuables/connect.php'); 
  $query = 'SELECT * FROM schools';
  // Execute the query
  $schools = mysqli_query($connect, $query);
  // If there is no result, display an error message
  // echo '<pre>' . print_r($schools) . '</pre>';
  foreach($schools as $school){
    echo '<div class="card col-md-4 mb-2">
    <div class="card-body">
      <h5 class="card-title">' . $school['School Name'] . '</h5>
      <p class="card-text">' . $school['School Level'] . '</p>
      <span class="badge bg-secondary">' . $school['Phone'] .'</span><br><br>
      <a href="mailto:' . $school['Email'] . '" class="btn btn-primary">' . $school['Email'] . '</a></span>
    </div>
  <div class="card-footer">
    <div class="row">
      <div class="col">
      <form method="GET" action="updateSchool.php">
        <input type="hidden" name="id" value="' . $school['id'] . '">
        <button class="btn btn-sm btn-primary">Update</button>
      </form>
      </div>

      <div class="col">
      <form method="GET" action="includes/deleteSchool.php">
      <input type="hidden" name="school_id" value="' . $school['id'] . '">
        <button class="btn btn-sm btn-danger" name="deleteSchool">Delete</button>
        </form>
      </div>
    </div>
  </div>
    
</div>';

  }
    ?>
</div>
</div>

</body>
</html>




