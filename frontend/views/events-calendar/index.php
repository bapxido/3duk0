<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsCalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events Calendar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-calendar-index box box-primary">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Events Calendar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'event_id',
            'event_title',
            'start_date',
            'end_date',
            'venue',
            // 'description:ntext',
            // 'record_status',
            // 'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <?php
//~ $wizard_config = [
    //~ 'id' => 'stepwizard',
    //~ 'button_previous' => Yii::t('Previous'),
    //~ 'button_next' => Yii::t('Next'),
    //~ 'button_save' => Yii::t('Save'),
    //~ 'button_skip' => Yii::t('Skip'),
    //~ 'steps' => [
        //~ [
            //~ 'title' => 'Step 1',
            //~ 'icon' => 'glyphicon glyphicon-cloud-download',
            //~ 'content' => '<h3>Step 1</h3>This is step 1',
        //~ ],
        //~ [
            //~ 'title' => 'Step 2',
            //~ 'icon' => 'glyphicon glyphicon-cloud-upload',
            //~ 'content' => '<h3>Step 2</h3>This is step 2',
        //~ ],
        //~ [
            //~ 'title' => 'Step 3',
            //~ 'icon' => 'glyphicon glyphicon-transfer',
            //~ 'content' => '<h3>Step 3</h3>This is step 3',
        //~ ],
    //~ ],
    //~ 'complete_content' => "You are done!", // Optional final screen
    //~ 'start_step' => 2, // Optional to start with a specific step
//~ ];
?>
<!--
 
?= \drsdre\wizardwidget\AutoloadExample::widget($wizard_config); ?>
    
-->


</div>
