<div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-raised">
        <img src="<?= $thumbnail; ?>" alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
    <div>
        <span class="btn btn-raised btn-round btn-default btn-file">
           <span class="fileinput-new"><?= \Yii::t('file-input', 'Select image') ?></span>
           <span class="fileinput-exists"><?= \Yii::t('file-input', 'Change') ?></span>
            <?= $field; ?>
        </span>
        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
            <?= \Yii::t('file-input', 'Remove') ?>
        </a>
    </div>
</div>
