<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "staff_member".
 *
 * @property integer $staff_member_id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $birth_date
 * @property string $birth_place
 * @property string $sex
 * @property integer $nationality_id
 * @property string $national_id
 * @property string $passport_id
 * @property integer $staff_type_id
 * @property string $photo
 * @property string $fullname
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 *
 * @property Nationality $nationality
 * @property StaffType $staffType
 * @property StaffMemberContacts[] $staffMemberContacts
 * @property StaffMemberQualifications[] $staffMemberQualifications
 */
class StaffMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'create_user_id'], 'required'],
            [['birth_date', 'birth_place', 'create_date', 'update_date'], 'safe'],
            [['sex', 'remarks', 'record_status'], 'string'],
            [['nationality_id', 'staff_type_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['title'], 'string', 'max' => 10],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 50],
            [['national_id', 'passport_id'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 250],
            [['fullname'], 'string', 'max' => 152]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_member_id' => 'Staff Member ID',
            'title' => 'Title',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'sex' => 'Sex',
            'nationality_id' => 'Nationality',
            'national_id' => 'National ID',
            'passport_id' => 'Passport ID',
            'staff_type_id' => 'Staff Type',
            'photo' => 'Photo',
            'remarks' => 'Remarks',
            'fullname' => 'Fullname',
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
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['nationality_id' => 'nationality_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffType()
    {
        return $this->hasOne(StaffType::className(), ['staff_type_id' => 'staff_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMemberContacts()
    {
        return $this->hasMany(StaffMemberContacts::className(), ['staff_member_id' => 'staff_member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMemberQualifications()
    {
        return $this->hasMany(StaffMemberQualifications::className(), ['staff_member_id' => 'staff_member_id']);
    }
    
    // Get staff-titles
    public function getStaffTitles() { // could be a static func as well
        $models = StaffTitle::find()->asArray()->all();
        return ArrayHelper::map($models, 'staff_title', 'staff_title');
    }
    
    // Get staff type
    public function getStaffTypes() { // could be a static func as well
        $models = StaffType::find()->asArray()->all();
        return ArrayHelper::map($models, 'staff_type_id', 'staff_type');
    }
    
    // Get nationalities
    public function getNationalities() { // could be a static func as well
        $models = Nationality::find()->asArray()->all();
        return ArrayHelper::map($models, 'nationality_id', 'nationality');
    }

    /**
     * @inheritdoc
     * @return StaffMemberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StaffMemberQuery(get_called_class());
    }
}
