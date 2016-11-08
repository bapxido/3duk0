<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSpecialNeedsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Special Needs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-special-needs-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Special Needs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_special_need_id',
            'student_id',
            'special_need',
            'remarks:ntext',
            'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>
	
</div>
