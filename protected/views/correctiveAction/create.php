<?php
/* @var $this CorrectiveActionController */
/* @var $model CorrectiveAction */

$this->breadcrumbs=array(
	'Corrective Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CorrectiveAction', 'url'=>array('index')),
	array('label'=>'Manage CorrectiveAction', 'url'=>array('admin')),
);
?>

<h1>Create CorrectiveAction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>