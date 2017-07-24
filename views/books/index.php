<h3>Books</h3>
<?php if(count($books)): ?>
    <?php foreach($books as $element => $val): ?>
        <div class="well">
            <h3><?=$val->title?></h3>
            <p><?=$val->author_name?></p>
        </div>
    <?php endforeach ?>
<?php endif ?>