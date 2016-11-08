<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassSubjectRoll;

/**
 * ClassSubjectRollSearch represents the model behind the search form about `app\models\ClassSubjectRoll`.
 */
class ClassSubjectRollSearch extends ClassSubjectRoll
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_enrolment_id', 'student_course_id', 'class_subject_header_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['enrolment_date', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = ClassSubjectRoll::find();

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
            'class_subject_enrolment_id' => $this->class_subject_enrolment_id,
            'student_course_id' => $this->student_course_id,
            'class_subject_header_id' => $this->class_subject_header_id,
            'enrolment_date' => $this->enrolment_date,
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
