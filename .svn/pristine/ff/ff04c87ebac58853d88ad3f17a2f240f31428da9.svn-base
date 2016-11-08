<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guidance_counselling_category".
 *
 * @property integer $gc_category_id
 * @property string $guidance_counselling_category
 *
 * @property GuidanceCounselling[] $guidanceCounsellings
 */
class GuidanceCounsellingCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guidance_counselling_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guidance_counselling_category'], 'required'],
            [['guidance_counselling_category'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gc_category_id' => 'Gc Category ID',
            'guidance_counselling_category' => 'Guidance Counselling Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuidanceCounsellings()
    {
        return $this->hasMany(GuidanceCounselling::className(), ['gc_category_id' => 'gc_category_id']);
    }
}
