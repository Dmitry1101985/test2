

<div class="view" id="view">
    <div class="view_content">
        <h1 id="one_edit_cont">Все новости</h1>
        <?php foreach($items as $one):?>
            <div class="add_upd">
                <img style="max-width: 400px" src="<?php echo $one->img_url;?>"/>
            </div>

            <h2 id="one_edit_cont"><?php echo $one->title;?></h2><br>

            <p><?php echo $one->text;?></p><br>
           
            <p><strong><?php echo $one->author;?></strong></p><br>
            <p><?php echo $one->date;?></p><br>
            <hr/>
        <?php endforeach;?>
    </div>

</div>
