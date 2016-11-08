<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Relationship */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relationship-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'relationship-form']]);?>

    <?= $form->field($model, 'relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success showModalButton' : 'showModalButton btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
