<?php
include 'connect.php';
  $qeury = $conn->prepare(
    "SELECT * FROM categroup ");
  $qeury->execute();
  $result = $qeury->get_result();
  header("Content-type: text/xml");
  echo "<?xml version='1.0' encoding='UTF-8'?>";
  echo "<Groups>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo "<Group ";
    echo "id='".$row['categroupId']."' ";
    echo "name='".$row['categroupName']."' ";
    // echo "address='".$row['address']."' ";
    // echo "lat='".$row['lat']."' ";
    // echo "lng='".$row['lng']."' ";
    // echo "icon='".$row['icon']."' ";
    echo "/>";
  }
  echo "</Groups>";
  ?>
