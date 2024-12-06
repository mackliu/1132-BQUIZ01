<?php 
include_once "db.php";

if(!isset($_POST['id'])){
 exit();
}

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);

    $row=$Title->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $Title->save($row);
}

to("../admin.php?do=title");
