<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffMemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Members';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/script.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="staff-member-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'staff_member_id',
            'title',
            'fullname',
            //'first_name',
            //'middle_name',
            //'last_name',
            // 'birth_date',
            // 'birth_place',
            'sex',
            // 'nationality_id',
            [
				'attribute' => 'nationality_id',
				 'value' => 'nationality.nationality',
            ],
            // 'national_id',
            // 'passport_id',
            [
				'attribute' => 'staff_type_id',
				 'value' => 'staffType.staff_type',
            ],
            // 'photo',
            //~ 'remarks:ntext',
            //~ 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',

            [                       
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['width' => '80px;'],
            ],
        ],

        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax'=>true, // pjax is set to always true for this demo
        'beforeHeader'=>[
                [
                    // 'columns'=>[
                    //     ['content'=>'Faculty', 'options'=>['colspan'=>5, 'class'=>'text-center warning']], 
                    //     // ['content'=>'Header Before 2', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
                    //     // ['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
                    // ],
                    'options'=>['class'=>'skip-export'] // remove this row from export
                ]
            ],
        // set your toolbar
        'toolbar'=> [
                ['content'=>
                    Html::a('<i class="glyphicon glyphicon-plus"></i>', 
                        ['create'], 
                        [
                            'data-pjax'=>0, 
                            'class'=>'btn btn-success', 
                            'title'=> Yii::t('app', 'Add Staff Member')
                        ]) . ' '.
                    Html::a('<i class="glyphicon glyphicon-print"></i>', 
                        ['list-report'], 
                        [
                            'data-pjax'=>0, 
                            'class'=>'btn btn-info', 
                            'title'=> Yii::t('app', 'Print Report'),
                            'target'=> '_blank', 
                        ]) . ' '.
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', 
                        ['index'], 
                        [
                            'data-pjax'=>0, 
                            'class'=>'btn btn-default', 
                            'title'=> Yii::t('app', 'Reset Grid')
                        ])
                ],
                '{export}',
                '{toggleData}',
            ],
        // set export properties
        'export'=>[
            'fontAwesome'=>true
            ],

        'bordered'=>true,
        'striped'=>true,
        'condensed'=>true,
        'responsive'=>true,
        'hover'=>true,
        // 'showPageSummary'=>false,
        'panel'=>[
            'type'=>GridView::TYPE_PRIMARY,
            'heading'=>'Staff Member Management',
        ],
        'persistResize'=>false,
        'exportConfig'=>true,

    ]); ?>
    <?php Pjax::end(); ?>

</div>
