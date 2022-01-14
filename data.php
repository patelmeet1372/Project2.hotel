<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "assignment_2";
$table1 = "usersinfo";
$table2 = "ratinginfo";

$connection = mysqli_connet($dbhost, $dbuser, $dbpass, $dbname);

$sql1 = "INSERT INTO $table1(first_name, last_name, email, phone) VALUES(
    '{$connection-> real_escape_string($first_name)}',
    '{$connection-> real_escape_string($last_name)}',
    '{$connection-> real_escape_string($email)}',
    '{$connection-> real_escape_string($phone)}')";

    $insert1 = $connection->query($sql1);

?>