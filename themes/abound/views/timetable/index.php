<?php
/* @var $this TimetableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Timetables',
);

$this->menu=array(
	array('label'=>'Create Timetable', 'url'=>array('create')),
	array('label'=>'Manage Timetable', 'url'=>array('admin')),
);
?>

<h1>Timetable</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
