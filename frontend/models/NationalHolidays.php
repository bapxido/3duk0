<?php
namespace app\models;

use Yii;
use app\models\User;
/**
 * This is the model class for table "national_holidays".
 *
 * @property integer $national_holiday_id
 * @property string $national_holiday_name
 * @property string $national_holiday_date
 * @property string $national_holiday_remarks
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_user_id
 * @property integer $record_status
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class NationalHolidays extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'national_holidays';
    }
    public static function find()
    {
	return parent::find()->andWhere(['<>', 'record_status', 2]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['national_holiday_name', 'national_holiday_date', 'create_date', 'create_user_id'], 'required','message'=>''],
            [['national_holiday_date', 'create_date', 'update_date'], 'safe'],
            [['create_user_id', 'update_user_id', 'record_status'], 'integer'],
            [['national_holiday_name'], 'string', 'max' => 50],
            [['national_holiday_remarks'], 'string', 'max' => 100],
            [['national_holiday_name', 'national_holiday_date'], 'unique', 'targetAttribute' => ['national_holiday_name', 'national_holiday_date'], 'message' => Yii::t('app', 'The combination of National Holiday Name and National Holiday Date has already been taken.')]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'national_holiday_id' => Yii::t('app', 'National Holiday ID'),
            'national_holiday_name' => Yii::t('app', 'Name'),
            'national_holiday_date' => Yii::t('app', 'Date'),
            'national_holiday_remarks' => Yii::t('app', 'Remarks'),
            'create_date' => Yii::t('app', 'Created At'),
            'create_user_id' => Yii::t('app', 'Created By'),
            'update_date' => Yii::t('app', 'Updated At'),
            'update_user_id' => Yii::t('app', 'Updated By'),
            'record_status' => Yii::t('app', 'Is Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'create_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'update_user_id']);
    }
}
