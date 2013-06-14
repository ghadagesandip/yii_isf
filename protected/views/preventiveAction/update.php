<?php
/* @var $this PreventiveActionController */
/* @var $model PreventiveAction */

$this->breadcrumbs=array(
	'Preventive Actions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreventiveAction', 'url'=>array('index')),
	array('label'=>'Create PreventiveAction', 'url'=>array('create')),
	array('label'=>'View PreventiveAction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreventiveAction', 'url'=>array('admin')),
);
?>

<h1>Update PreventiveAction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>