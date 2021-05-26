<?php 
include('db_connection.php');

// stripslashes function can be used to clean up data retrieved  from database or 
//from html form.


// php://input - This is read-only stream that allows us to read raw data from the request body.
// It returns all the raw data after the HTTP-headers of the request ,  regardless of the content type.

// json_decode - It takes json string and convert it into a PHP object or array,
// if true then associative array.

$data = stripslashes(file_get_contents("php://input"));
$server_data = json_decode($data , true);
$id = $server_data['id'];  // This use only when we use Insert/Update single qUERY
$full_name = $server_data['name'];
$email = $server_data['email'];
$roll_num = $server_data['roll_num'];
$course_name = $server_data['course'];


// This code only for indsert records
// if(!empty($full_name) && !empty($email) && !empty($roll_num) 
//   && !empty($course_name)) {
//       $sql_data = "INSERT INTO students(name,email,roll_num,course) VALUES('$full_name',
//       '$email','$roll_num','$course_name')";
//       if($conn->query($sql_data) == true ){
//           echo "Student Saved Successfully";
//       }else{
//           echo "Unable to Save Student";
//       }
//   }else{
//       echo "All Field are required!";
//   } 
  
  // This query is Both for Insert Data or Update Data
  if(!empty($full_name) && !empty($email) && !empty($roll_num) 
  && !empty($course_name)) {
      $sql_data = "INSERT INTO students(id,name,email,roll_num,course) VALUES('$id' , $full_name',
      '$email','$roll_num','$course_name') ON DUPLICATE KEY UPDATE name='$full_name',email='$email',
      roll_num='$roll_num', course='$course_name'";
      if($conn->query($sql_data) == true ){
          echo "Student Saved Successfully";
      }else{
          echo "Unable to Save Student";
      }
  }else{
      echo "All Field are required!";
  } 


?>