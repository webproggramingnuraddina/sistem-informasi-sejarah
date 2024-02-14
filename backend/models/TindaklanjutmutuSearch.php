<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tindaklanjutmutu;

/**
 * TindaklanjutmutuSearch represents the model behind the search form of `backend\models\Tindaklanjutmutu`.
 */
class TindaklanjutmutuSearch extends Tindaklanjutmutu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['strategi', 'strategi_eng', 'upaya', 'upaya_eng', 'pelaksanaan_waktu'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tindaklanjutmutu::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'strategi', $this->strategi])
            ->andFilterWhere(['like', 'strategi_eng', $this->strategi_eng])
            ->andFilterWhere(['like', 'upaya', $this->upaya])
            ->andFilterWhere(['like', 'upaya_eng', $this->upaya_eng])
            ->andFilterWhere(['like', 'pelaksanaan_waktu', $this->pelaksanaan_waktu]);

        return $dataProvider;
    }
}
