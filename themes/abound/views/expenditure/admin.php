<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */

$this->breadcrumbs=array(
	'Expenditures'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Expenditure records', 'url'=>array('index')),
	array('label'=>'Create Expenditure records', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#expenditure-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Expenditure records</h1>

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
	'id'=>'expenditure-grid',
	'dataProvider'=>$model->search(),
		'filter'=>$model,
		'htmlOptions' => array('class' => 'table table-striped'),
		'pagerCssClass' => '',
		'pager' => array(
				'class' => 'CLinkPager',
				'selectedPageCssClass' => 'active',
				'hiddenPageCssClass' => 'disabled',
				'htmlOptions' => array('class' => 'pagination pagination-lg'),
		),
	'columns'=>array(
		/*'idexpenditure',
		'receiptno',
		'staffid',
		'purpose',
		'date',
		'amount',*/
					array(
			'name' =>'idexpenditure',
		'htmlOptions' => array('style' => 'width: 100px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
),				
							array(
			'name' =>'receiptno',
		'htmlOptions' => array('style' => 'width: 100px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
),								
						array(
			'name' =>'staffid',
		'htmlOptions' => array('style' => 'width: 100px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
),
				array(
				'name'=>'purpose',
				'htmlOptions'=>array('style'=>'width:100px;'),
				'filterHtmlOptions'=>array('style'=>'width:100px;'),
),
				array(
			'name' =>'date',
		'htmlOptions' => array('style' => 'width: 100px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
),				
			array(
			'name' =>'amount',
		'htmlOptions' => array('style' => 'width: 100px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
),		
	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
