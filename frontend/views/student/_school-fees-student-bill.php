<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use app\models\SchoolFeesPaymentSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolFeesStudentBillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'School Fees Student Bills';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-fees-student-bill-index">

    <h3>School Fees</h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'headerOptions' => ['width' => '10%',],
                'value' => function($model, $key, $index, $column){
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function($model, $key, $index, $column){
                    $searchModel = new SchoolFeesPaymentSearch();
                    $searchModel->school_fees_student_bill_id = $model->school_fees_student_bill_id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_school-fees-payment',[
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                    ]);
                },
            ],
            // ['class' => 'kartik\grid\SerialColumn'],

            // 'school_fees_student_bill_id',
            // 'school_fees_id',
            // 'student_id',
            'bill_date',
            'bill_amount',
            'paid_amount',
            'balance',
            // 'remarks:ntext',
            // 'record_status',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'school-fees-student-bill',
                // 'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
                'template' => '{payment}',
                'buttons' => [
                        'payment' => function ($url, $searchModel, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-usd"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/school-fees-payment/create', 
                                    'school_fees_student_bill_id' => $searchModel->school_fees_student_bill_id 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'payment'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        }
                    ],
                ],
        ],
    ]); ?>

</div>
