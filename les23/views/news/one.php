
<div style="background-color: #EBEBEB">

    <?php foreach($items as $one):?>
        <h1><?php echo $one->title;?></h1><br>
        <p><?php echo $one->text;?></p><br>
        <p><strong><?php echo $one->author;?></strong></p><br>
    <?php endforeach;?>

</div>
