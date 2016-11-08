<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpecialNeed;

/**
 * SpecialNeedSearch represents the model behind the search form about `app\models\SpecialNeed`.
 */
class SpecialNeedSearch extends SpecialNeed
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['special_need_id'], 'integer'],
            [['special_need', 'remarks', 'record_status'], 'safe'],
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
        $query = SpecialNeed::find();

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
            'special_need_id' => $this->special_need_id,
        ]);

        $query->andFilterWhere(['like', 'special_need', $this->special_need])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
