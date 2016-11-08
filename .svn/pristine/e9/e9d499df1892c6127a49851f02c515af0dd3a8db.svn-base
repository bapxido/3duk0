<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassLessonPlan;

/**
 * ClassLessonPlanSearch represents the model behind the search form about `app\models\ClassLessonPlan`.
 */
class ClassLessonPlanSearch extends ClassLessonPlan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson_plan_id', 'class_subject_header_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['title', 'notes', 'lesson_date', 'create_date', 'update_date'], 'safe'],
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
        $query = ClassLessonPlan::find();

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
            'lesson_plan_id' => $this->lesson_plan_id,
            'class_subject_header_id' => $this->class_subject_header_id,
            'lesson_date' => $this->lesson_date,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
