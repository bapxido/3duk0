<?php

namespace frontend\controllers;

use Yii;
use app\models\AcademicPeriod;
use app\models\AcademicDay;
use app\models\AcademicPeriodSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\i18n\Formatter;

/**
 * AcademicPeriodController implements the CRUD actions for AcademicPeriod model.
 */
class AcademicPeriodController extends Controller
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
     * Lists all AcademicPeriod models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AcademicPeriodSearch();
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
     * Displays a single AcademicPeriod model.
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
     * Creates a new AcademicPeriod model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AcademicPeriod();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->academic_period_id]);
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
     * Updates an existing AcademicPeriod model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->academic_period_id]);
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
     * Deletes an existing AcademicPeriod model.
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
     * Generates academic days.
     * @param integer $id
     * @return mixed
     */
    public function actionGenerateAcademicDays($id)
    {
        try 
        {
            //Get academic period model, then get start and end date.
            $model = $this->findModel($id);
            $start_date = new \DateTime($model->start_date);
            $end_date = new \DateTime($model->end_date);

            $count = AcademicDay::find()
                ->where(['academic_period_id' => $id])
                ->count();

            // $transaction = $connection->beginTransaction();
            // Check if AcademicDay is already populated 
            if($count == 0)
            {     
                while($start_date <= $end_date)
                {    
                    $academicDay = new AcademicDay();                     
                    $academicDay->academic_period_id = $id;
                    $academicDay->day_date = $start_date->format('Y-m-d');
                    $academicDay->week_number = \date("oW", strtotime($start_date->format('Y-m-d')));
                    $academicDay->record_status = 'active';
                    $academicDay->save();

                    // increment date by 1 day
                    $start_date->add(new \DateInterval('P1D'));
                }
            }

            return $this->redirect(['academic-day/index', 'academic_period_id' => $id]);
            // $transaction->commit();
        } catch(\Exception $e) {
            // $transaction->rollBack();
            throw $e;
        }
    }

    /**
     * Finds the AcademicPeriod model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AcademicPeriod the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AcademicPeriod::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
