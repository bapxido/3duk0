<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassLessonPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Lesson Plans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-lesson-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Lesson Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'events'=> $events,
    )); ?>
    
</div>
