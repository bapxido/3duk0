<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "staff_member_qualifications".
 *
 * @property integer $staff_member_qualification_id
 * @property integer $staff_member
 * @property string $qualification
 * @property string $institution
 * @property string $training_start_date
 * @property string $training_end_date
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 *
 * @property StaffMember $staffMember
 */
class StaffMemberQualifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_member_qualifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_member_id', 'qualification_id', 'qualification_title', 'institution', 'training_start_date', 'training_end_date', 'create_user_id'], 'required'],
            [['staff_member_id', 'qualification_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['training_start_date', 'training_end_date', 'create_date', 'update_date'], 'safe'],
            [['remarks', 'record_status'], 'string'],
            [['qualification_title', 'institution'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_member_qualification_id' => 'Staff Member Qualification ID',
            'staff_member_id' => 'Staff Member',
            'qualification_id' => 'Qualification',
            'qualification_title' => 'Qualification Title',
            'institution' => 'Institution',
            'training_start_date' => 'Training Start Date',
            'training_end_date' => 'Training End Date',
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
    public function getQualification()
    {
        return $this->hasMany(Qualification::className(), ['qualification_id' => 'qualification_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMember()
    {
        return $this->hasOne(StaffMember::className(), ['staff_member_id' => 'staff_member_id']);
    }
    
    // Get qualifications
    public function getQualifications() { // could be a static func as well
        $models = Qualification::find()->asArray()->all();
        return ArrayHelper::map($models, 'qualification_id', 'qualification');
    }
}
