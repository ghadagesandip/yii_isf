<?php
/* @var $this NonconformanceController */
/* @var $data Nonconformance */
?>

<div class="view">
<?php //echo "<pre>"; print_r($data); exit;?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issued_to')); ?>:</b>
	<?php echo CHtml::encode($data->IssuedTo->username); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
</div>