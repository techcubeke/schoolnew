<?php
/* @var $this StudentsubjectplanController */
/* @var $data Studentsubjectplan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectplanID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->subjectplanID), array('view', 'id'=>$data->subjectplanID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicyear')); ?>:</b>
	<?php echo CHtml::encode($data->academicyear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</b>
	<?php echo CHtml::encode($data->adminno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />


</div>