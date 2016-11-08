<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "class_test_type".
 *
 * @property integer $class_test_type_id
 * @property string $class_test_type
 * @property string $remarks
 * @property string $record_status
 *
 * @property ClassTest[] $classTests
 */
class ClassTestType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_test_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_test_type'], 'required'],
            [['remarks', 'record_status'], 'string'],
            [['class_test_type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_test_type_id' => 'Class Test Type ID',
            'class_test_type' => 'Class Test Type',
            'remarks' => 'Remarks',
            'record_status' => 'Record Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassTests()
    {
        return $this->hasMany(ClassTest::className(), ['class_test_type_id' => 'class_test_type_id']);
    }
}
