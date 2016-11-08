<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentContacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-contacts-form">

	<?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'student-contacts-form']]);?>
    
<!--
    <?= $form->field($model, 'student_id')->textInput() ?>
-->

    <?= $form->field($model, 'physical_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_village')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'country')->dropDownList($model->countries); ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

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
