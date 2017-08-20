
<div class="view" id="view">
     <div class="view_content">
             <?php foreach($items as $one):?>
                 <div class="add_upd">
                     <img style="max-width: 400px" src="<?php echo $one->img_url;?>"/>
                 </div>
                     <h1 id="one_edit_cont"><?php echo $one->title;?></h1><br>
                     <pre><div style="margin-left: 200px; font-family: Verdana"><?php echo $one->text;?></div></pre><br>
                     <p><strong><?php echo $one->author;?></strong></p><br>
                     <p><?php echo $one->date;?></p><br>
             <?php endforeach;?>
     </div>


</div>
