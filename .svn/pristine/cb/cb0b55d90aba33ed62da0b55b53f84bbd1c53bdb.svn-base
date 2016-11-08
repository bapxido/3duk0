<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "student_guardian".
 *
 * @property integer $student_guardian_id
 * @property integer $student_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $relationship
 * @property string $telephone
 * @property string $mobile
 * @property string $guardian
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 *
 * @property Student $student
 */
class StudentGuardian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_guardian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'middle_name', 'relationship', 'mobile', 'create_user_id'], 'required'],
            [['student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['fullname', 'remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'relationship'], 'string', 'max' => 50],
            [['telephone'], 'string', 'max' => 20],
            [['mobile'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_guardian_id' => 'Student Guardian ID',
            'student_id' => 'Student ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'relationship' => 'Relationship',
            'telephone' => 'Telephone',
            'mobile' => 'Mobile',
            'fullname' => 'Fullname',
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
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }
    
    // Get relationships
    public function getRelationships() { // could be a static func as well
        $models = Relationship::find()->asArray()->all();
        return ArrayHelper::map($models, 'relationship', 'relationship');
    }

    /**
     * @inheritdoc
     * @return StudentGuardianQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentGuardianQuery(get_called_class());
    }
}
