<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_method".
 *
 * @property integer $payment_method_id
 * @property string $payment_method
 *
 * @property SchoolFeesPayment[] $schoolFeesPayments
 */
class PaymentMethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment_method';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_method'], 'required'],
            [['payment_method'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payment_method_id' => 'Payment Method ID',
            'payment_method' => 'Payment Method',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolFeesPayments()
    {
        return $this->hasMany(SchoolFeesPayment::className(), ['payment_method' => 'payment_method_id']);
    }
}
