<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Batches;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Batches */
/* @var $form yii\widgets\ActiveForm */
//$models = batches::find()->asArray()->all();
//$batches = ArrayHelper::map($models, 'batch_id', 'batch_name');
$this->title = 'Select Batch';
?>

<div class="batches-form ">
	<div class="col-xs-12 col-sm-12 col-lg-12 box box-primary">
		<div class="">
		<?php $form = ActiveForm::begin(); ?>
		

		<?php 
		$html = "<option value=''>Select Batch ...</key>";
		foreach($batches as $key=>$value){
			$html .= "<option value='$key'>".$value."</key>";
			//echo "$html";
		}

		//echo '<select name="batch">'.$html.'</select>'; ?>
		
		<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
			<div class="col-xs-9 col-sm-4 col-lg-4">
				<div class="form-group field-batch-title required">
					<label class="control-label" for="batch-title">Batch Name</label>
					<select id="batch" class="form-control" name="batch">
						<?= $html; ?>
					</select><p class="help-block help-block-error"></p>
				</div>
			</div>
			<div class="form-group col-xs-3 col-sm-4 col-lg-4"><br>
				<?= Html::submitButton('Submit', ['class' => 'btn btn-primary batch-submit']) ?>
			</div>
		</div>

		

		<?php ActiveForm::end(); ?>
		</div>
		<?= Html::button('Submit', ['class' => 'btn btn-success batch-submit']) ?>
    </div>

</div>

<?php

$script = <<< JS
	$('.batch-submit').on("click",function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
        
		var keys = $('#students-pjax').yiiGridView('getSelectedRows');
		//alert($('#batch').val());
		var batch = $('#batch').val(); 
		var array = [batch,keys];
		$.post(
			'?r=batches/set-batch',
			{
				 data: array
			},
			function (msg) {
				//alert(msg);
				if (msg.length>0) {               
		           	alert(msg);
		            $('.modal-backdrop').hide();
					$(document).find('#modal').modal('hide');
		        }else {
		        	$('.modal-backdrop').hide();
					$(document).find('#modal').modal('hide');
					$.pjax.reload({container:'#students-pjax', timeout: 20000});
					setTimeout(alert('students successfully added to a batch!'),5000);
		        }       
			}
		);
		return false;

		//$.post('status.ajax.php', {deviceId: id})
	    //.done( function(msg) { ... } )
	    //.fail( function(xhr, textStatus, errorThrown) {
	    //    alert(xhr.responseText);
	    //});
	});
	
	$('body').on('beforeSubmit', 'form', function (e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		 var form = $(this);
		 // return false if form still have some validation errors
		 if (form.find('.has-error').length) {
				$("#message").html(result.message);
				return false;
		 }
		 // submit form
		 $.ajax({
			  url: form.attr('action'),
			  type: 'post',
			  data: form.serialize(),
			  success: function (response) {
				  return false;
				   $('.modal-backdrop').hide();
				   $(document).find('#modal').modal('hide');
			  }
		 });
		 return false;
	});

JS;
$this->registerJs($script);
?>
