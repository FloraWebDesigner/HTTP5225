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
   ?>
   </div>
   <div class="row">
    <div class="col-md-5">
    <form action="includes/addSchool.php" method="post">
  <div class="mb-3">
    <label for="schoolName" class="form-label">School Name</label>
    <input type="text" class="form-control" id="schoolName" name="schoolName">
    
</div>
<div class="mb-3">
    <label for="schoolType" class="form-label">School Type</label>
    <input type="text" class="form-control" id="schoolType" name="schoolType">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
</div>
  
  <button type="submit" class="btn btn-primary" name="addSchool">Submit</button>
</form>



</div>
</div>