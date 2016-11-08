<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\bootstrap\Modal;

/* @var $this \yii\web\View */
/* @var $content string */
//AppAsset::register($this);

//dmstr\web\AdminLteAsset::register($this);

//$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php //$this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>
	<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
 <?php
	//~ yii\bootstrap\Modal::begin([
		//~ 'headerOptions' => ['id' => 'modalHeader'],
		//~ 'header' => '<h2>title</h2>',
		//~ 'id' => 'modal',
		//~ 'size' => 'modal-lg',
		//~ //keeps from closing modal with esc key or by clicking out of the modal.
		//~ // user must click cancel or X to close
		//~ 'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
	//~ ]);
	//~ echo "<div id='modalContent'></div>";
	//~ yii\bootstrap\Modal::end();
	?>
<?php $this->endPage() ?>

