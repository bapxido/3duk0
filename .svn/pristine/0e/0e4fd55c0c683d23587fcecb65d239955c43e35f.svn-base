<?php

namespace frontend\controllers;

use Yii;
use app\models\StudentSpecialNeeds;
use app\models\StudentSpecialNeedsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentSpecialNeedsController implements the CRUD actions for StudentSpecialNeeds model.
 */
class StudentSpecialNeedsController extends Controller
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
     * Lists all StudentSpecialNeeds models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentSpecialNeedsSearch();
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
     * Displays a single StudentSpecialNeeds model.
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
     * Creates a new StudentSpecialNeeds model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($student_id)
    {       
		// Get logged in user_id
		$user_id = \Yii::$app->user->identity->id;
	
        $model = new StudentSpecialNeeds();
        $model->student_id = $student_id;
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //~ return $this->redirect(['view', 'id' => $model->student_special_need_id]);
            //return $this->goBack();
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StudentSpecialNeeds model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($student_special_need_id)
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
        
        $model = $this->findModel($student_special_need_id);
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d');  

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->student_special_need_id]);
            return $this->goBack();
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StudentSpecialNeeds model.
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
     * Finds the StudentSpecialNeeds model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentSpecialNeeds the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentSpecialNeeds::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
