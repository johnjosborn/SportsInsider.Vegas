<?php

//linked files
require_once 'dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }


if (isset($_POST['player_id'])){
    
        $player = $_POST['player_id'];
    
} else {

    $player = "XX";
}

$sql = "SELECT ply_link, ply_name, ply_team, ply_pos, ply_sex, ply_loc
FROM ply
WHERE ply_id = '$player'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $link = $row['ply_link'];
            $name = $row['ply_name'];
            $team = $row['ply_team'];
            $sex = $row['ply_sex'];
            $loc = $row['ply_loc'];
            $pos = $row['ply_pos'];
        }   
    }
}       

echo json_encode(array($link, $name, $team, $sex, $loc, $pos)); 

?>