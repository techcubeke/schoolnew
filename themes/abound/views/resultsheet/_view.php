<?php
/* @var $this ResultsheetController */
/* @var $data Resultsheet */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="view">
<b>
    	<?php echo CHtml::link(CHtml::encode($data->resultsheetID), array('view', 'id'=>$data->resultsheetID)); ?></b>
        <br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_no')); ?>:</b>
  	<?php echo CHtml::link(CHtml::encode($data->admin_no), array('view', 'admin_no'=>$data->admin_no)); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('examtype')); ?>:</b>
	<?php echo CHtml::encode($data->examtype); ?>
	<br />
	<p>Compulsory</p>
	<b><?php echo CHtml::encode($data->getAttributeLabel('maths')); ?>:</b>
	<?php echo CHtml::encode($data->maths); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('english')); ?>:</b>
	<?php echo CHtml::encode($data->english); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('kiswahili')); ?>:</b>
	<?php echo CHtml::encode($data->kiswahili); ?>
	<br />
	<p>Sciences</p>
	<b><?php echo CHtml::encode($data->getAttributeLabel('biology')); ?>:</b>
	<?php echo CHtml::encode($data->biology); ?>
	<?php echo CHtml::encode($data->getAttributeLabel('physics')); ?>:</b>
	<?php echo CHtml::encode($data->physics); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('chemistry')); ?>:</b>
	<?php echo CHtml::encode($data->chemistry); ?>
	<br />
	<p>Humanities</p>
	<b><?php echo CHtml::encode($data->getAttributeLabel('history')); ?>:</b>
	<?php echo CHtml::encode($data->history); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('geography')); ?>:</b>
	<?php echo CHtml::encode($data->geography); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('religious_studies')); ?>:</b>
	<?php echo CHtml::encode($data->religious_studies); ?>
	<br />
	<p>Technical</p>
	<b><?php echo CHtml::encode($data->getAttributeLabel('agriculture')); ?>:</b>
	<?php echo CHtml::encode($data->agriculture); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('computerstudies')); ?>:</b>
	<?php echo CHtml::encode($data->computerstudies); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('businesstudies')); ?>:</b>
	<?php echo CHtml::encode($data->businesstudies); ?>

	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('aviation')); ?>:</b>
	<?php echo CHtml::encode($data->aviation); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('french')); ?>:</b>
	<?php echo CHtml::encode($data->french); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('music')); ?>:</b>
	<?php echo CHtml::encode($data->music); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('woodwork')); ?>:</b>
	<?php echo CHtml::encode($data->woodwork); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('metal')); ?>:</b>
	<?php echo CHtml::encode($data->metal); ?>
    	<b><?php echo CHtml::encode($data->getAttributeLabel('art')); ?>:</b>
	<?php echo CHtml::encode($data->art); ?>
	<br />
    <span class="text-info" style="font-size:18px">Totals</span>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</b>
	<?php echo CHtml::encode($data->points); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('totalmks')); ?>:</b>
	<?php echo CHtml::encode($data->totalmks); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('mean')); ?>:</b>
	<?php echo CHtml::encode($data->mean); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

</div>