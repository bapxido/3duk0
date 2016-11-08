<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuidanceCounsellingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guidance Counsellings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guidance-counselling-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'guidance_counselling_id',
            [
                'attribute' => 'student_id',
                'value' => 'student.fullname',
            ],
            [
                'attribute' => 'staff_member_id',
                'value' => 'staffMember.fullname',
            ],
            'subject_matter',
            [
                'attribute' => 'gc_category_id',
                'value' => 'gcCategory.guidance_counselling_category',
            ],            
            // 'gc_date',
            // 'case:ntext',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_user_id',

            ['class' => 'yii\grid\ActionColumn'],
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
                            'title'=> Yii::t('app', 'Add Subject Management')
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
            'heading'=>'Welfare Support Management',
        ],
        'persistResize'=>false,
        'exportConfig'=>true,

    ]); ?>
    <?php Pjax::end(); ?>

</div>
