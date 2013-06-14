<?php
/* @var $this PreventiveActionController */
/* @var $model PreventiveAction */

$this->breadcrumbs=array(
	'Preventive Actions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PreventiveAction', 'url'=>array('index')),
	array('label'=>'Create PreventiveAction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#preventive-action-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Preventive Actions</h1>

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
	'id'=>'preventive-action-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		array('name'=>'c_created_by','value'=>'$data->PARCreator->username'),
        array('name'=>'c_updated_by','value'=>'$data->PARUpdator->username'),
		'create_time',
		/*
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
