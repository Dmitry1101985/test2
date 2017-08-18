
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<div>

    <a href="index.php?Ctrl=News&act=EditId">Back<<<<</a><br>

    <form method="post">
        <input style="width:500px;margin-left:465px; margin-right:auto" type="text" name="title" value="<?php echo $items->title;?>"/><br>
        <textarea style="margin-left:450px; margin-right:auto" name="text" id="" cols="70" rows="30"><?php echo $items->text;?></textarea><br>
        <input style="margin-left:650px; margin-right:auto" type="text" name="author" value="<?php echo $items->author;?>"/><br>
        <input style="margin-left:690px; margin-right:auto" type="submit" name="update" value="Update"/>
    </form>

</div>
</body>
</html>