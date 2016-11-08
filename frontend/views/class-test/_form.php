<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ClassTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-test-form">

    <?php 
        $form = ActiveForm::begin(['layout'=>'horizontal', 
                'options' => ['enctype' => 'multipart/form-data',
                'id' => 'classtestform']]); 
    ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'class_test_type_id')->dropDownList($model->classTestTypes); ?>

    <?= $form->field($model, 'file')->fileInput(); ?> 

    <?= $form->field($model, 'maximum_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_date')->widget(
    DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
