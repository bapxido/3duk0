<?php

namespace frontend\controllers;

use Yii;
use app\models\Faculty;
use app\models\FacultySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * FacultyController implements the CRUD actions for Faculty model.
 */
class FacultyController extends Controller
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
     * Lists all Faculty models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FacultySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (Yii::$app->request->isAjax) {
			return $this->renderAjax('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
            ]);
		} else {
            return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
        }
    }

    /**
     * Displays a single Faculty model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->request->isAjax) {
			return $this->renderAjax('view', [
				'model' => $this->findModel($id),
            ]);
		} else {
            return $this->render('view', [
				'model' => $this->findModel($id),
			]);
        }
    }

    /**
     * Creates a new Faculty model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // Get logged in user_id
		$user_id = \Yii::$app->user->identity->id;
	
        $model = new Faculty();
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->faculty_id]);
        }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', [
                        'model' => $model
            ]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Faculty model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {      
        // Get logged in user_id
		$user_id = \Yii::$app->user->identity->id;
		
        $model = $this->findModel($id);
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d'); 

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->faculty_id]);
        }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', [
                        'model' => $model
            ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Faculty model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

 public function actionListReport()
    {

        $searchModel = new FacultySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('_index-report', [ 
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE, 
            // A4 paper format
            'format' => Pdf::FORMAT_A4, 
            // portrait orientation
            'orientation' => Pdf::ORIENT_LANDSCAPE, 
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER, 
            // your html content input
            'content' => $content,  
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}', 
             // set mPDF properties on the fly
            'options' => [
                'title' => 'Faculty List Report',
                'subject' => 'Faculty List Report',
                // 'output' => 'emis_student_list_report.pdf',
                'author' => 'SKYMOUSE EMIS',
                'creator' => 'SKYMOUSE EMIS'
                ],
             // call mPDF methods on the fly
            'methods' => [ 
                'SetHeader'=>['SKYMOUSE EMIS'], 
                'SetFooter'=>['Faculty List Report|Page {PAGENO}|{DATE j-F-Y}'],
                'SetProtection' => [array('copy','print'), '', 'p@ssword1'],
            ]
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();  
    }

    /**
     * Finds the Faculty model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Faculty the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Faculty::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
