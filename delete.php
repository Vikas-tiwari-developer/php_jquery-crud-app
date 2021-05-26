<?php 
  include('db_connection.php');
  $data = stripslashes(file_get_contents("php://input"));
  $mydata = json_decode($data , true);
  $id = $mydata['sid'];

  // Deleting Students by Id

  // if(!empty($id)){
  //     $query = "DELETE FROM students WHERE id = {$id}";
  //     if($conn->query($query) == TRUE){
  //       echo "Student Delete Successfully";
  //     }else{
  //         echo "Unable to delete";
  //     }
  // }
  // Above commented code for experiment purpose

  if(!empty($id)){
    $query = "DELETE FROM students WHERE id = {$id}";
    if($conn->query($query) == TRUE){
      echo 1;
    }else{
        echo 0;
    }
}







?>