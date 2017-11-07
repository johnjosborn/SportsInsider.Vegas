<?php

//linked files
require_once 'dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

if (isset($_POST['byLine_id'])){
    
    $byLine = $_POST['byLine_id'];
    
} else {

    $byLine = "XX";
}

$sql = "SELECT byl_author, byl_photo, byl_pos
        FROM byl
        WHERE byl_id = '$byLine'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $byl1 = $row["byl_author"];
            $byl2 = $row["byl_photo"];
            $byl3 = $row["byl_pos"];
        }   
    }
}       

echo json_encode(array($byl1, $byl2, $byl3));

?>