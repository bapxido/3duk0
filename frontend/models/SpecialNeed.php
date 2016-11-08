<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "special_need".
 *
 * @property integer $special_need_id
 * @property string $special_need
 * @property string $remarks
 * @property string $record_status
 */
class SpecialNeed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'special_need';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['special_need'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['special_need'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'special_need_id' => 'Special Need ID',
            'special_need' => 'Special Need',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }
}
