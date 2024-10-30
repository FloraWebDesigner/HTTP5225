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

<?php 
      require('resuables/connect.php');
      $schoolID =$_GET['id'];
      $query="SELECT * FROM schools WHERE `id` = '$schoolID'";
      $school = mysqli_query($connect,$query);

      $result = $school -> fetch_assoc();
      ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="display-2">Update </h1>


<!--
  1. get that school id:  $schoolID =$__GET['schoolID'];
  2. set a query to get school information: $query="SELECT * FROM schools WHERE `id` = 'schoolID'";
  3. run query: $school = musqli_query($connect,$query);

  fetch_associate: get one item
  loop: foreach to get a list

-->
</div>
</div>
<div class="row">
<?php
   require('resuables/connect.php'); 
   ?>
   </div>
   <div class="row">
    <div class="col-md-5">
    <form action="includes/updateScript.php" method="post">
  <div class="mb-3">
    <label for="schoolName" class="form-label">School Name</label>
    <input type="text" class="form-control" id="schoolName" name="schoolName" value="<?php echo $result['School Name'];?>">
    
</div>
<div class="mb-3">
    <label for="schoolType" class="form-label">School Type</label>
    <input type="text" class="form-control" id="schoolType" name="schoolType" value="<?php echo $result['School Type'];?>">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $result['Email'];?>">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $result['Phone'];?>">
</div>
  
<input type="hidden" name="id" value="<?php echo $result['id'] ?>">

  <button type="submit" class="btn btn-primary" name="updateSchool">Submit</button>
</form>



</div>
</div>