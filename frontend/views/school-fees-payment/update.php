<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesPayment */

$this->title = 'Update School Fees Payment: ' . ' ' . $model->school_fees_payment_id;
$this->params['breadcrumbs'][] = ['label' => 'School Fees Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_fees_payment_id, 'url' => ['view', 'id' => $model->school_fees_payment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-fees-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
