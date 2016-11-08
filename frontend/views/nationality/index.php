<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NationalitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nationalities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nationality-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nationality', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nationality_id',
            'nationality',
            'remarks:ntext',
            'record_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
