<?php

$m1 = $_POST["stop"];
$m2 = $_POST["left"];
$m3 = $_POST["right"];
$m4 = $_POST["forward"];
$m5 = $_POST["bottom"];



$conn = new mysqli("localhost","root","","project");
$stmt = $conn->prepare("insert into ControlPanel(stop,left,right,forward,bottom) VALUES(S,L,R,F,B);");
$stmt->bind_param("sssss",$m1,$m2,$m3,$m4,$m5);
$stmt->execute();
echo "Done";
  


?>