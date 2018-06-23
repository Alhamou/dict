<?php
include ('include/connect.php');
error_reporting(0);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>





    <form class="" action="#" method="GET">

        <input type="text" name="word" value="">
        <input type="submit" value="search">
    </form>



  </body>
</html>

<?php

include ('include/connect.php');
$wordd = $_GET['word'];




$sql_1 = "SELECT * FROM  word_germany ";

$stmt = $conn->prepare($sql_1);
$stmt->execute();

while ($row = $stmt->fetch()) {



$input = $_GET['word'];


$words  = $row['deutsch_word'];


$shortest = -1;
$closest = 0;
foreach ($words as $word) {


    $lev = levenshtein($input, $word);

    if ($lev == 0) {

        $closest = $word;
        $shortest = 0;

        break;
    }

    if ($lev <= $shortest || $shortest < 0) {

        $closest  = $word;
        $shortest = $lev;
    }
}

echo "Input word: $input\n";
if ($shortest == 0) {
    echo "Exact match found: $closest\n";
} else {
    echo "Did you mean: $closest?";
}

}



 ?>
