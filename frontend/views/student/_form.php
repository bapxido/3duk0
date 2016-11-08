<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<?php Pjax::begin(['id'=>'studentFormGrid'])?>

<div class="student-form">
	
	<?php $form = ActiveForm::begin([
			'id' => 'student-form',
			'enableAjaxValidation' => true,
			'fieldConfig' => [
			    'template' => "{label}{input}{error}",
			],
    ]); ?>
		
	<?php if($model->isNewRecord): ?>
	
		<?= $content = $this->render('form_fields', ['model' => $model, 'form' => $form]) ?>
	
    <?php endif?>
<!--
      **********************************************************************************
      **********************************************************************************
-->
    	<?php if(!$model->isNewRecord):?>
		<!-- details table will be here -->
		<!--Popup-->
		<?php 
		$Contacts = "<h3>Contacts</h3>";
		
	    $Contacts = $Contacts . \yii\grid\GridView::widget([
		'dataProvider' => new \yii\data\ActiveDataProvider([
			'query' => $model->getStudentContacts(),
			'pagination' => false
			]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				// 'student_contact_id',
				// 'student_id',
				'physical_address',
				'postal_address',
				'town_village',
				// 'country',
				// 'telephone',
				'mobile',
				// 'email:email',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'update_user_id',
				// 'create_date',
				// 'update_date',

				//~ ['class' => 'yii\grid\ActionColumn'],
				[
				'class' => yii\grid\ActionColumn::className(),
				'controller' => 'student-contacts',
				'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				'template' => '{view} {update} {delete}',
				'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
					'value'=>Url::to(['student-contacts/create', 'student_id' => $model->student_id]),],
				'buttons' => [
						'update' => function ($url, $model, $key) {
							return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
								//'/student-contacts/update', 
								Yii::$app->urlManager->createUrl(['/student-contacts/update', 'id' => $model->student_contact_id ]),
								[
								'class' => 'showModalButton',
								'title' => Yii::t('app', 'Update Student Contact'),
								'data-toggle' => 'modal',
								'data-target' => '#modalContent',
								'data-id' => $key,
								'data-pjax' => '0',
							]);
						},
						'view' => function ($url, $model, $key) {
							return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
								Yii::$app->urlManager->createUrl(['/student-contacts/view', 'id' => $model->student_contact_id ]),
								[
								'class' => 'showModalButton',
								'title' => Yii::t('app', 'View Student Contact'),
								'data-toggle' => 'modal',
								'data-target' => '#modalContent',
								'data-id' => $key,
								'data-pjax' => '0',
							]);
						}
					],
				],
			],
		]); 
		
		$Guardian = "<h3>Guardian</h3>";
		
		$Guardian = $Guardian . \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getStudentGuardians(),
				'pagination' => false
				]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				// 'student_guardian_id',
				// 'student_id',
				//~ 'first_name',
				//~ 'middle_name',
				//~ 'last_name',
				'fullname',
				'relationship',
				'telephone',
				'mobile',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'update_user_id',
				// 'create_date',
				// 'update_date',

				[
					'class' => yii\grid\ActionColumn::className(),
					'controller' => 'student-guardian',
					'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
					'template' => '{view} {update} {delete}',
					'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
						'value'=>Url::to(['student-guardian/create', 'student_id' => $model->student_id]),],
					'buttons' => [
							'update' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
									//'/student-contacts/update', 
									Yii::$app->urlManager->createUrl(['/student-guardian/update', 'id' => $model->student_guardian_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'Update Student Guardian'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							},
							'view' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',
									//'/student-contacts/update', 
									Yii::$app->urlManager->createUrl(['/student-guardian/view', 'id' => $model->student_guardian_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'View Student Gurdian'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							}
						],
					],
			],
		]); 
    
		$SpecialNeeds = "<h3>Special Needs</h3>";
		
			$SpecialNeeds =  $SpecialNeeds . \yii\grid\GridView::widget([
				'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getStudentSpecialNeeds(),
					'pagination' => false
					]),
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],

					// 'student_special_need_id',
					// 'student_id',
					'special_need',
					'remarks:ntext',
					'record_status',
					// 'create_user_id',
					// 'update_user_id',
					// 'create_date',
					// 'update_date',


					[
						'class' => yii\grid\ActionColumn::className(),
						'controller' => 'student-special-needs',
						'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
						'template' => '{view} {update} {delete}',
						'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
							'value'=>Url::to(['student-special-needs/create', 'student_id' => $model->student_id]),],
						'buttons' => [
	                        'view' => function ($url, $model, $key) {
	                            return Html::a(
	                                '<span class="glyphicon glyphicon-eye-open"></span>',
	                                Yii::$app->urlManager->createUrl([
	                                    '/student-special-needs/view', 
	                                    'id' => $model->student_special_need_id, 
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
	                                    '/student-special-needs/update', 
	                                    'student_special_need_id' => $model->student_special_need_id, 
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
	                        'view' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',
									//'/student-contacts/update', 
									Yii::$app->urlManager->createUrl(['/student-special-needs/view', 
										'id' => $model->student_special_need_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'View Special Needs'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							}
                    	],
                	],
				],
			]); 
			
		$EnrolledCourses = "<h3>Enrolled Courses</h3>";
			
		$EnrolledCourses = $EnrolledCourses . \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getStudentCourses(),
					'pagination' => false
					]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//~ 'student_course_id',
				//~ 'student_id',
				'course.course',
				'enrolment_start_date',
				'enrolment_end_date',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'create_date',
				// 'update_user_id',
				// 'update_date',

				[
					'class' => yii\grid\ActionColumn::className(),
					'controller' => 'student-course',
					'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
					'template' => '{view} {update} {delete}',
					'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
						'value'=>Url::to(['student-course/create', 'student_id' => $model->student_id]),],
						'buttons' => [
	                        'view' => function ($url, $model, $key) {
	                            return Html::a(
	                                '<span class="glyphicon glyphicon-eye-open"></span>',
	                                Yii::$app->urlManager->createUrl([
	                                    '/student-course/view', 
	                                    'id' => $model->student_course_id, 
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
	                                    '/student-course/update', 
	                                    'student_course_id' => $model->student_course_id, 
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
	                        'view' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',
									//'/student-contacts/update', 
									Yii::$app->urlManager->createUrl(['/student-course/view', 'id' => $model->student_course_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'View Student Course'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							}
                    	],
					],
			],
		]); 


   //    **********************************************************************************
   //    *  School Fees
   //    **********************************************************************************

		
		$SchoolFeesStudentBill = "<h3>School Fees</h3>";
			
		$SchoolFeesStudentBill = $SchoolFeesStudentBill . \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
					'query' => $model->getSchoolFeesStudentBills(),
					'pagination' => false
					]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

		            // 'school_fees_student_bill_id',
		            'school_fees_id',
		            // 'student_id',
		            'bill_date',
		            'bill_amount',
		            'paid_amount',
		            'balance',
		            // 'remarks:ntext',
		            // 'record_status',

				[
					'class' => yii\grid\ActionColumn::className(),
					'controller' => 'school-fees-student-bill',
					'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
					'template' => '{view} {update} {delete}',
					'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
						'value'=>Url::to(['/school-fees-student-bill/create', 
							'student_id' => $model->student_id]),],
						'buttons' => [
	                        'view' => function ($url, $model, $key) {
	                            return Html::a(
	                                '<span class="glyphicon glyphicon-eye-open"></span>',
	                                Yii::$app->urlManager->createUrl([
	                                    '/school-fees-student-bill/view', 
	                                    'id' => $model->school_fees_student_bill_id, 
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
	                                    '/school-fees-student-bill/update', 
	                                    'student_course_id' => $model->school_fees_student_bill_id, 
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
	                        'view' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',
									//'/student-contacts/update', 
									Yii::$app->urlManager->createUrl([
										'/school-fees-student-bill/view', 
										'id' => $model->school_fees_student_bill_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'View Student Course'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							}
                    	],
					],
			],
		]); 

		 $items = [
		 [
            'label'=>'<i class="fa fa-user"></i> Update Student',
            'content'=>$this->render('form_fields', ['model' => $model, 'form' => $form]),
            'encode'=>false,
        ],
        [
            'label'=>'<i class="fa fa-envelope"></i> Student Contacts',
            'content'=>$Contacts,
            'encode'=>false,
        ],
        [
            'label'=>'<i class="fa fa-black-tie"></i> Guardian',
            'content'=>$Guardian,
            'encode'=>false,
        ],
[
             'label'=>'<i class="fa fa-wheelchair"></i> Special Needs',
             'encode'=>false,
             'content'=>$SpecialNeeds,
        ],
        [
	         'label'=>'<i class="fa fa-book"></i> School Fees',
	         'encode'=>false,
	         'content'=>$SchoolFeesStudentBill,
        ],
        [
	         'label'=>'<i class="fa fa-list-alt"></i> Enrolled Courses',
	         'encode'=>false,
	         'content'=>$EnrolledCourses,
        ]
    ];
    
    echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,
    'bordered'=>true,
	]);
	?>
		
		<?php endif?>
		
<!--
      **********************************************************************************
      **********************************************************************************
-->

    <?php ActiveForm::end(); ?>


	<?php Pjax::end() ?>
		

</div>
