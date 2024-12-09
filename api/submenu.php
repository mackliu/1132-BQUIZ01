<?php include_once "db.php";

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Menu->del($id);
        }else{
            $row=$Menu->find($id);
            $row['text']=$_POST['text'][$idx];
            $row['href']=$_POST['href'][$idx];
            $Menu->save($row);
        }
    }
}
if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $idx => $text){
        if($text!=''){
            $row=[];
            $row['text']=$text;
            $row['href']=$_POST['href2'][$idx];
            $row['main_id']=$_POST['main_id'];
            $Menu->save($row);
        }
    }
}
to("../admin.php?do=menu");