<?php
/* @var $this CorrectiveActionController */
/* @var $model CorrectiveAction */

$this->breadcrumbs=array(
	'Corrective Actions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CorrectiveAction', 'url'=>array('index')),
	array('label'=>'Create CorrectiveAction', 'url'=>array('create')),
	array('label'=>'View CorrectiveAction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CorrectiveAction', 'url'=>array('admin')),
);
?>

<h1>Update CorrectiveAction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>