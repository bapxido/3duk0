<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_admission".
 *
 * @property integer $student_admission_id
 * @property string $admission_date
 * @property integer $academic_period_id
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property integer $update_date
 * @property string $record_status
 */
class StudentAdmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_admission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admission_date', 'academic_period_id', 'create_user_id', 'create_date', 'update_user_id', 'update_date', 'record_status'], 'required'],
            [['admission_date', 'create_date'], 'safe'],
            [['academic_period_id', 'create_user_id', 'update_user_id', 'update_date'], 'integer'],
            [['record_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_admission_id' => 'Student Admission ID',
            'admission_date' => 'Admission Date',
            'academic_period_id' => 'Academic Period ID',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
            'record_status' => 'Record Status',
        ];
    }
}
