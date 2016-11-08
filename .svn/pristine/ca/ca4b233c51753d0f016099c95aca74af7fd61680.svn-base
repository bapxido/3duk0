<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounsellingCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guidance-counselling-category-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'guidance-counselling-category-form']]);?>

    <?= $form->field($model, 'guidance_counselling_category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
