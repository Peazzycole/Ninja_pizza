<?php
//connect to database
$conn = mysqli_connect('localhost', 'salem', '1234', 'ninjs_pizza');

//check connection
if(!$conn){
  echo 'Connection error: '  . mysqli_connect_error();
}


?>