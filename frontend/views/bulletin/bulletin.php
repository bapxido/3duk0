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

<div class="box box-solid box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><span class="fa  fa-2x fa-newspaper-o"> &nbsp; </span><?= Html::encode($this->title) ?></h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
       <span data-toggle="tooltip" title="<?=$bulletinCount ?> recent News Articles" class="badge bg-red"><?=$bulletinCount ?></span>
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <!-- In box-tools add this button if you intend to use the contacts pane -->
<!--<button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>-->
      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      
<!--
      <span class="label label-primary">News</span>
-->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
    <?php 
		echo ListView::widget([
		'dataProvider' => $dataProvider,
		'itemView' => '_bulletin',
		'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
		
		]);
		
    ?>
  </div><!-- /.box-body -->
  <div class="box-footer">
    <?= Html::a('<span class="label label-primary">More News</span>', ['bulletin/index'] );?>
</div><!-- /.box -->
