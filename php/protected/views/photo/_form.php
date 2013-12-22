<?php
/* @var $this PhotoController */
/* @var $model Photo */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array('id' => 'photo-form', 'enableAjaxValidation' => false,'htmlOptions'=>array('enctype'=>'multipart/form-data'))); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->fileFieldRow($model, 'file_name'); ?>        


    </div>

    <div class="btn-toolbar">
        
        
        <?php
        echo $form->dropDownListRow(
                $model, 'id_album', CHtml::listData(Album::model()->findAll(), 'id', 'name'), array('class' => 'span5'), array('options' => array($model->id_album => array('selected' => true)))
        );
        ?>
        <?php echo $form->error($model, 'id_album'); ?>

    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->