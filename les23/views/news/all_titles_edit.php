<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<div>
    <?php foreach($items as $one):?>
       <a href="index.php?Ctrl=News&act=Edit&val=<?php echo $one['title'];?>"><?php echo $one['title'];?></a><br>
    <?php endforeach;?>
</div>
</body>
</html>
