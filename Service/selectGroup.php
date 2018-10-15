<?php
include "Connection.php";


$query = $conn->prepare("SELECT * FROM categroup WHERE categroupStatus = '1'");
$query->execute();
$result = $query->get_result();
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[]=$row;
}
$row = [];
print json_encode($data);


?>
