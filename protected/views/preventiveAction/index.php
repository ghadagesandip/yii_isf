<?php
/* @var $this PreventiveActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Preventive Actions',
);

$this->menu=array(
	array('label'=>'Create PreventiveAction', 'url'=>array('create')),
	array('label'=>'Manage PreventiveAction', 'url'=>array('admin')),
);
?>

<h1>Preventive Actions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
