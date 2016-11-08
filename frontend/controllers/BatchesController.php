<?php

namespace frontend\controllers;

use Yii;
use app\models\Batches;
use app\models\BatchesSearch;
use app\models\StudentBatches;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;

/**
 * BatchesController implements the CRUD actions for Batches model.
 */
class BatchesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Batches models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BatchesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Batches model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Batches model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Batches();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->batch_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Batches model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->batch_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Batches model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
     public function actionSetBatch()
    {
        $user_id = \Yii::$app->user->identity->id;
		//$data = $_POST['data'];
		if (isset($_POST['data'][0])) {
			//if there are students IDs slected
			if (isset($_POST['data'][1])) {
				//Yii::$app->params['batch'] = $_POST['batch'];
				$data = $_POST['data'];
				$batch_id =  $data[0];
				$keys =  $data[1];
				//print_r($keys);
				
				
				//$studentBatch->batch_id = 
				
				$i=0;
				foreach ($keys as $key) {
					$studentBatch = new StudentBatches();
					$studentBatch->batch_id = $batch_id;
					$studentBatch->create_date = date('Y-m-d');
					$studentBatch->create_user_id = $user_id;
					$studentBatch->student_id = $key;
					$i = $i + 1;
				   
				   if ($studentBatch->save()) {
					} else {
						$error = 'Cannot save this record; Data supplied is not valid: instance '.$i;
						//print_r($studentBatch);
						throw new \Exception($error);
					}
				}
			}else{
				$msg = 'No student selected! Please select students to add to this batch!';
                return $msg;
				throw new \Exception($msg);
			}
				
			//return $this->goBack();
		}else{
			$models = batches::find()->asArray()->all();
			$batches = ArrayHelper::map($models, 'batch_id', 'batch_name');//batch_name
			
			return $this->renderAjax('_set-batch-form', [
                'batches' => $batches,
                'models' => $models,
            ]);
		}
		//goback;
        //return $this->redirect(['index']);
    }

    /**
     * Finds the Batches model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Batches the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Batches::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
