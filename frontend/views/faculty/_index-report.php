<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FacultySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Faculties';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'faculty_id',
            'faculty',
            'remarks:ntext',
            'record_status',
            //'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
