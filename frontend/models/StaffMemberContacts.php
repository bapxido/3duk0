<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "staff_member_contacts".
 *
 * @property integer $staff_member_contact_id
 * @property integer $staff_member_id
 * @property string $postal_address
 * @property string $physical_address
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
 * @property StaffMember $staffMember
 */
class StaffMemberContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_member_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_member_id', 'postal_address', 'mobile', 'email', 'record_status', 'create_user_id'], 'required'],
            [['staff_member_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['remarks', 'record_status'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['postal_address', 'physical_address'], 'string', 'max' => 250],
            [['town_village', 'country', 'email'], 'string', 'max' => 100],
            [['telephone', 'mobile'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_member_contact_id' => 'Staff Member Contact ID',
            'staff_member_id' => 'Staff Member ID',
            'postal_address' => 'Postal Address',
            'physical_address' => 'Physical Address',
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
    public function getStaffMember()
    {
        return $this->hasOne(StaffMember::className(), ['staff_member_id' => 'staff_member_id']);
    }

    // Get countries
    public function getCountries() { // could be a static func as well
        $models = Country::find()->asArray()->all();
        return ArrayHelper::map($models, 'country', 'country');
    }
    
    /**
     * @inheritdoc
     * @return StaffMemberContactsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StaffMemberContactsQuery(get_called_class());
    }
}
