<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emial_address')); ?>:</b>
	<?php echo CHtml::encode($data->emial_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_level')); ?>:</b>
	<?php echo CHtml::encode($data->admin_level); ?>
	<br />



</div>