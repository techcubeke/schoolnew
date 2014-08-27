<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	

	<div class="row">
	<div class="span3">
    	<?php echo $form->label($model,'admin no'); ?>
		<?php echo $form->textField($model,'admin_no',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>3,'maxlength'=>3)); ?>
	</div>
</div>
	

	<div class="row buttons">
	<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->