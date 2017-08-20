
<div class="view" id="view">
    <div class="view_content">
        <h2 id="one_edit_cont">Все по фильтру</h2>
        <?php foreach($items as $one):?>
            <a href="poems.php?ctrl=Poems&act=Column_One&col=<?php echo $_GET['col'];?>&val=<?php echo $one[$_GET['col']];?>"><?php echo $one[$_GET['col']];?></a><br>
        <?php endforeach;?>
    </div>

</div>
