<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-fees-master-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'school-fees-master-form']]);?>

    <?= $form->field($model, 'school_fees')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'academic_period_id')->dropDownList($model->academicPeriods); ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>
<!-- 
    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
