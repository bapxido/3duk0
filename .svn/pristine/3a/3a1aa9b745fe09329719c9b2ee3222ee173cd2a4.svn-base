<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcademicDaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-day-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic Day', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'academic_day_id',
            'academic_period_id',
            'day_date',
            'week_number',
            'day_type_id',
            // 'remarks:ntext',
            // 'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
