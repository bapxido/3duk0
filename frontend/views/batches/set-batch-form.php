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
					<select id="batch-select" class="form-control" name="batch-select">
						<?= $html; ?>
					</select><p class="help-block help-block-error"></p>
				</div>
			</div>
			<div class="form-group col-xs-3 col-sm-4 col-lg-4"><br>
				<?= Html::submitButton('Submit', ['class' => 'btn btn-primary batch-submit']) ?>
			</div>
		</div>

		

		<?php ActiveForm::end(); 
			$option = $_POST['batch'];
			echo $option;
		?>
		</div>
		<?= Html::button('Submit', ['class' => 'btn btn-success batch']) ?>
    </div>

</div>

<?php

$script = <<< JS
	//$('.batch-select').on("click",function(e) {
	$("#batch-select").change(function() {
		e.preventDefault();
		e.stopImmediatePropagation();
		$batch_id = $('#batch').val();
		$keys = $('#student-pjax').yiiGridView('getSelectedRows');
		
		$.post(
			//'?r=batches/set-batch',
			'?r=student/add-to-batch',
			{
				batch : $batch_id;
				keys : $keys;
			},
			function () {
				//$.pjax.reload({container:'#student-pjax'});
				//alert('I did it! Processed checked rows.');
				 $('.modal-backdrop').hide();
				 $(document).find('#modal').modal('hide');
			}
		);
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
			  //~ url: form.attr('action'),
			  //~ type: 'post',
			  //~ data: form.serialize(),
			  //~ success: function (response) {
				  //~ return false;
				   //~ //location.reload();//goback
				   //~ //$('#modalContent').html("");
				   //~ $('.modal-backdrop').hide();
				   //~ $(document).find('#modal').modal('hide');
				   //~ //$.pjax.reload({container:'.grid-view'});
				   //~ 
				   
			  }
		 });
		 return false;
	});

JS;
$this->registerJs($script);
?>
