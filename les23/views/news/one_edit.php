

<div style="background-color: #EBEBEB">
    <a href="index.php?Ctrl=News&act=EditTitles&col=title">К списку <<<< </a><br>
    <div style="text-align: center">
        <h2>Статья id<?php echo $items->id;?></h2>
    </div>

    <form method="post">

            <div style="text-align: center; padding: 5px">
                <h2>Редактировать статью</h2>
            </div>
            <div style="text-align: center; padding: 5px">
                <input style="width:500px;" type="text" name="title" value="<?php echo $items->title;?>" required/>
            </div>
            <div style="text-align: center; padding: 5px">
                <textarea name="text" id="" cols="70" rows="30"required><?php echo $items->text;?></textarea>
            </div>
            <div style="text-align: center; padding: 5px">
                <input type="text" name="author" value="<?php echo $items->author;?>" required/>
            </div>
            <div style="text-align: center; padding: 5px">
                <input type="submit" name="update" value="Редактировать"/>
            </div>
            <div style="text-align: center; padding: 5px">
                <input type="submit" name="delete" value="Удалить"/>
            </div>

    </form>

</div>
