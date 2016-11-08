<?php

namespace frontend\controllers;

use Yii;
use app\models\StudentApplication;
use app\models\StudentApplicationSearch;
use app\models\StudentApplicationCourse;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\base\Model;

/**
 * StudentApplicationController implements the CRUD actions for StudentApplication model.
 */
class StudentApplicationController extends Controller
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
     * Lists all StudentApplication models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentApplicationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentApplication model.
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
     * Creates a new StudentApplication model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StudentApplication();
        $connection = \Yii::$app->db;
        $modelDetails = [];
        
        $user_id = \Yii::$app->user->identity->id;
        $model->create_user_id = $user_id;
        $model->create_date = date('Y-m-d');
        
        $status = $model->application_status;
        
        if ($status = "Submitted")
			$model->application_date = date('Y-m-d');
       
        if ($model->load(Yii::$app->request->post())) {
			//$model->save();
			if (isset($_POST['course_id']) && isset($_POST['attendance_type_id'])) {
				$course_id = $_POST['course_id'];
				$attendance_type_id = $_POST['attendance_type_id'];
				
				for ($i = 1; $i <= 3; $i++) {
					$StudentApplicationCourse = new StudentApplicationCourse();
                    $StudentApplicationCourse->student_application_id = 1;
					$StudentApplicationCourse->course_id = $course_id[$i];
					$StudentApplicationCourse->attendance_type_id  = $attendance_type_id[$i];
					$StudentApplicationCourse->student_application_id = $model->student_application_id;
					$StudentApplicationCourse->application_status = "Pending";
					$modelDetails[] = $StudentApplicationCourse;
				}

				if ($model->validate()) { //error here // Model::validateMultiple($modelDetails) &&
                    $valid = $model->validate();
					foreach($modelDetails as $modelDetail) {
						//$this->redirect(array('student-application-course/create', 'model'=>$modelDetail));
						//$StudentApplicationCourse->setAttributes($modelDetail);//
                        $modelDetail->student_application_id = 0;
                        //echo "Validity = ".$modelDetail->validate();//Yii::$app->end();
                        $valid = $modelDetail->validate() && $valid;
                        if ($valid) {
                            $transaction = $connection->beginTransaction();

                            try {
                                $model->save(false);
                                $modelDetail->student_application_id = $model->student_application_id;
                                $modelDetail->save(false);
                                $transaction->commit();
                                return $this->redirect(['view', 'id' => $model->student_application_id]);
                            } catch(Exception $e) {
                                $transaction->rollback();
                                echo $e->getMessage(); exit;

                            }
                        }else{
                            $msg = 'Unable to save record. The information course information is not valid.';
                            throw new NotFoundHttpException($msg);
                        }
					}
                
				} else{
					throw new NotFoundHttpException('Unable to save record. information provided is not valid.');
				}
			}
        }

        if (Yii::$app->request->isAjax) {
			return $this->renderAjax('create', [
						'model' => $model,
						//'modelDetails' => $modelDetails,
						//'applicationcourse' => $dataProvider,
			]);
        }else {
			return $this->render('create', [
				'model' => $model,
				//'modelDetails' => $modelDetails,
				//'applicationcourse' => $dataProvider,
			]);
		}
    }

    /**
     * Updates an existing StudentApplication model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        $user_id = \Yii::$app->user->identity->id;
        $model->update_user_id = $user_id;
        $model->update_date = date('Y-m-d');
        
        $status = $model->application_status;
        
        if ($status = "Submitted")
			$model->application_date = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_application_id]);
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
     * Deletes an existing StudentApplication model.
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
     * Finds the StudentApplication model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentApplication the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentApplication::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
