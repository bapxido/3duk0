<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuidanceCounselling;

/**
 * GuidanceCounsellingSearch represents the model behind the search form about `app\models\GuidanceCounselling`.
 */
class GuidanceCounsellingSearch extends GuidanceCounselling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guidance_counselling_id', 'student_id', 'staff_member_id', 'gc_category_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['subject_matter', 'gc_date', 'case', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = GuidanceCounselling::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'guidance_counselling_id' => $this->guidance_counselling_id,
            'student_id' => $this->student_id,
            'staff_member_id' => $this->staff_member_id,
            'gc_category_id' => $this->gc_category_id,
            'gc_date' => $this->gc_date,
            'create_date' => $this->create_date,
            'create_user_id' => $this->create_user_id,
            'update_date' => $this->update_date,
            'update_user_id' => $this->update_user_id,
        ]);

        $query->andFilterWhere(['like', 'subject_matter', $this->subject_matter])
            ->andFilterWhere(['like', 'case', $this->case])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
