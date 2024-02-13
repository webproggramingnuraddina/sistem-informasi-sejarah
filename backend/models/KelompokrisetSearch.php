<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kelompokriset;

/**
 * KelompokrisetSearch represents the model behind the search form of `backend\models\Kelompokriset`.
 */
class KelompokrisetSearch extends Kelompokriset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelompokriset'], 'integer'],
            [['nama_riset', 'nama_riset_eng', 'anggota', 'deskripsi', 'deskripsi_eng'], 'safe'],
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
        $query = Kelompokriset::find();

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
            'id_kelompokriset' => $this->id_kelompokriset,
        ]);

        $query->andFilterWhere(['like', 'nama_riset', $this->nama_riset])
            ->andFilterWhere(['like', 'nama_riset_eng', $this->nama_riset_eng])
            ->andFilterWhere(['like', 'anggota', $this->anggota])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'deskripsi_eng', $this->deskripsi_eng]);

        return $dataProvider;
    }
}
