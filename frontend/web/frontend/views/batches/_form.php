<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batch_course_id')->textInput() ?>

    <?= $form->field($model, 'batch_alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'record_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
