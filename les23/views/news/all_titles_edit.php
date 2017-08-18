
<div style="background-color: #EBEBEB">
    <h2>Выбрать статью для редактирования</h2>
    <?php foreach($items as $one):?>
       <a href="index.php?Ctrl=News&act=Edit&val=<?php echo $one['title'];?>"><?php echo $one['title'];?></a><br>
    <?php endforeach;?>
</div>

