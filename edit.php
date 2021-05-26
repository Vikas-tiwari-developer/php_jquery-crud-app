<?php 

include('db_connection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data , true);
$id = $mydata['sid'];

// Retrieve Specific student Information
$sql = "SELECT * FROM students WHERE id={$id}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Retrieve Json Format Data as a response to ajax call
echo json_encode($row);




?>