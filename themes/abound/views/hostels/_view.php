<?php
/* @var $this HostelsController */
/* @var $data Hostels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dormname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dormname), array('view', 'id'=>$data->dormname)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dormID')); ?>:</b>
	<?php echo CHtml::encode($data->dormID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beds')); ?>:</b>
	<?php echo CHtml::encode($data->beds); ?>
	<br />


</div>