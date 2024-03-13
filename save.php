<?php
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

    $connect=mysqli_connect('localhost','root','131119','student_db');
    $sql="insert into std_table(name,address,contact) values('$name','$address','$contact')";

    $result=mysqli_query($connect,$sql);

    if($result){
        echo "Success";
    }
    else{
        echo "Not successfull";
    }


?>