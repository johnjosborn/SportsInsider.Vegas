<?php

//linked files
require_once 'dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

if (isset($_POST['quote_id'])){
    
    $quote = $_POST['quote_id'];
    
} else {

    $quote = "XX";
}

$sql = "SELECT qte_text
        FROM qte
        WHERE qte_id = '$quote'";

$result = mysqli_query($conn,$sql);

if($result){

    if($result->num_rows != 0){

        while($row = $result->fetch_assoc()){

            $qte1 = $row["qte_text"];

        }   
    }
}       

echo json_encode(array($qte1));

?>