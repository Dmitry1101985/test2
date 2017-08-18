<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<div>
    <?php foreach($items as $one):?>
        <a href="index.php?ctrl=News&act=Column_One&col=<?php echo $_GET['col'];?>&val=<?php echo $one[$_GET['col']];?>"><?php echo $one[$_GET['col']];?></a><br>
    <?php endforeach;?>
</div>
</body>
</html>