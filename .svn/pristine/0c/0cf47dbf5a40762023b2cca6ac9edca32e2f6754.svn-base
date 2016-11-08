<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CourseType;

/**
 * CourseTypeSearch represents the model behind the search form about `app\models\CourseType`.
 */
class CourseTypeSearch extends CourseType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_type_id'], 'integer'],
            [['course_type', 'remarks', 'record_status'], 'safe'],
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
        $query = CourseType::find();

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
            'course_type_id' => $this->course_type_id,
        ]);

        $query->andFilterWhere(['like', 'course_type', $this->course_type])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
