<?php
/* @var $this NonconformanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nonconformances',
);

$this->menu=array(
	array('label'=>'Create Nonconformance', 'url'=>array('create')),
	array('label'=>'Manage Nonconformance', 'url'=>array('admin')),
);
?>

<h1>Nonconformances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'tagName'=>'span',
    'enableSorting'=>true,
    'emptyText'=>'no data available',
    'sortableAttributes'=>array(
        'title',
        'create_time'=>'Post Time',
    ),
)); ?>
