<?= @helper('behavior.mootools') ?>

<? $list = (isset($row) && isset($table)) ? $attachments->find(array('row' => $row, 'table' => $table)) : $attachments ?>

<? if(count($list)) : ?>
<div>
    <ul class="attachments">
    <? foreach($list as $item) : ?>
        <li>
            <? if (in_array(strtolower(pathinfo($item->name, PATHINFO_EXTENSION)), ComFilesDatabaseRowFile::$image_extensions)) : ?>
                <a href="<?= @route('view=attachment&format=file&id='.$item->id) ?>" class="modal" rel="{handler: 'image'}"><?= @escape($item->name) ?></a>
            <? else : ?>
                <a href="<?= @route('view=attachment&format=file&id='.$item->id) ?>"><?= @escape($item->name) ?></a>
            <? endif ?>
        </li>
    <? endforeach ?>
    </ul>
</div>
<? endif ?>