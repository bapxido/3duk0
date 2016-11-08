<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "school_fees_payment".
 *
 * @property integer $school_fees_payment_id
 * @property integer $school_fees_student_bill_id
 * @property string $payment_amount
 * @property string $payment_date
 * @property integer $payment_method
 * @property string $balance
 * @property string $remarks
 * @property string $record_status
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_user_id
 *
 * @property SchoolFeesStudentBill $schoolFeesStudentBill
 * @property PaymentMethod $paymentMethod
 */
class SchoolFeesPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_fees_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees_student_bill_id', 'payment_date', 'payment_method', 'create_date', 'create_user_id'], 'required'],
            [['school_fees_student_bill_id', 'payment_method', 'create_user_id', 'update_user_id'], 'integer'],
            [['payment_amount', 'balance'], 'number'],
            [['payment_date', 'create_date', 'update_date'], 'safe'],
            [['remarks', 'record_status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_fees_payment_id' => 'School Fees Payment ID',
            'school_fees_student_bill_id' => 'School Fees Student Bill ID',
            'payment_amount' => 'Payment Amount',
            'payment_date' => 'Payment Date',
            'payment_method' => 'Payment Method',
            'balance' => 'Balance',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
            'create_date' => 'Create Date',
            'create_user_id' => 'Create User ID',
            'update_date' => 'Update Date',
            'update_user_id' => 'Update User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolFeesStudentBill()
    {
        return $this->hasOne(SchoolFeesStudentBill::className(), ['school_fees_student_bill_id' => 'school_fees_student_bill_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentMethod()
    {
        return $this->hasOne(PaymentMethod::className(), ['payment_method_id' => 'payment_method']);
    }

    // Get Payment Method
    public function getPaymentMethods() { // could be a static func as well
        $models = PaymentMethod::find()->asArray()->all();
        return ArrayHelper::map($models, 'payment_method_id', 'payment_method');
    }
}
