<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "class_test".
 *
 * @property integer $class_test_id
 * @property integer $class_subject_header_id
 * @property integer $title
 * @property integer $class_test_type_id
 * @property string $test_document
 * @property string $maximum_score
 * @property string $test_date
 * @property string $remarks
 * @property string $record_status
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_user_id
 *
 * @property ClassSubjectHeader $classSubjectHeader
 * @property ClassTest $classTestType
 * @property ClassTest[] $classTests
 */
class ClassTest extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_header_id', 'title', 'class_test_type_id', 'maximum_score', 'create_date', 'create_user_id'], 'required'],
            [['class_subject_header_id', 'class_test_type_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['maximum_score'], 'number'],
            [['test_date', 'create_date', 'update_date'], 'safe'],
            [['title', 'remarks', 'record_status'], 'string'],
            [['file'], 'file'],
            [['test_document'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_test_id' => 'Class Test',
            'class_subject_header_id' => 'Class Subject Header',
            'title' => 'Title',
            'class_test_type_id' => 'Class Test Type',
            'test_document' => 'Test Document',
            'file' => 'Test Document File',
            'maximum_score' => 'Maximum Score',
            'test_date' => 'Test Date',
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
    public function getClassSubjectHeader()
    {
        return $this->hasOne(ClassSubjectHeader::className(), ['class_subject_header_id' => 'class_subject_header_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassTestType()
    {
        return $this->hasOne(ClassTestType::className(), ['class_test_type_id' => 'class_test_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassTests()
    {
        return $this->hasMany(ClassTest::className(), ['class_test_type_id' => 'class_test_type_id']);
    }

        // Get nationalities
    public function getClassTestTypes() { // could be a static func as well
        $models = ClassTestType::find()->asArray()->all();
        return ArrayHelper::map($models, 'class_test_type_id', 'class_test_type');
    }
}
