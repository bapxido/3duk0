<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClassSubjectNotes;

/**
 * ClassSubjectNotesSearch represents the model behind the search form about `app\models\ClassSubjectNotes`.
 */
class ClassSubjectNotesSearch extends ClassSubjectNotes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_subject_notes_id', 'class_subject_header_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['topic', 'sub_topic', 'notes_document', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = ClassSubjectNotes::find();

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
            'class_subject_notes_id' => $this->class_subject_notes_id,
            'class_subject_header_id' => $this->class_subject_header_id,
            'create_user_id' => $this->create_user_id,
            'create_date' => $this->create_date,
            'update_user_id' => $this->update_user_id,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'topic', $this->topic])
            ->andFilterWhere(['like', 'sub_topic', $this->sub_topic])
            ->andFilterWhere(['like', 'notes_document', $this->notes_document])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
