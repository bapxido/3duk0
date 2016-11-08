<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolFeesPayment;

/**
 * SchoolFeesPaymentSearch represents the model behind the search form about `app\models\SchoolFeesPayment`.
 */
class SchoolFeesPaymentSearch extends SchoolFeesPayment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_fees_payment_id', 'school_fees_student_bill_id', 'payment_method', 'create_user_id', 'update_user_id'], 'integer'],
            [['payment_amount', 'balance'], 'number'],
            [['payment_date', 'remarks', 'record_status', 'create_date', 'update_date'], 'safe'],
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
        $query = SchoolFeesPayment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        // if (!$this->validate()) {
        //     // uncomment the following line if you do not want to return any records when validation fails
        //     // $query->where('0=1');
        //     return $dataProvider;
        // }

        $query->andFilterWhere([
            'school_fees_payment_id' => $this->school_fees_payment_id,
            'school_fees_student_bill_id' => $this->school_fees_student_bill_id,
            'payment_amount' => $this->payment_amount,
            'payment_date' => $this->payment_date,
            'payment_method' => $this->payment_method,
            'balance' => $this->balance,
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
