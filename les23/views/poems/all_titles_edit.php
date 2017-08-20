
<div class="view" id="view">
    <div class="view_content">
        <h2 id="one_edit_cont">Выбрать стих для редактирования</h2>
        <?php foreach($items as $one):?>
            <a href="poems_adm.php?Ctrl=Poems&act=Edit&val=<?php echo $one['title'];?>"><?php echo $one['title'];?></a><br>
        <?php endforeach;?>
    </div>

</div>

