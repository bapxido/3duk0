<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassTestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-test-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_test_id',
            'class_subject_header_id',
            'title',
            'class_test_type_id',
            'test_document',
            // 'maximum_score',
            // 'test_date',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
