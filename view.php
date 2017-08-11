

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>photos</title>
</head>
<body>
<div>
    <?php foreach($news as $one):?>
        <h1><?php echo $one['title'];?></h1><br>
        <p><?php echo $one['text'];?></p><br>
        <p><strong><?php echo $one['author'];?></strong></p><br>
    <?php endforeach;?>
</div>
</body>
</html>