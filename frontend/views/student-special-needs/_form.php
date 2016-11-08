<?php

use yii\helpers\Html;
//~ use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSpecialNeeds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-special-needs-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'student-form']]);?>

<!--
    <?= $form->field($model, 'student_id')->textInput() ?>
-->
    
    <?= $form->field($model, 'special_need')->dropDownList($model->SpecialNeeds); ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

<!--
    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
