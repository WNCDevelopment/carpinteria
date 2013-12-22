<?php $this->pageTitle=Yii::app()->name . ' - Login'; ?>
<div class="row-fluid">
	<div class="span7">
		<div class="page-header">
		<h1>Admin</h1>
		</div>
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
			'htmlOptions' => array('class'=>'form-horizontal'),
		)); ?>
		
			<?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-error')) ?>
		
			<div class="control-group<?php if($model->getError('email')): ?> error<?php endif; ?>">
				<?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
				<div class="controls">
					<?php echo $form->textField($model,'email'); ?>
					<?php echo $form->error($model, 'email', array('class'=>'help-inline'))?>
				</div>
			</div>
		
			<div class="control-group<?php if($model->getError('email')): ?> error<?php endif; ?>">
				<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
				<div class="controls">
					<?php echo $form->passwordField($model,'password'); ?>
				</div>
			</div>
		
			<div class="control-group">
		    <div class="controls">
		      <label class="checkbox">
		        <?php echo $form->checkBox($model, 'rememberMe')?> 
		        <?php echo $form->labelEx($model,'rememberMe'); ?>
		      </label>
		      <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary')); ?>
		    </div>
		  </div>
		<?php $this->endWidget(); ?>
	</div>
</div>