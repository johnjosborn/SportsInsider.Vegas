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

if (isset($_POST['injury_id'])){
    
    $injury = $_POST['injury_id'];
    
} else {

    $injury = "2";
}

$sql = "SELECT inj_text1, inj_text2, inj_text3, inj_text4, inj_photo
        FROM inj
        WHERE inj_id = '$injury'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $inj1 = $row["inj_text1"];
            $inj2 = $row["inj_text2"];
            $inj3 = $row["inj_text3"];
            $inj4 = $row["inj_text4"];
            $inj5 = $row["inj_photo"];
        }   
    }
}       

echo json_encode(array($inj1, $inj2, $inj3, $inj4, $inj5));

?>