<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
    'focus'=>array($model,admin_level)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'admin_level'); ?>
        <?php echo $form->dropDownList($model,'admin_level',$this->getAdminLevels()); ?>
        <?php echo $form->error($model,'admin_level'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'password_repeat'); ?>
        <?php echo $form->passwordField($model,'password_repeat'); ?>
        <?php echo $form->error($model,'password_repeat'); ?>
    </div>


	<div class="row">
		<?php echo $form->labelEx($model,'emial_address'); ?>
		<?php echo $form->emailField($model,'emial_address'); ?>
		<?php echo $form->error($model,'emial_address'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'profile_picture'); ?>
        <?php echo $form->fileField($model,'profile_picture'); ?>
        <?php echo $form->error($model,'profile_picture'); ?>
    </div>

   <div class="row">
        <?php echo $form->labelEx($model,'gender'); ?>
        <?php  $gender = array('Male'=>'Male', 'Female'=>'Female');
              echo  $form->radioButtonList($model, 'gender', $gender ,array('separator'=>'<span>'));
        ?>
        <?php echo $form->error($model,'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date_of_birth'); ?>
        <?php
        	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
        		  'name'=>'User[date_of_birth]',
			      'options'=>array(
    		         'showAnim'=>'fold',
			         'dateFormat'=>'yy-mm-dd',
			       ),
			));
        ?>
        <?php echo $form->error($model,'date_of_birth'); ?>
     </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hobby_1'); ?>
        <?php echo $form->checkBox($model,'hobby_1',array('value'=>'Gamming')); ?>Gamming
        <?php echo $form->error($model,'hobby_1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'hobby_2'); ?>
        <?php echo $form->checkBox($model,'hobby_2',array('value'=>'Netsurfing')); ?>Netsurfing
        <?php echo $form->error($model,'hobby_2'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->