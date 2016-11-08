<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubjectType;

/**
 * SubjectTypeSearch represents the model behind the search form about `app\models\SubjectType`.
 */
class SubjectTypeSearch extends SubjectType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_type_id'], 'integer'],
            [['subject_type', 'remarks', 'record_status'], 'safe'],
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
        $query = SubjectType::find();

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
            'subject_type_id' => $this->subject_type_id,
        ]);

        $query->andFilterWhere(['like', 'subject_type', $this->subject_type])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
