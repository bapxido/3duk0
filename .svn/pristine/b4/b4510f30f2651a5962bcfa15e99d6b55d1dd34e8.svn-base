<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolFeesPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Fees Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-payment-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Fees Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_fees_payment_id',
            'school_fees_student_bill_id',
            'payment_amount',
            'payment_date',
            'payment_method',
            // 'balance',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>

</div>
