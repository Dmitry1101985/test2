
<div style="background-color: #EBEBEB; padding: 10px">
     <div style="width: 60%; margin: auto">
             <?php foreach($items as $one):?>
                     <h1 style="text-align: center"><?php echo $one->title;?></h1><br>
                     <p><?php echo $one->text;?></p><br>
                     <p><strong><?php echo $one->author;?></strong></p><br>
                     <p><?php echo $one->date;?></p><br>
             <?php endforeach;?>
     </div>


</div>
