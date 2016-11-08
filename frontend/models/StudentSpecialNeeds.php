<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "student_special_needs".
 *
 * @property integer $student_special_need_id
 * @property integer $student_id
 * @property string $special_need
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 */
class StudentSpecialNeeds extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_special_needs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'special_need', 'create_user_id', 'create_date'], 'required'],
            [['student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['special_need'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_special_need_id' => 'Student Special Need ID',
            'student_id' => 'Student ID',
            'special_need' => 'Special Need',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_user_id' => 'Create User ID',
            'update_user_id' => 'Update User ID',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @inheritdoc
     * @return StudentSpecialNeedsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentSpecialNeedsQuery(get_called_class());
    }
    
    // Get Special Needs
    public static function getSpecialNeeds() 
    {	
        $models = SpecialNeed::find()->asArray()->all();
        return ArrayHelper::map($models, 'speed_need', 'speed_need');
    }
}
