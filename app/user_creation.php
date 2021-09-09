<?php 

require "database.php";

$sql = "INSERT INTO users(pseudo, password) VALUES ('sylvain', 'test1234')";

if ($db->query($sql) == TRUE) {
  echo "\nNew record created successfully";
} else {
  echo "\nError: " . $sql . "<br>" . $db->error;
}

?>