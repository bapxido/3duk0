<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolFeesStudentBill;

/**
 * SchoolFeesStudentBillSearch represents the model behind the search form about `app\models\SchoolFeesStudentBill`.
 */
class SchoolFeesStudentBillSearch extends SchoolFeesStudentBill
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees_student_bill_id', 'school_fees_id', 'student_id'], 'integer'],
            [['bill_date', 'remarks', 'record_status'], 'safe'],
            [['bill_amount', 'paid_amount', 'balance'], 'number'],
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
        $query = SchoolFeesStudentBill::find();

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
            'school_fees_student_bill_id' => $this->school_fees_student_bill_id,
            'school_fees_id' => $this->school_fees_id,
            'student_id' => $this->student_id,
            'bill_date' => $this->bill_date,
            'bill_amount' => $this->bill_amount,
            'paid_amount' => $this->paid_amount,
            'balance' => $this->balance,
        ]);

        $query->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'record_status', $this->record_status]);

        return $dataProvider;
    }
}
