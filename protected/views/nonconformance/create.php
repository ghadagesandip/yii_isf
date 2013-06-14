<?php
/* @var $this NonconformanceController */
/* @var $model Nonconformance */

$this->breadcrumbs=array(
	'Nonconformances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nonconformance', 'url'=>array('index')),
	array('label'=>'Manage Nonconformance', 'url'=>array('admin')),
);
?>

<h1>Create Nonconformance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>