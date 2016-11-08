<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassSubjectAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Subject Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-assignment-index  box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Subject Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'assignment_id',
            // 'class_subject_header_id',
            'classSubjectHeader.class_subject_name',
            'assignment_title',
            'assignment_issue_date',
            'assignment_due_date',
            // 'assignment_document',
            // 'remarks:ntext',
            // 'record_status',
            // 'create_date',
            // 'create_user_id',
            // 'update_date',
            // 'update_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
