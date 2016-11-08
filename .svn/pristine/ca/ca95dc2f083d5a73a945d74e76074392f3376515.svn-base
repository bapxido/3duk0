<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "student_contacts".
 *
 * @property integer $student_contact_id
 * @property integer $student_id
 * @property string $physical_address
 * @property string $postal_address
 * @property string $town_village
 * @property string $country
 * @property string $telephone
 * @property string $mobile
 * @property string $email
 * @property string $remarks
 * @property string $record_status
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date
 * @property string $update_date
 *
 * @property Student $student
 */
class StudentContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'postal_address', 'mobile', 'email', 'create_user_id'], 'required'],
            [['student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['physical_address', 'postal_address'], 'string', 'max' => 250],
            [['town_village', 'country', 'email'], 'string', 'max' => 100],
            [['telephone', 'mobile'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_contact_id' => 'Student Contact ID',
            'student_id' => 'Student ID',
            'physical_address' => 'Physical Address',
            'postal_address' => 'Postal Address',
            'town_village' => 'Town Village',
            'country' => 'Country',
            'telephone' => 'Telephone',
            'mobile' => 'Mobile',
            'email' => 'Email',
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
    
    // Get countries
    public function getCountries() { // could be a static func as well
        $models = Country::find()->asArray()->all();
        return ArrayHelper::map($models, 'country', 'country');
    }

    /**
     * @inheritdoc
     * @return StudentContactsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentContactsQuery(get_called_class());
    }
}
