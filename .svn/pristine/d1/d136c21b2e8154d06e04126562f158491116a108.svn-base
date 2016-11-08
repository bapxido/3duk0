<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use	yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Bulletin */

$this->title = "News";
$this->params['breadcrumbs'][] = ['label' => 'Bulletins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bulletin-view">

    <h1><?= $model->subject ?></h1>


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bulletin_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bulletin_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<!--
    ?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bulletin_id',
            'subject',
            'bulletin:ntext',
            'record_status',
            'create_user_id',
            'create_date',
            'update_user_id',
            'update_date',
        ],
    ]) ?>
-->
    

<div class="innernews">	
	<div class="newshead calendartype">
		<div class="calendar noimage">
			<span class="position1 weekday">Fri</span>
			<span class="position2 day">06</span>
			<span class="position3 month">Feb</span>																																																					
			<span class="position5 year">2015</span>
		</div>
	</div>
																									
	<div class="newsinfo">
		<p class="newsextra">
			<span class="detail detail_author">
				<span class="news_author">Written by: <?=$model->username?>&nbsp;|</span>
				</span><span class="delimiter">&nbsp;</span>
				<span class="detail detail_date">
					<span class="news_date"> Create Date: <?=$model->create_date?> | Update Date: <?=$model->update_date?></span>
				</span>
		</p>
		<p class="newsextra">
			<span class="detail detail_tags">
				<i class="fa fa-tags"></i>
				<span class="">business</span>
			</span>
		</p>																											
		<h4 class="newstitle">
		<span><?= $model->subject?></span>
		</h4>
		<div class="newsintro">
			<?= $model->bulletin?>
		</div>
	</div>	
</div>
    

</div>
