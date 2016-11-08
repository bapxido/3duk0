<!--mpdf

<htmlpageheader name="header">
<div>
<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 14pt; color: #000088;">
<tr>
	<td width="50%" align="left">
		<span>SKYMOUSE EDUKO-SIMS</span>
		<br />
			Plot 6406, Tlhwane Road
		<br />
			Gaborone
		<br />
		<span> Tel: +267 391 5458 </span>
		<br />
	</td>
	<td width="50%" style="text-align: right;">
		<img src="uploads/photos/students/1_10102015171632.png" width="126px" />
	</td>
</tr>
</table>
</div>
</htmlpageheader>
mpdf-->

<!-- set the headers/footers - they will occur from here on in the document -->
<!--mpdf
<sethtmlpageheader name="header" page="0" value="on" show-this-page="1" />
mpdf-->

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">
	<br/><br/><br/><br/>

    <div>
		<h3><?= Html::encode($this->title) ?></h3> 
		<?=
    		Html::img($model->photo,
    		[	'alt'=>$model->photo, 
    			'class'=>'badge img-responsive img-thumbnail text-hide',
    			'width'=>'180px',
    			'align'=>'right'
    		]); 
    	?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'student_id',
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
            // [
            // 	'label' => 'photo',
            // 	'value' => function ($data) {
				        //    $url = $data->photo;
            //      			return  Html::img($url,['alt'=>'yii']);
				        // },
            // ],
            // [
				// 'label'=>'photo',
				// 'attribute' => 'photo',
				// 'format' => 'raw',
				// 'value'=>function($data){
				// 	return Html::img($data->photo,
				//     		['width' => '60px']);
				// }
				// 'value'=>function ($data) {
				//            return Html::img($data->photo,
				//        		['width' => '60px']);
				//         },
            // ],
         //    [
	        //     'attribute' => 'photo',
	        //     'format' => 'html',
	        //     'label' => 'ImageColumnLable',
	        //     'value' => function ($model) {
	        //         return Html::img($model->photo,
	        //             ['width' => '60px']);
	        //     },
	        // ],
            // 'photo',
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
		<?php Pjax::begin(); ?>
		    		
		<h3>Contacts</h3>
		
	    <?= \yii\grid\GridView::widget([
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
		]); ?>
		
		<h3>Guardian</h3>
		
		<?= \yii\grid\GridView::widget([
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
		]); ?>
    
		<h3>Special Needs</h3>
		
			<?= \yii\grid\GridView::widget([
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
			]); ?>
		
		<?php Pjax::end(); ?>
<!--
      **********************************************************************************
      **********************************************************************************
-->

</div>

