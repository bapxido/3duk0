<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestExamMarks;

/**
 * TestExamMarksSearch represents the model behind the search form about `app\models\TestExamMarks`.
 */
class TestExamMarksSearch extends TestExamMarks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_exam_mark_id', 'class_test_id', 'student_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['marks_obtained', 'maximum_score', 'percentage'], 'number'],
            [['remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = TestExamMarks::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // $this->load($params);

        // if (!$this->validate()) {
        //     // uncomment the following line if you do not want to return any records when validation fails
        //     // $query->where('0=1');
        //     return $dataProvider;
        // }

        $query->andFilterWhere([
            'test_exam_mark_id' => $this->test_exam_mark_id,
            'class_test_id' => $this->class_test_id,
            'student_id' => $this->student_id,
            'marks_obtained' => $this->marks_obtained,
            'maximum_score' => $this->maximum_score,
            'percentage' => $this->percentage,
            'create_date' => $this->create_date,
            'create_user_id' => $this->create_user_id,
            'update_date' => $this->update_date,
            'update_user_id' => $this->update_user_id,
        ]);

        $query->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
