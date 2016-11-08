<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "student_registration".
 *
 * @property integer $student_registration_id
 * @property integer $academic_period_id
 * @property integer $student_id
 * @property string $registration_number
 * @property string $admission_date
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 *
 * @property AcademicPeriod $academicPeriod
 * @property Student $student
 */
class StudentRegistration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_period_id', 'student_id', 'registration_number', 'admission_date', 'record_status', 'create_user_id'], 'required'],
            [['academic_period_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['admission_date', 'create_date', 'update_date'], 'safe'],
            [['remarks', 'record_status'], 'string'],
            [['registration_number'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_registration_id' => 'Student Registration ID',
            'academic_period_id' => 'Academic Period ID',
            'student_id' => 'Student ID',
            'registration_number' => 'Registration Number',
            'admission_date' => 'Admission Date',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'update_user_id' => 'Update User ID',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicPeriod()
    {
        return $this->hasOne(AcademicPeriod::className(), ['academic_period_id' => 'academic_period_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    // Get AcademicPeriods
    public function getAcademicPeriods() { // could be a static func as well
        $models = AcademicPeriod::find()->asArray()->all();
        return ArrayHelper::map($models, 'academic_period_id', 'academic_period');
    }

    // Get Students
    public function getStudents() { // could be a static func as well
        $models = Student::find()->asArray()->all();
        return ArrayHelper::map($models, 'student_id', 'fullname');
    }
}
