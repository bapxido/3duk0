<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view box box-primary">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Report', ['report', 'id' => $model->student_id], ['class' => 'btn btn-info', 'target' => '_blank']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
    $student = DetailView::widget([
        'model' => $model,
        'attributes' => [
			'photo:image',
            'student_id',
            'first_name',
            'middle_name',
            'last_name',
            'birth_date',
            'birth_place',
            'sex',
            'nationality',
            'national_id',
            'passport_number',
            'fullname',
            'remarks:ntext',
            //~ 'record_status',
            //~ 'create_user_id',
            //~ 'update_user_id',
            //~ 'create_date',
            //~ 'update_date',
        ],
    ]) ?>
    
      
<!--
      **********************************************************************************
      **********************************************************************************
-->
		<!-- details table will be here -->
		<?php Pjax::begin(); 
		    		
		$StudentContacts = "<h3>Contacts</h3>";
		
	    $StudentContacts = $StudentContacts . \yii\grid\GridView::widget([
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

			],
		]); 
    
		$SpecialNeeds = "<h3>Special Needs</h3>";
		
			$SpecialNeeds = $SpecialNeeds . \yii\grid\GridView::widget([
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
					// 'record_status',
					// 'create_user_id',
					// 'update_user_id',
					// 'create_date',
					// 'update_date',

				],
			]); 
			
		$items = [
        [
            'label'=>'<i class="fa fa-user"></i> Bio-data',
            'content'=>$student,
            'active'=>true
        ],
        [
            'label'=>'<i class="fa fa-envelope"></i> Student Contacts',
            'content'=>$StudentContacts,
            'encode'=>false,
        ],
        [
                     'label'=>'<i class="fa fa-black-tie"></i> Guardian',
                     'encode'=>false,
                     'content'=>$Guardian,
        ],
        [
                     'label'=>'<i class="fa fa-wheelchair"></i> Special Needs',
                     'encode'=>false,
                     'content'=>$SpecialNeeds,
        ],
        [
                     'label'=>'<i class="fa fa-camera"></i> Photos',
                     'encode'=>false,
                     'content'=>'<img src="' .  $model->photo . '" class="img-responsive img-thumbnail" alt="Responsive image width="160px" ">',
        ],
    ];
    
    echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,
    'bordered'=>true,
	]);
?>
		
		<?php Pjax::end(); ?>
<!--
      **********************************************************************************
      **********************************************************************************
-->

</div>
