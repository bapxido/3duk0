<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassTest;

/**
 * ClassTestSearch represents the model behind the search form about `app\models\ClassTest`.
 */
class ClassTestSearch extends ClassTest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_test_id', 'class_subject_header_id', 'title', 'class_test_type_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['test_document', 'test_date', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
            [['maximum_score'], 'number'],
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
        $query = ClassTest::find();

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
            'class_test_id' => $this->class_test_id,
            'class_subject_header_id' => $this->class_subject_header_id,
            'title' => $this->title,
            'class_test_type_id' => $this->class_test_type_id,
            'maximum_score' => $this->maximum_score,
            'test_date' => $this->test_date,
            'create_date' => $this->create_date,
            'create_user_id' => $this->create_user_id,
            'update_date' => $this->update_date,
            'update_user_id' => $this->update_user_id,
        ]);

        $query->andFilterWhere(['like', 'test_document', $this->test_document])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
