<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $faculty_id
 * @property string $faculty
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $update_user_id
 * @property string $update_date
 *
 * @property Course[] $courses
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faculty', 'create_user_id', 'create_date'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['create_user_id', 'update_user_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['faculty'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'faculty_id' => 'Faculty ID',
            'faculty' => 'Faculty',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'create_date' => 'Create Date',
            'update_user_id' => 'Update User ID',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['faculty_id' => 'faculty_id']);
    }
}
