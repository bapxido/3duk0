<?php

// namespace app\controllers;
namespace frontend\controllers;

use Yii;
use app\models\Bulletin;
use app\models\BulletinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BulletinController implements the CRUD actions for Bulletin model.
 */
class BulletinController extends Controller
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
     * Lists all Bulletin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BulletinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Lists all Bulletin models.
     * @return mixed
     */
    public function actionBulletin()
    {
        $searchModel = new BulletinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //Order::find()->where(['user_id' => $this->id])->count();
        $bulletinCount = $dataProvider->getTotalCount();

        return $this->renderpartial('bulletin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'bulletinCount' => $bulletinCount,
        ]);
    }

    /**
     * Displays a single Bulletin model.
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
     * Creates a new Bulletin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
    
        $model = new Bulletin();
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bulletin_id]);
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
     * Updates an existing Bulletin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $user_id = \Yii::$app->user->identity->id;
        
        $model = $this->findModel($id);
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d'); 

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bulletin_id]);
        } else {
            return $this->renderpartial('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Bulletin model.
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
     * Finds the Bulletin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bulletin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bulletin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function readMoreFunction($story_desc) {  
		//Number of characters to show  
		$chars = 25;  
		$story_desc = substr($story_desc,0,$chars);  
		$story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
		$story_desc = $story_desc;  
		return $story_desc;  
	}  
}
