<?php
if($_FILES['File']){
foreach ($_FILES['File']['name'] as $key=>$name ) {
    if ($_FILES['File']['error'][$key]==0 )
    {
        move_uploaded_file($_FILES['File']['tmp_name'][$key],"Files/".$name);
       $uploaded[]=$name;

    }
}
if(isset($_POST['ajax']) And $_POST['ajax']){
    echo json_encode($uploaded);
    die();
}

}