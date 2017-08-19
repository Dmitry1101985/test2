
<div style="background-color: #EBEBEB; margin-top: 0; padding: 10px">
    <div style="margin: auto; width: 60%">
        <h2 style="text-align: center">Выбрать статью для редактирования</h2>
        <?php foreach($items as $one):?>
            <a href="index.php?Ctrl=News&act=Edit&val=<?php echo $one['title'];?>"><?php echo $one['title'];?></a><br>
        <?php endforeach;?>
    </div>

</div>

