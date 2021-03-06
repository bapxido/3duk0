<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;


/* @var $this yii\web\View */
/* @var $model app\models\StaffMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-member-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal', 'options' => ['enctype' => 'multipart/form-data','id'=>'staff-member-form']]);?>

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
		
		Pjax::begin(['id'=>'staffMemberContactsGrid']);

		$Contacts = $Contacts . \yii\grid\GridView::widget([
		'dataProvider' => new \yii\data\ActiveDataProvider([
			'query' => $model->getStaffMemberContacts(),
			'pagination' => false
			]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'staff_member_contact_id',
				//'staff_member_id',
				'postal_address',
				'physical_address',
				'town_village',
				// 'country',
				'telephone',
				'mobile',
				'email:email',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'update_user_id',
				// 'create_date',
				// 'update_date',

				//~ ['class' => 'yii\grid\ActionColumn'],
				 [
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'staff-member-contacts',
                // 'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
                'template' => '{view} {update} {delete}',
                'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/staff-member-contacts/view', 
                                    'id' => $model->staff_member_id, 
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
                                    '/staff-member-contacts/create', 
                                    'staff_member_id' => $model->staff_member_id, 
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

			
		<?php 
		
		$staffMemberQualifications = "<h3>Qualifications</h3>";

		Pjax::begin(['id'=>'staffMemberQualificationsGrid']);	
		
	    $staffMemberQualifications = $staffMemberQualifications . \yii\grid\GridView::widget([
		'dataProvider' => new \yii\data\ActiveDataProvider([
			'query' => $model->getStaffMemberQualifications(),
			'pagination' => false
			]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'staff_member_qualification_id',
				//'staff_member',
				// [
				//  'attribute' => 'qualification_id',
				//  'value' => 'qualification'
				//  ],
				'qualification_title',
				'institution',
				'training_start_date',
				'training_end_date',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'update_user_id',
				// 'create_date',
				// 'update_date',

				//~ ['class' => 'yii\grid\ActionColumn'],
				[
                'class' => yii\grid\ActionColumn::className(),
                'controller' => 'staff-member-qualifications',
                // 'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
                'template' => '{view} {update} {delete}',
                'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a(
                                '<span class="glyphicon glyphicon-eye-open"></span>',
                                Yii::$app->urlManager->createUrl([
                                    '/staff-member-qualifications/view', 
                                    'id' => $model->staff_member_id, 
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
                                    '/staff-member-qualifications/create', 
                                    'staff_member_id' => $model->staff_member_id, 
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
				// [
				// 'class' => yii\grid\ActionColumn::className(),
				// 'controller' => 'staff-member-qualifications',
				// 'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
				// 'template' => '{update} {delete}',
				// 'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
				// 	'value'=>Url::to(['staff-member-qualifications/create', 'staff_member_id' => $model->staff_member_id]),],					
				// 	'buttons' => [
				// 		'view' => function ($url, $model, $key) {
				// 			return Html::a('<span class="activity-view-link glyphicon glyphicon-eye-open"></span>','#', [
				// 				'id' => 'activity-view-link',
				// 				'title' => Yii::t('yii', 'View'),
				// 				'data-toggle' => 'modal',
				// 				'data-target' => '#activity-modal',
				// 				'data-id' => $key,
				// 				'data-pjax' => '0',

				// 			]);
				// 		},
				// 	],
				// ],
			],
		]); 
		?>

		
		 <?php Pjax::end();
	    
	     $items = [
		 [
            'label'=>'<i class="fa fa-user"></i> Staff Member',
            'content'=>$this->render('form_fields', ['model' => $model, 'form' => $form]),
            'encode'=>false,
        ],
        [
            'label'=>'<i class="fa fa fa-black-tie"></i> Contacts',
            'content'=>$Contacts,
            'encode'=>false,
        ],
        [
            'label'=>'<i class="fa fa-graduation-cap"></i> Qualifications',
            'content'=>$staffMemberQualifications,
            'encode'=>false,
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


</div>
