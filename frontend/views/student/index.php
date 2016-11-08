<?php
use Yii;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\SchoolFeesStudentBillSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/script.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//echo $count
//var_dump($dataProvider);
?>
<div class="student-index box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]);
		//echo Yii::$app->params->get('batch');
		//Yii::app()->request->getQuery('companyId');
     ?>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'containerOptions' => ['class' => 'student-pjax-container'],
        'options' => ['id' => 'students-pjax'],
        'pjax'=>true, 
        'pjaxSettings'=>[
			'neverTimeout'=>true,
			'options' => [
				'enablePushState' => false,
			],
		],
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'headerOptions' => ['width' => '10%',],
                'value' => function($model, $key, $index, $column){
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function($model, $key, $index, $column){
                    // $searchModel = new SchoolFeesStudentBillSearch();
                    // $searchModel->student_id = $model->student_id;
                    // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_view-subdetail',[
                        // 'searchModel' => $searchModel,
                        'model' => $model,
                    ]);
                },
            ],
            // ['class' => 'yii\grid\SerialColumn'],
            // 'student_id',
            'fullname',
            //~ 'first_name',
            //~ 'middle_name',
            //~ 'last_name',
            'birth_date',
            // 'birth_place',
            'sex',
            'nationality',
            // 'national_id',
            // 'passport_number',
            // 'photo',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',
            ['class' => '\kartik\grid\CheckboxColumn'],

            [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['width' => '80px;'],
            ],
        ],

        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'beforeHeader'=>[
                [
                    // 'columns'=>[
                        // ['content'=>'Faculty', 'options'=>['colspan'=>6, 'class'=>'text-center warning']], 
                        // ['content'=>'Header Before 2', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
                        // ['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
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
                            'title'=> Yii::t('app', 'Add Student')
                        ]) . ' '.
                    Html::a('<i class="glyphicon glyphicon-inbox showModalButton"></i>', 
                        ['batches/set-batch'], 
                        [
                            'data-pjax'=>0, 
                            'class'=>'btn btn-success set-batch', 
                            'title'=> Yii::t('app', 'Select Batch')
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
            'heading'=>'Student Management',
        ],
        'persistResize'=>false,
        'exportConfig'=>true,
    ]); ?>

	
	<?php Pjax::end(); ?>
	<?= Html::a('Add to Batch!', ['batches/set-batch'],['class' => 'btn btn-success set-batch']) ?>
</div>
<?php

$script = <<< JS
	$(document).on('click', '.add-to-batch', function(e){
		e.preventDefault();
	});
	
	$('.set-batch').each(function(){
        var value = $(this).attr('href');
        $(this).attr("value", value);
    });
    
    $('.set-batch').on("click",function(e) {
		e.preventDefault(); // cancel the link itself
		//empty modal content
		$('#modalContent').empty();
	});
	
	$(document).on('click', '.set-batch', function(){
        $('#modalContent').html("");
        $( "#modalHeader > h2" ).html("Create New");
        
        var value = $(this).attr('href');
        $(this).attr("value", value);
        
        if ($('#modal').data('bs.modal').isShown) {
            $('#modal').find('#modalContent')
                    .load($(this).attr('value'));
            $( "#modalHeader > h2" ).html($(this).attr('title'));
        } else {
            //if modal isn't open; open it and load content
            $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));
            $( "#modalHeader > h2" ).html($(this).attr('title'));
        }
        
        
    });
	
JS;
$this->registerJs($script);
?>




