<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpecialNeedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="special-need-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'special_need_id') ?>

    <?= $form->field($model, 'special_need') ?>

    <?= $form->field($model, 'remarks') ?>

    <?= $form->field($model, 'record_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
