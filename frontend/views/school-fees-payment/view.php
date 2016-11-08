<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolFeesPayment */

$this->title = $model->school_fees_payment_id;
$this->params['breadcrumbs'][] = ['label' => 'School Fees Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-payment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_fees_payment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_fees_payment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'school_fees_payment_id',
            'school_fees_student_bill_id',
            'payment_amount',
            'payment_date',
            'payment_method',
            'balance',
            'remarks:ntext',
            'record_status',
            'create_date',
            'create_user_id',
            'update_date',
            'update_user_id',
        ],
    ]) ?>

</div>
