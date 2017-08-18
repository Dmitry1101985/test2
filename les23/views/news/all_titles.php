
<div style="background-color: #EBEBEB">
    <h2>Все по фильтру</h2>
    <?php foreach($items as $one):?>
        <a href="index.php?ctrl=News&act=Column_One&col=<?php echo $_GET['col'];?>&val=<?php echo $one[$_GET['col']];?>"><?php echo $one[$_GET['col']];?></a><br>
    <?php endforeach;?>
</div>
