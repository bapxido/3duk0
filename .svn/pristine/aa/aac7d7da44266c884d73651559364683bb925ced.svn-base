<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubjectTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subject Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-type-index box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subject Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'subject_type_id',
            'subject_type',
            'remarks:ntext',
            'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
