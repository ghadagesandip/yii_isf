<?php
/* @var $this PreventiveActionController */
/* @var $model PreventiveAction */

$this->breadcrumbs=array(
	'Preventive Actions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List PreventiveAction', 'url'=>array('index')),
	array('label'=>'Create PreventiveAction', 'url'=>array('create')),
	array('label'=>'Update PreventiveAction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PreventiveAction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PreventiveAction', 'url'=>array('admin')),
);
?>

<h1>View PreventiveAction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		array('label'=>'Created By','value'=>$model->PARCreator->username),
        array('label'=>'Updated By','value'=>$model->PARUpdator->username),
		'create_time',
		'update_time',
	),
)); ?>
