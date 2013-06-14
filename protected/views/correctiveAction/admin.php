<?php
/* @var $this CorrectiveActionController */
/* @var $model CorrectiveAction */

$this->breadcrumbs=array(
	'Corrective Actions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CorrectiveAction', 'url'=>array('index')),
	array('label'=>'Create CorrectiveAction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#corrective-action-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Corrective Actions</h1>

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
	'id'=>'corrective-action-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        array('name'=>'nonconformance_title','value'=>'$data->Nonconformance->title'),
		'description',
		array('name'=>'created_by','value'=>'$data->CACreator->username'),
        array('name'=>'updated_by','value'=>'$data->CAUpdator->username'),
        'create_time',
		/*
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
