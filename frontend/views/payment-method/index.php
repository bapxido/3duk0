<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentMethodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payment Methods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-method-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Payment Method', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'payment_method_id',
            'payment_method',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
