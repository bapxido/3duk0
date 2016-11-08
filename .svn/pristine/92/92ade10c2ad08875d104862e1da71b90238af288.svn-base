<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuidanceCounsellingCategory;

/**
 * GuidanceCounsellingCategorySearch represents the model behind the search form about `app\models\GuidanceCounsellingCategory`.
 */
class GuidanceCounsellingCategorySearch extends GuidanceCounsellingCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gc_category_id'], 'integer'],
            [['guidance_counselling_category'], 'safe'],
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
        $query = GuidanceCounsellingCategory::find();

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
            'gc_category_id' => $this->gc_category_id,
        ]);

        $query->andFilterWhere(['like', 'guidance_counselling_category', $this->guidance_counselling_category]);

        return $dataProvider;
    }
}
