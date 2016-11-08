<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relationship".
 *
 * @property integer $relationship_id
 * @property string $relationship
 * @property string $remarks
 * @property string $record_status
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['relationship'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['relationship'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'relationship_id' => 'Relationship ID',
            'relationship' => 'Relationship',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }
}
