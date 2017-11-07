<?php

//linked files
require_once 'dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

if (isset($_POST['tag_Line'])){
    
    $tagLine = $_POST['tag_Line'];
    
} else {

    $tagLine = "XX";
}

$sql = "SELECT cth_line
        FROM cth
        WHERE cth_id = '$tagLine'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $cth1 = $row["cth_line"];
        }   
    }
}       

echo json_encode(array($cth1));

?>