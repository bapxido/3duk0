<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassTestType;

/**
 * ClassTestTypeSearch represents the model behind the search form about `app\models\ClassTestType`.
 */
class ClassTestTypeSearch extends ClassTestType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_test_type_id'], 'integer'],
            [['class_test_type', 'remarks', 'record_status'], 'safe'],
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
        $query = ClassTestType::find();

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
            'class_test_type_id' => $this->class_test_type_id,
        ]);

        $query->andFilterWhere(['like', 'class_test_type', $this->class_test_type])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
