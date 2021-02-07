<?php 

$lisans = $_GET["id"];
 

 $servername = "";
 $username = "";
 $password = "";
 $db  = "";
  
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die($conn->connect_error);
}

$sql = "SELECT * FROM lisanslar WHERE lisans='".$lisans."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
        if($row["aktif"] == 1) { $veri = "True"; }
      }
    
} else {
    $veri = "False";
  
}


echo $veri;


$conn->close();





?>
