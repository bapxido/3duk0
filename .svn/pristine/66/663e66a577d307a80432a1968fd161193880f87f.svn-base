<?php

namespace frontend\controllers;

use Yii;
use app\models\StudentRegistration;
use app\models\StudentRegistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AttendanceGeneral;
use app\models\AttendanceGeneralSearch;
use app\models\AcademicDay;

/**
 * StudentRegistrationController implements the CRUD actions for StudentRegistration model.
 */
class StudentRegistrationController extends Controller
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
     * Lists all StudentRegistration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentRegistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentRegistration model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StudentRegistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // Get logged in user_id
        $user_id = \Yii::$app->user->identity->id;
            
        $model = new StudentRegistration();
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {

            $student_id = $model->student_id;
            $academic_period_id = $model->academic_period_id;

            // Check if attendance is already populated
            $count = AcademicDay::find()
                ->innerJoinWIth('attendanceGenerals')
                ->where(['academic_period_id' => $academic_period_id])
                ->count();

            if($count == 0)
            {
                $sql = "INSERT INTO attendance_general(academic_day_id, student_id, attendance_status, " .
                    " record_status, create_user_id, create_date ) " .
                    " SELECT academic_day_id, :student_id, 'present', 'active', :create_user_id, :create_date FROM academic_day " .
                    " WHERE academic_period_id = :academic_period_id";

                $connection = \Yii::$app->db;
                $transaction = $connection->beginTransaction();

                try 
                {
                    $command = $connection->createCommand($sql);

                    $command->bindParam(':student_id', $student_id);
                    $command->bindValue(':create_user_id', $user_id);
                    $command->bindValue(':create_date', date('Y-m-d'));
                    $command->bindValue(':academic_period_id', $academic_period_id);

                    $command->execute();

                    $transaction->commit();
                } catch(\Exception $e) {
                    $transaction->rollBack();
                throw $e;
                }
            }

            return $this->redirect(['view', 'id' => $model->student_registration_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StudentRegistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_registration_id]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StudentRegistration model.
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
     * Finds the StudentRegistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentRegistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentRegistration::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
