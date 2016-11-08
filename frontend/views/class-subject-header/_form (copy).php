<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectHeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subject-header-form">

    <?php $form = ActiveForm::begin(['id'=>$model->formName()]); ?>
    
    <?php if($model->isNewRecord): ?>
	
		<?= $content = $this->render('form_fields', ['model' => $model, 'form' => $form]) ?>
	
    <?php endif?>

<!--
      **********************************************************************************
      **********************************************************************************
-->
    	<?php if(!$model->isNewRecord):?>
		<!-- details table will be here -->
		<!-- control buttons -->
		<!--Popup-->
			
		<h3>Class Subject Roll</h3>
		
		<?php Pjax::begin(['id'=>'classSubjectRollGrid'])?>
			
		<?= \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getClassSubjectRolls(),
					'pagination' => false
					]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

					// 'class_subject_enrolment_id',   
					// 'student_course_id',
					// 'studentCourse.student_course_id',
					// 'viewStudentSubjectClassRoll.student_course_id',
					// [
					//  'attribute' => 'student_course_id',
					//  'value' => 'viewStudentSubjectClassRoll.fullname'
					//  ],
					 // 'attributes' => [
					 //    [        
					 //        'attribute' => 'student_course_id',
					 //        'format' => 'raw',
					 //        'value' => 'viewStudentSubjectClassRoll',
					 //    ],
					// ],
					// 'class_subject_header_id',
					'enrolment_date',
					'remarks:ntext',
					// 'record_status',
					// 'create_user_id',
					// 'create_date',
					// 'update_user_id',
					// 'update_date',
				[
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'class-subject-roll',
				'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
					'value'=>Url::to(['class-subject-roll/create', 'class_subject_header_id' => $model->class_subject_header_id]),],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-roll/view', 
                                    'id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'view'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-roll/update', 
                                    'class_subject_header_id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'update'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                    ],
                ],
			],
		]); ?>

		<?php Pjax::end() ?>
		
		
			
		<h3>Subject Notes</h3>

		<?php Pjax::begin(['id'=>'classSubjectNotesGrid'])?>
			
		<?= \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getClassSubjectNotes(),
					'pagination' => false
					]),
			'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],

		            // 'class_subject_notes_id',
		            // [
		            //      'attribute' => 'class_subject_header_id',
		            //      'value' => 'class_subject_header_id'
		            // ],
		            'topic',
		            'sub_topic',
		            // 'notes_document',
                    [   
                    'attribute'=>'notes_document',
                    'format' => 'raw',
                        'value'=>function ($model) {
                        return Html::a(Html::encode("download"),
                            ['class-subject-notes/download', 'filepath' => $model->notes_document], 
                            ['title' => $model->topic,'target'=>'_blank']
                            );
                        },
                    ],
		            // 'remarks:ntext',
		            // 'record_status',
		            // 'create_user_id',
		            // 'create_date',
		            // 'update_user_id',
		            // 'update_date',
				[
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'class-subject-notes',
				'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
					'value'=>Url::to(['class-subject-notes/create', 'class_subject_header_id' => $model->class_subject_header_id]),],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-notes/view', 
                                    'id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'view'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-notes/update', 
                                    'class_subject_header_id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'update'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                    ],
                ],
			],
		]); ?>
		
		<?php Pjax::end() ?>


		<h3>Subject Assignments</h3>
		
		<?php Pjax::begin(['id'=>'classSubjectAssignmentsGrid'])?>
			
		<?= \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getClassSubjectAssignments(),
					'pagination' => false
					]),
			'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],

                        'assignment_id',
			            'class_subject_header_id',
			            'assignment_title',
			            'assignment_issue_date',
			            'assignment_due_date',
			            // 'assignment_document',
			            // 'remarks:ntext',
			            // 'record_status',
			            // 'create_date',
			            // 'create_user_id',
			            // 'update_date',
			            // 'update_id',
				[
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'class-subject-assignment',
				'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
					'value'=>Url::to(['class-subject-assignment/create', 'class_subject_header_id' => $model->class_subject_header_id]),],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-assignment/view', 
                                    'id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'view'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-subject-assignment/update', 
                                    'class_subject_header_id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'update'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                    ],
                ],
			],
		]); ?>
		
		<?php Pjax::end() ?>

		
		<h3>Class Tests</h3>
		
		<?php Pjax::begin(['id'=>'classTests'])?>
		
		<?= \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getClassTests(),
					'pagination' => false
					]),
	        'columns' => [
	            ['class' => 'yii\grid\SerialColumn'],

	            // 'class_test_id',
	            // 'class_subject_header_id',
	            'title',
            	[
				 'attribute' => 'class_test_type_id',
				 'value' => 'classTestType.class_test_type'
				],
                [   
                'attribute'=>'test_document',
                'format' => 'raw',
                    'value'=>function ($model) {
                    return Html::a(Html::encode("download"),
                        ['class-test/download', 'filepath' => $model->test_document], 
                        ['title' => $model->title,'target'=>'_blank']
                        );
                    },
                ],
	            // 'maximum_score',
	            // 'test_date',
	            // 'remarks:ntext',
	            // 'record_status',
	            // 'create_date',
	            // 'create_user_id',
	            // 'update_date',
	            // 'update_user_id',

	            // ['class' => 'yii\grid\ActionColumn'],
	            				[
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'class-test',
				'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
					'value'=>Url::to(['class-test/create', 'class_subject_header_id' => $model->class_subject_header_id]),],
                'template' => '{generate} {view} {update} {delete}',
                'buttons' => [
                        'generate' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-fire"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/test-exam-marks/generate-mark-sheet', 
                                    'class_test_id' => $model->class_test_id,
                                    // 'target' => '_blank', 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'generate'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-test/view', 
                                    'id' => $model->class_subject_header_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'view'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/class-test/update', 
                                    'class_test_id' => $model->class_test_id, 
                                    ]),
                                [
                                    'class' => 'showModalButton',
                                    'title' => Yii::t('app', 'update'),
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalContent',
                                    'data-id' => $key,
                                    'data-pjax' => '0',
                                ]);
                        },
                    ],
                ],
	        ],
	    ]); ?>

	    <?php Pjax::end() ?>

		<?php endif?>
		
<!--
      **********************************************************************************
      **********************************************************************************
-->

    <?php ActiveForm::end(); ?>

</div>