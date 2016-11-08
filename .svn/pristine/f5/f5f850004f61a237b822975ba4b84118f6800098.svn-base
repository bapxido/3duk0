<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassSubjectNotesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Subject Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-notes-index box box-primary">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Subject Notes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_subject_notes_id',
            [
                 'attribute' => 'class_subject_header_id',
                 'value' => 'class_subject_name'
            ],
            'topic',
            'sub_topic',
            'notes_document',
            // 'remarks:ntext',
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
