
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<div>

    <a href="index.php?Ctrl=News&act=EditTitles&col=title">Back<<<<</a><br>
<h2 style="margin-left:650px; margin-right:auto">Статья id<?php echo $items->id;?></h2>
    <form method="post">
        <input style="width:500px;margin-left:465px; margin-right:auto" type="text" name="title" value="<?php echo $items->title;?>"/><br>
        <textarea style="margin-left:450px; margin-right:auto" name="text" id="" cols="70" rows="30"><?php echo $items->text;?></textarea><br>
        <input style="margin-left:650px; margin-right:auto" type="text" name="author" value="<?php echo $items->author;?>"/><br>
        <input style="margin-left:690px; margin-right:auto" type="submit" name="update" value="Update"/><br>
        <input style="margin-left:690px; margin-right:auto" type="submit" name="delete" value="Delete"/>
    </form>

</div>
</body>
</html>