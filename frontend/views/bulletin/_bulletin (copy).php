<?php
use yii\helpers\Html;
?>  

<?=Html::a('<i class="fa fa-graduation"></i><span class="direct-chat-text direct-chat-info">'.$model->subject.'</span>', ['bulletin/view','id' => $model->bulletin_id] );?>
<?=$model->bulletin;?> 
