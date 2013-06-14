<?php //echo "<pre>"; print_r($data->CACreator);exit;?>
<?php
/* @var $this CorrectiveActionController */
/* @var $data CorrectiveAction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nonconformance_id')); ?>:</b>
	<?php echo CHtml::encode($data->nonconformance_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->CACreator->username); ?>
	<br />



</div>