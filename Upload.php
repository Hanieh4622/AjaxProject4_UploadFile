<?php
@include_once 'server.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Example 4</title>
    <link rel="stylesheet" href="bootstrap.rtl.css">
</head>
<body>
<div id="upload">

</div>    
<div id="uploadProgress" class="form-control">
    
</div>    
<form class="form-group" action="" method="post" enctype="multipart/form-data">
    <input type="file" id="file" class="form-control" name="File[]" multiple>
    <input type="submit" value="Upload..." class="btn btn-success" id="submit">

</form>

<script src="script.js" type="text/javascript"></script>
<script src="jquery-3.6.4.min.js" type="text/javascript"></script>
</body>
</html>  