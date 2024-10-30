<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>HTTP5225 Class</title>
</head>
<body>
    <h1>Learning PHP - Week 2</h1>
    <?php
    echo "<h2>Question 1</h2>"
    ?>
    <?php

// https://www.php.net/manual/en/timezones.others.php
 date_default_timezone_set("Canada/Eastern");
 $hour = date('G');
 if (date_default_timezone_get()) {
  echo 'Timezone: ' . date_default_timezone_get() . '<br />';
}
$date = date('m/d/Y h:i:s a', time());
echo "$date <br />";

if( $hour >= 5 && $hour < 9 ){
    $food = "Bananas, Apples, and Oats";
    echo "the animals should have $food";
  }
  else if( $hour >= 12 && $hour < 14 ){
    $food = "Fish, Chicken, and Vegetables";
    echo "the animals should have $food";
  }
  else if($hour >= 19 && $hour < 21){
    $food ="Steak, Carrots, and Broccoli";
    echo "the animals should have $food";
  }
  else{
    echo "No feeding time!";
  }
?>

<?php
    echo "<h2>Question 2</h2>"
    ?>
 
 <?php
  
  $number = rand();
  switch ($number) 
{
  case $number%3===0&&$number%5!==0:
    echo "Fuzz";
    break;
  case $number%5==0&&$number%3!==0:
    echo "Buzz";
    break;
  case  $number%3===0&&$number%5!==0:
    echo "FizzBuzz";
  default:
    echo $number;
    break;
}

 ?>

</body>



