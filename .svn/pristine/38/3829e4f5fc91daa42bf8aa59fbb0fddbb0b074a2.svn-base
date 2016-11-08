<?php

namespace frontend\controllers;

use Yii;
use app\models\ClassSubjectAssignment;
use app\models\ClassSubjectAssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\base\ErrorException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ClassSubjectAssignmentController implements the CRUD actions for ClassSubjectAssignment model.
 */
class ClassSubjectAssignmentController extends Controller
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
     * Lists all ClassSubjectAssignment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassSubjectAssignmentSearch();
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
     * Displays a single ClassSubjectAssignment model.
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
     * Creates a new ClassSubjectAssignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($class_subject_header_id)
    {
        // if($class_subject_header_id == 10)
        try
        {
            // Get logged in user_id
            $user_id = \Yii::$app->user->identity->id;
        
            $model = new ClassSubjectAssignment();
            $model->class_subject_header_id = $class_subject_header_id;
            $model->assignment_document = '';
            $model->create_user_id = $user_id;
            $model->create_date = date('Y-m-d');

            if ($model->load(Yii::$app->request->post())) {
                        // get the instance of the uploaded file
                        $imageName = $model->assignment_title . '_' . $model->create_date;
                        
                        $model->file = UploadedFile::getInstance($model,'file');
                        
                        if($model->file != null){
                            $model->file->saveAs('uploads/assignment_' . $model->create_date . '.' . $model->file->extension);
                                            
                            // save the path in the db column
                            // $model->logo = 'uploads/'.$imageName.'.'.$model->file->extension;
                            $model->assignment_document = 'uploads/assignment_' . $model->create_date . '.' . $model->file->extension;
                        }
                        
                        $model->save();
                // return $this->redirect(['view', 'id' => $model->class_subject_notes_id]);
                return $this->goBack();
            } else {
                return $this->renderAjax('create', [
                // return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } catch (ErrorException $e) {
            Yii::warning("Tried dividing by zero.");
        }
    }

    /**
     * Updates an existing ClassSubjectAssignment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->assignment_id]);
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
     * Deletes an existing ClassSubjectAssignment model.
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

    public function actionError()
    {
        $exception = \Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

    /**
     * Finds the ClassSubjectAssignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClassSubjectAssignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClassSubjectAssignment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
