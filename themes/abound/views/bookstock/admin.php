<?php
/* @var $this BookstockController */
/* @var $model Bookstock */

$this->breadcrumbs=array(
	'Bookstocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bookstock', 'url'=>array('index')),
	array('label'=>'Create Bookstock', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bookstock-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Book stock</h1>

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
	'id'=>'bookstock-grid',
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
		'bookID',
		'vendor',
		'barcodevalue',
		'purchasedate',
		'purchasedby',
		'instock',
		'isreference',
	/*	'bookposition',
		'reason',
		'dateadded',
		'datemodified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
