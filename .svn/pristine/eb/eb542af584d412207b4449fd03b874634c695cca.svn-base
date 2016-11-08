<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassSubjectAssignment;

/**
 * ClassSubjectAssignmentSearch represents the model behind the search form about `app\models\ClassSubjectAssignment`.
 */
class ClassSubjectAssignmentSearch extends ClassSubjectAssignment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assignment_id', 'class_subject_header_id', 'assignment_due_date', 'create_user_id', 'update_id'], 'integer'],
            [['assignment_title', 'assignment_issue_date', 'assignment_document', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = ClassSubjectAssignment::find();

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
            'assignment_id' => $this->assignment_id,
            'class_subject_header_id' => $this->class_subject_header_id,
            'assignment_issue_date' => $this->assignment_issue_date,
            'assignment_due_date' => $this->assignment_due_date,
            'create_date' => $this->create_date,
            'create_user_id' => $this->create_user_id,
            'update_date' => $this->update_date,
            'update_id' => $this->update_id,
        ]);

        $query->andFilterWhere(['like', 'assignment_title', $this->assignment_title])
            ->andFilterWhere(['like', 'assignment_document', $this->assignment_document])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
