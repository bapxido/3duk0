<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NationalHolidays */

$this->title = $model->national_holiday_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Configuration'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'National Holiday List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-search"></i> <?php echo Yii::t('app', 'View National Holiday') ?></h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->national_holiday_id], ['class' => 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->national_holiday_id], [
            'class' => 'btn btn-block btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> 
	</div>
   </div>
</div>

<div class="col-xs-12">
<div class="box box-primary view-item">
  <div class="national-holidays-view"> 
   <?= DetailView::widget([
        'model' => $model,
	'options'=>['class'=>'table  detail-view'],
        'attributes' => [
           // 'national_holiday_id',
            'national_holiday_name',
            'national_holiday_date',
            'national_holiday_remarks',
            [
		'attribute' => 'create_date',
		'value' => Yii::$app->formatter->asDateTime($model->create_date),
	    ],
            [
		'attribute' => 'create_user_id',
		//'value' => $model->create_user_id->user_login_id,
	    ],
	    [
		'attribute' => 'update_date',
		'value' => ($model->update_date == null) ? " - ": Yii::$app->formatter->asDateTime($model->update_date),
	    ],
	    [
		'attribute' => 'update_user_id',
        //'value' => ($model->update_date == null) ? " - ": $model->update_user_id->user_login_id,
	    ],
           // 'record_status',
        ],
    ]) ?>

</div></div></div>
