<?php

use yii\helpers\Html;
use yii\grid\GridView;
use	yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsCalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events Calendar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-calendar-index box box-solid box-primary">

    <h1><span class="fa fa-calendar">&nbsp; </span><?= Html::encode($this->title) ?></h1>
    <div  id="loading"></div>

    <?php 
		//~ echo ListView::widget([
		//~ 'dataProvider' => $dataProvider,
		//~ 'itemView' => '_events'
		//~ ]);
		
    ?>
    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
     'events'=> $events,
    )); ?>
    


</div>
