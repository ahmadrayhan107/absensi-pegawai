<?php
require_once("Database.php");
$test = new Database;
$data = $test->execute("SELECT * FROM admin");
echo "<br>";
foreach ($data as $key) {
    echo $key['username'];
}