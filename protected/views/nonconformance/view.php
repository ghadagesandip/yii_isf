<?php //echo "<pre>"; print_r($model); exit;?>
<?php
/* @var $this NonconformanceController */
/* @var $model Nonconformance */

$this->breadcrumbs=array(
	'Nonconformances'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Nonconformance', 'url'=>array('index')),
	array('label'=>'Create Nonconformance', 'url'=>array('create')),
	array('label'=>'Update Nonconformance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nonconformance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nonconformance', 'url'=>array('admin')),
	array('label'=>'Add Corrective Action', 'url'=>array('correctiveAction/create','nonconformance_id'=>$model->id)),
);
?>

<h1>View Nonconformance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'IssuedTo.username',
		'description',
		array('label'=>'Created by', 'value'=>$model->NCCreator->username),
        array('label'=>'Updated by', 'value'=>$model->NCUpdator->username),
		'create_time',
		'update_time',
	),
)); ?>

<h1>Related Corrective Actions #</h1>

<table>
	<tr>
		<th>Id</th>
		<th>description</th>
		<th>User </th>
	</tr>

<?php foreach ($model->Corrective_Actions as $cas){?>
 <tr>
 	<td><?php echo $cas->id;?></td>
 	<td><?php echo $cas->description;?></td>
 	<td><?php echo $cas->CACreator->username;?></td>
 </tr>

<?php }?>
</table>
