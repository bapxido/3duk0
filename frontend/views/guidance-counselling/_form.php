<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\GuidanceCounselling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guidance-counselling-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'guidance-counselling-form']]);?>

    <?= $form->field($model, 'student_id')->widget(Select2::classname(), [
        'data' => $model->students,
        'options' => ['placeholder' => 'Select student ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'staff_member_id')->widget(Select2::classname(), [
        'data' => $model->staffMembers,
        'options' => ['placeholder' => 'Select staff member ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'subject_matter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gc_category_id')->widget(Select2::classname(), [
        'data' => $model->gcCategories,
        'options' => ['placeholder' => 'Select category ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'gc_date')->widget(
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

    <?= $form->field($model, 'case')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
