<?php
include "Connection.php";

$data = json_decode(file_get_contents("php://input"));
$array = json_decode(json_encode($data), True);

if (count($array) > 0) {
$id = $data->id;
$query = $conn->prepare("SELECT * FROM category WHERE categroupId = ".$id);
$query->execute();
$result = $query->get_result();
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[]=$row;
}
$row = [];
print json_encode($data);
}


?>
