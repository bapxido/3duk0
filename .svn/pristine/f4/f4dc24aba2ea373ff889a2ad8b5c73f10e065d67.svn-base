<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

	<?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'subject-form']]);?>
<!--
    <?= $form->field($model, 'course_id')->textInput() ?>
-->

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_type_id')->dropDownList($model->subjecttypes); ?>

    <?= $form->field($model, 'credits')->textInput() ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>
<!--

    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
