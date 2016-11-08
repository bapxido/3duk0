<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcademicPeriodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Periods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-period-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic Period', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'academic_period_id',
            'academic_period',
            'start_date',
            'end_date',
            // 'remarks:ntext',
            // 'record_status',

            [
            'class' => yii\grid\ActionColumn::className(),
            'controller' => 'academic-period',
            'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
            'template' => '{generate} {view} {update} {delete}',
            'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
                'value'=>Url::to(['academic-period/create', 'academic_period_id' => $searchModel->academic_period_id]),],
            'buttons' => [
                    'generate' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-cog"></span>',
                            Yii::$app->urlManager->createUrl(['/academic-period/generate-academic-days', 
                                'id' => $model->academic_period_id ]),
                            [
                            'class' => 'modalUpdate',
                            'title' => Yii::t('app', 'Generate Academic Days'),
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
    <?php Pjax::end(); ?>

</div>
