
<div style="background-color: #EBEBEB; padding: 10px">
    <div style="width: 60%; margin: auto">
        <h2 style="text-align: center">Все по фильтру</h2>
        <?php foreach($items as $one):?>
            <a href="index.php?ctrl=News&act=Column_One&col=<?php echo $_GET['col'];?>&val=<?php echo $one[$_GET['col']];?>"><?php echo $one[$_GET['col']];?></a><br>
        <?php endforeach;?>
    </div>

</div>
