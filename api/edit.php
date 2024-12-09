<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);
        }else{
            $row=$$db->find($id);
            switch($table){
                case "title":
                     
                    $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                    $row['text']=$_POST['text'][$idx];
                    
                    break;
                case "admin":
                    $row['acc']=$_POST['acc'][$idx];
                    $row['pw']=$_POST['pw'][$idx];

                    break;
                case "menu":
                    $row['text']=$_POST['text'][$idx];
                    $row['href']=$_POST['href'][$idx];
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;
                default:
                
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    if(isset($_POST['text'])){
                        $row['text']=$_POST['text'][$idx];
                    }

            }
            $$db->save($row);
        }
    }
}

to("../admin.php?do=$table");

?>