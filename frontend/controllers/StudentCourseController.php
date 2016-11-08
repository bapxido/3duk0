<?php

namespace frontend\controllers;

use Yii;
use app\models\StudentCourse;
use app\models\StudentCourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentCourseController implements the CRUD actions for StudentCourse model.
 */
class StudentCourseController extends Controller
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
     * Lists all StudentCourse models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentCourseSearch();
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
     * Displays a single StudentCourse model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->request->isAjax) {
			return $this->renderAjax('view', [
				'model' => $this->findModel($id),
            ]);
        }elseif (Yii::$app->request->isAjax) {
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
     * Creates a new StudentCourse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($student_id)
    {
		// Get logged in user_id
		$user_id = \Yii::$app->user->identity->id;
	
        $model = new StudentCourse();
        $model->student_id = $student_id;
        $model->enrolment_start_date = date('Y-m-d');
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->goBack();
        }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', [
                        'model' => $model
            ]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StudentCourse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($student_course_id)
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
        
        $model = $this->findModel($student_course_id);
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d');  

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->student_course_id]);
        //~ }elseif (Yii::$app->request->isAjax) {
            //~ return $this->renderAjax('_form', [
                        //~ 'model' => $model
            //~ ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StudentCourse model.
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
     * Finds the StudentCourse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentCourse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentCourse::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
