<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassTestTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Test Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-test-type-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Test Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_test_type_id',
            'class_test_type',
            'remarks:ntext',
            'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
