<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\ClassSubjectHeader */

$this->title = $model->class_subject_header_id;
$this->params['breadcrumbs'][] = ['label' => 'Class Subject Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-header-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->class_subject_header_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->class_subject_header_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'class_subject_header_id',
            'staffMember.fullname',         
            'subject.subject',
            'class_subject_name',
            'academicPeriod.academic_period',
            'remarks:ntext',
            'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',
        ],
    ]) ?>

    <h3>Subject Notes</h3>

    <?php Pjax::begin(['id'=>'classSubjectNotesGrid'])?>

    <?= \yii\grid\GridView::widget([
            'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => $model->getClassSubjectNotes(),
                    'pagination' => false
                    ]),
            'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'class_subject_notes_id',
                    // [
                    //      'attribute' => 'class_subject_header_id',
                    //      'value' => 'class_subject_header_id'
                    // ],
                    'topic',
                    'sub_topic',
                    // 'notes_document',
                    // 'remarks:ntext',
                    // 'record_status',
                    // 'create_user_id',
                    // 'create_date',
                    // 'update_user_id',
                    // 'update_date',
            ],
        ]); ?>

    <?php Pjax::end() ?>

    
    <h3>Class Subject Roll</h3>
        
    <?php Pjax::begin(['id'=>'classSubjectRollGrid'])?>
            
        <?= \yii\grid\GridView::widget([
            'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => $model->getClassSubjectRolls(),
                    'pagination' => false
                    ]),
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

            ],
        ]); ?>

    <?php Pjax::end() ?>

</div>
