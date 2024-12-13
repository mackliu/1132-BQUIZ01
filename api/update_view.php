<?php 
include_once "db.php";

$total=$Total->find(1);

$total['total']=$_POST['total'];
$Total->save($total);

to("../admin.php?do=total");