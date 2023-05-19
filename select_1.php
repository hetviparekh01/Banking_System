<?php
require_once('db.php');
$t=$_REQUEST['t1'];
$r=$_REQUEST['r1'];
$y=$_REQUEST['a1'];
if($t>10 || $r>10)
{
    header("Location:failed.html");
    exit;
}

$query1 = "UPDATE customer
SET Amount = Amount + $y
WHERE c_id = $r";

$query2 = "UPDATE customer
SET Amount = Amount - $y
WHERE c_id = $t";

$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);


if($result1==1 && $result2==1){
    header("Location:sucess.html");
}

?>
