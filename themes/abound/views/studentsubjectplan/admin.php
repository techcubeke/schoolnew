<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */

$this->breadcrumbs=array(
	'Studentsubjectplans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Studentsubjectplan', 'url'=>array('index')),
	array('label'=>'Create Studentsubjectplan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#studentsubjectplan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Studentsubjectplans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'studentsubjectplan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'subjectplanID',
		'academicyear',
		'adminno',
		'dateadded',
		'datemodified',
		'subject1',
		/*
		'subject2',
		'subject3',
		'subject4',
		'subject5',
		'subject6',
		'subject7',
		'subjec8',
		'subject9',
		'subject10',
		'subject11',
		'subject12',
		'subject13',
		'subject14',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
