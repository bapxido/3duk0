<?php

namespace frontend\controllers;

use Yii;
use app\models\ClassTest;
use app\models\ClassTestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ClassTestController implements the CRUD actions for ClassTest model.
 */
class ClassTestController extends Controller
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
     * Lists all ClassTest models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassTestSearch();
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
     * Displays a single ClassTest model.
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
     * Creates a new ClassTest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($class_subject_header_id)
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
    
        $model = new ClassTest();
        $model->class_subject_header_id = $class_subject_header_id;
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post())) {
                    // get the instance of the uploaded file
                    $imageName = $model->test_document . '_' . $model->create_date;
                    
                    $model->file = UploadedFile::getInstance($model,'file');
                    
                    if($model->file != null){
                        $model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);
                                        
                        // save the path in the db column
                        $model->test_document = 'uploads/'.$imageName.'.'.$model->file->extension;
                    }
                    
                    $model->save();
            return $this->goBack();
         }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', [
                        'model' => $model
            ]);
        }  else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ClassTest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($class_test_id)
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
        
        $model = $this->findModel($class_test_id);
        if(!empty($model->test_document)){
            $model->file = $model->test_document;
        }   
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d'); 

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->class_test_id]);
            return $this->goBack();
         }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', [
                        'model' => $model
            ]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ClassTest model.
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
     * Finds the ClassTest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClassTest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClassTest::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
