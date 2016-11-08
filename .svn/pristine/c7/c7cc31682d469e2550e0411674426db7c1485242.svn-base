<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    foreach($batches as $key=>$value){
		$html .= "<option value='$key'>$value</key>";
	}

	echo "<select name="batch">$html</select>"; ?>
    
    <?= $form->field($model, 'nationality')->dropDownList($model->batches); ?>

    <div class="form-group">
        <?= Html::submitButton('SetBatch', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
