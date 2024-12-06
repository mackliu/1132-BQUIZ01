<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

unset($_POST['table']);

$$db->save($_POST);

to("../admin.php?do=$table");






