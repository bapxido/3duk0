<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'SKYMOUSE EDUKO-EMIS';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('./css/custom.css');
?>
<div class="login-box row">
	<div class="col-lg-7">
		<div class="login-logo">
			<?= Html::a('<span class="logo-lg">'. Html::img('images/EDUKO-Logo.png', ['alt'=>'logo', 'class'=>'img-circle-logo']). '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?><br>
			<?= Html::a('<span class="logo-lg">'. Html::encode($this->title) . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
		</div><!-- /.login-logo -->
	</div>
	<div class="col-lg-5">
	<!--<div class="login-logo">
		?= Html::a('<span class="logo-lg">'. Html::encode($this->title) . Html::img('images/EDUKO-Logo.png', ['alt'=>'logo', 'class'=>'img-circle-logo']). '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
	</div> /.login-logo -->
	<div class="login-box-body">

	<p>Please fill out the following fields to login:</p>

	 <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
	 <?= $form->field($model, 'username') ?>
	 <?= $form->field($model, 'password')->passwordInput() ?>
	 
	<div class="row-fluid">
		<div class="col-lg-6">
		  <div class="checkbox icheck">
			<label class="">
			  <?= $form->field($model, 'rememberMe')->checkbox() ?>
			</label>
		  </div>
		</div><!-- /.col -->
		<div class="col-xs-6">
		  <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
		  <?= Html::a('<i class="fa fa-signup"></i>Create an Account', ['site/signup'], ['class' => 'btn btn-primary btn-block btn-flat showModalButton'] ) ?>
		</div><!-- /.col -->
	</div>
	

	 <div class="social-auth-links text-center">
	  <!--<p>- OR -</p>
	  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
	  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>-->
	</div><!-- /.social-auth-links -->

	
	<div style="color:#999;margin:1em 0">
		If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
	</div>
                
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div><!--col-lg-4-->
    </div>
</div>
