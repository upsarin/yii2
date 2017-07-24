<h3>Books</h3>
<? if(count($books)){ ?>
    <? foreach($books as $item){ ?>
        <div class="well">
            <h5><?php echo $item->title;?></h5>
            <div class="author"><?php echo $item->author;?></div>
        </div>
    <? } ?>
<? } ?>