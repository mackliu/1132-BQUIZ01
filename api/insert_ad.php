<?php
include_once "db.php";


$Ad->save($_POST);

to("../admin.php?do=ad");






