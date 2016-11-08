<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolFeesPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'School Fees Payments';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-payment-index">

    <h4>Payments</h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'school_fees_payment_id',
            // 'school_fees_student_bill_id',
            'payment_amount',
            'payment_date',
            'paymentMethod.payment_method',
            // 'balance',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_user_id',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
