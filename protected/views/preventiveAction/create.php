<?php
/* @var $this PreventiveActionController */
/* @var $model PreventiveAction */

$this->breadcrumbs=array(
	'Preventive Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreventiveAction', 'url'=>array('index')),
	array('label'=>'Manage PreventiveAction', 'url'=>array('admin')),
);
?>

<h1>Create PreventiveAction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>