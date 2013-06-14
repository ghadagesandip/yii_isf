<?php
/* @var $this NonconformanceController */
/* @var $model Nonconformance */

$this->breadcrumbs=array(
	'Nonconformances'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nonconformance', 'url'=>array('index')),
	array('label'=>'Create Nonconformance', 'url'=>array('create')),
	array('label'=>'View Nonconformance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nonconformance', 'url'=>array('admin')),
);
?>

<h1>Update Nonconformance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>