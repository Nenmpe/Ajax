<?php
$connect=mysqli_connect('localhost','root','131119','student_db');
$sql="select * from std_table";
$data=array();
$result = mysqli_query($connect, $sql);
if($result){     
    while($user = $result->fetch_assoc()){
        
        $data[]=$user;
    }
}
header('Content-Type: application/json');

echo json_encode($data);

mysqli_close($connect);
?>