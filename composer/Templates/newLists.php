<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <br>
    <h2>Latest News Headlines</h2>
    <?php if(sizeof($headlines)>0) { ?>
    <ul class="list-group">
        <?php foreach($headlines as $h) { ?>
        <li class="list-group-item"><a href="<?php echo $h['link'];?>"><?php echo $h['text'];?></a></li>
        <?php } ?>
    </ul>
    <?php } ?>
</div>
</body>

</html>