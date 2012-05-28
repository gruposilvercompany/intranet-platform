<?= @helper('behavior.mootools') ?>
<?= @helper('behavior.keepalive') ?>

<script>
    window.addEvent('load', function() {        
        new Attachments.Upload({holder: 'fora-comment-form'});
    });
</script>

<div id="fora-comment-form">
	<form action="<?= @route('view=comment') ?>" method="post" class="-koowa-form form-stacked" enctype="multipart/form-data">
        <input type="hidden" name="action" value="save" />
	    <input type="hidden" name="row" value="<?= $state->row ?>" />
	    <input type="hidden" name="table" value="<?= $state->table ?>" />
        
        <div class="spacing">
		    <div class="control-group">
		    	<label class="control-label" for="text"><?= @text('Add a comment to this topic') ?></label>
		    	<div class="controls">
	                <?
	                    $controller = @service('com://admin/editors.controller.editor');
	                    $controller->getView()->setEditorSettings($editor_settings);
	                    echo $controller->name('text')->id('commentnew')->data($comment->text)->toggle(false)->codemirror(false)->display();
	                ?>
	            </div>
		    </div>
		    <?= @template('com://admin/attachments.view.attachments.upload'); ?>
	    </div>
	    <div class="form-actions">
	    	<input type="submit" class="btn btn-primary" value="<?= @text('Post your comment') ?>" />
	    </div>
	</form>
</div>