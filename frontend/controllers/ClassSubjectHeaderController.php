<?php

namespace frontend\controllers;

use Yii;
use app\models\ClassSubjectHeader;
use app\models\ClassSubjectHeaderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClassSubjectHeaderController implements the CRUD actions for ClassSubjectHeader model.
 */
class ClassSubjectHeaderController extends Controller
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
     * Lists all ClassSubjectHeader models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassSubjectHeaderSearch();
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
     * Displays a single ClassSubjectHeader model.
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
     * Creates a new ClassSubjectHeader model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {    
		// Store return Url
		$this->storeReturnUrl();
		        
        // Get logged in user_id
		$user_id = \Yii::$app->user->identity->id;
	
        $model = new ClassSubjectHeader();
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //~ return $this->redirect(['view', 'id' => $model->class_subject_header_id]);
            return $this->goBack();
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
     * Updates an existing ClassSubjectHeader model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        // Store return Url
        $this->storeReturnUrl();

        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
        
        $model = $this->findModel($id);
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d');   

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->class_subject_header_id]);
        }elseif (Yii::$app->request->isAjax) {
			//$cs->scriptMap['jquery.js'] = false;
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
     * Deletes an existing ClassSubjectHeader model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
    * Download files
    **/

    public function actionDownload($filepath)
    {
        return \Yii::$app->response->sendFile($filepath);
    }

    /**
     * Finds the ClassSubjectHeader model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClassSubjectHeader the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClassSubjectHeader::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    private function storeReturnUrl()
	{
		Yii::$app->user->returnUrl = Yii::$app->request->url;
	}
}
