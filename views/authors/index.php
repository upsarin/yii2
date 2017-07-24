<h3>Authors</h3>
<?php if(count($authors)): ?>
    <?php foreach($authors as $element => $val): ?>
        <div class="well">
            <h3><?=$val->name?></h3>
            <ul>
                and written books:
            <?php foreach($val->books as $book => $value): ?>
                <li><?=$value->title?></li>
            <?php endforeach ?>
            </ul>
        </div>
    <?php endforeach ?>
<?php endif ?>



