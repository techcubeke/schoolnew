<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'academicsession-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span3">	    
		<?php echo $form->labelEx($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
		<?php echo $form->error($model,'academicsessionID'); ?>
	</div>
	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'session year'); ?>
		<?php echo $form->textField($model,'sessionyear',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sessionyear'); ?>
	</div>
	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'session open date'); ?>
		<?php echo $form->textField($model,'sessionopendate'); ?>
		<?php echo $form->error($model,'sessionopendate'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'session close date'); ?>
		<?php echo $form->textField($model,'sessionclosedate'); ?>
		<?php echo $form->error($model,'sessionclosedate'); ?>
	</div>
	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'session status'); ?>
		<?php echo $form->textField($model,'sessionstatus',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sessionstatus'); ?>
	</div>
	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->