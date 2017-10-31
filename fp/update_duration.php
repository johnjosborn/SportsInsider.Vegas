<?php

//linked files
require_once 'dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

if (isset($_POST['frame_no'])){
    
        $frameNum = $_POST['frame_no'];
    
} else {

    $frameNum = "1";
}

if (isset($_POST['duration_id'])){
    
    $duration = $_POST['duration_id'];
    
} else {

    $duration = "1";
}

$sql = "SELECT dur_text1, dur_text2, dur_text3, dur_text4
        FROM dur
        WHERE dur_id = '$duration'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $dur1 = $row["dur_text1"];
            $dur2 = $row["dur_text2"];
            $dur3 = $row["dur_text3"];
            $dur4 = $row["dur_text4"];
        }   
    }
}       

echo json_encode(array($dur1, $dur2, $dur3, $dur4));

?>