<div class="form">
	<?php $form = $this->beginWidget('CustomForm', array(
		'id' => $this->modelName . '-form',
		'enableAjaxValidation' => true,
		'htmlOptions' => array('class' => 'well form-disable-button-after-submit'),
	)); ?>

    <p class="note"><?php echo Yii::t('common', 'Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php
	$this->widget('application.modules.lang.components.langFieldWidget', array(
		'model' => $model,
		'field' => 'name',
		'type' => 'string'
	));
	?>
    <div class="clear"></div>

    <div class="rowold buttons">
		<?php $this->widget('bootstrap.widgets.TbButton',
			array('buttonType' => 'submit',
				'type' => 'primary',
				'icon' => 'ok white',
				'label' => $model->isNewRecord ? tc('Add') : tc('Save'),
				'htmlOptions' => array(
					'class' => 'submit-button',
				),
			)); 
		?>
    </div>

	<?php $this->endWidget(); ?>
	
	<div class="clear"></div>
	<?php
	if (issetModule('seo') && !$model->isNewRecord) {
		$this->widget('application.modules.seo.components.SeoWidget', array(
			'model' => $model,
		));
	} ?>
</div><!-- form -->