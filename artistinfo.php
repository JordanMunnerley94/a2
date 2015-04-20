<?php
include("artistsconnect.php");
//try {
//    $dbh = new PDO("sqlite:artistrecords.sqlite"); 
//}
//catch(PDOException $e)
//{
//    echo $e->getMessage();
//}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>


<?php

$sql = "SELECT * FROM artists WHERE id='$_GET[tag]'";

foreach ($dbh->query($sql) as $row) {
    printf("ID: %s<br>", $row[id]);
    printf("Name: %s<br>", $row[name]);
    printf("Details: %s<br>", $row[details]);
    printf("Contact: %s<br>", $row[contact]);
    printf("Date: %s<br>", $row[date]);
}
 
//$sql = "SELECT * FROM artists WHERE id='$_GET[tag]'";
//
//echo $sql;
//
//
//$results = $dbh->query($sql);


//printf("Name:%s <br>", $results[name]);
$dbh = null;
?>

<a href="artists.php">BACK</a>
</body>
</html>