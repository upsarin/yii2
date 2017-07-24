<h3>Authors</h3>
<?php if(count($authors)): ?>
    <?php foreach($authors as $element => $val): ?>
        <div class="well">
            <h3><?=$val->name?></h3>
            <?php var_dump($val) ?>
        </div>
    <?php endforeach ?>
<?php endif ?>



