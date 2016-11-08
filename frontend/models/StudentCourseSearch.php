<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentCourse;

/**
 * StudentCourseSearch represents the model behind the search form about `app\models\StudentCourse`.
 */
class StudentCourseSearch extends StudentCourse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_course_id', 'student_id', 'course_id', 'create_user_id', 'update_user_id', 'update_date'], 'integer'],
            [['enrolment_start_date', 'enrolment_end_date', 'remarks', 'record_status', 'create_date'], 'safe'],
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
        $query = StudentCourse::find();

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
            'student_course_id' => $this->student_course_id,
            'student_id' => $this->student_id,
            'course_id' => $this->course_id,
            'enrolment_start_date' => $this->enrolment_start_date,
            'enrolment_end_date' => $this->enrolment_end_date,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
