<?php 
  include('db_connection.php');

  // Retrieve Students Information

  $get_all_records = "SELECT * FROM students";

  $result = $conn->query($get_all_records);

  if($result->num_rows > 0){
      $data = array();
      while($row = $result->fetch_assoc()){
          $data[]  = $row;
      }
  }

  // Returning JSON  format Data as Response to ajax call
  echo json_encode($data);




?>