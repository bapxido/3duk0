<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "guidance_counselling".
 *
 * @property integer $guidance_counselling_id
 * @property integer $student_id
 * @property integer $staff_member_id
 * @property string $subject_matter
 * @property integer $gc_category_id
 * @property string $gc_date
 * @property string $case
 * @property string $remarks
 * @property string $record_status
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $update_user_id
 *
 * @property GuidanceCounsellingCategory $gcCategory
 * @property Student $student
 * @property StaffMember $staffMember
 */
class GuidanceCounselling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guidance_counselling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'staff_member_id', 'subject_matter', 'gc_category_id', 'gc_date', 'case', 'create_date', 'create_user_id'], 'required'],
            [['student_id', 'staff_member_id', 'gc_category_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['gc_date', 'create_date', 'update_date'], 'safe'],
            [['case', 'remarks', 'record_status'], 'string'],
            [['subject_matter'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'guidance_counselling_id' => 'Guidance Counselling ID',
            'student_id' => 'Student',
            'staff_member_id' => 'Staff Member',
            'subject_matter' => 'Subject Matter',
            'gc_category_id' => 'Guidance and Counselling Category',
            'gc_date' => 'Guidance and Counselling Date',
            'case' => 'Case',
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
    public function getGcCategory()
    {
        return $this->hasOne(GuidanceCounsellingCategory::className(), ['gc_category_id' => 'gc_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffMember()
    {
        return $this->hasOne(StaffMember::className(), ['staff_member_id' => 'staff_member_id']);
    }

    // Get student
    public function getStudents() { // could be a static func as well
        $models = Student::find()->asArray()->all();
        return ArrayHelper::map($models, 'student_id', 'fullname');
    }

    // Get student
    public function getGcCategories() { // could be a static func as well
        $models = GuidanceCounsellingCategory::find()->asArray()->all();
        return ArrayHelper::map($models, 'gc_category_id', 'guidance_counselling_category');
    }

    // Get student
    public function getStaffMembers() { // could be a static func as well
        $models = StaffMember::find()->asArray()->all();
        return ArrayHelper::map($models, 'staff_member_id', 'fullname');
    }
}
