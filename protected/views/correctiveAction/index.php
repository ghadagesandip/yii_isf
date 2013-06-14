<?php
/* @var $this CorrectiveActionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Corrective Actions',
);

$this->menu=array(
	array('label'=>'Create CorrectiveAction', 'url'=>array('create')),
	array('label'=>'Manage CorrectiveAction', 'url'=>array('admin')),
);
?>

<h1>Corrective Actions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
