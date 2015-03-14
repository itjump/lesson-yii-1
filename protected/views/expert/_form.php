<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'expert-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>


<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->fileFieldGroup($model, 'avatar',
	    array(
	        'wrapperHtmlOptions' => array(
	            'class' => 'col-sm-5',
	        ),
	    )
	); 

    if($model->avatar){
        echo '<img src="upload/'.$model->avatar.'" height=100/>';
    }
    ?>
	
	<?php echo $form->textFieldGroup($model,'skills',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1000)))); ?>

	<?php echo $form->textAreaGroup(
			$model,
			'description',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'htmlOptions' => array('rows' => 5),
				)
			)
		); ?>


<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
</div>

<?php $this->endWidget(); ?>
