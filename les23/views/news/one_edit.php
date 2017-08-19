

<div class="view">
    <div class="view_content">
        <a href="admin.php?Ctrl=News&act=EditTitles&col=title">К списку <<<< </a><br>
        <div id="one_edit_cont">
            <h2>Статья id<?php echo $items->id;?></h2>
        </div>

        <form method="post">

            <div class="add_upd">
                <h2>Редактировать статью</h2>
            </div>
            <div class="add_upd">
                <input style="width:500px;" type="text" name="title" value="<?php echo $items->title;?>" required/>
            </div>
            <div class="add_upd">
                <textarea name="text" id="" cols="70" rows="30"required><?php echo $items->text;?></textarea>
            </div>
            <div class="add_upd">
                <input type="text" name="author" value="<?php echo $items->author;?>" required/>
            </div>
            <div class="add_upd">
                <input type="submit" name="update" value="Редактировать"/>
            </div>
            <div class="add_upd">
                <input type="submit" name="delete" value="Удалить"/>
            </div>

        </form>
    </div>


</div>
