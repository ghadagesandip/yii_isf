<?php
/* @var $this CorrectiveActionController */
/* @var $model CorrectiveAction */

$this->breadcrumbs=array(
	'Corrective Actions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CorrectiveAction', 'url'=>array('index')),
	array('label'=>'Create CorrectiveAction', 'url'=>array('create')),
	array('label'=>'Update CorrectiveAction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CorrectiveAction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CorrectiveAction', 'url'=>array('admin')),
);
?>

<h1>View CorrectiveAction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('label'=>'Non-conformance Title','value'=>$model->Nonconformance->title),
		'description',
		array('label'=>'Created By','value'=>$model->CACreator->username),
        array('label'=>'Updated By','value'=>$model->CAUpdator->username),
		'create_time',
        'update_time',
	),
)); ?>
