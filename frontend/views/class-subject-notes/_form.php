<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectNotes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subject-notes-form">

    <?php 
        $form = ActiveForm::begin(['layout'=>'horizontal', 
                'options' => ['enctype' => 'multipart/form-data',
                'id' => 'classsubjectnotesform']]); ?>

    <!-- <?= $form->field($model, 'class_subject_header_id')->textInput() ?> -->

    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_topic')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'notes_document')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'file')->fileInput(); ?> 

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

<!--     <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
