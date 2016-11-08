<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student List Report';

?>

<div class="student-index box box-primary">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            // 'student_id',
            'fullname',
            //~ 'first_name',
            //~ 'middle_name',
            //~ 'last_name',
            'birth_date',
            // 'birth_place',
            'sex',
            'nationality',
            // 'national_id',
            // 'passport_number',
            // 'photo',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'update_user_id',
            // 'create_date',
            // 'update_date',
        ],
    ]); ?>
	<?php Pjax::end(); ?>
</div>
