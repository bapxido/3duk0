<?php

use yii\helpers\Html;
use yii\grid\GridView;
use	yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BulletinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bulletins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bulletin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bulletin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bulletin_id',
            'subject',
            'bulletin:ntext',
            'record_status',
            'create_user_id',
            // 'create_date',
            // 'update_user_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
     <?php 
		echo ListView::widget([
		'dataProvider' => $dataProvider,
		'itemView' => '_bulletin'
		]);
		
		//~ ?= \yii\helpers\Url::to(['/chat/send-chat']),
            //~ 'userModel'=>  \app\models\User::className(),
            //~ 'userField' => 'avatarImage'
                //~ ]); ?>
		
   

</div>
