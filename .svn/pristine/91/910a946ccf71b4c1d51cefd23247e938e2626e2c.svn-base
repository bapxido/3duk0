<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventsCalendar */

$this->title = "Calendar Events";
$this->params['breadcrumbs'][] = ['label' => 'Events Calendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-calendar-view">

    <h1><?= $model->event_title ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->event_id], [
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
            'event_id',
            'event_title',
            'start_date',
            'end_date',
            'venue',
            'description:ntext',
            'record_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>
    
    ///
</div>
