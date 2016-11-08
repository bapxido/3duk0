<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">

	<?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['id'=>'course-form']]);?>

    <?= $form->field($model, 'faculty_id')->dropDownList($model->faculties); ?>

    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_type_id')->dropDownList($model->coursetypes); ?>

    <?= $form->field($model, 'course_duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

<!--
    <?= $form->field($model, 'create_user_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_user_id')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<!--
      **********************************************************************************
      **********************************************************************************
-->
    	<?php if(!$model->isNewRecord):?>
    	<?php Pjax::begin(); ?>
		<!-- details table will be here -->
		<!--Popup-->
			
		<h3>Subjects</h3>
	
		<?= \yii\grid\GridView::widget([
			'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getSubjects(),
				'pagination' => false
				]),
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'subject_id',
				//'course_id',
				'subject',
				'subject_code',
				//~ 'subject_type_id',
				[
				 'attribute' => 'subject_type_id',
				 'value' => 'subjectType.subject_type'
				 ],
				// 'credits',
				// 'remarks:ntext',
				// 'record_status',
				// 'create_user_id',
				// 'create_date',
				// 'update_user_id',
				// 'update_date',

				[
					'class' => yii\grid\ActionColumn::className(),
					'controller' => 'subject',
					'header' => '<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New', 
					'template' => '{view} {update} {delete}',
					'headerOptions' => ['width' => '10%', 'class' => 'showModalButton alert alert-info',
						'value'=>Url::to(['subject/create', 'course_id' => $model->course_id]),],
						'buttons' => [
							'update' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-pencil"></span>', 
									Yii::$app->urlManager->createUrl(['/subject/update', 'id' => $model->subject_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'Update Subject'),
									'data-toggle' => 'modal',
									'data-target' => '#modalContent',
									'data-id' => $key,
									'data-pjax' => '0',
								]);
							},
							'view' => function ($url, $model, $key) {
								return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
									Yii::$app->urlManager->createUrl(['/subject/view', 'id' => $model->subject_id ]),
									[
									'class' => 'showModalButton',
									'title' => Yii::t('app', 'View Subject'),
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
		<?php endif?>	
<!--
      **********************************************************************************
      **********************************************************************************
-->

    <?php ActiveForm::end(); ?>

</div>
