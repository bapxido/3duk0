<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassSubjectRollSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Subject Rolls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-roll-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Subject Roll', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_subject_enrolment_id',
            'student_course_id',
            'class_subject_header_id',
            'enrolment_date',
            'remarks:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
