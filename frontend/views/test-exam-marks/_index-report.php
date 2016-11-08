<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestExamMarksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Exam Marks';
?>

<div class="test-exam-marks-index box box-primary">

<?php
    // the grid columns setup (only two column entries are shown here 
    // you can add more column entries you need for your use case)
    $gridColumns = [
        // 'classTest.title',
        'student.fullname',
        // the marks_obtained column configuration
        [
            'class' => 'kartik\grid\EditableColumn',
            'attribute'=>'marks_obtained', 
            'readonly'=>function($model, $key, $index, $widget) {
                return (!$model->record_status === 'Active'); // do not allow editing of inactive records
            },
            'editableOptions' => [
                'header' => 'Marks Obtained',
                'size' => 'sm',
                'inputType' => \kartik\editable\Editable::INPUT_TEXT,
                'options' => [
                    'pluginOptions' => ['min'=>0, 'max'=>200]
                ],
                // 'afterInput' => function ($form, $widget) {
                //     return $form->field($widget->model, "remarks")
                //             ->textArea(['placeholder'=>'Enter remarks...', 
                //                 'rows'=>5,
                //                 'style'=>'width:400px',
                //                 ]);
                //     // echo $form->field($widget->model, 'percentage');
                //     // echo $form->field($widget->model, 'remarks')->widget(\kartik\widgets\INPUT_TEXT::classname(), 
                //     //     ['options'=>['placeholder'=>'Remarks']
                //     // ])->label(false);
                //     // echo Editable::widget([
                //     //     'name'=>'remarks', 
                //     //     'asPopover' => true,
                //     //     'displayValue' => 'more...',
                //     //     'inputType' => \kartik\editable\Editable::INPUT_TEXTAREA,
                //     //     'value' => "Raw denim you...",
                //     //     'header' => 'remarks',
                //     //     'submitOnEnter' => false,
                //     //     'size'=>'lg',
                //     //     'options' => ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'Enter remarks...']
                //     // ]);
                // },
            ],

            'hAlign'=>'right', 
            'vAlign'=>'middle',
            'width'=>'100px',
            'format'=>['decimal', 2],
            'pageSummary' => true
        ],
        'maximum_score',
        [
            'class' => '\kartik\grid\FormulaColumn',
            'attribute'=>'percentage',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // Write your formula below
                return (($widget->col(1, $p) / $widget->col(2, $p)) * 100);
            }
        ],
        [
            'class' => 'kartik\grid\EditableColumn',
            'attribute'=>'remarks', 
            'width' => '80%',
            'readonly'=>function($model, $key, $index, $widget) {
                return (!$model->record_status === 'Active'); // do not allow editing of inactive records
            },
            'editableOptions' => [
                'header' => 'Remarks',
                'size' => 'lg',
                'inputType' => \kartik\editable\Editable::INPUT_TEXTAREA,
                // 'options' => [
                //     'pluginOptions' => ['min'=>0, 'max'=>200]
                // ],
            ],

            'hAlign'=>'left', 
            'vAlign'=>'middle',
            'width'=>'40%',
            // 'format'=>['decimal', 2],
            'pageSummary' => false
        ],

        // ['class' => 'kartik\grid\ActionColumn'],
    ];
     
    // the GridView widget (you must use kartik\grid\GridView)
    Pjax::begin(); 
    echo \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => $gridColumns,
        // 'tableOptions' => ['width' => '10%'],
        'responsive'=>true,
        'hover'=>true,
    ]);
    Pjax::end();
?>

</div>
