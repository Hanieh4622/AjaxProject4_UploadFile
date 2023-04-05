<?php
@include_once 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example 4</title>
    <link rel="stylesheet" href="bootstrap.rtl.css"><script src="jquery-3.6.4.min.js" type="text/javascript"></script>
</head>
<body>
    <h1>this is Header</h1>
<div id="upload">
    <?php if(isset($uploaded)) :?>

    <?php foreach ($uploaded as $upload) : ?>

        <div><a href="Files/<?=$upload;?>"><?=$upload?></a></div>

    <?php endforeach?>
    <?php endif?>
</div>    
<div id="uploadProgress" class="form-control">
    
</div>    
<form class="form-group" action="" method="post" enctype="multipart/form-data">
    <input type="file" id="file" class="form-control" name="File[]" multiple>
    <input type="submit" value="Upload..." class="btn btn-success" id="submit">

</form>



<script src="script.js" type="text/javascript"></script>
</body>
</html>  