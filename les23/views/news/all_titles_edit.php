
<div class="view" id="view">
    <div class="view_content">
        <h2 id="one_edit_cont">Выбрать статью для редактирования</h2>
        <?php foreach($items as $one):?>
            <a href="admin.php?Ctrl=News&act=Edit&val=<?php echo $one['title'];?>"><?php echo $one['title'];?></a><br>
        <?php endforeach;?>
    </div>

</div>

