

<div style="background-color: #EBEBEB; margin-top: 0">
    <div style="width: 60%; margin: auto; padding-top: 15px">
        <h1 style="text-align: center">Все новости</h1>
        <?php foreach($items as $one):?>
            <h2 style="text-align: center"><?php echo $one->title;?></h2><br>
            <p><?php echo $one->text;?></p><br>
            <p><strong><?php echo $one->author;?></strong></p><br>
            <p><?php echo $one->date;?></p><br>
        <?php endforeach;?>
    </div>

</div>
